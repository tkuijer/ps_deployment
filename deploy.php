<?php

// All Deployer recipes are based on `recipe/common.php`.
require 'recipe/common.php';

// Define a server for deployment.
// Let's name it "prod" and use port 22.
server('vagrant', '192.168.33.10', 22)
    ->user('vagrant')
    ->password('vagrant') // You can use identity key, ssh config, or username/password to auth on the server.
    ->stage('production')
    ->env('deploy_path', '/var/www/html'); // Define the base path to deploy your project to.

// Specify the repository from which to download your project's code.
// The server needs to have git installed for this to work.
// If you're not using a forward agent, then the server has to be able to clone
// your project from this repository.
set('repository', 'git@github.com:tkuijer/ps_deployment.git');

set('shared_dirs', ['web/img']);

set('shared_files', ['web/config/settings.inc.php']);

set('writable_dirs', ['web/img', 'web/cache', 'web/themes/default-bootstrap/cache']);

set('keep_releases', 5);

/**
 * Main task
 */
task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:symlink',
    'cleanup',
])->desc('Deploy your project');
after('deploy', 'success');
