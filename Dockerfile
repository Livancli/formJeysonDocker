FROM php:8.3.2-apache

# Instale as dependências necessárias e o driver MySQL
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zlib1g-dev \
    libpq-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql \
    && a2enmod rewrite

# Configure as permissões corretas
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html


# Defina o diretório de trabalho
WORKDIR /var/www/html

# Copie o código-fonte do aplicativo para o contêiner
COPY . .

# Exponha a porta necessária pelo seu aplicativo (substitua 9090 pela porta correta)
EXPOSE 9090

# Configuração adicional, se necessário

# Comando para iniciar o Apache (isso pode variar dependendo da imagem)
CMD ["apache2-foreground"]
