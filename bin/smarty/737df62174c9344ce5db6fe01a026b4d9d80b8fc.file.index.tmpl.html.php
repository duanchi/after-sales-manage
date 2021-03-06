<?php /* Smarty version Smarty-3.1.11, created on 2012-11-06 09:39:00
         compiled from "/Users/duanChi/Projects/after-sales-manage/trunk/application/views/support/index.tmpl.html" */ ?>
<?php /*%%SmartyHeaderCode:144662487450986a3465eba6-52387631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '737df62174c9344ce5db6fe01a026b4d9d80b8fc' => 
    array (
      0 => '/Users/duanChi/Projects/after-sales-manage/trunk/application/views/support/index.tmpl.html',
      1 => 1352163799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144662487450986a3465eba6-52387631',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50986a34668db0_45957151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50986a34668db0_45957151')) {function content_50986a34668db0_45957151($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>售后工单管理系统</title>
<link rel="stylesheet" type="text/css" href="http://static.wo-api.com/bootstrap/css?2.2.1" />
<link rel="stylesheet" type="text/css" href="/themes/bootstrap2/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/themes/bootstrap2/css/dispatch.css" />
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("../include/header.tmpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container" style="height:100%;">
	<div class="span12 wrapper-box">
    	<div class="box-header">
        	<div class="navbar">
            	<div class="navbar-inner">
                	<div class="container">
                    	<ul class="nav">
                        	<li class="active"><a href="#"><i class="icon-share"></i>&nbsp;派单管理</a></li>
                            <li><a href="#"><i class="icon-check"></i>&nbsp;回单管理</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="api-doc" class="box-body row-fluid">
        	<div class="box-sidebar well sidebar-nav span3">
            	<ul class="nav nav-list">
                	<li class="nav-header">新派单</li>
                    <li class="active"><a href="#">新增售后派单</a></li>
                    <li><a href="#">新增咨询派单</a></li>
                    <li class="nav-header">派单管理</li>
                    <li><a href="#">待处理派单</a></li>
                    <li><a href="#">处理中派单</a></li>
                    <li><a href="#">已完成派单</a></li>
                </ul>
            </div>
            <div class="box-content">
            	<section>
                    <form id="add-dispatch" class="form-horizontal dispatch" method="post">
                        <fieldset>
                            <!-- <legend>&nbsp;新增售后工单</legend> -->
                            <section>
                            <h3 class="form-actions">客户信息</h3>
                            <div class="control-group">
                                <label class="control-label" for="customer">客户名称</label>
                                <div class="controls"><input type="text" id="customer" class="span8" name="customer" placeholder="客户名称"></div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="contacts">联系电话</label>
                                <div class="controls"><input type="text" id="contacts" class="span8" name="contacts" placeholder="联系电话"></div>
                            </div>
                            </section>
                            <section>
                            <h3 class="form-actions">工单信息</h3>
                            <div class="control-group">
                                <label class="control-label" for="PID">产品分类</label>
                                <input type="hidden" value="" id="PID" name="PID" />
                                <div class="controls">
                                	<div id="PID-selector" class="btn-group">
                                    	<button id="PID-selector-name" class="btn" onclick="return false;">请选择产品分类</button><button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                            	<a href="#" data-value="0">信息化类</a>
                                                <ul class="dropdown-menu">
                                                	<li><a href="#" data-value="1">综信平台</a></li>
                                                    <li><a href="#" data-value="2">信息魅力</a></li>
                                                    <li><a href="#" data-value="3">移动办公</a></li>
                                                </ul>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-submenu">
                                            	<a href="#" data-value="0">定位类</a>
                                                <ul class="dropdown-menu">
                                                	<li><a href="#" data-value="4">人员定位</a></li>
                                                    <li><a href="#" data-value="5">移动执法</a></li>
                                                </ul>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-submenu">
                                            	<a href="#" data-value="0">监控类</a>
                                                <ul class="dropdown-menu">
                                                	<li><a href="#" data-value="6">神眼</a></li>
                                                    <li><a href="#" data-value="7">宽视界</a></li>
                                                    <li><a href="#" data-value="8">3G眼</a></li>
                                                </ul>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#" data-value="9">其他产品</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                            
                            
                            <div class="control-group">
                                <label class="control-label" for="description">问题描述</label>
                                <div class="controls"><textarea id="description" class="span8" rows="5" name="description" placeholder="请输入问题描述"></textarea></div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="comment">问题备注</label>
                                <div class="controls"><textarea id="comment" class="span8" rows="3" name="comment" placeholder="问题备注,请填写用户名、密码、域名等其他信息"></textarea></div>
                            </div>
                            <div class="control-group">
                            	<div class="controls">
                            		<label class="checkbox" for="enable_msg"><input type="checkbox" id="enable_msg" name="enable_msg" checked="checked" value="true">短信提醒处理人员</label>
                                </div>
                            </div>
                            </section>
                            <div class="form-actions pull-bottom span12">
                            	<button type="reset" class="btn pull-right">重新填写</button>
                            	<button type="submit" class="btn btn-primary pull-right" data-toggle="modal" data-target="#add-dispatch-modal">提交工单...</button>
                            </div>
                        </fieldset>
                    </form>
                </section>
            </div>
        </div>
        <div class="box-footer">
        </div>
    </div>
</div>
<div id="add-dispatch-modal" class="modal span9 hide fade">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>确认工单&nbsp;<span class="label label-success">已成功发送至史景烨</span></h3>
    </div>
    <div class="modal-body">
    	<form class="dispatch-preview form-horizontal">
        	<section>
                <h3>受理信息</h3>
                <div class="control-group">
                    <label class="control-label" for="job_number">工单编号&nbsp;</label>
                    <div class="controls"><label id="job_number" name="job_number" class="span6">ZXPT-201211050010</label></div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="contacts">工单提交时间&nbsp;</label>
                    <div class="controls"><label id="contacts" class="span6" name="contacts" placeholder="联系电话">2012-11-05 14:35:43</label></div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="contacts">工单提交人&nbsp;</label>
                    <div class="controls"><label id="contacts" class="span6" name="contacts" placeholder="联系电话">吕振华</label></div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="contacts">工单处理人&nbsp;</label>
                    <div class="controls"><label id="contacts" class="span6" name="contacts" placeholder="联系电话">史景烨(已使用短信提醒)</label></div>
                </div>
            </section>
            <section>
                <h3>客户信息</h3>
                <div class="control-group">
                    <label class="control-label" for="customer">客户名称&nbsp;</label>
                    <div class="controls"><label id="customer" class="span6" name="customer" placeholder="客户名称">这是客户名称</label></div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="contacts">联系电话&nbsp;</label>
                    <div class="controls"><label id="contacts" class="span6" name="contacts" placeholder="联系电话"></label></div>
                </div>
            </section>
            <section>
                <h3>工单信息</h3>
                <div class="control-group">
                    <label class="control-label" for="customer">产品分类&nbsp;</label>
                    <div class="controls"><label id="customer" class="span6" name="customer" placeholder="客户名称">这是客户名称</label></div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="contacts">问题描述&nbsp;</label>
                    <div class="controls"><label id="contacts" class="span6" name="contacts" placeholder="联系电话"><br />asdfasf<br />sfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsadsfasdfsad</label></div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="contacts">问题备注&nbsp;</label>
                    <div class="controls"><label id="contacts" class="span6" name="contacts" placeholder="联系电话"></label></div>
                </div>
            </section>
        </form>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal">取消</button>
    <button id="add-dispatch-modal-submit" class="btn btn-primary">确认提交工单</button>
    </div>
</div>

</body>
<script type="text/javascript" src="http://static.wo-api.com/jquery?1.8.0"></script>
<script type="text/javascript" src="http://static.wo-api.com/bootstrap/js?2.2.1"></script>
<script type="text/javascript" src="/themes/bootstrap2/js/controller/dispatch.controller.js"></script>
<script type="text/javascript" src="/themes/bootstrap2/js/lib/dispatch.lib.js"></script>
</html><?php }} ?>