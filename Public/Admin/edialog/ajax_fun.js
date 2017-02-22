
function ajax_fun(url, mtype, data, callback, showLoding, debug){ 
	if(showLoding==true) 
		window.top.dg_alert("","<font class='loading-btn'>提交中...</font>",function(){}); 
	$.ajax({
		type: mtype, 
		url : url ,
		data:data,
		success: function(data) {    
			try{
				var obj = eval("("+data+")");
			}catch(e){
				var obj = {}; 
				//window.top.dg_alert("返回数据有误，刷新后重试~");
			}    
			setTimeout(function(){ 
				if(obj.code=="200"){
					var msg_str = obj.msg||"提交成功";
					if(showLoding==true)  
						window.top.dg_alert(msg_str,"确定");  
					if(typeof callback=='function'){
						setTimeout(function(){
							callback(obj, data);
						},200)   
					} 
				}else if(obj.code=="400"){
					var msg_str = obj.msg||"提交失败";
					window.top.dg_alert(msg_str,"确定");  
				}else{ 
					//window.top.dg_alert("提交时出错，刷新后重试~"); 
					//window.top.dg.cancel(); 
					if(debug==true){   
						window.top.dg_alert(data);
					}
					else{ 
						window.top.dg_alert("提交时出错，刷新后重试~");
					}
				}
			},300)
		},
		error: function() { 
			if(typeof(window.top.dg_alert)=="function")
				window.top.dg_alert("网络超时出错，刷新后重试~");
			else 
				window.top.dg_alert("网络超时出错，刷新后重试");  
			return false;
		}
	});

}