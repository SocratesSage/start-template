<?php

namespace App\Helpers;

class PasswordHash
{

    /**
     * Генерирует хеш пароля.
     * @param  string $password
     * @param  integer $algo
     * @param  array  $options
     * @return string
     */
    public static function make(string $password, int $algo = PASSWORD_BCRYPT, array $options = ['cost' => 10])
    {
        return password_hash($password, $algo, $options);
    }

    /**
     * Проверяет, соответствует ли пароль хешу.
     * @param  string $password
     * @param  string $hash
     * @return boolean
     */
    public static function verify(string $password, string $hash)
    {
        return password_verify($password, $hash);
    }

}
