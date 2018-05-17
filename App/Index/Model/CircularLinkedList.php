<?php
namespace App\Index\Model;

use Zero\library\Model;

class CircularLinkedList extends Model
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
     * 
     */
    public function insertAtEnd(string $data = NULL)
    {
        $newNode = $this->createNode($data);  
        if( !$this->isEmpty() ){
            $currentNode = $this->_firstNode;
            while( $currentNode->next !== $this->_firstNode ){       
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        } else {
            $this->_firstNode = $newNode;  
        }
        $newNode->next = $this->_firstNode; 
        return TRUE;    
    }

    /**
     * Display all items in the linked list.
     * 
     */
    public function display()
    {
        $string = 'Total:'.$this->_totalNode.'<br/>';
        // p($this->_firstNode);
        if( !$this->isEmpty() ){
            $currentNode = $this->_firstNode;
            while( $currentNode->next !== $this->_firstNode ){      
                $string .= $currentNode->data.'<br/>';   
                $currentNode = $currentNode->next;
            }
            $string .= $currentNode->data; 
        }   
        return $string;
    }

    private function createNode(string $data = NULL)
    {
        $this->_totalNode++;
        return new ListNode($data);
    }

}