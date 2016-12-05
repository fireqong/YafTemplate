<?php

use Yaf\Controller_Abstract;
 
class IndexController extends Controller_Abstract 
{
	public function indexAction($name = "Stranger") {
		$get = $this->getRequest()->getQuery("get", "default value");
		$model = new SampleModel();
		$this->getView()->assign("content", $model->selectSample());
		$this->getView()->assign("name", $name);
		
		Test::say();
        return TRUE;
	}
}
