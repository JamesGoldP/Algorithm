<?php
namespace App\Index\Controller;

use Zero\library\Controller;
use Zero\library\Factory;

class Test extends Controller
{
    public function index()
    {
    }


    public function init()
    {
        $bookList = ['PHP','MySQL','PGSQL','Oracle','Java'];
        $orderedBooks = ['MySQL','PGSQL','Java'];
        $this->placeAllBooks($orderedBooks, $bookList);
        echo implode(",", $bookList);
    }

    public function findABook(array $bookList, String $bookName)
    {
        $found = false;
        foreach ($bookList as $index => $book) {
            if ($book === $bookName) {
                $found = $index;
                break;
            }
        }
        return $found;
    }
    public function placeAllBooks(array $orderedBooks, array &$bookList)
    {
        foreach ($orderedBooks as $book) {
            $bookFound = $this->findABook($bookList, $book);
            if ($bookFound !== false) {
                array_splice($bookList, $bookFound, 1);
            }
        }
    }
}
