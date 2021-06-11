<?php
namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Laminas\Form\Form;
use Laminas\Form\Element;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $form = new Form('my-form');
        $form->add([
            'name' => 'name',
            'options' => [
                'label' => 'What\'s your name babe',
            ],
            'type' => 'text'
        ]);
        $password = new Element\Password('password');
        $password->setLabel('Password k ho?');
        $form->add($password);
        $text = '';
        return new ViewModel(['form' => $form]);
    }
}
