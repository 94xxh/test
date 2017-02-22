<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\WeatherController;
class IndexController extends Controller {
    public function index(){
	if("ajax_weather"==I('get.method')){
			$weather  = new WeatherController(); 
			$weather_daily = $weather->weather_daily();  
			$weather_now   = $weather->weather_now();  
			$this->assign('weather_daily',$weather_daily);
			$this->assign('weather_now',$weather_now);
			$this->display("Index/weather"); 
			exit;
		} 
		$this->display(); 
    }
}