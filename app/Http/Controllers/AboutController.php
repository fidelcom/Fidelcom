<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function insert($data)
    {
        $newNode = new Node($data);
        if ($this->head != null) {
            $this->head = $newNode;
        } else {
            $currentNode = $this->head;
            while ($currentNode->next != null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
    }

    public function remove($data)
    {
        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return;
        }

        $currentNode = $this->head;
        while ($currentNode->next !== null && $currentNode->next->data !== $data) {
            $currentNode = $currentNode->next;
        }
        if ($currentNode->next != null) {
            $currentNode->next = $currentNode->next->next;
        }
    }

    public function display()
    {
        $currentNode = $this->head;
        while ($currentNode->next != null) {
            echo $currentNode->data. '->';
            $currentNode = $currentNode->next;
        }
        echo "null\n";
    }
}

//create linked lisst
$linkedList = new LinkedList();
$linkedList->insert('Apple');
$linkedList->insert('Banana');
$linkedList->insert('Orange');
$linkedList->insert('Cherry');
$linkedList->display();

//remove
$linkedList->remove('Orange');
$linkedList->display();


class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function create($data)
    {
        $newNode = Node();
    }
}
