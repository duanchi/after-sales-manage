<?php /* Smarty version Smarty-3.1.11, created on 2012-11-01 16:46:57
         compiled from "/Users/duanChi/Projects/dashboard/trunk/application/views/wiki/index.tmpl.html" */ ?>
<?php /*%%SmartyHeaderCode:14564079615088afa2615e38-43457130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ead2d29c99b936d50e6515fb2b3fd7a006c7a87' => 
    array (
      0 => '/Users/duanChi/Projects/dashboard/trunk/application/views/wiki/index.tmpl.html',
      1 => 1351759226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14564079615088afa2615e38-43457130',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5088afa2618654_22646152',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5088afa2618654_22646152')) {function content_5088afa2618654_22646152($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>开放平台</title>
<link rel="stylesheet" href="http://static.wo-api.com/bootstrap/css?2.1.0" />
<link rel="stylesheet" href="/themes/bootstrap2/css/bootstrap.css" />
<link rel="stylesheet" href="/themes/bootstrap2/css/docs.css" />
</head>

<body>
<div class="container">
	<div class="navbar navbar-fixed-top navbar-inverse">
    	<div class="navbar-inner">
        	<div class="container">
            	<a class="brand" href="#">开放平台</a>
                <ul class="nav pull-right">
                	<li><a href="#">首页</a></li>
                    <li><a href="#">产品</a></li>
                    <li><a href="#">应用开发</a></li>
                    <li class="active"><a href="#">文档</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div class="container-content span12 well">
    	<div class="row-fluid">
		<div class="sidebar-nav span3 pull-left">
        	<ul class="nav nav-list">
            	<li class="navbar-search"><input type="text" class="search-query" placeholder="Search"></li>
                <li class="divider"></li>
                <li class="nav-header">平台说明</li>
                <li class="active"><a href="/wiki">平台介绍</a></li>
                <li class="nav-header">授权API</li>
                <li><a href="#">单点登录授权</a></li>
                <li><a href="#">oauth2.0</a></li>
                <li class="nav-header">资源API</li>
                <li><a href="#">粗定位接口</a></li>
                <li><a href="#">异常代码接口</a></li>
                <li class="nav-header">API工具</li>
                <li><a href="/wiki/tools/exception">平台异常代码</a></li>
            </ul>
        </div>
        <div id="doc-content" class="span9">
        	<div class="page-header"><h3>OAUTH2.0授权机制</h3><p>私信，关注都需要用户身份，目前新浪微博开放平台用户身份鉴权有OAuth2.0和Basic Auth（仅用于应用所属开发者调试接口），新版接口也仅支持这两种方式。
</p></div>
            <section>
            	<div class="page-header"><h3>OAuth2.0概述</h3></div>
                	<p>
                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />s
                    大部分API的访问如发表微博、获取私信，关注都需要用户身份，目前新浪微博开放平台用户身份鉴权有OAuth2.0和Basic Auth（仅用于应用所属开发者调试接口），新版接口也仅支持这两种方式。

OAuth2.0较1.0相比整个授权验证流程更简单更安全，也是未来最主要的用户身份验证和授权方式。

关于OAuth2.0协议授权流程查看OAuth2.0授权流程 ，其中Client指第三方应用，Resource Owner指用户，Authorization Server是我们的授权服务器，Resource Server是API服务器。

开发者可以先浏览OAuth2.0的接口文档，熟悉OAuth2的接口及参数的含义，然后我们根据应用场景各自说明如何使用OAuth2.0。
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />s
                    大部分API的访问如发表微博、获取私信，关注都需要用户身份，目前新浪微博开放平台用户身份鉴权有OAuth2.0和Basic Auth（仅用于应用所属开发者调试接口），新版接口也仅支持这两种方式。

OAuth2.0较1.0相比整个授权验证流程更简单更安全，也是未来最主要的用户身份验证和授权方式。

关于OAuth2.0协议授权流程查看OAuth2.0授权流程 ，其中Client指第三方应用，Resource Owner指用户，Authorization Server是我们的授权服务器，Resource Server是API服务器。

开发者可以先浏览OAuth2.0的接口文档，熟悉OAuth2的接口及参数的含义，然后我们根据应用场景各自说明如何使用OAuth2.0。
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />s
                    大部分API的访问如发表微博、获取私信，关注都需要用户身份，目前新浪微博开放平台用户身份鉴权有OAuth2.0和Basic Auth（仅用于应用所属开发者调试接口），新版接口也仅支持这两种方式。

OAuth2.0较1.0相比整个授权验证流程更简单更安全，也是未来最主要的用户身份验证和授权方式。

关于OAuth2.0协议授权流程查看OAuth2.0授权流程 ，其中Client指第三方应用，Resource Owner指用户，Authorization Server是我们的授权服务器，Resource Server是API服务器。

开发者可以先浏览OAuth2.0的接口文档，熟悉OAuth2的接口及参数的含义，然后我们根据应用场景各自说明如何使用OAuth2.0。
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />s
                    大部分API的访问如发表微博、获取私信，关注都需要用户身份，目前新浪微博开放平台用户身份鉴权有OAuth2.0和Basic Auth（仅用于应用所属开发者调试接口），新版接口也仅支持这两种方式。

OAuth2.0较1.0相比整个授权验证流程更简单更安全，也是未来最主要的用户身份验证和授权方式。

关于OAuth2.0协议授权流程查看OAuth2.0授权流程 ，其中Client指第三方应用，Resource Owner指用户，Authorization Server是我们的授权服务器，Resource Server是API服务器。

开发者可以先浏览OAuth2.0的接口文档，熟悉OAuth2的接口及参数的含义，然后我们根据应用场景各自说明如何使用OAuth2.0。
                    </p>
            </section>
        </div>
        </div>
    </div>
</div>


</body>
<script type="text/javascript" src="http://static.wo-api.com/jquery?1.8.0"></script>
</html><?php }} ?>