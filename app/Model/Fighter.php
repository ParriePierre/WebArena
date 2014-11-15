<?php

App::uses('AppModel', 'Model');

class Fighter extends AppModel {

    public $displayField = 'name';
    public $belongsTo = array(
        'Player' => array(
            'className' => 'Player',
            'foreignKey' => 'player_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
    );

    function doMove($fighterId, $direction) {
        // récupérer la position et fixer l'id de travail
        $datas = $this->read(null, $fighterId);

        //TODO Empecher le personnage de sortir de l'arene
        //TODO Empecher le personnage de se deplacer sur une case occupée
        
        // faire la modif
        if ($direction == 'north') {
            $this->set('coordinate_x', $datas['Fighter']['coordinate_x'] + 1);
        } elseif ($direction == 'south') {
            $this->set('coordinate_x', $datas['Fighter']['coordinate_x'] - 1);
        } elseif ($direction == 'east') {
            $this->set('coordinate_y', $datas['Fighter']['coordinate_y'] + 1);
        } elseif ($direction == 'west') {
            $this->set('coordinate_y', $datas['Fighter']['coordinate_y'] - 1);
        } else {
            return false;
        }

        // sauver la modif
        $this->save();
        return true;
    }
    
    function doAttack($fighterId, $direction) {
        // récupérer la position et fixer l'id de travail
        $datas = $this->read(null, $fighterId);

        //TODO Empecher le personnage de sortir de l'arene
        //TODO Empecher le personnage de se deplacer sur une case occupée
        
        // faire la modif
        if ($direction == 'north') {
            $this->set('coordinate_x', $datas['Fighter']['coordinate_x'] + 5);
        } elseif ($direction == 'south') {
            $this->set('coordinate_x', $datas['Fighter']['coordinate_x'] - 5);
        } elseif ($direction == 'east') {
            $this->set('coordinate_y', $datas['Fighter']['coordinate_y'] + 5);
        } elseif ($direction == 'west') {
            $this->set('coordinate_y', $datas['Fighter']['coordinate_y'] - 5);
        } else {
            return false;
        }

        // sauver la modif
        $this->save();
        return true;
    }
}
    