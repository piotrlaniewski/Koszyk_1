<?php

class viewController {
    private function renderHeader(){
        require 'views/master/header.phtml';
    }
    
    private function renderFooter(){
        require 'views/master/footer.phtml';
    }
    
    private function renderMenu(){
        require 'views/master/menu.phtml';
    }
    
    public function renderTemplate($path = 'views/index.phtml', array $vars = []){
        $this->renderHeader();
        require ($path);
        $this->renderFooter();
    }
}
