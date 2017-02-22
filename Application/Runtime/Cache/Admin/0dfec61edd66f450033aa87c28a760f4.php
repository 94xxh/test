<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>后台登陆</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="/Public/Admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet">

        <!-- ionicons -->
        <link href="/Public/Admin/css/ionicons.min.css" rel="stylesheet">
        
        <!-- Simplify -->
        <link href="/Public/Admin/css/simplify.min.css" rel="stylesheet">
    
    </head>
			
<!--内容体-->
    <body class="overflow-hidden light-background">
        <div class="wrapper no-navigation preload">
            <div class="sign-in-wrapper">
                <div class="sign-in-inner">
                    <div class="login-brand text-center">
                        <i class="fa fa-user  m-right-xs"></i>LBS <strong class="text-skin">后台</strong>
                    </div>

                    <form>
                        <div class="form-group m-bottom-md">
                            <input type="text" class="form-control" placeholder="账号">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="密码">
                        </div>

                        <div class="form-group">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="chkRemember">
                                <label for="chkRemember"></label>
                            </div>
                            记住我
                        </div>

                        <div class="m-top-md p-top-sm">
                            <a href="" class="btn btn-success block">立即登陆</a>
                        </div>

                       <!--此处创建账号、忘记密码可用于前端登陆，后台不用
                         <div class="m-top-md p-top-sm">
                            <div class="font-12 text-center m-bottom-xs">
                                <a href="#" class="font-12">Forgot password ?</a>
                            </div>
                            <div class="font-12 text-center m-bottom-xs">Do not have an account?</div>
                            <a href="signup.html" class="btn btn-default block">Create an accounts</a>
                        </div> -->
                    </form>
                </div><!-- ./sign-in-inner -->
            </div><!-- ./sign-in-wrapper -->
        </div><!-- /wrapper -->

        <a href="" id="scroll-to-top" class="hidden-print"><i class="icon-chevron-up"></i></a>

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
    
    </body>
</html>