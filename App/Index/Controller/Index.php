<?php
namespace App\Index\Controller;

use Zero\library\Controller;
use Zero\library\Factory;

class Index extends Controller
{
	public function index()
	{
	}


	/**
	 * 
	 * 冒泡排序
	 * 
	 */
	public function bubble_sort()
	{
		$arr = array(6, 3, 8, 2, 9, 1);

		function bubble_sort($arr)
		{
			$times = count($arr)-2;
			for ($i=0; $i <= $times; $i++) { 
				for ($j=0; $j <= $times-$i; $j++) {
					if( $arr[$j] > $arr[$j+1] ){
						$temp = $arr[$j];
						$arr[$j] = $arr[$j+1];
						$arr[$j+1] = $temp;	
					}
				}		
			}
			return $arr;	
		}

		p(bubble_sort($arr));

	}

	/**
	 * 
	 * 选择排序
	 * 
	 */
	public function selection_sort()
	{
		$arr = array(6, 3, 8, 2, 9, 1);

		function selection_sort($arr)
		{
			$times = count($arr);
			for ($i=0; $i < $times-1; $i++) { 
				$min_index = $i;
				for ($j=$i+1; $j < $times; $j++) {
					if( $arr[$j] < $arr[$min_index] ){
						$min_index = $j;	
					}
				}
				if( $i!=$min_index ){
					$temp = $arr[$i];
					$arr[$i] = $arr[$min_index];
					$arr[$min_index] = $temp;
				}
		 	}
			return $arr;	
		}

		p(selection_sort($arr));	
	}	
}