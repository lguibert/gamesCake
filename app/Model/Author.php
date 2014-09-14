<?php

class Author extends AppModel{
    public $hasMany = array('gamesauthors');
}