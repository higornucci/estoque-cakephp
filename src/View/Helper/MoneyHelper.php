<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 19/09/2017
 * Time: 14:50
 */

namespace App\View\Helper;


use Cake\View\Helper;

class MoneyHelper extends Helper
{
    public function format($number) {
        return "R$ ".number_format($number,2,',','.'.'');
    }
}