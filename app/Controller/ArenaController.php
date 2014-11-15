<?php

App::uses('AppController', 'Controller');

/**
 * Main controller of our small application
 *
 * @author ...
 */
class ArenaController extends AppController {

    public $uses = array('Player', 'Fighter', 'Event');

    /**
     * index method : first page
     *
     * @return void
     */
    public function index() {
        $this->set('myname', "Vincent Gagneux");
    }

    public function login() {
        
    }

    public function character() {
        $this->set('raw', $this->Fighter->findById(1));
    }

    public function sight() {
        if (array_keys($this->request->data)[0]=='Fightermove') {
            $this->Fighter->doMove(1, $this->request->data['Fightermove']['direction']);
        }
        elseif (array_keys($this->request->data)[0]=='Fighterattack') {
            $this->Fighter->doAttack(1, $this->request->data['Fighterattack']['direction']);
        }
        $this->set('raw', $this->Fighter->find('all'));
    }

    public function diary() {
        $this->set('raw', $this->Event->find());
    }

}

?>
