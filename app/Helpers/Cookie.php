<?php

namespace App\Helpers;

/**
 * Класс для работы с куками.
 */
class Cookie
{

    /**
     *  Определяет, зарегистрирована ли глобальная переменная в куках.
     * @param  string $name
     * @return boolean
     */
    public static function exists($name)
    {
        return array_key_exists($name, $_COOKIE);
    }

    /**
     * Отправляет куки.
     * @param  string $name
     * @param  string $value
     * @param  int $expires
     * @param  string $path
     * @return null
     */
    public static function put($name, $value, $expires = 60 * 60 * 24 * 180, $path = '/')
    {
        setcookie($name, $value, time() + $expires, $path);
    }

    /**
     * Получает данные куки.
     * @param  string $name
     * @return string
     */
    public static function get($name)
    {
        return self::exists($name) ? $_COOKIE[$mame] : null;
    }

    /**
     * Удаляет куки.
     * @param  string $name
     * @return null
     */
    public static function destroy($name)
    {
        if (self::exists($name)) {
            self::put($name, null, - 3600, '/');
            unset($_COOKIE[$name]);
        }
    }



}
