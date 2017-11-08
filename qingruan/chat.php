<?php
	header("Content-Type:text/html; charset=utf-8");
	$message = $_POST['message'];
	sleep(1);
	switch ($message){
		case '在吗？':
			//从数据库拿的数据
			$Array1 = array(
				'不在',
				'你好。。。',
				'人家在呢。。。',
				'我去洗个澡。。。'
			);
			//---随机取一条数据
			$randomWord  = array_rand($Array1,1);
			echo $Array1[$randomWord];
		break;
		case '有男朋友吗？':
		//从数据库拿的数据
			$Array2 = array(
				'有',
				'前男友算吗？',
				'没有啊。。。',
				'你要上岗吗？'
			);
			//---随机取一条数据
			$randomWord  = array_rand($Array2,1);
			echo $Array2[$randomWord];
		break;
		case '吃饭了吗？':
		//从数据库拿的数据
			$Array3 = array(
				'滚一边去',
				'吃了一大碗。。',
				'你要请客吗',
				'晚上小树林见。。。',
				'刚跟男朋友吃过。。。'
			);
			//---随机取一条数据
			$randomWord  = array_rand($Array3,1);
			echo $Array3[$randomWord];
		break;
		default:
			$Array4 = array(
				'晚上小树林见。。。',
				'天王盖地虎',
				'宝塔镇河妖',
				'撒浪嘿呦'
			);
			//---随机取一条数据
			$randomWord  = array_rand($Array4,1);
			echo $Array4[$randomWord];
		break;
	}
?>