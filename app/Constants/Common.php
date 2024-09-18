<?php

namespace App\Constants;

class Common 
{
    const PRODUCT_ADD = '1';
    const PRODUCT_REDUCE = '2';

    const PRODUCT_LIST = [
        'add' => self::PRODUCT_ADD,
        'reduce' => self::PRODUCT_REDUCE
    ];
}

// class안에서 const를 사용할 때는 self::붙인다