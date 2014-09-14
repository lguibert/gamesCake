<?php

class Gamesauthors extends AppModel{
    public $useTable = 'gamesauthors';
    public $belongsTo  = array('Game','Author');
}

