//add by somnus
STA=new function(){};
STA.Variable={
	path:"",
	tab_url:'',
	tab_id:1,
	tab_dopost:'30',
	tab_startTime:0,
	tab_endTime:0,
	tab_refresh_urls:[]
};
STA.Data = {
	loadChart : function(url, chartOpt, container, callback, dex) {
		if(!STA.Variable.tab_url){
			alert("缺少地址");
			return;
		} 
		var dex = dex||1;
		STA.Data.loadingShow(dex); 
		$.post(url,null,function(data) { 
			//json = eval( "[" +data+"]" ); 
			try{
				json = eval( "[" +data+"]" );
			}catch(e){
				//var obj = {}; 
				window.top.dg_alert("返回数据有误，刷新后重试~");
				STA.Data.loadingHide(dex); 
				return false;
			}
			if( typeof json[0]  != 'object'){ 
				for(var i in container){
					$('#'+container[i]).addClass('nodata'); 
				}
				STA.Data.loadingHide(dex); 
				return;
			} 
			chart = json[0].chart; 
			var j=0;
			for(var i in chart){
				data = chart[i]; 
				var containerId = '#' + (container[i]||container[j]);  
				data.chartOptions = data.chartOptions || {}; 
				var _opt = {
					title : data.title,
					chartType : data.chartType, 
					categories : data.categories,
					series : data.series, 
					dataFormat : data.dataFormat, 
					chartOptions : data.chartOptions 
				};
				if(!chartOpt[i]) chartOpt[i]=chartOpt[0];  
				_opt = $.extend(true, _opt, chartOpt[i]); 
				j++;
				if($(containerId).length<1) continue; 
				$(containerId).createChart(_opt); 
			}   
			STA.Data.loadingHide(dex);  
			if(typeof(callback)=='function') 
				callback(json[0], container);  
		}).error(function(){
			alert('异常错误，请检查网络。');
		});
	},
	
	loadoData : function(oData, chartOpt, container) { 
		data = oData;
		var containerId = '#' + container; 
		data.chartOptions = data.chartOptions || {}; 
		var _opt = {
			title : data.title,
			chartType : data.chartType, 
			categories : data.categories,
			series : data.series, 
			dataFormat : data.dataFormat, 
			chartOptions : data.chartOptions 
		};
		_opt = $.extend(true, _opt, chartOpt);
		$(containerId).createChart(_opt); 
	}
	,
	loadingShow : function(dex){    
		var containerId = ".chartLoading"; 
		//if(container)
			//containerId = '#' + container;  
		$(containerId).eq(dex-1).show();
	}
	,
	loadingHide : function(dex){ 
		var containerId = ".chartLoading";
		//if(container)
			//containerId = '#' + container; 
		$(containerId).eq(dex-1).hide();
	},
	view_switcher : {
		cgi : {},
		hdl : null,
		container_btn:'ui_buttons',
		container : 'div_item_tabs', 
		container_date:'date_btn',
		init : function(cgi_conf, hdl, num) {
			num = num || 1;
			this.cgi = cgi_conf; 
			this.hdl = hdl;  
			//this.tabInit(); 
			STA.Variable.tab_url = cgi_conf[num];
			STA.Variable.tab_id = num; 
			STA.Variable.path = STA.Variable.tab_url + "&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime;
			$('#' + this.container).find('a').first().addClass("current").siblings().removeClass('current');
			return this;
			 
		}, 
		clickAction : function(id){
			this.tabInit(); 
			//STA.Variable.tab_url = this.cgi[id];
			//eval(this.hdl + '()');
			//$('#div_item_tabs a[id="tab_'+ id +'"]').addClass('current').siblings().removeClass('current');
		}, 
		tabInit : function(){ 
			var self = this; 
			$("button[data-dopost='"+STA.Variable.tab_dopost+"']").addClass('current').siblings().removeClass('current');
			/*$('#'+ self.container).find('a').each(function() {
				var id = $(this).attr('id').match(/tab_(\d{1,2})/i)[1]; 
				$(this).bind('click', function() {  
					STA.Variable.tab_id = id; 
					STA.Variable.tab_url = self.cgi[id]; 
					STA.Variable.path = STA.Variable.tab_url + "&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime; 
                    $(this).addClass('current').siblings().removeClass('current'); 
					eval(self.hdl + '()'); 
				});
			}); 
			$('#'+ self.container_btn).find('button').each(function() {
				var dopost = $(this).attr('data-dopost'); 
				$(this).bind('click', function() { 
					STA.Variable.tab_dopost = dopost;
					STA.Variable.path = STA.Variable.tab_url + "&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime; 
                    $(this).addClass('current').siblings().removeClass('current'); 
					eval(self.hdl + '()');
				});
			});*/
			$('#'+ self.container).find('a').bind('click', function() { 
				var id = $(this).attr('id').match(/tab_(\d{1,2})/i)[1];  
				STA.Variable.tab_id = id; 
				STA.Variable.tab_url = self.cgi[id]; 
				STA.Variable.path = STA.Variable.tab_url + "&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime; 
				STA.Variable.tab_refresh_urls[STA.Variable.tab_id]=STA.Variable.path;
				$(this).addClass('current inbTitItemActive').siblings().removeClass('current inbTitItemActive');  
				if(typeof self.hdl=='function'){
					self.hdl();
				}
				//eval(self.hdl + '()');  
			}); 
			$('.'+ self.container_btn).find('button').bind('click', function() {  
				var dopost = $(this).attr('data-dopost');  
				if(dopost=='search') return; 
				STA.Variable.tab_dopost = dopost;
				$url = $(this).parent().parent().parent().attr('data-url');
				$chart_ids = $(this).parent().parent().parent().attr('data-chart-ids');
				$company =  $(this).parent().find('.company').val()||0;
				$company_uid = $(this).parent().find('.company_user').val()||0;
				$company_brand_id = $(this).parent().find('.company_brand').val()||0;
				$company_store_id = $(this).parent().find('.company_store').val()||0;
				$c_dtype 	 =  $(this).parent().find('.c_dtype').val()||0;
				STA.Variable.tab_url = $url;
				//STA.Variable.path = STA.Variable.tab_url + "&company_id="+$company+"&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime;  
				STA.Variable.path = STA.Variable.tab_url + "&c_dtype="+$c_dtype+"&company_id="+$company+"&company_uid="+$company_uid+"&brand_id="+$company_brand_id+"&store_id="+$company_store_id+"&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime; 
				//alert(STA.Variable.path); 
				
				$(this).addClass('current').siblings().removeClass('current');  
				if(typeof self.hdl=='function'){
					self.hdl($chart_ids);
				}
				//alert(buildChart)
				//eval(self.hdl + '()'); 
			});
			$("."+self.container_btn).find('.date-btn').bind("click",function(){ 
				var dopost = $(this).attr('data-dopost');  
				STA.Variable.tab_startTime = $(this).parent().find('#d_startTime').val()||0;
				STA.Variable.tab_endTime =  $(this).parent().find('#d_endTime').val()||0; 
				if(STA.Variable.tab_startTime && STA.Variable.tab_endTime) 
				STA.Variable.tab_dopost = dopost;
				$url = $(this).parent().parent().parent().attr('data-url');
				$chart_ids = $(this).parent().parent().parent().attr('data-chart-ids');
				$company =  $(this).parent().find('.company').val()||0;
				$company_uid = $(this).parent().find('.company_user').val()||0;
				$company_brand_id = $(this).parent().find('.company_brand').val()||0;
				$company_store_id = $(this).parent().find('.company_store').val()||0;
				$c_dtype 	 =  $(this).parent().find('.c_dtype').val()||0;
				STA.Variable.tab_url = $url;
				//STA.Variable.path = STA.Variable.tab_url + "&company_id="+$company+"&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime;   
				STA.Variable.path = STA.Variable.tab_url + "&c_dtype="+$c_dtype+"&company_id="+$company+"&company_uid="+$company_uid+"&brand_id="+$company_brand_id+"&store_id="+$company_store_id+"&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime; 
				STA.Variable.tab_refresh_urls[STA.Variable.tab_id]=STA.Variable.path; 
				//alert(STA.Variable.path);  
				
                $(this).parent().find('button').removeClass('current'); 
				//alert($chart_ids)
				if(typeof self.hdl=='function'){
					self.hdl($chart_ids);
				}
				//eval(self.hdl + '()');
			})
			
			$(".company,.company_user,.company_brand,.company_store,.c_dtype").live("change",function(){  
				var dopost = $(this).parent().find('.current').attr('data-dopost') || 'search';   
				if(dopost=='search'){ 
					STA.Variable.tab_startTime = $(this).parent().find('#d_startTime').val()||0;
					STA.Variable.tab_endTime =  $(this).parent().find('#d_endTime').val()||0; 
					$(this).parent().find('button').removeClass('current'); 
				}
				STA.Variable.tab_dopost = dopost;
				$url = $(this).parent().parent().parent().attr('data-url');
				$chart_ids = $(this).parent().parent().parent().attr('data-chart-ids');
				$company 	 =  $(this).parent().find('.company').val()||0; 
				$company_uid = $(this).parent().find('.company_user').val()||0;
				$company_brand_id = $(this).parent().find('.company_brand').val()||0;
				$company_store_id = $(this).parent().find('.company_store').val()||0;
				$c_dtype 	 =  $(this).parent().find('.c_dtype').val()||0; 
				$dtype = 0;
				if($(this).attr('id')=="company"){
					$company_uid  = 0;
					$('#'+$chart_ids).parent().parent().find('#company_brand option:eq(0)').attr('selected',true);
					$company_brand_id  = 0;
					$('#'+$chart_ids).parent().parent().find('#company_store option:eq(0)').attr('selected',true);
					$company_store_id  = 0;
					$dtype = 1;
				}
				  
				if($('#'+$chart_ids).attr('data-type')=='company_user'){  
					get_company_user_option($company, $chart_ids, $company_uid, $dtype);
				} 
				
				if($('#'+$chart_ids).attr('data-type')=='company_brand'){ 
					if($('#'+$chart_ids).attr('data-brand-user')=='company_user'){
						if($(this).attr('id')=="company_brand"){
							$company_uid = 0;
						}
						get_company_user_option($company, $chart_ids, $company_uid, 1);
					}
					get_company_brand_option($company, $chart_ids, $company_brand_id, $dtype); 
				}
				 
				if($('#'+$chart_ids).attr('data-type')=='company_store'){  
					if($('#'+$chart_ids).attr('data-store-user')=='company_user'){ 
						if($(this).attr('id')=="company_store"){
							$company_uid = 0;
						}  
						get_company_user_option($company, $chart_ids, $company_uid, 1);
					}
					get_company_store_option($company, $chart_ids, $company_store_id, $dtype); 
				}
				
				 
				 
				STA.Variable.tab_url = $url;
				STA.Variable.path = STA.Variable.tab_url + "&c_dtype="+$c_dtype+"&company_id="+$company+"&company_uid="+$company_uid+"&brand_id="+$company_brand_id+"&store_id="+$company_store_id+"&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime; 
				//alert(STA.Variable.path); 
				STA.Variable.tab_refresh_urls[STA.Variable.tab_id]=STA.Variable.path;   
				if(typeof self.hdl=='function'){
					self.hdl($chart_ids);
				}
				//eval(self.hdl + '()');
			})
			
			
			
			$('.'+ self.container_btn).find('a').bind('click', function() { 
				var dopost = $(this).attr('data-dopost'); 
				var id = $(this).parent().attr('id').match(/tab_(\d{1,2})/i)[1];  
				STA.Variable.tab_id = id; 
				STA.Variable.tab_url = self.cgi[id]; 
				if(dopost=='search') return; 
				STA.Variable.tab_dopost = dopost;
				STA.Variable.path = STA.Variable.tab_url + "&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime; 
				STA.Variable.tab_refresh_urls[STA.Variable.tab_id]=STA.Variable.path;
				$(this).addClass('reqActive').siblings().removeClass('reqActive'); 
				if(typeof self.hdl=='function'){
					self.hdl();
				}
				//eval(self.hdl + '()'); 
			});
			$("."+self.container_date).bind("click",function(){ 
				var dopost = $(this).attr('data-dopost');
				var id = $(this).parent().attr('id').match(/tab_(\d{1,2})/i)[1];  
				STA.Variable.tab_id = id; 
				STA.Variable.tab_url = self.cgi[id];
				STA.Variable.tab_startTime = $(this).parent().find('.d_startTime').val()||0;
				STA.Variable.tab_endTime = $(this).parent().find('.d_endTime').val()||0; 
				if(STA.Variable.tab_startTime && STA.Variable.tab_endTime) 
				STA.Variable.tab_dopost = dopost;
				STA.Variable.path = STA.Variable.tab_url + "&dopost="+STA.Variable.tab_dopost + "&startTime="+STA.Variable.tab_startTime+'&endTime='+STA.Variable.tab_endTime;  
				STA.Variable.tab_refresh_urls[STA.Variable.tab_id]=STA.Variable.path;
				 
				
                $("#"+ self.container_btn).find('button').removeClass('current');  
				if(typeof self.hdl=='function'){
					self.hdl();
				}
				//eval(self.hdl + '()');
			})
		} 
	} 
} 

function get_company_user_option(company_id, container_id, company_uid, dtype){ 
 
	if(company_uid || dtype!='1') return;
	$ob_parent = $('#'+container_id).parent().parent();
	$ob_company = $ob_parent.find('#company');
	//$company_option = $ob_company.html(); 
	$ob_company_user = $ob_parent.find('#company_user');
	$company_user_option = $ob_company_user.html(); 
	  
	if($company_user_option || $company_user_option==""){
	 
	}else{
		$user_option = "<br><br>会　员： <select id='company_user' class='button company_user'></select>"; 
		$ob_company.after($user_option); 
	}
 	 
	$data_url = $('#'+container_id).attr('data-api');
	if($('#'+container_id).attr('data-brand-user')=='company_user'){
		$data_url = $('#'+container_id).attr('data-api-user');
		$brand_id = $ob_parent.find('#company_brand').val() || 0;
		$data_url = $data_url+'&brand_id='+$brand_id;
	}
	
	if($('#'+container_id).attr('data-store-user')=='company_user'){
		$data_url = $('#'+container_id).attr('data-api-user');
		$store_id = $ob_parent.find('#company_store').val() || 0;
		$data_url = $data_url+'&store_id='+$store_id; 
	}
 	  
	$html =  "<option value='0'>所有</option>";
	var url = $data_url+"&company_id="+company_id;    
	  $.post(url,null,function(data) {  
		  $html += data;  
		  $ob_parent.find('#company_user').html($html);
		  return true;
	  }).error(function(){
		  //$ob_parent.find('#company_user').parent().remove();
		  alert('异常错误，请检查网络。');
		  return false;
	  }); 
}

function get_company_brand_option(company_id, container_id, company_brand_id, dtype){
	if(company_brand_id || dtype!='1') return;
	$ob_parent = $('#'+container_id).parent().parent();
	$ob_company = $ob_parent.find('#company');
	//$company_option = $ob_company.html(); 
	$ob_company_brand = $ob_parent.find('#company_brand');
	$company_brand_option = $ob_company_brand.html(); 
	  
	if($company_brand_option || $company_brand_option==""){
	 
	}else{
		$brand_option = "<br><br>品　牌： <select id='company_brand' class='button company_brand'></select>"; 
		$ob_company.after($brand_option); 
	}
	 
	$data_url = $('#'+container_id).attr('data-api'); 
	$brand_html =  "<option value='0'>所有</option>";
	var url = $data_url+"&company_id="+company_id; 
	  $.post(url,null,function(data) {  
		  $brand_html += data;  
		  $ob_parent.find('#company_brand').html($brand_html);
		  return true;
	  }).error(function(){
		  //$ob_parent.find('#company_user').parent().remove();
		  alert('异常错误，请检查网络。');
		  return false;
	  }); 
}


function get_company_store_option(company_id, container_id, company_store_id, dtype){
	if(company_store_id || dtype!='1') return;
	$ob_parent = $('#'+container_id).parent().parent();
	$ob_company = $ob_parent.find('#company');
	//$company_option = $ob_company.html(); 
	$ob_company_store = $ob_parent.find('#company_store');
	$company_store_option = $ob_company_store.html(); 
	  
	if($company_store_option || $company_store_option==""){
	 
	}else{
		$store_option = "<br><br>门　店： <select id='company_store' class='button company_store'></select>"; 
		$ob_company.after($store_option); 
	}
	 
	$data_url = $('#'+container_id).attr('data-api'); 
	$store_html =  "<option value='0'>所有</option>";
	var url = $data_url+"&company_id="+company_id; 
	  $.post(url,null,function(data) {  
		  $store_html += data;  
		  $ob_parent.find('#company_store').html($store_html);
		  return true;
	  }).error(function(){
		  //$ob_parent.find('#company_user').parent().remove();
		  alert('异常错误，请检查网络。');
		  return false;
	  }); 
}
 