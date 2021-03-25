<?php


namespace Service;


use Requests;

class API
{
    const url = 'https://example.com/api/dosomething?userId=%d&name=%s';

    public static function callApi(int $userId, string $userName): bool
    {
        return Requests::get(sprintf(self::url, $userId, $userName))->success;
    }
}
