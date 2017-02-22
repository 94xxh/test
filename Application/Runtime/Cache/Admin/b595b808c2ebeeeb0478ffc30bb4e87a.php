<?php if (!defined('THINK_PATH')) exit();?><!--头部HTML模板-->
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <title>网页标题</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
  	 	<!-- Bootstrap core CSS -->
        <link href="/Public/Admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                
        <!-- Font Awesome -->
        <link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- ionicons -->
        <link href="/Public/Admin/css/ionicons.min.css" rel="stylesheet">
        
        <!-- Morris -->
        <link href="/Public/Admin/css/morris.css" rel="stylesheet"/>	
        
        <!-- Datepicker -->
        <link href="/Public/Admin/css/datepicker.css" rel="stylesheet"/>	
        
        <!-- Animate -->
        <link href="/Public/Admin/css/animate.min.css" rel="stylesheet">
        
        <!-- Owl Carousel -->
        <link href="/Public/Admin/css/owl.carousel.min.css" rel="stylesheet">
        <link href="/Public/Admin/css/owl.theme.default.min.css" rel="stylesheet">
        
        <!-- Simplify -->
        <link href="/Public/Admin/css/simplify.min.css" rel="stylesheet">
        
        <link href="/Public/Admin/edialog/edialog.css" rel="stylesheet">
        <link href="/Public/Admin/edialog/_edialog.css" rel="stylesheet">
        
        <style>*{ font-family:'微软雅黑'}</style>
        
        
        <!-- Le javascript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
		
		<!-- Jquery -->
		<script src="/Public/Admin/js/jquery-1.11.1.min.js"></script>
		
		<!-- Bootstrap -->
	    <script src="/Public/Admin/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll -->
		<script src='/Public/Admin/js/jquery.slimscroll.min.js'></script>
		
		<!-- Popup Overlay -->
		<script src='/Public/Admin/js/jquery.popupoverlay.min.js'></script>

		<!-- Modernizr -->
		<script src='/Public/Admin/js/modernizr.min.js'></script>
		
		<!-- Simplify -->
		<script src="/Public/Admin/js/simplify/simplify.js"></script>
        
       
		<script src="/Public/Admin/edialog/edialog.js"></script>
        <script src="/Public/Admin/edialog/_edialog.js"></script>
        <script src="/Public/Admin/edialog/checkform.js"></script>
</head>
<body class="overflow-hidden">
<div class="wrapper preload"> 
<!--end-->
  
<!--头部菜单-->
<header class="top-nav">
    <div class="top-nav-inner">
        <div class="nav-header">
            <button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleSM">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <ul class="nav-notification pull-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-lg"></i></a>
                    <span class="badge badge-danger bounceIn">1</span>
                    <ul class="dropdown-menu dropdown-sm pull-right user-dropdown">
                        <li class="user-avatar">
                            <img src="/Uploads/test/1.jpg" alt="" class="img-circle">
                            <div class="user-content">
                                <h5 class="no-m-bottom">username</h5>
                                <div class="m-top-xs">
                                    <a href="profile.html" class="m-right-sm">个人资料</a>
                                    <a href="<?php echo u('Login/login');?>">退出登录</a>
                                </div>
                            </div>
                        </li>               
                    </ul>
                </li>
            </ul>
            
            <a href="<?php echo U('Index/index');?>" class="brand">
                <i class="fa fa-bookmark-o"></i><span class="brand-name">后台管理系统</span>
            </a>
        </div>
        <div class="nav-container">
            <button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleLG">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav-notification">   
                <li class="search-list">
                    <div class="search-input-wrapper">
                        <div class="search-input">
                            <input type="text" class="form-control input-sm inline-block">
                            <a href="#" class="input-icon text-normal"><i class="ion-ios7-search-strong"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="pull-right m-right-sm">
                <div class="user-block hidden-xs">
                    <a href="#" id="userToggle" data-toggle="dropdown">
                        <img src="/Uploads/test/1.jpg" alt="" class="img-circle inline-block user-profile-pic">
                        <div class="user-detail inline-block">
                            username
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="panel border dropdown-menu user-panel">
                        <div class="panel-body paddingTB-sm">
                            <ul>
                                <li>
                                    <a href="<?php echo U('User/profile');?>">
                                        <i class="fa fa-edit fa-lg"></i><span class="m-left-xs">个人资料</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo u('Login/login');?>">
                                        <i class="fa fa-power-off fa-lg"></i><span class="m-left-xs">退出登录</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ./top-nav-inner -->  
</header> 
<!--end--> 

<!--左边菜单栏-->
            <aside class="sidebar-menu fixed">
                <div class="sidebar-inner scrollable-sidebar">
                    <div class="main-menu">
                        <ul class="accordion">
                            <li class="menu-header">
                                Main Menu
                            </li>
                            <!-- active open 两属性为 当前选中菜单及菜单展开状态 -->
                            <li class="bg-palette1 active ">
                                <a href="<?php echo U('Index/index');?>">
                                    <span class="menu-content block">
                                        <span class="menu-icon"><i class="block fa fa-home fa-lg"></i></span>
                                        <span class="text m-left-sm">首页</span>
                                    </span>
                                    <span class="menu-content-hover block">
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li class="openable bg-palette4">
                                <a href="#">
                                    <span class="menu-content block">
                                        <span class="menu-icon"><i class="block fa fa-user fa-lg"></i></span>
                                        <span class="text m-left-sm">会员中心</span>
                                        <span class="submenu-icon"></span>
                                    </span>
                                    <span class="menu-content-hover block">
                                        会员中心
                                    </span>
                                </a>
                                <ul class="submenu bg-palette4 ">
                                    <li><a href="<?php echo U('User/index');?>"><span class="submenu-label">会员管理</span></a></li>
                                    <li><a href="<?php echo U('User/comment');?>"><span class="submenu-label">评论列表</span></a></li>
                                    <li><a href=""><span class="submenu-label">备用</span></a></li>
                                </ul>
                            </li>
                            <li class="openable bg-palette3">
                                <a href="#">
                                    <span class="menu-content block">
                                        <span class="menu-icon"><i class="block fa fa-bar-chart-o fa-lg"></i></span>
                                        <span class="text m-left-sm">统计管理</span>
                                        <span class="submenu-icon"></span>
                                    </span>
                                    <span class="menu-content-hover block">
                                        统计管理
                                    </span>
                                </a>
                                <ul class="submenu">
                                    <li><a href=""><span class="submenu-label">示例</span></a></li>
                                </ul>
                            </li>
                            <li class="openable bg-palette4">
                                <a href="#">
                                    <span class="menu-content block">
                                        <span class="menu-icon"><i class="block fa fa-bullhorn fa-lg"></i></span>
                                        <span class="text m-left-sm">新闻发布中心</span>
                                        <span class="submenu-icon"></span>
                                    </span>
                                    <span class="menu-content-hover block">
                                        News
                                    </span>
                                </a>
                                <ul class="submenu">
                                    <li><a href=""><span class="submenu-label">新闻列表</span></a></li>
                                    <li><a href=""><span class="submenu-label">发布新闻通知</span></a></li>
                                </ul>
                            </li>
                            <li class="openable bg-palette3">
                                <a href="#">
                                    <span class="menu-content block">
                                        <span class="menu-icon"><i class="block fa fa-bar-chart-o fa-lg"></i></span>
                                        <span class="text m-left-sm">管理员管理</span>
                                        <span class="submenu-icon"></span>
                                    </span>
                                    <span class="menu-content-hover block">
                                        管理员管理
                                    </span>
                                </a>
                                <ul class="submenu">
                                    <li><a href=""><span class="submenu-label">管理员列表</span></a></li>
                                    <li><a href=""><span class="submenu-label">权限管理</span></a></li>
                                    <li><a href=""><span class="submenu-label">角色管理</span></a></li> 
                                </ul>
                            </li>
                            <li class="openable bg-palette4">
                                <a href="#">
                                    <span class="menu-content block">
                                        <span class="menu-icon"><i class="block fa fa-book fa-lg"></i></span>
                                        <span class="text m-left-sm">帮助中心</span>
                                        <span class="submenu-icon"></span>
                                    </span>
                                    <span class="menu-content-hover block">
                                        帮助中心
                                    </span>
                                </a>
                                <ul class="submenu">
                                    <li class="openable">
                                        <a href="signin.html">
                                            <span class="submenu-label">menu 2.1</span>
                                        </a>
                                        <ul class="submenu third-level">
                                            <li><a href="#"><span class="submenu-label">menu 3.1</span></a></li>
                                            <li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
                                            <li class="openable">
                                                <a href="#">
                                                    <span class="submenu-label">menu 3.3</span>
                                                    <small class="badge badge-danger badge-square bounceIn animation-delay2 m-left-xs pull-right">2</small>
                                                </a>
                                                <ul class="submenu fourth-level">
                                                    <li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
                                                    <li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><span class="submenu-label">menu 2.2</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>  
                </div><!-- sidebar-inner -->
            </aside> 
<!--end--> 
			
<!--内容体-->
            <div class="main-container">
                <div class="padding-md">
                    <ul class="breadcrumb">
                        <li><span class="primary-font"><i class="icon-home"></i></span><a href="<?php echo U('Index/index');?>"> 首页</a></li>
  <!--               面包屑导航栏        
                        <li>二级</li>    
                        <li>三级</li>       -->
                    </ul>
        <div class="row" id="weather">
            <div class="col-lg-12 padding-md"> 
                <button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i> 天气预报 Loading</button> 
            </div> 
        </div>                    
        <div class="row">
            <div class="col-lg-6">
                <div class="user-widget user-widget2">
                    <div class="user-widget-body bg-success">
                        <img src="/Uploads/test/1.jpg" >
                        <div class="user-detail">
                            <div class="m-top-sm ">账号</div>
                            <div class="small-text text-white">用户真实姓名</div>
                        </div>
                    </div>
                    <div class="list-group">
                        <a class="list-group-item">
                            <i class="fa fa-phone fa-lt grey"></i>
                            <span class="m-left-xs">18888888888</span> 
                            <span class="badge badge-warning"></span>
                        </a>
                        <a class="list-group-item">
                            <i class="fa fa-envelope fa-lg grey"></i>
                            <span class="m-left-xs">18888888888@zkungfu.com</span>
                            <span class="badge badge-warning"></span> 
                        </a>
                        <a class="list-group-item">
                            <i class="fa fa-clock-o fa-lg grey"></i>
                            <span class="m-left-xs">最近登陆时间</span> 
                            <span class="badge badge-warning"></span>
                        </a>
                        <a class="list-group-item">
                            <i class="fa fa-lg grey">IP</i>
                            <span class="m-left-xs">172.16.171.140</span> 
                            <span class="badge badge-warning"></span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="panel panel-default calendar-widget">
                    <div class="padding-md bg-info clearfix">
                        <div class="date-big"><?php echo date("d");?></div>
                        <div class="current-date">
                            <?php $weekarray=array("星期日","星期一","星期二","星期三","星期四","星期五","星期六"); ;?>
                            <div class="text-upper"><?php echo ($weekarray[date("w")]); ?></div>
                            <small class="text-muted block"><?php echo date("m");?>/<?php echo date("Y");?></small>
                        </div>
                    </div>
                    <div class="panel-body no-padding bg-white">
                        <p id="calendar" class="custom-calendar" style="width:100%"></p>
                    </div>
                </div>
            </div>
        </div>
                </div><!-- /.padding-md -->
            </div><!-- /main-container -->
             
<!-- Datepicker -->
<script src='/Public/Admin/js/uncompressed/datepicker.js'></script>
<script>

$(function(){
    var url = "<?php echo U('index/index',array('method'=>'ajax_weather'));?>";
    //$('#weather').load(url,{},function(data){ });
    $.ajax({
        type:'get',
        url:url,
        dataType:'html',
        timeout:5000,   //超过5秒 作为超时加载处理，避免长时间等待
        success:function(data){
            $('#weather').html(data);
        },
        error:function(){
            dg_alert("天气加载超时", "确定");
        }
    })
    //$.get(url,null,function(data){$('#weather').html(data)})
})

//Datepicker
$('#calendar').DatePicker({
    flat: true,
    date: '<?php echo date("Y-m-d H:i:s");?>',
    current: '<?php echo date("Y-m-d H:i:s");?>',
    calendars: 1,
    starts: 2
});
</script>            
<!--底部-->
<footer class="footer" style="text-align:center">
    <span class="footer-brand">
        <!--<strong class="text-danger">kungfudingcan</strong> Admin-->
    </span>
    <p class="no-margin">
        &copy; 2016 <strong>zkungfu</strong>. ALL Rights Reserved. 
    </p>	
</footer>



<!-- Delete Widget Confirmation -->
<div class="custom-popup delete-widget-popup delete-confirmation-popup" id="deleteWidgetConfirm" style="display:none">
    <div class="popup-header text-center">
        <!--<span class="fa-stack fa-4x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
        </span>-->
        温馨提示
    </div>
    <div class="popup-body text-center">
        <h5>您确定要这样做吗?</h5>
        <strong class="block m-top-xs"><i class="fa fa-exclamation-circle m-right-xs text-danger"></i>这个动作将无法恢复</strong> 
        <div class="text-center m-top-lg">
            <a class="btn btn-success m-right-sm remove-alert-btn"> 确　定 </a>
            <a class="btn btn-default deleteWidgetConfirm_close"> 取　消 </a>
        </div>
    </div>
</div>

<?php echo ($error_alert); ?>

<script>
	$(function()	{
		//Delete Widget Confirmation
		$('#deleteWidgetConfirm').popup({
			vertical: 'top',
			pagecontainer: '.container',
			transition: 'all 0.3s'
		});
		
		$('.remove-alert, .show-alert').click(function()	{  
			$activeRemove = $(this); 
			if($activeRemove.attr('data-type')=='1'){
				$('.m-top-xs').hide();
			}else{
				$('.m-top-xs').show();
			}
			$('#deleteWidgetConfirm').popup('show'); 
			return false;
	
		});
		
		$('.remove-alert-btn').unbind().click(function(){ 
			$alert_href = $activeRemove.attr('data-href'); 
			$('#deleteWidgetConfirm').popup('hide'); 
			//location.href=$alert_href;
			LoadJS('ajax_fun', '/Public/Admin/edialog/ajax_fun.js', function(){  
				var url = $alert_href;   
				var datas = {'f':'json','ftype':'1'};  
				ajax_fun(url,'get',datas,function(obj,data){ window.top.__dg.cancel(); location.href=obj.url; },true,true); 
			});
			return false;
		});
		
		$('.ajax_sort_num').blur(function(){
			LoadJS('ajax_fun', '/Public/Admin/edialog/ajax_fun.js', function(th){  
				var url = $(th).attr('data-url');  
				var id = $(th).attr('data-id'); 
				var old_sort_num = $(th).attr('data-sort-num');
				var sort_num = $(th).val(); 
				if(old_sort_num == sort_num) return ;
				var datas = {sort_num:sort_num, id:id, 'f':'json','ftype':'1'};   
				ajax_fun(url,'get',datas,function(obj,data){
					window.top.__dg.cancel();
					$(th).val(sort_num);
					var lhref = location.href;
					var href = lhref.replace(/&id=[\w]*/g, "")+'&id='+id; 
					location.replace(href);
				},true,true);  
			}, $(this)); 
		})
		
	}); 
	
	function return_sort_num_back(obj, data){ 
		location.href=obj.url;
	}
	
	
	function LoadJS( id, fileUrl ,fn , th) 

	{  
		var scriptTag = document.getElementById( id );  
		var oHead = document.getElementsByTagName('HEAD').item(0);  
		var oScript= document.createElement("script");   
		if ( scriptTag  ) {
			//oHead.removeChild( scriptTag  ); 
			if(typeof fn =="function"){  
				fn(th);
			}
			return;
		}
		oScript.id = id;  
		oScript.type = "text/javascript";  
		oScript.src=fileUrl ;  
		oHead.appendChild( oScript); 
		oScript.onload = function(){ 
			if(typeof fn =="function"){  
				fn(th);
			}
		} 
	} 
	 
</script>

</div><!-- /wrapper -->   
</body>
</html>
<!--end-->