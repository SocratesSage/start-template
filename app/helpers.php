<?php

use App\Helpers\Session;
use App\Helpers\PasswordHash;

if (!function_exists('config'))
{

    /**
     * Получает значение переменной из конфигурации.
     * @param  string $name
     * @return string|boolean
     */
    function config(string $name)
    {
        $segments = explode('.', $name);
        $env_name = strtoupper($segments[0]) . "_" . strtoupper($segments[1]);
        return isset($_ENV[$env_name]) ? getenv($env_name) : null;
    }
}

if (!function_exists('old'))
{

    /**
     * Получает значение "старого" ввода, переданного в сессию.
     * @param  string $name
     * @return mixed
     */
    function old(string $name)
    {
        Session::put('old', $_REQUEST);
    }
}

if (!function_exists('bcrypt'))
{

    /**
     * Генерирует хеш пароля.
     * @param  string $password
     * @return string
     */
    function bcrypt(string $password)
    {
        return PasswordHash::make($password);
    }
}

if (!function_exists('dd'))
{
    /**
     * Выводит дамп переменных и завершает выполнение скрипта.
     * @param  mixed  $data
     * @return null
     */
    function dd($data) {
        echo '<pre style="font-family: Consolas;font-size:12px;line-height:23px;letter-spacing: .4px;color: #225;background: #eee;padding: 1em 1.2em;border-bottom: solid 3px #3374dd">';
    	print_r($data);
    	echo "</pre>";
        die;
    }
}

if (!function_exists('str_random'))
{

    /**
     * Генерирует случайную строку.
     * @param  integer $length
     * @return string
     */
    function str_random(int $length = 32)
    {
        if ($length < 12) { throw new \Exception("The length of the generated string in bytes must be greater than 12.", 1); }
        return bin2hex(openssl_random_pseudo_bytes($length));
    }
}
