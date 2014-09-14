<?php

class Gametypes extends AppController{
    public function getNames(){
        return $this->Gametype->find('all');
    }
}