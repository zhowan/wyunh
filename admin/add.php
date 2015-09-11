<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:./login.php');
	    exit();
	}
	if ($_GET['action'] == 'add') {
		require_once('../includes/connection.inc.php');
	    $conn = db_connect();
	    $conn->set_charset("utf8");

	    $imgName = $_POST['imgName'];
	    $imgPath = $_POST['imgPath'];
	    $mp3Name = $_POST['mp3Name'];
	    $mp3Path = $_POST['mp3Path'];
	    if ($imgName == '' || $imgPath =='' || $mp3Name =='' || $mp3Path == '') {
	    	echo "添加失败";
	    } else {
		    $sql = "INSERT INTO nh_img(imgName, imgPath, mp3Name, mp3Path) VALUES ('{$imgName}','{$imgPath}','{$mp3Name}','{$mp3Path}')";
		    if ($conn->query($sql)) {
		    	echo "添加成功";
			}
	    }
	    $conn->close();		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>憶·年華工作室|憶大年華明信片</title>
	<meta name="viewport" content="width=device-width,user-scalable=no" />
</head>
<body>
	<div class="main-wrapper">
	<header>
		<a href="./manage.php">列表</a> | <a href="./logout.php">退出</a>
	</header>
		<form action="?action=add" method="post">
			明信片名字：<input type="text" name="imgName" /><br />
			明信片网址：<input type="text" name="imgPath" /><br />
			音乐的标题：<input type="text" name="mp3Name" /><br />
			音乐的网址：<input type="text" name="mp3Path" /><br />
			<input type="submit" value="增加" />
		</form>
	</div>
	<?php require_once('../includes/footer.php'); ?>
</body>
</html>