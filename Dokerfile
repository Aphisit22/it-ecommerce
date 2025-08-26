# ใช้ PHP และ Apache image จาก Docker Hub
FROM php:8.1-apache

# ติดตั้ง PDO และ MySQL extension
RUN docker-php-ext-install pdo pdo_mysql mysqli

# เปิดการใช้งาน mod_rewrite ของ Apache
RUN a2enmod rewrite

# คัดลอกไฟล์จาก repository ของคุณไปยังโฟลเดอร์ที่ Apache ใช้
COPY . /var/www/html/

# ตั้งค่า DocumentRoot (ถ้าคุณใช้โฟลเดอร์อื่นนอกจาก root)
WORKDIR /var/www/html

# เปิดพอร์ต 80 (สำหรับ HTTP)
EXPOSE 80

# รัน Apache ใน foreground
CMD ["apache2-foreground"]