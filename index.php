<?php
    require_once('./includes/connection.inc.php');
    $conn = db_connect();
    $conn->set_charset("utf8");
    //从数据库读取图片url,然后存入数组，从数组中随机抽取一个图片做背景
    $sql = "SELECT imgPath FROM nh_img";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    	$bg_file[] = $row['imgPath'];//
    }
/*
    //从目录读取图片文件名，然后存入数组，从数组中随机抽取一个图片做背景
    //打开背景图片目录
    $bg_dir = scandir("./images/bg_images/");
    //列出背景图片目录中的图片
    foreach ($bg_dir as $key => $value) {
    	//删除.和..
    	if ($value != '.' && $value != '..') {
    		$bg_file[] = './images/bg_images/'.$value;
    	}
    }
*/
    // 从数组中随机选取一个图片路径的索引
    $bg_image = array_rand($bg_file,1);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>憶·年華工作室|憶大年華明信片</title>
	<meta name="viewport" content="width=device-width,user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="./styles/reset.css">
	<link rel="stylesheet" type="text/css" href="./styles/main.css">
	<style type="text/css">
		body {
			background-image: url(<?php echo $bg_file[$bg_image]; ?>);
		}
	</style>
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

	<?php require_once('./includes/footer.php'); ?>
</body>
</html>