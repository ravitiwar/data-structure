<?php

namespace Zoxsys\Ds\LinkedList\Tests;

use PHPUnit\Framework\TestCase;
use Zoxsys\Ds\LinkedList\LinkedList;
use Zoxsys\Ds\LinkedList\Node;

class LinkedListTest extends TestCase
{
    public function testAppend()
    {
        $nodeValue = 5;
        $linkedList = new LinkedList();
        $linkedList->append($nodeValue);
        self::assertEquals(new Node(5), $linkedList->getHead());
    }

    public function testPrepend()
    {
        $nodeValues = [1, 5, 6, 3, 3, 6];
        $prependValue = 10;
        $linkedList = new LinkedList();
        foreach ($nodeValues as $nodeValue) {
            $linkedList->append($nodeValue);
        }
        $prependNode = new Node($prependValue);
        $prependNode->setNextNode($linkedList->getHead());
        $linkedList->prepend($prependValue);
        self::assertEquals($prependNode, $linkedList->getHead());
    }
}
