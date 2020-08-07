<?php
if ($_GET['action'] == 'login') {
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	require_once('../includes/connection.inc.php');
    $conn = db_connect();
    $conn->set_charset("utf8");
    $sql = "SELECT * FROM nh_user";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    	$user = $row['username'];
    	$pwd = $row['password'];
    }

    if ($user == $username && $pwd == md5($password)) {
    	$_SESSION['username']='admin';
    	header('location:./manage.php');
    	exit();
    } else {
    	$loginError = '登录错误，请重新登录！';
    }
}
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>明信片</title>
	<meta name="viewport" content="width=device-width,user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="../styles/reset.css">
	<link rel="stylesheet" type="text/css" href="../styles/login.css">
	<script type="text/javascript" src="../jPlayer/lib/jquery.min.js"></script> 
	<script type="text/javascript" src="../js/form.js"></script>
</head>
<body>
	<div class="main-wrapper">
		<header class="header header-logo">
			<img src="../images/newlogo.png">
		</header>
		<div class="container">
			<form class="cbp-mc-form" action="?action=login" method="post">
				<p><?php echo $loginError?></p>
				<div class="cbp-mc-column" action="login.php?action=login" method="post">
  					<input type="text" id="username" class="default-input" name="username" value="用户名" /><br/> 
					<input type="text" id="password" class="default-input" name="password" value="密码" /> 
  				</div>
  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" name="submit" type="submit" value="登录" /></div>
			</form>
		</div>
	</div>

	<?php require_once('../includes/footer.php'); ?>
</body>
</html>