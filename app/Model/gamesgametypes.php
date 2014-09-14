<?php

class Gamesgametypes extends AppModel{
    public $useTable = 'gamesgametypes';
    public $belongsTo  = array('Game','Gametype');
}