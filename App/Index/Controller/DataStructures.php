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
        $BookTitles = Factory::getModel('LinkedList');
        $BookTitles-> insert("Introduction to Algorithm");
        $BookTitles-> insert("Introduction to PHP and Data structures");
        $BookTitles-> insert("Programming Intelligence");
        $BookTitles-> insertAtFirst("Mediawiki Administrative tutorial guide");
        $BookTitles-> insertBefore("Introduction to Calculus", "Programming Intelligence");
        $BookTitles-> insertAfter("Introduction to Calculus", "Programming Intelligence");
        p($BookTitles-> display());
        $BookTitles-> deleteFirst();
        $BookTitles-> deleteLast();
        $BookTitles-> delete("Introduction to PHP and Data structures");
        $BookTitles-> reverse();
        p($BookTitles-> display());
        echo "2nd Item is: ". $BookTitles-> getNthNode(2)-> data;
    }
}
