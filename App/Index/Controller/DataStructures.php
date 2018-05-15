<?php
namespace App\Index\Controller;

use Zero\library\Controller;
use Zero\library\Factory;
use SplStack;
use SplQueue;
use SplFixedArray;

class DataStructures extends Controller
{
	public function stack()
	{
		$stack = new SplStack();
		$stack->push('data1');
		$stack->push('data2');
		$stack->push('data3');	
		
		echo $stack->pop(); 
		//先进后出，后进先出	
	}

	public function quene()
	{
		$queue = new SplQueue();
		$queue->enqueue('data1');	
		$queue->enqueue('data2');	
		$queue->enqueue('data3');

		echo $queue->dequeue();
		//先进先出，后进后出	
	}	

	public function minheap()
	{
		//最小堆

	}

	public function fixedarray()
	{
		//固定长度的数组
		$array = new SplFixedArray(10);
		$array[0] = 123;
		$array[9] = 1234;
		p($array);
	}

	public function display_linkedlist()
	{
		$linkedlist = Factory::getModel('LinkedList');
		$linkedlist->ainsert('Introduction to Algorithum');	
		$linkedlist->ainsert('Introduction to PHP and Data structures');
		$linkedlist->ainsert('Programming Intelligence');
		$linkedlist->adisplay();
	}	

}