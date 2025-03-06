# Usando uma imagem base do PHP com Apache
FROM php:7.4-apache

# Instalando dependências necessárias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli

# Habilitar mod_rewrite para o Apache
RUN a2enmod rewrite

# Copiar os arquivos do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Expor a porta 80
EXPOSE 80
