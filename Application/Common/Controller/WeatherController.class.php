<?php
namespace Common\Controller;
class WeatherController{
	
	public $key = "mjpud9qhkcbaftaa";
	public $uid = "U1BE3DAFFA";
	public $location = "guangzhou";
	public $param = array("language"=>"zh-Hans","unit"=>"c","start"=>0, "days"=>5);
	
	public function weather_daily(){
		$url = "https://api.thinkpage.cn/v3/weather/daily.json?key=".$this->key."&location=".$this->location."&language=".$this->param['language']."&unit=".$this->param['unit']."&start=".$this->param['start']."&days=".$this->param['days']; 
		$infos = $this->httpGet($url);
		return $infos;
	}
	
	public function weather_now(){
		$url = "https://api.thinkpage.cn/v3/weather/now.json?key=".$this->key."&location=".$this->location."&language=".$this->param['language']."&unit=".$this->param['unit'];
		$infos = $this->httpGet($url);
		return $infos;
	}
	 
	public function httpGet($url) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_TIMEOUT, 500);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_URL, $url);

		$res = curl_exec($curl);
		curl_close($curl);

		return $res;
	}

	public function httpPost($url,$indata) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);  
		curl_setopt($curl, CURLOPT_TIMEOUT, 500);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl,CURLOPT_POSTFIELDS,$indata); 

		$res = curl_exec($curl);
		curl_close($curl);

		return $res;
	}
	
}