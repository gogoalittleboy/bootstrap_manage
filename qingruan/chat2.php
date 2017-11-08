<?php
	header("Content-Type:text/html; charset=utf-8");
	$message = $_POST['message'];
	sleep(1);
	switch ($message){
		case '在吗？':
			//从数据库拿的数据
			$jsonstr = file_get_contents('info/array1.json');//把整个文件读入一个字符串中
			$chatArr = json_decode($jsonstr);//对 JSON 格式的字符串进行编码 
			//---随机取一条数据
			$randomWord  = array_rand($chatArr,1);
			echo $chatArr[$randomWord];
		break;
		case '有男朋友吗？':
			//从数据库拿的数据
			$jsonstr = file_get_contents('info/array2.json');
			$chatArr = json_decode($jsonstr);
			//---随机取一条数据
			$randomWord  = array_rand($chatArr,1);
			echo $chatArr[$randomWord];
		break;
		case '吃饭了吗？':
		//从数据库拿的数据
			$jsonstr = file_get_contents('info/array3.json');
			$chatArr = json_decode($jsonstr);
			//---随机取一条数据
			$randomWord  = array_rand($chatArr,1);
			echo $chatArr[$randomWord];
		break;
		default:
			//从数据库拿的数据
			$jsonstr = file_get_contents('info/array4.json');
			$chatArr = json_decode($jsonstr);
			//---随机取一条数据
			$randomWord  = array_rand($chatArr,1);
			echo $chatArr[$randomWord];
		break;
	}
?>