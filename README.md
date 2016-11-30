# Работа с ошибка php


Это простое расширение для infrajs реализующе простую логику. 

Если сайт работает на продакшине ошибки php не должны попадать в вывод. 

```php
ini_set('display_errors', -1);
```

И наоборт если сайта в разработке все ошибки должны быть видны.

```php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
```