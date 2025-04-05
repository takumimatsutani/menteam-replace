➜  menteam-replace git:(main) ✗ ls -la
合計 496
drwxrwxr-x 15 garchomp-game garchomp-game   4096  4月  5 10:03 .
drwxrwxr-x  5 garchomp-game garchomp-game   4096  4月  4 10:18 ..
-rw-rw-r--  1 garchomp-game garchomp-game    258  4月  2 00:44 .editorconfig
-rw-rw-r--  1 garchomp-game garchomp-game   1142  4月  4 11:38 .env
-rw-rw-r--  1 garchomp-game garchomp-game   1084  4月  4 10:18 .env.example
drwxrwxr-x  8 garchomp-game garchomp-game   4096  4月  4 23:41 .git
-rw-rw-r--  1 garchomp-game garchomp-game    160  4月  2 00:44 .gitattributes
drwxrwxr-x  3 garchomp-game garchomp-game   4096  4月  2 00:44 .github
-rw-rw-r--  1 garchomp-game garchomp-game    286  4月  2 00:44 .gitignore
-rw-rw-r--  1 garchomp-game garchomp-game   5602  4月  5 10:01 Makefile
-rw-rw-r--  1 garchomp-game garchomp-game     18  4月  4 23:41 README.md
drwxrwxr-x  6 garchomp-game garchomp-game   4096  4月  2 00:44 app
-rwxr-xr-x  1 garchomp-game garchomp-game    425  4月  2 00:44 artisan
drwxrwxr-x  3 garchomp-game garchomp-game   4096  4月  2 00:44 bootstrap
-rw-rw-r--  1 garchomp-game garchomp-game   2451  4月  4 10:28 composer.json
-rw-rw-r--  1 garchomp-game garchomp-game 339145  4月  4 10:28 composer.lock
drwxrwxr-x  2 garchomp-game garchomp-game   4096  4月  2 00:44 config
drwxrwxr-x  5 garchomp-game garchomp-game   4096  4月  4 10:18 database
-rw-rw-r--  1 garchomp-game garchomp-game   1703  4月  4 10:29 docker-compose.yml
drwxr-xr-x 83 garchomp-game garchomp-game   4096  4月  5 10:03 node_modules
-rw-rw-r--  1 garchomp-game garchomp-game    571  4月  2 00:44 package.json
-rw-rw-r--  1 garchomp-game garchomp-game   1122  4月  4 10:29 phpunit.xml
drwxrwxr-x  3 garchomp-game garchomp-game   4096  4月  4 23:39 public
drwxrwxr-x  5 garchomp-game garchomp-game   4096  4月  2 00:44 resources
drwxrwxr-x  2 garchomp-game garchomp-game   4096  4月  2 00:44 routes
drwxrwxr-x  5 garchomp-game garchomp-game   4096  4月  2 00:44 storage
drwxrwxr-x  4 garchomp-game garchomp-game   4096  4月  4 10:18 tests
drwxrwxr-x 48 garchomp-game garchomp-game   4096  4月  4 10:18 vendor
-rw-rw-r--  1 garchomp-game garchomp-game    395  4月  2 00:44 vite.config.js
-rw-r--r--  1 garchomp-game garchomp-game  48746  4月  5 10:03 yarn.lock
➜  menteam-replace git:(main) ✗ tree app config resources routes 
app
├── Http
│   └── Controllers
│       ├── Auth
│       │   └── VerifyEmailController.php
│       └── Controller.php
├── Livewire
│   ├── Actions
│   │   └── Logout.php
│   ├── Auth
│   │   ├── ConfirmPassword.php
│   │   ├── ForgotPassword.php
│   │   ├── Login.php
│   │   ├── Register.php
│   │   ├── ResetPassword.php
│   │   └── VerifyEmail.php
│   └── Settings
│       ├── Appearance.php
│       ├── DeleteUserForm.php
│       ├── Password.php
│       └── Profile.php
├── Models
│   └── User.php
└── Providers
    └── AppServiceProvider.php
config
├── app.php
├── auth.php
├── cache.php
├── database.php
├── filesystems.php
├── logging.php
├── mail.php
├── queue.php
├── services.php
└── session.php
resources
├── css
│   └── app.css
├── js
│   └── app.js
└── views
    ├── components
    │   ├── action-message.blade.php
    │   ├── app-logo-icon.blade.php
    │   ├── app-logo.blade.php
    │   ├── auth-header.blade.php
    │   ├── auth-session-status.blade.php
    │   ├── layouts
    │   │   ├── app
    │   │   │   ├── header.blade.php
    │   │   │   └── sidebar.blade.php
    │   │   ├── app.blade.php
    │   │   ├── auth
    │   │   │   ├── card.blade.php
    │   │   │   ├── simple.blade.php
    │   │   │   └── split.blade.php
    │   │   └── auth.blade.php
    │   ├── placeholder-pattern.blade.php
    │   └── settings
    │       └── layout.blade.php
    ├── dashboard.blade.php
    ├── flux
    │   ├── icon
    │   │   ├── book-open-text.blade.php
    │   │   ├── chevrons-up-down.blade.php
    │   │   ├── folder-git-2.blade.php
    │   │   └── layout-grid.blade.php
    │   └── navlist
    │       └── group.blade.php
    ├── livewire
    │   ├── auth
    │   │   ├── confirm-password.blade.php
    │   │   ├── forgot-password.blade.php
    │   │   ├── login.blade.php
    │   │   ├── register.blade.php
    │   │   ├── reset-password.blade.php
    │   │   └── verify-email.blade.php
    │   └── settings
    │       ├── appearance.blade.php
    │       ├── delete-user-form.blade.php
    │       ├── password.blade.php
    │       └── profile.blade.php
    ├── partials
    │   ├── head.blade.php
    │   └── settings-heading.blade.php
    └── welcome.blade.php
routes
├── auth.php
├── console.php
└── web.php

28 directories, 63 files
➜  menteam-replace git:(main) ✗ cat package.json composer.json vite.config.js 
{
    "private": true,
    "type": "module",
    "scripts": {
        "build": "vite build",
        "dev": "vite"
    },
    "dependencies": {
        "@tailwindcss/vite": "^4.0.7",
        "autoprefixer": "^10.4.20",
        "axios": "^1.7.4",
        "concurrently": "^9.0.1",
        "laravel-vite-plugin": "^1.0",
        "tailwindcss": "^4.0.7",
        "vite": "^6.0"
    },
    "optionalDependencies": {
        "@rollup/rollup-linux-x64-gnu": "4.9.5",
        "@tailwindcss/oxide-linux-x64-gnu": "^4.0.1",
        "lightningcss-linux-x64-gnu": "^1.29.1"
    }
}
{
    "$schema": "https://getcomposer.org/schema.json",
    "name": "laravel/livewire-starter-kit",
    "type": "project",
    "description": "The official Laravel starter kit for Livewire.",
    "keywords": [
        "laravel",
        "framework"
    ],
    "license": "MIT",
    "require": {
        "php": "^8.2",
        "laravel/framework": "^12.0",
        "laravel/tinker": "^2.10.1",
        "livewire/flux": "^2.1.1",
        "livewire/volt": "^1.7.0"
    },
    "require-dev": {
        "fakerphp/faker": "^1.23",
        "laravel/pail": "^1.2.2",
        "laravel/pint": "^1.18",
        "laravel/sail": "^1.41",
        "mockery/mockery": "^1.6",
        "nunomaduro/collision": "^8.6",
        "pestphp/pest": "^3.8",
        "pestphp/pest-plugin-laravel": "^3.1"
    },
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi"
        ],
        "post-update-cmd": [
            "@php artisan vendor:publish --tag=laravel-assets --ansi --force"
        ],
        "post-root-package-install": [
            "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "@php artisan key:generate --ansi",
            "@php -r \"file_exists('database/database.sqlite') || touch('database/database.sqlite');\"",
            "@php artisan migrate --graceful --ansi"
        ],
        "dev": [
            "Composer\\Config::disableProcessTimeout",
            "npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\" \"php artisan pail --timeout=0\" \"npm run dev\" --names=server,queue,logs,vite"
        ]
    },
    "extra": {
        "laravel": {
            "dont-discover": []
        }
    },
    "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true,
        "allow-plugins": {
            "pestphp/pest-plugin": true,
            "php-http/discovery": true
        }
    },
    "minimum-stability": "stable",
    "prefer-stable": true
}
import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [`resources/views/**/*`],
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
});%                                                                                                                                                                                          ➜  menteam-replace git:(main) ✗ cat .env docker-compose.yml                  
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:W0IHFk8Y2+ab7vMtxAYKaGhVSzh0HfNBappYKxNTUdE=
APP_DEBUG=true
APP_URL=http://localhost
APP_PORT=8000

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
# CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"
services:
    laravel.test:
        build:
            context: './vendor/laravel/sail/runtimes/8.4'
            dockerfile: Dockerfile
            args:
                WWWGROUP: '${WWWGROUP}'
        image: 'sail-8.4/app'
        extra_hosts:
            - 'host.docker.internal:host-gateway'
        ports:
            - '${APP_PORT:-80}:80'
            - '${VITE_PORT:-5173}:${VITE_PORT:-5173}'
        environment:
            WWWUSER: '${WWWUSER}'
            LARAVEL_SAIL: 1
            XDEBUG_MODE: '${SAIL_XDEBUG_MODE:-off}'
            XDEBUG_CONFIG: '${SAIL_XDEBUG_CONFIG:-client_host=host.docker.internal}'
            IGNITION_LOCAL_SITES_PATH: '${PWD}'
        volumes:
            - '.:/var/www/html'
        networks:
            - sail
        depends_on:
            - mysql
    mysql:
        image: 'mysql/mysql-server:8.0'
        ports:
            - '${FORWARD_DB_PORT:-3306}:3306'
        environment:
            MYSQL_ROOT_PASSWORD: '${DB_PASSWORD}'
            MYSQL_ROOT_HOST: '%'
            MYSQL_DATABASE: '${DB_DATABASE}'
            MYSQL_USER: '${DB_USERNAME}'
            MYSQL_PASSWORD: '${DB_PASSWORD}'
            MYSQL_ALLOW_EMPTY_PASSWORD: 1
        volumes:
            - 'sail-mysql:/var/lib/mysql'
            - './vendor/laravel/sail/database/mysql/create-testing-database.sh:/docker-entrypoint-initdb.d/10-create-testing-database.sh'
        networks:
            - sail
        healthcheck:
            test:
                - CMD
                - mysqladmin
                - ping
                - '-p${DB_PASSWORD}'
            retries: 3
            timeout: 5s
networks:
    sail:
        driver: bridge
volumes:
    sail-mysql:
        driver: local
➜  menteam-replace git:(main) ✗ 
