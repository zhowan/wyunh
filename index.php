<?php
    require_once('./includes/connection.inc.php');
    $conn = db_connect();
    $conn->set_charset("utf8");
    $sql = "SELECT * FROM nh_img";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>憶·年華工作室|憶大年華明信片</title>
	<meta name="viewport" content="width=device-width,user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="./styles/reset.css">
	<link rel="stylesheet" type="text/css" href="./styles/main.css">
</head>
<body>
<div class="main-wrapper">
	<header class="header header-logo">
		<img src="./images/newlogo.png">
	</header>

	<div class="g-fixed">
		<div class="item find">
			<a href="./list.php">发现</a>
		</div>
		<div class="item t-buy">
			<a href="http://wyunh.com/teambuying.php">团购</a>
		</div>
	</div>

</div>

	<footer class="footer">
		©2015 <a href="./"><strong>憶年華</strong></a> | 站点由 <a href="https://github.com/zhowan/wyunh"><strong>Wong</strong></a> 驱动
	</footer>

</body>
</html>