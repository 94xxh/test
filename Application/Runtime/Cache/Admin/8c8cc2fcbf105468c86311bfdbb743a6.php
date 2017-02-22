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
        <script type="text/javascript">
        	$(function(){
        		if($('.submenu').css("display")=='block' ){
        			alert(1);
        			$(this).parent('li').addClass('open')
        		}
        	})
        </script>
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
<!--消息通知拓展功能              <ul class="nav-notification">
                    <li>
                        <a href="#" data-toggle="dropdown"><i class="fa fa-envelope fa-lg"></i></a>
                        <span class="badge badge-purple bounceIn animation-delay5 active">2</span>
                        <ul class="dropdown-menu message pull-right">
                            <li><a>你有4条未读短信消息</a></li>                    
                            <li>
                                <a class="clearfix" href="#">
                                    <img src="images/profile/profile2.jpg" alt="User Avatar">
                                    <div class="detail">
                                        <strong>username</strong>
                                        <p class="no-margin">
                                            Lorem ipsum dolor sit amet...
                                        </p>
                                        <small class="text-muted"><i class="fa fa-check text-success"></i> 27m ago</small>
                                    </div>
                                </a>    
                            </li>
                            <li>
                                <a class="clearfix" href="#">
                                    <img src="images/profile/profile3.jpg" alt="User Avatar">
                                    <div class="detail">
                                        <strong>Jane Doe</strong>
                                        <p class="no-margin">
                                            Lorem ipsum dolor sit amet...
                                        </p>
                                        <small class="text-muted"><i class="fa fa-check text-success"></i> 5hr ago</small>
                                    </div>
                                </a>    
                            </li>
                            <li>
                                <a class="clearfix" href="#">
                                    <img src="images/profile/profile4.jpg" alt="User Avatar">
                                    <div class="detail m-left-sm">
                                        <strong>Bill Doe</strong>
                                        <p class="no-margin">
                                            Lorem ipsum dolor sit amet...
                                        </p>
                                        <small class="text-muted"><i class="fa fa-reply"></i> Yesterday</small>
                                    </div>
                                </a>    
                            </li>
                            <li>
                                <a class="clearfix" href="#">
                                    <img src="images/profile/profile5.jpg" alt="User Avatar">
                                    <div class="detail">
                                        <strong>Baby Doe</strong>
                                        <p class="no-margin">
                                            Lorem ipsum dolor sit amet...
                                        </p>
                                        <small class="text-muted"><i class="fa fa-reply"></i> 9 Feb 2013</small>
                                    </div>
                                </a>    
                            </li>
                            <li><a href="#">View all messages</a></li>                    
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown"><i class="fa fa-bell fa-lg"></i></a>
                        <span class="badge badge-info bounceIn animation-delay6 active">4</span>
                        <ul class="dropdown-menu notification dropdown-3 pull-right">
                            <li><a href="#">You have 5 new notifications</a></li>                     
                            <li>
                                <a href="#">
                                    <span class="notification-icon bg-warning">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                    <span class="m-left-xs">Server #2 not responding.</span>
                                    <span class="time text-muted">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-icon bg-success">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    <span class="m-left-xs">New user registration.</span>
                                    <span class="time text-muted">2m ago</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-icon bg-danger">
                                        <i class="fa fa-bolt"></i>
                                    </span>
                                    <span class="m-left-xs">Application error.</span>
                                    <span class="time text-muted">5m ago</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-icon bg-success">
                                        <i class="fa fa-usd"></i>
                                    </span>
                                    <span class="m-left-xs">2 items sold.</span>
                                    <span class="time text-muted">1hr ago</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-icon bg-success">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    <span class="m-left-xs">New user registration.</span>
                                    <span class="time text-muted">1hr ago</span>
                                </a>
                            </li>
                            <li><a href="#">View all notifications</a></li>                   
                        </ul>
                    </li>
                    <li class="chat-notification">
                        <a href="#" class="sidebarRight-toggle"><i class="fa fa-comments fa-lg"></i></a>
                        <span class="badge badge-danger bounceIn">1</span>

                        <div class="chat-alert">
                            Hello, Are you there?
                        </div>
                    </li>
                </ul> -->
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
			
		<div class="main-container">
			<div class="padding-md">
				<ul class="breadcrumb">
					<li><span class="primary-font"><i class="icon-home"></i></span><a href="<?php echo U('Index/index');?>"> 首页</a></li>
					<li>会员中心</li>
				</ul>

        <div class="smart-widget">
            <div class="smart-widget-header">
                评论列表
                <span class="smart-widget-option">
                     
                    <a href="#" class="widget-collapse-option" data-toggle="collapse">
                        <i class="fa fa-chevron-up"></i>
                    </a>   
                    
                </span>
            </div>
            <div class="smart-widget-inner"> 
            <div class="smart-widget-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th> 
                                <th>商品封面图</th>
                                <th>商品名称</th>
                                <!-- <th>用户头像</th>-->
                                <th>评论人</th>
                                <th>评论IP</th>  
                                <th>评论时间</th>
                                <th>状态</th>  
                                <th>评论内容</th>  
                                <th width="170px">操作</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>1</td> 
                                <td><img src="/Uploads/test/1.jpg" style="max-height:60px"/></if></td>
                                <td>小鸡炖蘑菇</td>
                                <!-- <td><?php if($u_info["headimgurl"] != ''): ?><img src="<?php echo ($u_info["headimgurl"]); ?>" style="max-height:60px"/><?php endif; ?></td>-->
                                <td>张三</td> 
                                <td>ip地址</td> 
                                <td>2017-1-1</td>
                                <td>未审核</td>   
                                    <td><button class="btn btn-default" data-container="html" data-toggle="popover" data-placement="left" title="" data-original-title="查看评论详情" data-content='此处填入获取的内容' >查看评论内容</button></td>
                                <td> 
                                <a data-href="" data-type='1' class="show-alert btn btn-default btn-sm">通过审核</a> 
                                <a href="#" data-href="" class="remove-alert btn btn-danger btn-sm">删除</a> 
                                </td> 
                            </tr>
                        </tbody>
                    </table>
                     
                </div>    
            </div><!-- ./smart-widget-inner -->  
        </div> <!-- ./smart-widget -->
       
        <!--数据分页 放在这里-->

        <!--end--> 
        
    </div><!-- ./smart-widget -->
    
</div><!-- /padding-md --> 
<!--内容体end-->
            
            
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