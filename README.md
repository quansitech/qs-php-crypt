# qs-crypt
php加密

## 安装
```php
composer require quansitech/qs-php-crypt
```

## AES-256-CBC 
```php
$key="1234567";
//加密
$plainText = "hello world";
$cipherText = AesCBC::encrypt($plainText, $key);

$plainText = AesCBC::decrypt($cipherText, $key);
```