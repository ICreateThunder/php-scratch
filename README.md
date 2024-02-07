# PHP Development Template (NPM Nginx - PHP - MySQL)

# Introduction

This repository is created to quickly setup a PHP development environment using nginx as the web server, PHP-FPM for the PHP processing server and mysql for a simple quick database backend. DEVELOPMENT ONLY environment due to security and configuration issues, see notes below for further information.

Important notes:

Intended solely for development! PHP, FastCGI and NGINX not configured for production. This means that attack surface is large and application is unsafe. DO NOT USE for production, recreate a safe suitable environment with minimum neccesary functionality exposed through nginx, PHP & mysql.

## Server Configuration

Nginx has a very simple configuration to simply allow connections from clients and pass views/requests to the PHP FPM server

PHP-FPM server uses the default development configuration from the PHP github repository (php.ini-development)

# Structure

This development environment is quite simple, there is a config directory (`cfg`) which contains configuration for server configurations such as nginx.conf and php.ini. The application code can be found under `src/`. Public accessible files/pages can be found in `src/public`. Other than that create directory structure as neccessary.

## Recommended Directory Structure

For the purpose of code resusability and maintainability the following directory structure is recommended:

- `cfg/` - Server application configuration files, (default: nginx, php)
- `src/` - Contains all source code and resources for the application
- `src/public` - Contains all pages/views & resources accessible to the public
- `src/sql` - Contains all the relevant SQL queries in files
- `src/models` - Contains all the model classes
