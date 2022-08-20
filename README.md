# เทมเพลทเว็บไซต์ PHP

## ติดตั้ง localhost สำหรับลองเว็บไซต์

1. เข้าไปแก้ไขไฟล์นี้ เพื่อที่จะเพิ่ม virtualhost สำหรับเว็บไซต์นี้
```console
$ sudo vim /opt/lampp/etc/extra/httpd-vhosts.conf
```

2. เพิ่ม virtualhost ในไฟล์ `httpd-vhosts.conf`
```
<VirtualHost *:80>
    DocumentRoot "/home/korn/git/php-web-template"
    ServerName template.loc
    <Directory "/home/korn/git/php-web-template">
        Require all granted
        AllowOverride All
        Options All
    </Directory> 
</VirtualHost>
```

3. เข้าไปแก้ไขไฟล์ ในไฟล์ `/etc/hosts`
```console
$ sudo vim /etc/hosts
```

4. เพิ่ม ip สำหรับเทสเว็บ เข้าไปในไฟล์นั้น
```
127.0.0.1 template.loc
```

## เมื่อ Clone โปรเจ็คครั้งแรก
- แก้ไข Description ในไฟล์ `composer.json` เป็นรายอะเอียดของเว็บที่เราทำอยู่

## รายละเอียดกันลืม
- `/contents` คือโฟลเดอร์ที่เก็บหน้าเว็บทั้งหมด
- `/libraries` คือโฟลเดอร์ที่เก็บ Libraries ต่าง ๆ
- `/static` คือโฟลเดอร์ที่เก็บไฟล์ที่คงที่ เช่น รูปภาพ, CSS, Javascript
- `/templates` คือโฟลเดอร์ที่เก็บไฟล์โครงสร้างของเว็บเช่น Header, Footer, 404 Page
- `/vendor` คือโฟลเดอร์เก็บ Libraries ของ PHP Composer
