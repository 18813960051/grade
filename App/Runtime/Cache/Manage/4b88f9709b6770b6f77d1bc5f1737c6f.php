<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<!-- 样式表文件 -->
	<link href='__PUBLIC__/Css/bootstrap.css' rel="stylesheet" />
	<link href='__PUBLIC__/Css/common.css' rel="stylesheet" />
	<link href="__PUBLIC__/Css/jquery.datetimepicker.css" rel="stylesheet" />
	<!-- 脚本文件 -->
	<script language="javascript" src="__PUBLIC__/Js/jquery.js"></script>
	<script language="javascript" src="__PUBLIC__/Js/jquery.datetimepicker.js"></script>
	<script language="javascript" src="__PUBLIC__/Js/admin.js"></script>
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('doAddTerm');?>" method="post">
		<table style="width:400px;margin-top:20px;margin-left:20px;">
			<tr class="header"><td colspan="2">学期添加窗口</td></tr>
			<tr>
				<td class="header">学期名称</td>
				<td><input type="text" class="form-control" name="txtTermName"  placeholder="请输入学期名称" /> </td>
			</tr>
			<tr>
				<td class="header">学期开始日期</td>
				<td><input type="text" class="form-control" name="txtStart"  placeholder="请选择学期开始日期" readonly style="cursor:pointer" /> </td>
			</tr>
			<tr>
				<td class="header">学期结束日期</td>
				<td><input type="text" class="form-control" name="txtEnd"  placeholder="请选择学期结束日期"  readonly style="cursor:pointer" /> </td>
			</tr>
			<tr class="footer">
				<td colspan="2">
					<button type="submit" class="btn btn-primary">添加学期信息</button>
					<button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo U('index');?>';">返回列表</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>