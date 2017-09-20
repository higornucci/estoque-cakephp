<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 20/09/2017
 * Time: 08:31
 */

namespace App\Controller;


use App\Form\ContatoForm;

class ContatoController extends AppController
{
    public function index() {
        $contato = new ContatoForm();
        if($this->request->is('post')) {
            if($contato->execute($this->request->getData())) {
                $this->Flash->set('Email enviado com sucesso',['element' => 'success']);
            } else {
                $this->Flash->set('Falha ao enviar o email',['element' => 'error']);
            }
        }
        $this->set('contato',$contato);
    }
}