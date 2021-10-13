<?php

class DataManager {
    private static $filename = 'data.json';

    public function __construct() {
    }

    public static function getJSONData($query_param) {
        $JSONData = file_get_contents(self::$filename);

        header('Content-type:application/json;charset-utf-8');

        $_data = json_decode($JSONData, true);

        $_result = [];

        for ($index = 0; $index < $query_param; $index++) {
            $_result[$index] = $_data[$index];
        }

        $__result = json_encode($_result);
        return $__result;
    }
}
