<?php
	function db_connect() {
		$host = 'localhost';
  		$db = 'wyunh';
  		$user = 'root';
  		$pwd = 'xp3895750';
  		return new mysqli($host, $user, $pwd, $db);
	}