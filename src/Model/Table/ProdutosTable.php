<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 19/09/2017
 * Time: 14:35
 */

namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProdutosTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        $validator->requirePresence('nome', true)->notEmpty('nome');
        $validator->add('descricao', [
            'minLength' => [
                'rule' => ['minLength', 10],
                'message' => 'A descrição deve conter pelo menos 10 caracteres'
            ]
        ]);

        $validator->add('preco', [
            'decimal' => [
                'rule' => ['decimal', 2],
                'message' => 'O numero deve ser decimal'
            ]
        ]);
        return $validator;
    }

}