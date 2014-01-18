<?php
class ContactsController extends AppController
{
    var $name = 'Contacts';
    /* var $uses = 'Contact'; */
    var $helpers = array('Html', 'Form', 'Js');
    var $components = array('Email', 'Session');

    public function index() {
        if(isset($this->data['Contact'])) {
            $userEmail = $this->data['Contact']['email'];
            $userMessage = $this->data['Contact']['message'];

            $email = new CakeEmail();
            $email->from(array($userEmail));
            $email->to('email@example.com');
            $email->subject('Website Contact Form Submission');
            $email->send($userMessage);

            if ($email->send($userMessage)) {
                $this->Session->setFlash('Thank you for contacting us.', 'flasherNeutral');
            } 
            else {
                $this->Session->setFlash('Mail Not Sent', 'flasherBad');
            }
        }
    }

    public function contact() {
        if(isset($this->data['Contact'])) {
            $userEmail = $this->data['Contact']['email'];
            $userMessage = $this->data['Contact']['message'];

            $email = new CakeEmail();
            $email->from(array($userEmail));
            $email->to('email@example.com');
            $email->subject('Website Contact Form Submission');
            $email->send($userMessage);

            if ($email->send($userMessage)) {
                $this->Session->setFlash('Thank you for contacting us.', 'flasherNeutral');
                $this->redirect(array('controller' => 'pages', 'action' => 'index'));
            } 
            else {
                $this->Session->setFlash('Mail Not Sent', 'flasherBad');
            }
        }
    }

    public function beforeFilter() {
        $this->Auth->allow();
    }
}