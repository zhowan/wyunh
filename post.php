<?php
    require_once('./includes/connection.inc.php');
    $postcard_id = $_GET['postcard_id'];
    if (!$postcard_id) {
    	header('location:./list.php');
    	exit();
    }
    $conn = db_connect();
    $conn->set_charset("utf8");
    //从数据库读取图片url,然后存入数组，从数组中随机抽取一个图片做背景
    $sql = "SELECT imgName,imgPath,mp3Name,mp3Path FROM nh_img WHERE id = $postcard_id";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    	$bg_file = $row['imgPath'];//明信片url，作背景图
    	$imgName = $row['imgName'];//明信片名字
    	$musicTitle = $row['mp3Name'];//音乐标题
    	$musicUrl = $row['mp3Path'];//音乐url
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $imgName; ?>明信片</title>
	<meta name="viewport" content="width=device-width,user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="./styles/reset.css">
	<link rel="stylesheet" type="text/css" href="./styles/post.css">
	<link rel="stylesheet" href="./jPlayer/lib/circle-player/skin/circle.player.css">
	<script type="text/javascript" src="./jPlayer/lib/jquery.min.js"></script>
	<script type="text/javascript" src="./jPlayer/dist/jplayer/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="./jPlayer/lib/circle-player/js/jquery.transform2d.js"></script>
	<script type="text/javascript" src="./jPlayer/lib/circle-player/js/jquery.grab.js"></script>
	<script type="text/javascript" src="./jPlayer/lib/circle-player/js/mod.csstransforms.min.js"></script>
	<script type="text/javascript" src="./jPlayer/lib/circle-player/js/circle.player.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	$(document).ready(function(){
		var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1",
		{	
			// 音乐url
			m4a: "<?php echo $musicUrl; ?>",
		}, {
			cssSelectorAncestor: "#cp_container_1",
			swfPath: "./jPlayer/dist/jplayer",
			wmode: "window",
			keyEnabled: true
		});
	});
	//]]>
	</script>
	<style type="text/css">
		body {
			background-image: url(<?php echo $bg_file; ?>);
		}
	</style>
</head>
<body>
	<!-- <div class="main-wrapper"> -->
		<header>
			<div class="banner">
				<h1><?php echo $imgName; ?></h1>
			</div>
		</header>

	<!-- 播放器开始 -->
		<div id="jquery_jplayer_1" class="cp-jplayer"></div>
		<div id="cp_container_1" class="cp-container">
			<div class="cp-buffer-holder"> 
				<div class="cp-buffer-1"></div>
				<div class="cp-buffer-2"></div>
			</div>
			<div class="cp-progress-holder">
				<div class="cp-progress-1"></div>
				<div class="cp-progress-2"></div>
			</div>
			<div class="cp-circle-control"></div>
			<ul class="cp-controls">
				<li><a class="cp-play" tabindex="1">play</a></li>
				<li><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li>
			</ul>
		</div>
	<!-- 播放器结束 -->
		<p class="musicTitle"><strong><?php echo $musicTitle; ?></strong></p>
	<!-- </div> -->
	<?php 
		$conn->close(); 
		require_once('./includes/footer.php');
	?>
</body>
</html>