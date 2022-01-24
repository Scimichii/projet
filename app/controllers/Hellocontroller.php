<?php
namespace controllers;
 /**
  * Controller Hellocontroller
  */
class Hellocontroller extends \controllers\ControllerBase{

	public function index(){
        echo "hello world";
        echo "<br>";
        echo "faire java";
		
	}
    public function message($arg1){

       echo $arg1;

    }
}
