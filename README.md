### 安装

```shell script
composer require church/laravel-easy-sms 
```

### 配置

1.在 `config/app.php` 注册 `ServiceProvider` (Laravel 5.5+ 无需注册)

```php
'providers' => [
    Church\LaravelEasySms\ServiceProvider::class
]
```


2.发布配置文件

```shell script
php artisan vendor:publish --provider="Church\LaravelEasySms\ServiceProvider"
```

3.修改`config/sms.php`配置文件


### 使用

```php
$sms = app('sms');
$sms->send('13800138000', [

]);
```



