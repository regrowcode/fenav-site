import Client from 'ssh2-sftp-client';
import fs from 'fs';
import path from 'path';

const sftpConfig = JSON.parse(fs.readFileSync('./.vscode/sftp.json', 'utf8'));

const client = new Client();

const filesToUpload = [
    'front-page.php',
    'header.php',
    'footer.php',
    'home.php',
    'page-departamentos.php',
    'page-iglesias-afiliadas.php',
    'page-nosotros.php',
    '404.php',
    'single.php',
    'functions.php',
    'theme.json',
    'style.css'
];

async function ensureRemoteDir(remoteDirPath) {
    const exists = await client.exists(remoteDirPath);
    if (!exists) {
        console.log(`Creating remote directory: ${remoteDirPath}`);
        await client.mkdir(remoteDirPath, true);
    }
}

async function uploadDir(localDir, remoteDir) {
    await ensureRemoteDir(remoteDir);
    const items = fs.readdirSync(localDir);

    for (const item of items) {
        const localItemPath = path.join(localDir, item);
        const remoteItemPath = `${remoteDir}/${item}`.replace(/\\/g, '/');
        const stat = fs.statSync(localItemPath);

        if (stat.isDirectory()) {
            await uploadDir(localItemPath, remoteItemPath);
        } else {
            console.log(`Uploading: ${localItemPath} -> ${remoteItemPath}`);
            await client.put(localItemPath, remoteItemPath);
        }
    }
}

async function deploy() {
    try {
        console.log(`Connecting to Hostinger: ${sftpConfig.host}:${sftpConfig.port}...`);
        await client.connect({
            host: sftpConfig.host,
            port: sftpConfig.port,
            username: sftpConfig.username,
            password: sftpConfig.password,
            readyTimeout: 30000,
        });
        console.log('Connected!');

        const remoteBasePath = sftpConfig.remotePath.replace(/\\/g, '/');

        // 1. Upload root theme files
        for (const file of filesToUpload) {
            const localFile = path.resolve(file);
            if (fs.existsSync(localFile)) {
                const remoteFile = `${remoteBasePath}/${file}`;
                console.log(`Uploading: ${file} -> ${remoteFile}`);
                await client.put(localFile, remoteFile);
            }
        }

        // 2. Upload inc directory
        console.log('Uploading inc/ directory...');
        await uploadDir(path.resolve('inc'), `${remoteBasePath}/inc`);

        // 3. Upload dist directory
        console.log('Uploading dist/ directory...');
        await uploadDir(path.resolve('dist'), `${remoteBasePath}/dist`);

        // 4. Upload resources directory
        console.log('Uploading resources/ directory...');
        await uploadDir(path.resolve('resources'), `${remoteBasePath}/resources`);

        // 5. Upload images directory
        if (fs.existsSync('images')) {
            console.log('Uploading images/ directory...');
            await uploadDir(path.resolve('images'), `${remoteBasePath}/images`);
        }

        console.log('\nDeployment completed successfully! All changes are live on WordPress.');
        await client.end();
    } catch (err) {
        console.error('Deployment Error:', err);
        process.exit(1);
    }
}

deploy();
