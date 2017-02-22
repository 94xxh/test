<?php
/**
 * curl class file
 * 
 * 常用的CURL操作
 * @author tommy <streen003@gmail.com>
 * @copyright  Copyright (c) 2010 Tommy Software Studio
 * @link http://www.doitphp.com
 * @license New BSD License.{@link http://www.opensource.org/licenses/bsd-license.php}
 * @version $Id: curl.class.php 1.0 2010-12-4 16:10:01Z tommy $
 * @package lib
 * @since 1.0
 */
namespace Org\Util; 
class Curl{
	
	/**
	 * cookie的存放路径
	 *
	 * @var string
	 */
	public $cookie_file;
	
	/**
	 * 构造函数
	 * 
	 * @access public
	 * @return boolean
	 */
	public function __construct() { 
		$this->cookie_file = $ctrl->modelurl. '/cache/temp/' . md5('curl') . '.txt';
	}
	
	/**
	 * 用CURL模拟获取网页页面内容
	 * 
	 * @param string $url	所要获取内容的网址
	 * @param string $proxy	代理设置
	 * @param integer $expire	时间限制
	 * @return string
	 * 
	 * @example
	 * 
	 * $proxy = '192.168.1.110:2010';
	 * $url = 'http://www.doitphp.com/';
	 * 
	 * $curl = new curl();
	 * $curl -> do_get_content($url, $proxy);
	 */
	public function do_get_request($url, $proxy = null, $expire = 30) {
		
		//参数分析
		if (!$url) {
			return false;
		}
		
		//分析是否开启SSL加密
		$ssl = substr($url, 0, 8) == 'https://' ? true : false;
		
		//读取网址内容
		$ch = curl_init();
		
		//设置代理
		if (!is_null($proxy)) {
			curl_setopt ($ch, CURLOPT_PROXY, $proxy); 
		} 
				
		curl_setopt($ch, CURLOPT_URL, $url);
		
		if ($ssl) {
			// 对认证证书来源的检查 
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			// 从证书中检查SSL加密算法是否存在
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
		}
				
		//cookie设置
		curl_setopt($ch, CURLOPT_COOKIEJAR, $this->cookie_file);
    	curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookie_file);
    	
    	//设置浏览器
    	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);		
    	curl_setopt($ch, CURLOPT_HEADER, 0);  
	     

    	
    	//使用自动跳转
    	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);		
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	 
		curl_setopt($ch, CURLOPT_ENCODING, "gzip" );
		curl_setopt($ch, CURLOPT_TIMEOUT, $expire);
		 		
		$content = curl_exec($ch);
		curl_close($ch);
		
		return $content;
	}
	
	/**
	 * 用CURL模拟提交数据
	 * 
	 * @param string $url		post所要提交的网址
	 * @param array  $data		所要提交的数据
	 * @param string $proxy		代理设置
	 * @param integer $expire	所用的时间限制
	 * @return string
	 */
	public function do_post_request($url, $data=array(), $proxy = null, $expire = 30) { 
		
		//参数分析
		if (!$url) {
			return false;
		}
		
		//分析是否开启SSL加密
		$ssl = substr($url, 0, 8) == 'https://' ? true : false;
		
		//读取网址内容
		$ch = curl_init();
		
		//设置代理
		if (!is_null($proxy)) {
			curl_setopt ($ch, CURLOPT_PROXY, $proxy); 
		} 
				
		curl_setopt($ch, CURLOPT_URL, $url);
		
		if ($ssl) {
			// 对认证证书来源的检查 
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			// 从证书中检查SSL加密算法是否存在
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
		}
		
		//cookie设置
		curl_setopt($ch, CURLOPT_COOKIEJAR, $this->cookie_file);
    	curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookie_file);
    	
    	//设置浏览器
    	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);		
    	curl_setopt($ch, CURLOPT_HEADER, 0);
    	
    	//发送一个常规的Post请求
    	curl_setopt($ch, CURLOPT_POST, true);
    	//Post提交的数据包
    	curl_setopt($ch,  CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch,  CURLOPT_HTTPHEADER, array('Expect:'));  
    	
    	//使用自动跳转
    	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);		
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		
		curl_setopt($ch, CURLOPT_TIMEOUT, $expire);
		 		
		$content = curl_exec($ch);
		curl_close($ch);
		
		return $content;
	}
	
	public function do_put_request($url, $data){ 
		$ch = curl_init(); //初始化CURL句柄 
		curl_setopt($ch, CURLOPT_URL, $url); //设置请求的URL
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); //设置请求方式
		 
		curl_setopt($ch,CURLOPT_HTTPHEADER,array("X-HTTP-Method-Override: PUT"));//设置HTTP头信息
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);//设置提交的字符串
		$content = curl_exec($ch);//执行预定义的CURL  
		curl_close($ch); 
		return $content;
	}
	
	public function do_delete_request($url, $data){ 
		$ch = curl_init(); //初始化CURL句柄 
		curl_setopt($ch, CURLOPT_URL, $url); //设置请求的URL
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); //设置请求方式
		 
		curl_setopt($ch,CURLOPT_HTTPHEADER,array("X-HTTP-Method-Override: DELETE"));//设置HTTP头信息
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);//设置提交的字符串
		$content = curl_exec($ch);//执行预定义的CURL  
		curl_close($ch); 
		return $content;
	}
	
	public function do_json_request($url, $data){ 
		$ch = curl_init(); //初始化CURL句柄 
		curl_setopt($ch, CURLOPT_URL, $url); //设置请求的URL
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出 
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Content-Length: ' . strlen($data))
		);   
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);//设置提交的字符串
		$content = curl_exec($ch);//执行预定义的CURL  
		curl_close($ch); 
		return $content;
	}
	
	public function do_upfile_request($url, $data){  
		$ch1 = curl_init (); 
		curl_setopt ( $ch1, CURLOPT_URL, $url );
		curl_setopt ( $ch1, CURLOPT_POST, 1 );
		curl_setopt ( $ch1, CURLOPT_RETURNTRANSFER, 1 ); 
		curl_setopt ( $ch1, CURLOPT_SSL_VERIFYPEER, FALSE );
		curl_setopt ( $ch1, CURLOPT_SSL_VERIFYHOST, false );   
		curl_setopt ( $ch1, CURLOPT_HTTPHEADER, array('User-Agent: Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15','Referer: http://someaddress.tld','Content-Type: multipart/form-data'));  
		curl_setopt ( $ch1, CURLOPT_POSTFIELDS,  $data );
		$content = curl_exec($ch1); 
		curl_close($ch1);  
		return $content;
		 
	}
}