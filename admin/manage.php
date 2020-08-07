<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:./login.php');
	    exit();
	}
	require_once('../includes/connection.inc.php');
    $conn = db_connect();
    $conn->set_charset("utf8");
    
    $sql = "SELECT * FROM nh_img";
    $result = $conn->query($sql);
    $postNum = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>明信片</title>
	<meta name="viewport" content="width=device-width,user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="../styles/reset.css">
	<link rel="stylesheet" type="text/css" href="../styles/manage.css">
</head>
<body>
	<div class="main-wrapper">
		<header>
			<h1>后台管理</h1>
			<a href="./add.php">增加明信片</a>| <a href="./logout.php">退出</a>
		</header>
		 <hr />
		<?php while ($row = $result->fetch_assoc()) { ?>
		<p><h3><?php echo $postNum++ . '-' . $row['imgName']; ?></h3></p>
		<p><a href="edit.php?id=<?php echo $row['id']; ?>">修改</a> | <a href="del.php?id=<?php echo $row['id']; ?>">删除</a></p>
		<p><?php echo $row['imgPath']; ?></p>
		<img class="post-img" src="../<?php echo $row['imgPath']; ?>" >
		<p><?php echo $row['mp3Name']; ?></p>
		<audio src="<?php echo $row['mp3Path']; ?>" controls="controls" preload="none">
			Your browser does not support the audio element.
		</audio>
		 <hr />
		<?php 
			} 
			$conn->close();
		?>
	</div>

	<?php require_once('../includes/footer.php'); ?>
</body>
</html>