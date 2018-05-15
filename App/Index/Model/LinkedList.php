<?php
namespace App\Index\Model;

use Zero\library\Model;

class LinkedList extends Model
{
	public $_firstNode = NULL;
	public $_totalNode = 0;

	public function ainsert(string $data)
	{
		$newNode = new ListNode($data); 
		if( $this->_firstNode !== NULL ){
			$currentNode = $this->_firstNode;
			while ( $currentNode->next !== NULL ) {
				$currentNode = $currentNode->next;   //这个循环相当于$this->_firstNode->next->next->next,无限next,不能直接使用$this->_firstNode,$this->_firstNOde的值不能改变，它需要每次进来的时候赋值给$currentNode,然后循环得到最里面的next
			}
			$currentNode->next = $newNode;	
		} else {
			$this->_firstNode = $newNode;
		}
	}

	public function adisplay()
	{
		p($this->_firstNode);
	}
}