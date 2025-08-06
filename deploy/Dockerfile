FROM ubuntu:22.04

# Avoid interactions during installation
ENV DEBIAN_FRONTEND=noninteractive

# Install Apache and PHP only
RUN apt-get update && apt-get install -y --no-install-recommends \
    apache2 \
    php \
    libapache2-mod-php \
    php-cli \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Create directories
RUN mkdir -p /var/www/html/uploads /app/confidential

# The secret file will be created by the start.sh script

# Apache configuration
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && a2enmod php8.1 rewrite \
    && echo '<VirtualHost *:80>\n\
    ServerName localhost\n\
    DocumentRoot /var/www/html\n\
    <Directory /var/www/html>\n\
        Options +Indexes +FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
        DirectoryIndex index.php index.html\n\
        <FilesMatch "\.php$">\n\
            SetHandler application/x-httpd-php\n\
        </FilesMatch>\n\
    </Directory>\n\
    <Directory /var/www/html/uploads>\n\
        Options -Indexes +FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
        <FilesMatch "\.php$">\n\
            SetHandler application/x-httpd-php\n\
        </FilesMatch>\n\
    </Directory>\n\
    <Directory /app/confidential>\n\
        Deny from all\n\
    </Directory>\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
</VirtualHost>\n\
' > /etc/apache2/sites-available/000-default.conf

# Copy web files from build folder
COPY ../build/ /var/www/html/

# Copy startup script
COPY deploy/start.sh /start.sh
RUN chmod +x /start.sh

# Remove index.html if it exists
RUN rm -f /var/www/html/index.html

# Create uploads directory
RUN mkdir -p /var/www/html/uploads && chmod 777 /var/www/html/uploads

# Expose port
EXPOSE 80

# Start with cleanup script
CMD ["/start.sh"] 