FROM wordpress:php8.2

# Instala o driver
Run apt update 
Run apt install -y libpq-dev libzip-dev libxml2-dev 
Run docker-php-ext-install pdo_mysql 
Run docker-php-ext-install mysqli