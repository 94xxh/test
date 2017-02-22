<?php
 
namespace Org\Util;
use Org\Util\Curl;

class Merchant{
    public $consumer_key='1719980533';
    public $consumer_secret='fa1c1deaefc1615c6f4b7b3cc2772fa3c627c2ba';
    private $oas="http://v2.openapi.ele.me";

    public function __construct($consumer_key, $consumer_secret, $oas){
		if($consumer_key)
        	$this->consumer_key = $consumer_key;
		if($consumer_secret)
        	$this->consumer_secret = $consumer_secret;
		if($oas)
        	$this->oas = $oas;
    }
	
	//通过地址上传图片大小限制300KB支持 jpeg 和 png 格式
    public function upload_img($img_path){
        $uri = "/image/upload_by_url/";
        $data = array( 'image_url'=> $img_path);
        return $this->send_request($uri, 'POST', $data);
    }
	
	//查询餐厅信息
    public function get_restaurant($restaurant_id){
        $uri = sprintf("/restaurant/%s/", $restaurant_id);
        return $this->send_request($uri, 'GET');
    } 
	
	//查询所属餐厅
	public function get_restaurant_one(){
		$uri = sprintf("/restaurant/own/");
        return $this->send_request($uri, 'GET'); 
	}
	
	//更新餐厅营业信息
	public function update_business_status($restaurant_id, $is_open){
		$uri = sprintf("/restaurant/%s/business_status/", $restaurant_id);
		$data = array( 'is_open'=> $is_open);
        return $this->send_request($uri, 'PUT', $data); 
	}
	 
	//更新餐厅上下线
	public function update_restaurant_info($restaurant_id, $params){
		$uri = sprintf("/restaurant/%s/info", $restaurant_id);
        return $this->send_request($uri, 'PUT', $params);
	}
	
	//更新餐厅配送范围
	public function update_restaurant_geo($restaurant_id, $params){
		$uri = sprintf("/restaurant/%s/info", $restaurant_id);
		$data = array( 'geo_json'=> $params);
        return $this->send_request($uri, 'PUT', $data);   
	}
	
	
	//添加餐厅食物分类
	//$params = array('restaurant_id'=>'', 'name'=>'', 'weight'=>''); weight权重大的靠前
	public function add_food_category($params){
		$uri = sprintf("/food_category/");
        return $this->send_request($uri, 'POST', $params); 
	}
	
	//修改餐厅食物分类
	//$params = array('name'=>'', 'weight'=>''); weight权重大的靠前
	public function update_food_category($food_category_id, $params){
        $uri = sprintf("/food_category/%d/", $food_category_id);
        return $this->send_request($uri, 'PUT', $params);  
    }
	
	//删除餐厅食物分类
	public function delete_food_category($food_category_id){
        $uri = sprintf('/food_category/%d/', $food_category_id);
        return $this->send_request($uri, 'DELETE');
    }
	
	//查询餐厅食物分类
	public function get_food_category($restaurant_id){ 
		$uri = sprintf("/restaurant/%s/food_categories/", $restaurant_id);
		return $this->send_request($uri, 'GET');
	}
	
	//查询食物分类详情
	public function food_category_infos($food_category_id){
		$uri = sprintf("/food_category/%s/", $food_category_id);
		return $this->send_request($uri, 'GET');
	}
	
	//查询分类食物列表
	public function category_food_list($food_category_id){
		$uri = sprintf("/food_category/%s/foods", $food_category_id);
		return $this->send_request($uri, 'GET');
	}
	
	//添加食物菜品
	public function add_food($params){
		$uri = sprintf("/food/");
		return $this->send_request($uri, 'POST', $params);
	}
	
	//更新食物菜品
	public function update_food($food_id, $params){
		$uri = sprintf("/food/%s/", $food_id);
		return $this->send_request($uri, 'PUT', $params);
	}
	
	//删除食物菜品
	public function delete_food($food_id){
		$uri = sprintf("/food/%s/", $food_id);
		return $this->send_request($uri, 'DELETE');
	}
	
	//查询订单
	public function order_info($eleme_order_id){ 
		$uri = sprintf("/order/%s/", $eleme_order_id);
		return $this->send_request( $uri, 'GET' );
	}
	
	//确认订单
	public function order_confirm($eleme_order_id){ 
		$uri = sprintf("/order/%s/status/", $eleme_order_id);
		$params = array('status'=>2); 
		return $this->send_request($uri, 'PUT', $params);
	}
	
	//取消订单
	public function order_cancel($eleme_order_id, $reason){
		$uri = sprintf("/order/%s/status/", $eleme_order_id);
		$params = array('status'=>'-1', 'reason'=>$reason);  
		return $this->send_request($uri, 'PUT', $params); 
	}
	
	//同意退单
	public function agree_refund($eleme_order_id){
		$uri = sprintf("/order/%s/agree_refund/", $eleme_order_id);
		return $this->send_request($uri, 'POST');  
	}
	
	//不同意退单  
	public function disagree_refund($eleme_order_id, $reason){
		$uri = sprintf("/order/%s/disagree_refund/", $eleme_order_id);
		$params = array('reason'=>$reason); 
		return $this->send_request($uri, 'POST', $params);   
	}
	 

    private function send_request($uri, $method, $data=array(), $files=array()){ 
        $curl = new Curl();
		$resp = null;
        if(strrpos($uri, "/") != strlen($uri) -1){
            $uri .= "/";
        }
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
                $resp = $curl->do_post_request($requset_url, $data);
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
        $url = sprintf("%s%s", $this->oas, $uri);
        $params['consumer_key'] = $this->consumer_key;
        $params['timestamp'] = time();
        $params['sig'] = $this->genSig($url, $params, $this->consumer_secret);
        return sprintf('%s?%s', $url, $this->concatParams($params));
    }
 
    private function concatParams($params) {
        ksort($params);
        $pairs = array();
        foreach($params as $key=>$val) {
            array_push($pairs, $key . '=' . urlencode($val));
        }
        return join('&', $pairs);
    }

    private function genSig($pathUrl, $params, $consumerSecret) {
        $params = $this->concatParams($params); 
        $str = $pathUrl.'?'.$params.$consumerSecret;
        return sha1(bin2hex($str));
    }
}
?>