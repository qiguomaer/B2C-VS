<html>
	<head>
		<title>电商对比搜索</title>
	</head>
	<?php
		$q=$_GET['keyword'];	
	?>

<frameset rows=41,* frameSpacing=0 frameBorder=0 border=0 bordercolor="#3E77B3">
	<frame border=0 name=poptoolsbar frameSpacing=0 src="vs-head.php?q=<?php echo urlencode($q);?>" frameBorder=NO scrolling=no>
		<frameset cols=50%,11,* bordercolor="#3E77B3" id=myFrame>
			<frame src="http://searchb.dangdang.com/?key=<?php echo urlencode($q);?>" name=popforum bordercolor="#3E77B3" target="left">
			<frame src="vs-middle.html" name=midFrame frameBorder=0 scrolling=no noResize bordercolor="#3E77B3">
			<!--
			<frame src="http://search2.dangdang.com/?key=<?php echo urlencode($q);?>" name=popforum bordercolor="#3E77B3" target="right">
			-->
			<frame src="http://www.amazon.cn/s/ref=nb_sb_noss_2?__mk_zh_CN=%E4%BA%9A%E9%A9%AC%E9%80%8A%E7%BD%91%E7%AB%99&url=search-alias%3Daps&field-keywords=<?php echo urlencode($q);?>" name=popmain bordercolor="#3E77B3">
			
		</frameset>
		<noframes></noframes>
</frameset>

<div style="DISPLAY: none">
	<a href="http://www.dangdang.com/">当当网技术部部</a>
	<a href="http://www.dangdang.com/" >产品部搜索团队</a>
</div>
</html>