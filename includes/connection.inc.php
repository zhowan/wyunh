<?php
	function db_connect() {
		$host = 'localhost';
  		$db = 'wyunh';
  		$user = 'root';
  		$pwd = '123456';
  		return new mysqli($host, $user, $pwd, $db);
	}