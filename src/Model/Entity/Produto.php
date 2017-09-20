<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 19/09/2017
 * Time: 14:53
 */

namespace App\Model\Entity;


use Cake\ORM\Entity;

class Produto extends Entity
{
    public function calculaDesconto(){
        return $this->preco*0.9;
    }
}