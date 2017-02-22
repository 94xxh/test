<?php
 
namespace Org\Util;
use Org\Util\Curl;

class Meituan{
    private $app_id='355'; 
    private $consumer_secret='0b5bc0205fb55eafc0e74503685dc35c';
    private $domain ="http://waimaiopen.meituan.com/api/v1/"; 

    public function __construct($app_id, $consumer_secret, $domain){
		if($app_id)
        	$this->app_id = $app_id;
		if($consumer_secret)
        	$this->consumer_secret = $consumer_secret;
		if($domain)
        	$this->domain = $domain;
    } 
	
	public function restaurant_save($app_poi_code, $params=array()){
		$uri = "poi/save";
        $params['app_poi_code'] = $app_poi_code;   
        return $this->send_request($uri, 'JSON', $params);
	}
	
	//查询门店ID
    public function getids(){
        $uri = "poi/getids";
        return $this->send_request($uri, 'GET');
    }
	
	//批量获取门店详细信息
	public function mget($app_poi_codes){
		$uri = "poi/mget";
		$data = array('app_poi_codes'=>$app_poi_codes);  
        return $this->send_request($uri, 'GET', $data);
	}
	
	//门店设置为营业状态
	public function open($app_poi_code){
		$uri = "poi/open";
		$data = array('app_poi_code'=>$app_poi_code);  
        return $this->send_request($uri, 'JSON', $data);
	}
	
	//门店设置为休息状态
	public function close($app_poi_code){
		$uri = "poi/close";
		$data = array('app_poi_code'=>$app_poi_code);  
        return $this->send_request($uri, 'JSON', $data);
	}
	
	//门店设置为下线状态
	public function offline($app_poi_code, $reason){
		$uri = "poi/offline";
		$data = array('app_poi_code'=>$app_poi_code, 'reason'=>$reason);   
        return $this->send_request($uri, 'JSON', $data);  
	}
	
	//门店设置为上线状态
	public function online($app_poi_code){
		$uri = "poi/online";
		$data = array('app_poi_code'=>$app_poi_code);   
        return $this->send_request($uri, 'JSON', $data);
	}
	
	//同步门店预计送达时长
	public function sendtime_save($app_poi_codes, $send_time=30){
		$uri = "poi/sendtime/save";
		$data = array('app_poi_codes'=>$app_poi_codes, 'send_time'=>$send_time);   
        return $this->send_request($uri, 'JSON', $data);
	}
	
	//更新门店公告
	public function updatepromoteinfo($app_poi_code, $promotion_info){
		$uri = "poi/updatepromoteinfo";
		$data = array('app_poi_code'=>$app_poi_code, 'promotion_info'=>$promotion_info);     
        return $this->send_request($uri, 'JSON', $data);
	}
	
	//获取门店品类列表
	public function tag_list(){
		$uri = "poiTag/list";
		$data = array( );   
        return $this->send_request($uri, 'JSON', $data); 
	}
	
	//更新门店营业时间 
	public function shippingtime_update($app_poi_code, $shipping_time='10:00-20:00'){
		$uri = "poi/shippingtime/update"; 
		$data = array( 'app_poi_code'=>$app_poi_code, 'shipping_time'=>$shipping_time);   
        return $this->send_request($uri, 'JSON', $data);
	}
	
	//创建/更新门店配送范围 
	public function shipping_save($app_poi_code, $params){
		$uri = "shipping/save"; 
		$params['app_poi_code'] = $app_poi_code;   
        return $this->send_request($uri, 'JSON', $params);
	}
	
	//获取门店配送范围
	public function shipping_list($app_poi_code){
		$uri = "shipping/list"; 
		$params['app_poi_code'] = $app_poi_code;   
        return $this->send_request($uri, 'GET', $params); 
	}
	
	//查询门店菜品分类列表
	public function foodcat_list($app_poi_code){  
		$uri = "foodCat/list"; 
		$params['app_poi_code'] = $app_poi_code;      
        return $this->send_request($uri, 'GET', $params); 
	}
	
	//添加\更新 菜品分类
	public function foodcat_update($app_poi_code, $params){   
		$uri = "foodCat/update"; 
		$params['app_poi_code'] = $app_poi_code; 
        return $this->send_request($uri, 'JSON', $params); 
	}
	
	//删除菜品分类
	public function foodcat_delete($app_poi_code, $params){   
		$uri = "foodCat/delete"; 
		$params['app_poi_code'] = $app_poi_code; 
        return $this->send_request($uri, 'JSON', $params); 
	}
	
	//创建/更新菜品
	public function food_save($app_poi_code, $params){   
		$uri = "food/save"; 
		$params['app_poi_code'] = $app_poi_code; 
        return $this->send_request($uri, 'JSON', $params); 
	}
	
	//删除菜品
	public function food_delete($app_poi_code, $params){   
		$uri = "food/delete"; 
		$params['app_poi_code'] = $app_poi_code; 
        return $this->send_request($uri, 'JSON', $params); 
	}
	
	//上传图片
	public function image_upload($app_poi_code, $params){
		$uri = "image/upload"; 
		$params['app_poi_code'] = $app_poi_code; 
		$img_data = $params['img_data']; 
		unset($params['img_data']); 
        return $this->send_request($uri, 'UPFILE', $params, array('img_data'=>$img_data) );
	}
	
	//查询门店菜品列表
	public function food_list($app_poi_code, $params){   
		$uri = "food/list";  
		$params['app_poi_code'] = $app_poi_code;  
        return $this->send_request($uri, 'GET', $params); 
	}
	
	//查询订单详情
	public function order_getOrderDetail($app_poi_code, $params){
		$uri = "order/getOrderDetail";  
		$params['app_poi_code'] = $app_poi_code;  
        return $this->send_request($uri, 'GET', $params);
	}
	
	//获取订单商家补贴款
	public function order_subsidy($app_poi_code, $order_id){
		$uri = "order/subsidy"; 
		$params['app_poi_code'] = $app_poi_code; 
		$params['order_id'] = $order_id;
        return $this->send_request($uri, 'GET', $params);
	}
	
	//设订单为商家已收到
	public function order_poi_received($app_poi_code, $order_id){
		$uri = "order/poi_received"; 
		$params['app_poi_code'] = $app_poi_code;
		$params['order_id'] = $order_id;   
        return $this->send_request($uri, 'GET', $params);
	}
	
	//商家确认订单 
	public function order_confirm($app_poi_code, $order_id){
		$uri = "order/confirm"; 
		$params['app_poi_code'] = $app_poi_code;
		$params['order_id'] = $order_id; 
        return $this->send_request($uri, 'GET', $params);
	}
	
	//商家取消订单 
	public function order_cancel($app_poi_code, $params){
		$uri = "order/cancel"; 
		$params['app_poi_code'] = $app_poi_code; 
        return $this->send_request($uri, 'GET', $params);
	}
	
	//订单配送中 
	public function order_delivering($app_poi_code, $params){
		$uri = "order/delivering";  
		$params['app_poi_code'] = $app_poi_code;   
        return $this->send_request($uri, 'GET', $params);
	}
	
	//商家订单完成
	public function order_complete($app_poi_code, $order_id){
		$uri = "order/arrived"; 
		$params['app_poi_code'] = $app_poi_code;
		$params['order_id'] = $order_id; 
        return $this->send_request($uri, 'GET', $params);
	}
	
	//驳回退款
	public function refund_reject($app_poi_code, $params){ 
		$uri = "order/refund/reject"; 
		$params['app_poi_code'] = $app_poi_code; 
        return $this->send_request($uri, 'GET', $params);  
	}
	
	//退款
	public function refund_agree($app_poi_code, $params){ 
		$uri = "order/refund/agree"; 
		$params['app_poi_code'] = $app_poi_code; 
        return $this->send_request($uri, 'GET', $params);  
	}
	 
    private function send_request($uri, $method, $data=array(), $files=array()){ 
        $curl = new Curl();
		$resp = null;
        /*if(strrpos($uri, "/") != strlen($uri) -1){
            $uri .= "/";
        }*/
		 
         
        $requset_url = $this->build_request_uri($uri, $data);
		 
		switch ($method) {
            case 'GET':
                $resp = $curl->do_get_request( $requset_url );
                break; 
            case 'POST':
                if($files){
                    foreach ($files as $key => $value) {
                        $data[$key] = $value;
                    }
                }  
                $resp = $curl->do_json_request( $requset_url,  $data );
                break;
			case 'JSON':
                if($files){
                    foreach ($files as $key => $value) {
                        $data[$key] = $value;
                    }
                } 
				    
                $resp = $curl->do_json_request( $requset_url, $this->concatParams( $data  ) ); 
                break;  
			case 'UPFILE': 
				if($files){
                    foreach ($files as $key => $value) {
                        $data[$key] = $value;
                    }
                } 
                $resp = $curl->do_upfile_request($requset_url, $data); 
                break;
			case 'PUT':
                $resp = $curl->do_put_request($requset_url, $data); 
                break;
			case 'DELETE':
                $resp = $curl->do_delete_request($requset_url, $data);
                break;
        }   
		 
        return json_decode( $resp, JSON_UNESCAPED_UNICODE ); 
    }

    private function build_request_uri($uri, $params=array()){
        $url = sprintf("%s%s", $this->domain, $uri);
        $params['app_id'] = $this->app_id;
        $params['timestamp'] = time();
        //$params['sig'] = $this->genSig($url, $params, $this->consumer_secret);
		$sig = $this->genSig($url, $params, $this->consumer_secret);
        return sprintf('%s?%s', $url, $this->concatParams($params).'&sig='.$sig);
    }
 
    private function concatParams($params) {
        ksort($params);
        $pairs = array();
        foreach($params as $key=>$val) {   
            //array_push($pairs, $key . '=' . urlencode($val)); 
			array_push( $pairs, $key . '=' . str_replace('+', '＋', $val) );     
        }
        return join('&', $pairs);
    } 

    private function genSig($pathUrl, $params, $consumerSecret) { 
        $params = $this->concatParams($params); 
        $str = $pathUrl.'?'.$params.$consumerSecret;
        return md5($str); 
    }
}
?>