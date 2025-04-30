#Dockerfile
# Utilise l'image officielle PHP avec Apache 
FROM php:8.4-apache
# Installe les extensions PHP nécessaires 
RUN docker-php-ext-install pdo pdo_mysql 
EXPOSE 80