<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 19/09/2017
 * Time: 16:23
 */

namespace App\Model\Entity;


use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    public function _setPassword($password) {
        return (new DefaultPasswordHasher())->hash($password);
    }
}