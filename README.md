# qs-crypt
php加密

## AES-256-CBC 
```php
$key="1234567";
//加密
$plainText = "hello world";
$cipherText = AesCBC::encrypt($plainText, $key);

$plainText = AesCBC::decrypt($cipherText, $key);
```