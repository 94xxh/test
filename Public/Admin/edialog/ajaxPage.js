$(function() {
	var winAjaxPageUrl = $('#page-loading').attr("data-url");
	var _container = $('#page-loading').attr("data-container") || "container";
	var next_msg = $('#page-loading').attr("data-next-msg") || "没有数据了...";      
	var loding_page = true;   
	//if($(document).height()<=$(window).height()) winScroll();  
	winScroll();
			 
	function winScroll(){ 
		$('#page-loading').show();
		var top = document.documentElement.scrollTop + document.body.scrollTop;
		var textheight = $(document).height();
		var curnum =  parseInt($('#page-loading').attr("data-curnum")); //parseInt($("#curnum").val()); 
		if (curnum == '-1' || winAjaxPageUrl=="") { 
			$(".page-img").html(next_msg).css({"margin":"-12px 0 0 -"+$(".page-img").width()/2+"px"}); 
			//alert($(".page-img").width()/2); 
			//$(window).unbind("scroll");
			return;
		}    
		 
		if (textheight - top - $(window).height() <= 3 && loding_page==true) {  
			//$("#curnum").val(curnum + 1); 
			loding_page = false;  
			var lastId = $('#page-loading').attr("data-lastId");//$("#lastId").val(); 
			//$(window).unbind("scroll");
			//alert(winAjaxPageUrl+"&page_no=" + (curnum+1) + "&lastId="+ lastId + "&acDate=" + (new Date().getTime())); 
			//return;
			$.ajax({
				type: "get", 
				url: winAjaxPageUrl+"&page_no=" + (curnum+1) + "&lastId="+ lastId + "&acDate=" + (new Date().getTime()),
				success: function(data) {   
					loding_page = true;
					try{
						var obj = eval("("+data+")");
					}catch(e){
						window.top.dg_alert("数据有误，刷新后重试~");
					}   
					//$("#curnum").val(obj.page_no);
					//$("#lastId").val(obj.lastId);  
					$('#page-loading').attr("data-curnum",obj.page_no);
					$('#page-loading').attr("data-lastId",obj.lastId);
					if(obj.html){
						var html = $(obj.html); 
						var img_length = ($('.lazy').length)-1; 
						$('#'+_container).append(html);//.masonry('appended', $boxes, true);
						$('.lazy:gt('+img_length+')').lazyload({
							effect : 'fadeIn'
						});
					} else{
						$(".page-img").html(next_msg).css({"margin":"-12px 0 0 -"+$(".page-img").width()/2+"px"}); 
					}
					//$(window).bind("scroll", winScroll);
					if($(document).height()<=$(window).height()) winScroll(); 
				},
				error: function() {
					loding_page = true;  
					if(typeof(window.top.dg_alert)=="function")
						window.top.dg_alert("参数出错，刷新后重试~");
					else 
						alert("参数出错，刷新后重试"); 
					//$(window).bind("scroll", winScroll);
					return false;
				}
			});
		}
	} 
	$(window).bind("scroll", winScroll); 
});