<html xmlns="http://www.w3.org/1999/xhtml">
	<style type="text/css">
		.topbox {
			background: url("../vs/topboxbg.gif") repeat-x scroll 0 0 transparent;
			font-size: 12px;
			height: 30px;
			line-height: 30px;
			width: 100%;
		}
		.headlogo {
			background: url("../vs/headlogo.gif") no-repeat scroll center center transparent;
			float: left;
			height: 26px;
			margin: 0 10px;
			width: 190px;
		}
		.span {
			display: block;
			float: right;
			margin-left: 8px;
			overflow: hidden;
			padding-left: 18px;
		}
		.topa span a {
			color: #3366CC;
		}
		.topa span a:hover {
			color: #990000;
		}
		#topa2 {
			float: right;
			font-weight: bold;
		}
		.style2 {color:green;
			font-weight: bold;}
	</style>
	<?php
		$q=$_GET['keyword'];
	?>
	<body>
		<div class="topbox">
			<a href="vs-home.html" target=_parent>
				<div class="headlogo"></div>
			</a>
            <form action="vs-search.php" method="get" name="f" target=_parent>
				<!--<p style="margin: 0px; padding: 0px;"> --> 
				<a href="vs-home.html" target="_top">
					<span class="style2">回首页</span></a>&nbsp;
				<a href="http://www.dangdang.com" target="_blank">
					<span class="style2">当当网</span></a>&nbsp;
				<a href="http://www.amazon.cn" target="_blank">
					<span class="style2">亚马逊</span></a>&nbsp;
				<input id="keyword" name="keyword">
				<input value="对比搜索" type="submit">
				<span id="topa2">
					<a onclick="window.external.addFavorite(location.href,document.title)" href="#">加入收藏</a>
				</span>
            </form>	
		</div>
	</body>
</html>
