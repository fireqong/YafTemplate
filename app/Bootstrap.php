<?php

use Yaf\Loader;
use Yaf\Registry;
use Yaf\Application;
use Yaf\Dispatcher;
use Yaf\Bootstrap_ABstract;

 
class Bootstrap extends Bootstrap_Abstract{

    public function _initConfig() {
		$arrConfig = Application::app()->getConfig();
		Registry::set('config', $arrConfig);
	}

	public function _initPlugin(Dispatcher $dispatcher) {
		$objSamplePlugin = new SamplePlugin();
		$dispatcher->registerPlugin($objSamplePlugin);
	}

	public function _initRoute(Dispatcher $dispatcher) {
		
	}
	
	public function _initView(Dispatcher $dispatcher){
		
	}
	
	public function _initLoader(Dispatcher $dispatcher)
	{
		Loader::import(APPLICATION_PATH . '/vendor/autoload.php');
	}
}
