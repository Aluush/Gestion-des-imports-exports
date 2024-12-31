# Utiliser l'image officielle de PHP avec Apache
FROM php:8.1-cli

# Installer les dépendances système pour PHP, Node.js, et les outils nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    # zip \
    git \
    curl \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip  # Ajout de l'extension zip

# Configurer le répertoire de travail
WORKDIR /var/www/html

# Copier le fichier composer.json et composer.lock pour installer les dépendances PHP
COPY composer.json composer.lock ./
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

# Copier les fichiers du projet Laravel
COPY . .

# Installer les dépendances JavaScript avec npm (Vite, TailwindCSS, etc.)
RUN npm install

# Exposer le port pour PHP artisan serve et Vite
EXPOSE 8000 3000

# Commande pour exécuter les deux processus : PHP artisan serve et npm run dev
CMD bash -c "php artisan serve --host=0.0.0.0 & npm run dev"

