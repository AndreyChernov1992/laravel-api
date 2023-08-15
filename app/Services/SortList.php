<?php
namespace App\Services;

class SortList {

    public function sortArray(array $arr, string $sort) :array {

        $sort == "desc" ? arsort($arr) : asort($arr);

        return $arr;

    }
}