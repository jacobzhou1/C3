<?php
// $w = 'hello';

// echo $w . " shijian jianshi\"";


// association array
// $x5 = [
// 	'julie' => "green",
// 	"lucy" => "grey",
// 	"tina" => "white",
// 	"wenbo" => "red",
// 	"josh" => "green",
// 	"jack" => "blue"
// ];

// foreach($x5 as $key => $value666){
// 	echo $value666 . '<br>';
// }



// index array,index array 使用默认值作为key
//（从0开始递增的数字）
// index array 在理解上可以理解为特殊的 association array

// $z = ['hello', 'world'];

// $z[] = '321';

// $z[] = '123';

// var_dump($z);

// $colorful = [
// 	array(
// 		'name' => 'wenbo',
// 		'color' => 'red',
// 		'daiyanjing' => 'yes'
// 	),
// 	array(
// 		'name' => 'tina',
// 		'color' => 'white',
// 		'daiyanjing' => 'no'
// 	),
// 	array(
// 		'name' => 'jack',
// 		'color' => 'blue',
// 		'daiyanjing'=> 'yes'
// 	)
// ];


// foreach ($colorful as $key1 => $value1) {
// 	echo $value1.'<br>';
// 	foreach($value1 as $key2 => $value2) {
// 		echo $value1 . '<br>';
// 	}
// }

// echo $colorful[2]['name'];


// 任意4位数之中符合各位加起来等于6并且各位不相等，将各个数输出，并算个数
function cool($min, $max, $spe = 6) {
	$count = 0;
	$min_v = pow(10, ($min -1 ));
	$max_v = pow(10, $max);

	for($i=$min_v; $i<$max_v; $i++) {
		$num = $i;
		$trace = $max_v / 10;
		$weishu = array();
		$length = 0;

		while($trace >= 1) {
			$temp = floor($num / $trace);
			$weishu[] = $temp;
			$num = $num - $trace * $temp;
			$trace = $trace / 10;
			$length++;
		}

		if ( array_sum($weishu) == $spe) {
			$check = array();
			foreach ($weishu as $value) {
				$check += array (
					$value => '123'
				);
			}
			
			if (sizeof($check) == $length) {
				echo $i . '<br>';
				$count++;
			}
		}
	} 

	echo $count;
}

cool(4,4,6);
//
// $y = [ 
// 	0 => "green", 
// 	1 => "blue",
// 	// 所有的key都会被系统转化成string，并且key相同的后面的会覆盖前面的
// 	"1" => "black"
// ];

// echo $y[1];


?>