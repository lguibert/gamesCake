<?php

class Gamesillustrators extends AppModel{
    public $useTable = 'gamesillustrators';
    public $belongsTo  = array('Game','Illustrator');
}