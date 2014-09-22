<?php

class GamesController extends AppController{
    
    public $helpers = array('Validate');
    
    public function index(){
        $datas = $this->Game->find('all', array('recursive' => -1));
        $gametypes = $this->Game->Gametype->find('all',array('recursive' => -1));
        $this->set('datas',$datas);
        $this->set('gametypes',$gametypes);
        $this->render('home');        
    }
    
    public function add(){
    }
    
    public function focus($id){
        $game = $this->Game->findById($id);
        $this->set('game',$game);
        $this->render('focus');  
    }
    
    public function search($id){
        $games = $this->Game->gamesgametypes->find('all', array(
            'conditions' => array('Gametype.id' => $id)
        ));
        $this->set('games',$games);
        $this->render('search');         
    }
}