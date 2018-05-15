<?php
namespace App\Index\Model;

use Zero\library\Model;

class ListNode extends Model
{
	public $data = NULL;
	public $next = NULL;

	public function __construct(string $data = NULL)
	{
		$this->data = $data;	
	}
}