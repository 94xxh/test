var uploadImage = {
	init:function(selector, fileid, callback, checkFile_fn){  
		this.fileid   = fileid;
		this.selector = selector;
		this.hld = callback;
		$('#'+fileid).val("");
		$('#'+fileid).unbind('change').on('change',function(){uploadImage.upload(selector, fileid, callback, checkFile_fn);});
		$('#'+selector).unbind('click').on('click',function(){$('#'+fileid).click();});
	},
	upload:function(selector, fileid, callback, checkFile_fn){ 
	 
		var fileurl = $('#'+fileid).val();
		var fileName = fileurl.split('\\')[fileurl.split('\\').length-1];  
		if(typeof checkFile_fn=='function'){ 
			if(checkFile_fn(fileurl)==false){ 
				return;
			} 
		}else{
			if(fileurl!=''){
				var types = ['jpg','jpeg','png'];
				var suffix = fileurl.slice(-3).toLowerCase();
				var tag = 0;
				for(var i=0,l=types.length;i<l;i++){
					(types[i]==suffix) && (tag = 1);
				}
				if(tag==0){ 
					window.top.dg_alert('只支持照片上传！',"确定");
					return;
				}
			}
		}
		 
		window.top.dg_alert("","<font class='loading-btn'>上传中...</font>",function(){}); 
		$.ajaxFileUpload({
			url: '../adm_home/upload.php',//用于文件上传的服务器端请求地址
			secureuri: false,
			fileElementId: fileid, 
			dataType: 'string', 
			success: function(data){ 
				try{
					obj = eval('('+data+')');
				}catch(e){
					obj = {};
				} 
				if(obj.code=="200"){  
					window.top.dg_alert("上传成功","确定");
					 
					if(typeof callback=='function'){
						 
						callback(obj.path); 
					}
					//eval(uploadImage.hld+'()');
				}else{ 
					window.top.dg_alert(data,"确定");
				}    
				uploadImage.init(selector, fileid, callback, checkFile_fn);
			},
			error: function (data, status, e){  
				window.top.dg_alert('照片上传失败！',"确定");
				uploadImage.init(selector, fileid, callback);
			}
		});
	}
}