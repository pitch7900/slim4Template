<?php

use Slim\App;

return function (App $app) {
        // Register routes
        $auth = require __DIR__ . '/routes/auth.php';
        $auth($app);

        $user = require __DIR__ . '/routes/user.php';
        $user($app);

        $home = require __DIR__ . '/routes/home.php';
        $home($app);
};
