<?php if (!defined('THINK_PATH')) exit();?><!--头部HTML模板-->
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <title>网页标题</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
  	 
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
				</ul>

					<h3 class="header-text m-bottom-md">
						个人资料
					</h3>

					<div class="row user-profile-wrapper">
						<div class="col-md-3 user-profile-sidebar m-bottom-md">
							<div class="row">
								<div class="col-sm-4 col-md-12">
									<div class="user-profile-pic">
										<img src="/Uploads/test/1.jpg" alt="">
										<div class="ribbon-wrapper">
											<div class="ribbon-inner shadow-pulse bg-success">
												It's Me
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-12">
									<div class="user-name m-top-sm">Jane Doe<i class="fa fa-circle text-success m-left-xs font-14"></i></div>

									<div class="m-top-sm">
										<div>
											<i class="fa fa-map-marker user-profile-icon"></i>
											广东广州
										</div>

										<div class="m-top-xs">
											<i class="fa fa-anchor user-profile-icon"></i>
											某某部门经理
										</div>
									</div>

									<h4 class="m-top-md m-bottom-sm">简介</h4>
									<p class="m-top-sm">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.
									<p>

									<h4 class="m-top-md m-bottom-sm">联系方式</h4>	

									<a class="social-link facebook-hover"><i class="fa fa-phone"></i></a>
									<a class="social-link facebook-hover"><i class="fa fa-facebook"></i></a>
									<a class="social-link twitter-hover"><i class="fa fa-twitter"></i></a>
									<a class="social-link pinterest-hover"><i class="fa fa-pinterest"></i></a>

								</div>
							</div><!-- ./row -->
						</div><!-- ./col -->
						<div class="col-md-9">
							<div class="smart-widget">
								<div class="smart-widget-inner">
									<ul class="nav nav-tabs tab-style2 tab-right bg-grey">		
								  		<li>
								  			<a href="#profileTab1" data-toggle="tab">
								  				<span class="icon-wrapper"><i class="fa fa-bars"></i></span>
								  				<span class="text-wrapper">操作预览</span>
								  			</a>
								  		</li>								  		
								  		<li class="active">
								  			<a href="#profileTab2" data-toggle="tab">
								  				<span class="icon-wrapper"><i class="fa fa-book"></i></span>
								  				<span class="text-wrapper">账户信息</span>
								  			</a>
								  		</li>
									</ul>
									<div class="smart-widget-body">
										<div class="tab-content">
											<div class="tab-pane fade" id="profileTab1">
												<h4 class="header-text m-bottom-md">
													操作记录
													<span class="sub-header">
														该账号近期进行的操作
													</span>
												</h4>
												<div class="row">
													<div class="col-lg-8">
														<h4 class="m-top-md">最新记录</h4>

														<div class="recent-activity-list">
															<ul>
																<li>
																	<div class="activity-user-profile">
																		<img src="/Uploads/test/1.jpg" alt="">
																	</div>
																	<div class="activity-detail">
																		<span class="font-semi-bold">Karen Martin</span> started following <span class="font-semi-bold">Jame Smith</span>.
																		<small class="text-muted block">36 mins ago</small> 
																	</div>
																</li>
																<li>
																	<div class="activity-user-profile">
																		<img src="/Uploads/test/1.jpg" alt="">
																	</div>
																	<div class="activity-detail">
																		<span class="font-semi-bold">Karen Martin</span> just added <span class="font-semi-bold">Simplify Admin</span> to dashboard.
																		<small class="text-muted block">3 hrs ago </small> 
																	</div>
																</li>
																<li>
																	<div class="activity-user-profile">
																		<img src="/Uploads/test/1.jpg" alt="">
																	</div>
																	<div class="activity-detail">
																		<span class="font-semi-bold">Elizabeth Carter</span> uploaded <a class="font-semi-bold">3 photos</a>.
																		<small class="text-muted block">36 mins ago</small> 

																		<ul class="uploaded-photo-list m-top-sm clearfix">
																			<li><a href="#"><img src="/Uploads/test/1.jpg" alt=""></a></li>
																			<li><a href="#"><img src="/Uploads/test/1.jpg" alt=""></a></li>
																			<li><a href="#"><img src="/Uploads/test/1.jpg" alt=""></a></li>
																		</ul><!-- ./upload-photo-list -->
																	</div>
																</li>
															</ul>
														</div><!-- ./.recent-activity-list -->
													</div><!-- ./col -->
												</div><!-- ./row -->
											</div><!-- ./tab-pane -->
											<div class="tab-pane fade in active" id="profileTab2">
												<h4 class="header-text m-top-md">个人信息</h4>
												<form class="form-horizontal m-top-md">
													<div class="form-group">
													    <label class="col-sm-3 control-label">Name</label>
													    <div class="col-sm-9">
													      	<input type="text" class="form-control" value="Jane Doe">
													    </div>
													</div>
													<div class="form-group">
													    <label class="col-sm-3 control-label">Surname</label>
													    <div class="col-sm-9">
													      	<input type="text" class="form-control">
													    </div>
													</div>
													<div class="form-group">
													    <label class="col-sm-3 control-label">Gender</label>
													    <div class="col-sm-9">
													      	<div class="radio inline-block">
																<div class="custom-radio m-right-xs">
																	<input type="radio" id="inlineRadio1" name="profileGender">
																	<label for="inlineRadio1"></label>
																</div>
																<div class="inline-block vertical-top">Male</div>
															</div>
															<div class="radio inline-block m-left-sm">
																<div class="custom-radio m-right-xs">
																	<input type="radio" id="inlineRadio2" name="profileGender">
																	<label for="inlineRadio2"></label>
																</div>
																<div class="inline-block vertical-top">Female</div>
															</div>
													    </div>
													</div>

													<div class="form-group">
													    <label class="col-sm-3 control-label">Address</label>
													    <div class="col-sm-9">
													      	<textarea rows="4" class="form-control"></textarea>
													    </div>
													</div>

													<div class="form-group">
													    <label class="col-sm-3 control-label">Phone</label>
													    <div class="col-sm-9">
													      	<input type="text" class="form-control" value="">
													    </div>
													</div>

													<div class="form-group">
													    <label class="col-sm-3 control-label">Website</label>
													    <div class="col-sm-9">
													      	<input type="text" class="form-control" value="">
													    </div>
													</div>
													<div class="form-group m-top-lg">
													    <label class="col-sm-3 control-label"></label>
													    <div class="col-sm-9">
													      	<a class="btn btn-default">Submit</a>
													      	<a class="btn btn-info m-left-xs">Cancel</a>
													    </div>
													</div>								
												</form>
											</div><!-- ./tab-pane -->
											<div class="tab-pane fade" id="profileTab3">
												<div class="profile-follower-list clearfix">
													<ul>
														<li>
															<div class="panel panel-default clearfix">
																<div class="panel-body">
																	<div class="user-wrapper">
																		<div class="user-avatar">
																			<img class="small-img img-circle img-thumbnail" src="images/profile/profile2.jpg" alt="">
																		</div>
																		<div class="user-detail small-img">
																			<div class="font-16">Karen Martin</div>
																			<small class="block text-muted font-12">Web Designer</small>
																			<small>
																				<small class="freelancer-rating">
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																				</small>
																			</small>

																			<div class="m-top-sm">
																				<button type="button" class="btn btn-default btn-sm marginTB-xs" disabled="" data-toggle="modal">following</button>
																				<button type="button" class="btn btn-success btn-sm marginTB-xs" data-toggle="modal">View Profile</button>
																			</div>
																		</div>
																	</div><!-- ./user-wrapper -->
																</div>
															</div>
														</li>

														<li>
															<div class="panel panel-default clearfix">
																<div class="panel-body">
																	<div class="user-wrapper">
																		<div class="user-avatar">
																			<img class="small-img img-circle img-thumbnail" src="images/profile/profile3.jpg" alt="">
																		</div>
																		<div class="user-detail small-img">
																			<div class="font-16">Sarah Garcia</div>
																			<small class="block text-muted font-12">Content Writing</small>
																			<small>
																				<small class="freelancer-rating">
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																				</small>
																			</small>

																			<div class="m-top-sm">
																				<button type="button" class="btn btn-default btn-sm marginTB-xs" disabled="" data-toggle="modal">following</button>
																				<button type="button" class="btn btn-success btn-sm marginTB-xs" data-toggle="modal">View Profile</button>
																			</div>
																		</div>
																	</div><!-- ./user-wrapper -->
																</div>
															</div>
														</li>

														<li>
															<div class="panel panel-default clearfix">
																<div class="panel-body">
																	<div class="user-wrapper">
																		<div class="user-avatar">
																			<img class="small-img img-circle img-thumbnail" src="images/profile/profile4.jpg" alt="">
																		</div>
																		<div class="user-detail small-img">
																			<div class="font-16">Jame Smith</div>
																			<small class="block text-muted font-12">Programmer</small>
																			<small>
																				<small class="freelancer-rating">
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																				</small>
																			</small>

																			<div class="m-top-sm">
																				<button type="button" class="btn btn-primary btn-sm marginTB-xs" data-toggle="modal">follow</button>
																				<button type="button" class="btn btn-success btn-sm marginTB-xs" data-toggle="modal">View Profile</button>
																			</div>
																		</div>
																	</div><!-- ./user-wrapper -->
																</div>
															</div>
														</li>

														<li>
															<div class="panel panel-default clearfix">
																<div class="panel-body">
																	<div class="user-wrapper">
																		<div class="user-avatar">
																			<img class="small-img img-circle img-thumbnail" src="images/profile/profile5.jpg" alt="">
																		</div>
																		<div class="user-detail small-img">
																			<div class="font-16">Elizabeth Carter</div>
																			<small class="block text-muted font-12">@Elizabeth</small>
																			<small>
																				<small class="freelancer-rating">
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																				</small>
																			</small>

																			<div class="m-top-sm">
																				<button type="button" class="btn btn-primary btn-sm marginTB-xs" data-toggle="modal">follow</button>
																				<button type="button" class="btn btn-success btn-sm marginTB-xs" data-toggle="modal">View Profile</button>
																			</div>
																		</div>
																	</div><!-- ./user-wrapper -->
																</div>
															</div>
														</li>

														<li>
															<div class="panel panel-default clearfix">
																<div class="panel-body">
																	<div class="user-wrapper">
																		<div class="user-avatar">
																			<img class="small-img img-circle img-thumbnail" src="images/profile/profile6.jpg" alt="">
																		</div>
																		<div class="user-detail small-img">
																			<div class="font-16">Christopher Brown</div>
																			<small class="block text-muted font-12">@Christopher</small>
																			<small>
																				<small class="freelancer-rating">
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																				</small>
																			</small>

																			<div class="m-top-sm">
																				<button type="button" class="btn btn-primary btn-sm marginTB-xs" data-toggle="modal">follow</button>
																				<button type="button" class="btn btn-success btn-sm marginTB-xs" data-toggle="modal">View Profile</button>
																			</div>
																		</div>
																	</div><!-- ./user-wrapper -->
																</div>
															</div>
														</li>

														<li>
															<div class="panel panel-default clearfix">
																<div class="panel-body">
																	<div class="user-wrapper">
																		<div class="user-avatar">
																			<img class="small-img img-circle img-thumbnail" src="images/profile/profile7.jpg" alt="">
																		</div>
																		<div class="user-detail small-img">
																			<div class="font-16">Jane Doe</div>
																			<small class="block text-muted font-12">janeDoe@company.com</small>
																			<small>
																				<small class="freelancer-rating">
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																					<i class="fa fa-star text-warning"></i>
																				</small>
																			</small>

																			<div class="m-top-sm">
																				<button type="button" class="btn btn-primary btn-sm marginTB-xs" data-toggle="modal">follow</button>
																				<button type="button" class="btn btn-success btn-sm marginTB-xs" data-toggle="modal">View Profile</button>
																			</div>
																		</div>
																	</div><!-- ./user-wrapper -->
																</div>
															</div>
														</li>
													</ul>
												</div><!-- ./profile-follower-list -->
											</div><!-- ./tab-pane -->
										</div><!-- ./tab-content -->
									</div><!-- ./smart-widget-body -->
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->
						</div>
					</div>
				</div><!-- ./padding-md -->
			</div><!-- /main-container -->
		</div><!-- /wrapper -->

		<a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->

		<!-- Jquery -->


  	</body>
</html>