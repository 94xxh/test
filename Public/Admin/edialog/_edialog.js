//add by somnus 
//Q:663076
function dg_mobile(){
	var op = {width:280,height:500,title:'确定要这样做吗？',html:"",dook:this.dook,cancel:this.cancel,addBtn:[],caption:true,cue:"提示"};  
	this.op=op;
	this.show=false;
};  
dg_mobile.prototype.dook=function(){
	this.cancel();
}

dg_mobile.prototype.cancel=function(fn){ 
	/*if(typeof(fn)=='function') { 
		$('#edialog_mobile').remove(); 
		fn();
		return;  
	}*/
	$('#edialog_mobile').fadeOut(200,function(){ 
		//if(typeof(fn)=='function'){ 
			setTimeout(function(){ 
								$('#edialog_mobile').remove();
									if(typeof(fn)=='function'){
									fn()
								}
							},100); 
			//fn(); 
		//}
	});  
}

dg_mobile.prototype.showbox=function(){
	this.op = {width:280,height:500,title:'确定要这样做吗？',html:"",dook:this.dook,cancel:this.cancel,addBtn:[],caption:true,cue:"提示"};  
	$('#edialog_mask,#edialog_mobile_box').fadeIn(200); 
} 


dg_mobile.prototype.setBtnCss=function(){ 
	$('#edialog_mobile .sure').width((this.op.width-19-$('#edialog_mobile .sure').length)/$('#edialog_mobile .sure').length);
	$('#edialog_mobile .sure:gt(0)').css({"border-left":"1px solid #e9e9e9"});
	if($('#edialog_mobile .sure').length<1 && $.trim(o.op.html)!='' || $.trim(o.op.html)==''){
		$('#edialog_mobile_box_con').css({"border-bottom":"0px"});
	}
}

dg_mobile.prototype.dialog=function(option){
	o = this; 
	if(typeof(option)=='object'){ 
		this.op=$.extend(o.op,option); 
	}
	cue = "";
	if(this.op.caption===true) cue='<div class="edialog_mobile_box_t">'+this.op.cue+'</div>';
	var html =  '<div id="edialog_mobile">'+
				'<div class="edialog_mobile_box" id="edialog_mobile_box">'+
				'<div class="edialog_mobile_box_h" id="edialog_mobile_box_h">'+cue+'<div class="edialog_mobile_box_msg">'+this.op.title+'</div></div>'+ 
				'<div class="edialog_mobile_box_con" id="edialog_mobile_box_con">'+this.op.html+'</div>'+
				'<div class="edialog_btn_wrap" id="edialog_btn_wrap">'+
                //'	<a href="javascript:o.op.dook();" class="sure">确 定</a>'+
//                '	<a href="javascript:o.op.cancel();" class="cancel">取 消</a>'+
            	'</div>'+
        		'</div><div class="edialog_mask" id="edialog_mask"></div></div>'; 
	//alert($('body',window.top.document).html());
	$('body',window.top.document).append(html); 
	o.btn = $('#edialog_btn_wrap'); 
	o.obHtml = $('#edialog_mobile_box_con');
	p_h = $('#edialog_mobile_box').height();
	if(o.op.html)
		$('#edialog_mobile_box_con').css({"padding":"8px 10px"});
	 
	if(o.op.addBtn){
		btnHtml = ""; 
		for(var i in o.op.addBtn){ 
			if(!o.op.addBtn[i].id) o.op.addBtn[i].id = '_mobile_btn_'+i;
			btnHtml = '<a class="sure" id="'+o.op.addBtn[i].id+'">'+o.op.addBtn[i].msg+'</a>';
			o.btn.append(btnHtml);
			$('#'+o.op.addBtn[i].id).bind('click', o.op.addBtn[i].fn);
		}
	}
	if((p_h-125)>105){
		 $('#box_con').height(105);
		 $('#box_con').css({"overflow-y":"scroll"}); 
	} 
	o.setBtnCss();
	o.showbox();
}
 
dg_mobile.prototype.addBtn=function(id,msg,fn){ 
	html = '<a class="sure" id="'+id+'">'+msg+'</a>'; 
	this.btn.append(html); 
	$('#'+id).bind('click', fn);
	this.setBtnCss();
	return this;
}

dg_mobile.prototype.addHtml=function(html){
	this.obHtml.append(html);
}

function dg_alert(title,msg,fn){
	if(!msg) msg = "好"; 
	if($('#edialog_mobile').html()){
		dg.cancel(function(){ 		   
			dg.dialog({addBtn:[{"msg":msg,'fn':function(){
														if(typeof(fn)!='function') 
														dg.cancel();
														else
														fn();
														}
							  }],caption:true,title:title});
		});
	}else{ 
		if(typeof(dg)!='object')
			dg = new dg_mobile();
		dg.dialog({addBtn:[{"msg":msg,'fn':function(){
														if(typeof(fn)!='function') 
														dg.cancel();
														else
														fn();
													}
							}],caption:true,title:title});  
	}   
	return dg;
}
 