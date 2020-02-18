<?php

namespace App\Helpers;

/**
 * Класс для работы с сессиями.
 */
class Session
{

    /**
     * Этот метод запускает сессии.
     * @return null
     */
    public static function start()
    {
        session_start();
    }

    /**
     * Определяет, зарегистрирована ли глобальная переменная в сессии.
     * @param  string $name
     * @return bool
     */
    public static function exists($name)
    {
        return array_key_exists($name, $_SESSION);
    }

    /**
     * Создает новую сессию или перезаписывает старую.
     * @param  string $name
     * @param  mixed $data
     * @return mixed
     */
    public static function put($name, $data)
    {
        $_SESSION[$name] = $data;
    }

    /**
     * Получает данные сессии.
     * @param  string $name
     * @return mixed
     */
    public static function get($name)
    {
        return self::exists($name) ? $_SESSION[$name] : null;
    }

    /**
     * Удаляет сессию.
     * @param  string $name
     * @return null
     */
    public static function destroy($name)
    {
        unset($_SESSION[$name]);
    }

}
