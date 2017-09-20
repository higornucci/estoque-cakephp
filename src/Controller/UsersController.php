<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 19/09/2017
 * Time: 15:54
 */

namespace App\Controller;


use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['adicionar', 'salvar']);
    }

    public function adicionar()
    {
        $usersTable = TableRegistry::get('Users');
        $user = $usersTable->newEntity();
        $this->set('user', $user);
    }

    public function salvar()
    {
        $usersTable = TableRegistry::get('Users');
        $user = $usersTable->newEntity($this->request->getData());
        if ($usersTable->save($user)) {
            $this->Flash->set("Usuário salvo com sucesso");
        } else {
            $this->Flash->set("Erro ao salvar o usuário");
        }
        $this->redirect('Users/adicionar');
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->set('Usuário ou senha inválidos.', ['element' => 'error']);
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}