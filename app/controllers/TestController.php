clea<?php
namespace controllers;
 /**
  * Controller TestController
  */
class TestController extends \controllers\ControllerBase{

	public function index(){
		$this->loadView("TestController/index.html");
	}
}
