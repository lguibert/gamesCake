<?php

class GamesController extends AppController{
    
    public $helpers = array('Validate');
    
    public function index(){
        $datas = $this->Game->find('all', array('recursive' => -1));
        $this->set('datas',$datas);
        $this->render('home');        
    }
    
    public function add(){
    }
    
    public function focus($id){
        $game = $this->Game->findById($id);
        $this->set('game',$game);
        $this->render('focus');  
    }
}