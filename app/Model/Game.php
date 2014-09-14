<?php

class Game extends AppModel{    
    public $hasMany = array('gamesauthors','gameseditors','gamesillustrators','gamesgametypes');
    public $hasAndBelongsToMany = 
            array("Author" => 
                array('joinTable' => 'gamesauthors'),
            "Editor" =>
                array('joinTable' => 'gameseditors'),
            "Illustrator" =>
                array("joinTable" => 'gamesillustrators'),
            "Gametype" =>
                array('joinTable' => 'gamesgametypes'));
    
    public $belongsTo = array('Collection','Distributor');
}