<?php
namespace Admin\Controller;

class IndexController extends AdminController {
    public function index(){
    	$this->assign("home","active");
		$this->display();
    }
}
