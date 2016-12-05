<?php 

use Yaf\Dispatcher;
use Yaf\Controller_Abstract;

class IndexController extends Controller_Abstract
{
	public function indexAction()
	{
		$this->getView();
	}
	
	public function testAction()
	{
		Dispatcher::getInstance()->disableView();
		echo 'Hello!world';
	}
}
