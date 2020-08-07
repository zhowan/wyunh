<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:./login.php');
	    exit();
	}
	require_once('../includes/connection.inc.php');
	$conn = db_connect();
	$conn->set_charset("utf8");
	if (isset($_GET['action'])) {
	    $imgName = $_POST['imgName'];
	    $imgPath = $_POST['imgPath'];
	    $mp3Name = $_POST['mp3Name'];
	    $mp3Path = $_POST['mp3Path'];
	    if ($imgName == '' || $imgPath =='' || $mp3Name =='' || $mp3Path == '') {
	    	echo "修改失败，所有项必填!";
	    } else {
		    $sql = "UPDATE nh_img SET imgName = '{$imgName}', imgPath = '$imgPath', mp3Name = '$mp3Name', mp3Path = '$mp3Path' WHERE id = {$_GET['id']};";
		    if ($conn->query($sql)) {
		    	echo "修改成功";
			} else {
				echo "修改出错，请返回重试！";
			}
	    }
	}
	if (isset($_GET['id'])) {
	    $sql = "SELECT * FROM nh_img WHERE id = {$_GET['id']}";
	    $result = $conn->query($sql);
	    if ($result && $result->num_rows>0) {
	    	$row = $result->fetch_assoc(); //取得结果集中第一条记录作为索引数组返回
		} else {
			echo "查询错误，请返回重试！";
		}
		$conn->close();
	} else {
		echo "出错，请返回重试！";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>明信片</title>
	<meta name="viewport" content="width=device-width,user-scalable=no" />
</head>
<body>
	<div class="main-wrapper">
	<header>
		<h1>修改</h1>
		<a href="./manage.php">列表</a> | <a href="./logout.php">退出</a>
	</header>
		<form action="?id=<?php echo $_GET['id']; ?>&action=edit" method="post">
			明信片名字：<input type="text" name="imgName" value="<?php echo $row['imgName'] ?>" /><br />
			明信片网址：<input type="text" name="imgPath" value="<?php echo $row['imgPath'] ?>" /><br />
			音乐的标题：<input type="text" name="mp3Name" value="<?php echo $row['mp3Name'] ?>" /><br />
			音乐的网址：<input type="text" name="mp3Path" value="<?php echo $row['mp3Path'] ?>" /><br />
			<input type="submit" value="修改" />
		</form>
	</div>

	<?php require_once('../includes/footer.php'); ?>
</body>
</html>