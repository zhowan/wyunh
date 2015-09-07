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
	<link rel="stylesheet" type="text/css" href="./styles/list.css">
</head>
<body>
<div class="main-wrapper">
	<div class="right-bar">
		<!-- 页头 -->
		<header>
			<div class="banner">
				<h1>憶大年華明信片</h1>
			</div>
		</header>

		<!-- 内容 -->
		<div class="content">
		<?php while ($row = $result->fetch_assoc()) { ?>
            <div class="m-post">
                <div class="cont">
                    <div class="img">
                    	<a href="#"><img src="<?php echo $row['imgPath']; ?>"></a>
                    </div>
                </div>
                <div class="subinfo">
                    <span><?php echo $row['imgName']; ?></span>
                </div>
            </div>
        <?php } ?>
		</div>
		<!-- 页脚 -->
		<div class="footer">
			版权所有 ©2015 <a href="./">憶年華</a>	| Author by <a href="https://github.com/zhowan/wyunh">Wong</a>
		</div>
			
	</div>
</div>
</body>
</html>