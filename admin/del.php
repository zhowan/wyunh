<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:./login.php');
	    exit();
	}
	require_once('../includes/connection.inc.php');
	$conn = db_connect();
	$conn->set_charset("utf8");
	if (isset($_GET['id']) && $_GET['action'] == 'del') {
		$sql = "DELETE FROM nh_img WHERE id={$_GET['id']}";
		if ($conn->query($sql)) {
    		header('location:./manage.php');
	    	exit();
		} else {
			echo "删除出错";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>憶·年華工作室|憶大年華明信片</title>
	<meta name="viewport" content="width=device-width,user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="../styles/reset.css">
	<link rel="stylesheet" type="text/css" href="../styles/manage.css">
</head>
<body>
	<div class="main-wrapper">
		<?php 
			if (isset($_GET['id'])) {
			    $sql = "SELECT * FROM nh_img WHERE id = {$_GET['id']}";
			    $result = $conn->query($sql);
			    if ($result && $result->num_rows>0) {
			    	$row = $result->fetch_assoc(); //取得结果集中第一条记录作为索引数组返回
		?>
					<p><strong>你确定删除以下项目？</strong></p>
					<p><a href="?action=del&id=<?php echo $_GET['id']?>">没错，狠心的删除</a></p>
					<p><a href="./manage.php">算了，让他再活一会</a></p>
					<hr />
					<p><h3><?php echo $row['imgName']; ?></h3></p>
					<p><?php echo $row['imgPath']; ?></p>
					<img class="post-img" src="<?php echo $row['imgPath']; ?>" >
					<p><?php echo $row['mp3Name']; ?></p>
					<audio src="<?php echo $row['mp3Path']; ?>" controls="controls" preload="none">
						Your browser does not support the audio element.
					</audio>
		<?php
				} else {
					echo "查询错误，请返回重试！";
				}
				$conn->close();
			} else {
				echo "出错，请返回重试！";
			}
		?>
	</div>

	<?php require_once('../includes/footer.php'); ?>
</body>
</html>