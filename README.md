### Стартовый шаблон для приложения.
***
#### Основные настройки приложения

В файле ```.env``` находятся основная конфигурация приложения.

```
APP_DEBUG = TRUE
APP_NAME = "Application name"
APP_TIMEZONE = "Europe/Moscow"
APP_LOCALE = "ru_RU"

DB_CONNECTION = "mysql"
DB_HOST = "127.0.0.1"
DB_DATABASE = "homestead"
DB_USERNAME = "homestead"
DB_PASSWORD = "password"
DB_CHARSET = "utf8"

AUTH_TOKEN = "f4aae9866cf436c5fb567f0d599bc6ec872e83f6"
```

Таблица с описанием конфигураций. 

| Наименование  | Значение         | Описание                                     |
|---------------|------------------|----------------------------------------------|
| `APP_DEBUG`     | `TRUE`             | Отображаются ли ошибки                       |
| `APP_NAME`      | `Application name` | Наименование приложения                      |
| `APP_TIMEZONE`  | `Europe/Moscow`    | Временная зона                               |
| `APP_LOCALE`    | `ru_RU`            | Устанавливает настройки локали               |
| `DB_CONNECTION` | `mysql`            | Драйвер                                      |
| `DB_HOST`       | `127.0.0.1`        | Хост базы данных                             |
| `DB_DATABASE`   | `homestead`        | Наименование базы данных                     |
| `DB_USERNAME`   | `homestead`        | Пользователь                                 |
| `DB_PASSWORD`   | `password`         | Пароль                                       |
| `DB_CHARSET`    | `utf8`             | Кодировка                                    |
| `AUTH_TOKEN`    | `unique string`    | Наименование сессии с данными о пользователи |
