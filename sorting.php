<?php 


	function randomArray() {
		for ($i = 0; $i <=100; $i++) {
			$arr[] = rand(1, 10000);
		}
		return $arr;
	}	
	function insertionSort($arr) {
		$start = microtime(true);
		for ($i = 1; $i < count($arr); $i++) {
			for ($j = 0; $j < $i; $j++) {
				if ($arr[$i] < $arr[$j]) {
					$remove = array_splice($arr, $i, 1);
					array_splice($arr, $j, 0, $remove);
				}
			}

		}
		$end = microtime(true);
		return $end - $start;

	}


	function selectionSort($arr) {
		$start = microtime(true);
		for ($j=0; $j < count($arr) - 1; $j++) {
			$min = array($j => $arr[$j]);
			for ($i = $j+1; $i < count($arr); $i++) {
				if ($arr[$i] < current($min)) {
					$min = array($i => $arr[$i]);
				}
			}
			$temp = $arr[$j];
			$arr[$j] = current($min);
			$arr[key($min)] = $temp;
		}
		$end = microtime(true);
		return $end - $start;
	}

	// var_dump(selectionSort($arr));

	function bubbleSort($arr) {
		$start = microtime(true);
	for ($j = count($arr); $j > 0; $j--) {
		for ($i = 0; $i < $j - 1; $i++) {
			if ($arr[$i] > $arr[$i+1]) {
				$temp = $arr[$i+1];
				$arr[$i+1] = $arr[$i];
				$arr[$i] = $temp; 
			}
		}
	}
		$end = microtime(true);
		return $end-$start;
	}
		$random = randomArray();
		echo selectionSort($random);
		echo bubbleSort($random);
		echo insertionSort($random);
	


	


?>
