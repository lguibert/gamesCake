<?php

class Gameseditors extends AppModel{
    public $useTable = 'gameseditors';
    public $belongsTo  = array('Game','Editor');
}