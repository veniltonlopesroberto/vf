<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of homeController
 *
 * @author HP
 */
class homeController extends controller  {
    //put your code here
   
    
    public function index(){
        
        $ans = new ans();
        $dados['ans']=$ans->getRegOpera();
        $this->loadTemplate("home",$dados);
        
    }
    
    public function sobre(){
        $dados = array();
        $this->loadTemplate("sobre",$dados);
        
    }
}
