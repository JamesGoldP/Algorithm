<?php
namespace App\Index\Model;

use Zero\library\Model;

class LinkedList extends Model
{
	private $_firstNode = NULL;
	private $_totalNode = 0;

	/**
	 * Whether is empty 
	 * @return boolean
	 */ 	
	public function isEmpty()
	{
		return $this->_firstNode === NULL;		
	}

	/**
	 * Getting the size of the linked list 
	 * 
	 */ 	
	public function getTotal()
	{
		return $this->_totalNode;		
	}

	/**
	 * Inserting a new item to the linkedlist.
	 * 
	 */
	public function insert(string $data = NULL)
	{
		if( !$this->isEmpty() ){
			$currentNode = $this->_firstNode;
			while( $currentNode->next !== NULL ){		
				$currentNode = $currentNode->next;
			}
			$currentNode->next = $this->createNode($data);	
		} else {
			$this->insertAtFirst($data);	
		}
		return true;	
	}

	/**
	 * Display all items in the linked list.
	 * 
	 */
	public function display()
	{
		$string = 'Total:'.$this->_totalNode.'<br/>';
		if( !$this->isEmpty() ){
			$currentNode = $this->_firstNode;
			while( $currentNode !== NULL ){	
				$string.= $currentNode->data.'<br/>';	
				$currentNode = $currentNode->next;
			}
		} 	
		return $string;
	}

	/**
	 * Inserting a new item at the first.
	 * 
	 */
	public function insertAtFirst(string $data = NULL)
	{
		$newNode = $this->createNode($data);
		if( $this->_firstNode === NULL){
			$this->_firstNode = $newNode;	
		} else {
			$newNode->next = $this->_firstNode;
			$this->_firstNode = $newNode;	
		}
		return true;	
	}

	private function createNode(string $data = NULL)
	{
		$this->_totalNode++;
		return new ListNode($data);
	}

	/**
	 * Inserting a new item at end of the linked list.
	 * 
	 */
	public function search( string $query = NULL )
	{

		if( !$this->isEmpty() ){
			$currentNode = $this->_firstNode;
			while ( $currentNode !== NULL ) {
				if( $currentNode->data == $query) {
					return $currentNode;  
				}
				$currentNode = $currentNode->next;
			}

		}	
		return FALSE;
	}

	/**
	 * 
	 * Getting the Nth item.
	 * 
	 */
	public function getNthNode(int $n = 0)
	{
		if( !$this->isEmpty() ){
			$currentNode = $this->_firstNode;
			$i = 1;
			while ( $currentNode !== NULL ) {
				if( $n == $i ) {
					return $currentNode;  
					break;	
				}
				$currentNode = $currentNode->next;
				$i++;
			}
		}	
	}


	/**
	 * Inserting a new item after a specific tiem.
	 * 
	 */
	public function insertAfter(string $data = NULL, string $query = NULL)
	{
		if( !$this->isEmpty() ){
			$newNode = $this->createNode($data);
			$currentNode = $this->_firstNode;
			while ( $currentNode !== NULL ) {
				if( $currentNode->data === $query) {
					$newNode->next = $currentNode->next; 
					$currentNode->next = $newNode;
					break;	
				}
				$currentNode = $currentNode->next;
			}
		}	

	}


	/**
	 * Inserting a new item before a specific tiem.
	 * 
	 */
	public function insertBefore(string $data = NULL, string $query = NULL)
	{
		if( !$this->isEmpty() ){
			$currentNode = $this->_firstNode;
			$previous = NULL;
			$newNode = $this->createNode($data);
			while ( $currentNode !== NULL ) {
				if( $currentNode->data === $query) {
					$newNode->next = $currentNode;
					$previous->next = $newNode;
					break;	
				}
				$previous = $currentNode;
				$currentNode = $currentNode->next; // $currentNode->netxt这里的$currentNode是前一个
			}
		}	

	}

	/**
	 * 
	 * Deleting the first item.
	 * 
	 */
	public function deleteFirst()
	{
		
		if( !$this->isEmpty() ){
			if( $this->_firstNode->next !== NULL ){
				$this->_firstNode = $this->_firstNode->next;
			} else {
				$this->_firstNode = NULL;
			}
			$this->_totalNode--;
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * 
	 * Deleting the last item.
	 * 
	 */
	public function deleteLast()
	{
		
		if( !$this->isEmpty() && $this->_firstNode->next !== NULL){
			$previous = NULL;
			$currentNode = $this->_firstNode;
			while( $currentNode->next !== NULL ){	
				$previous = $currentNode;	
				$currentNode = $currentNode->next;
			}
			$previous->next = NULL;
			$this->_totalNode--;
			return TRUE;
		} else {
			$this->_firstNode = NULL;
		}
	}

	/**
	 * 
	 * Deleting an item which is searched for .
	 * 
	 */
	public function delete(string $query)
	{
		
		if( !$this->isEmpty() ){
			$currentNode = $this->_firstNode;
			$previous = NULL;
			while ( $currentNode !== NULL ) {
				if( $currentNode->data == $query) {
					if( $currentNode->next !== NULL ){
						$previous->next = $currentNode->next; 
					} else {
						$previous->next = NULL;
					}
					$this->_totalNode--;
					break;
				}
				$previous = $currentNode;
				$currentNode = $currentNode->next;
			}
		}			
	}

	/**
	 * 
	 * Reversing the linked list .
	 * 
	 */
	public function reverse()
	{
		if( !$this->isEmpty() && $this->_firstNode->next !== NULL){
			$reversedList = NULL;	
			$currentNode = $this->_firstNode;
			while ( $currentNode !== NULL ) {
				$nextNode = $currentNode->next;
				$currentNode->next = $reversedList;
				$reversedList = $currentNode;
				$currentNode = $nextNode;
			}
			$this->_firstNode = $reversedList;
		}
	}


}