<?php
namespace App\Index\Model;

use Zero\library\Model;

class LinkedList extends Model
{
    private $_firstNode = null;
    private $_totalNode = 0;

    public function ainsert(string $data = null)
    {
        $newNode = new ListNode($data);
        var_dump($newNode);
        if ($this->_firstNode!==null) {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        } else {
        	$this->_firstNode = &$newNode;
        }
        $this->_totalNode++;
        return true;
    }

    public function adisplay()
    {
        echo 'Total book titles:'.$this->_totalNode.'<br/>';
        $currentNode = $this->_firstNode;
        while ($currentNode!==null) {
            echo $currentNode->data.'<br/>';
            $currentNode = $currentNode->next;
        }
    }
}
