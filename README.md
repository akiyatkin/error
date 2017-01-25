# Работа с ошибка php

Это простое расширение для infrajs реализующе простую логику. Если сайт работает на продакшине ошибки php не должны попадать в вывод и если сайт находится в разработке все ошибки должны показываться включай Notice. 
Расширение устанавливается автоматически с [infrajs/router](https://github.com/infrajs/router) и у него самая низкоуровневая интеграция. Оно подключается автоматически сразу после [infrajs/access](https://github.com/infrajs/access)

## Установка через composer

``` {
"require":{
	akiyatkin/error":"~1" 
}
```

## Использование

```php
use akiyatkin/error/Error;

Error::init();
```

## Конфиг
Указано в каком режиме показывать ошибки, а в каком скрывать. И ```show``` ловить ли ошибки с помощью ```set_error_handler```

```json
{
	"test": false,
	"debug": true,
	"admin": false,
	"show": true
}
```
