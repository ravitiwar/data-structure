<?php

namespace Zoxsys\Ds\LinkedList;

use Zoxsys\Ds\LinkedList\Exceptions\EmptyLinkedListException;

/**
 * Class LinkedList
 */
class LinkedList
{

    private ?Node $head = null;

    /**
     * Set head node
     */
    private function setHead(Node $node): void
    {
        $this->head = $node;
    }

    /**
     * Get Head node
     */
    public function getHead(): ?Node
    {
        return $this->head;
    }

    /**
     * Append a data in the list
     */
    public function append(int $data): void
    {
        $current = $this->getHead();
        $newNode = new Node($data);
        if (is_null($this->getHead())) {
            $this->setHead($newNode);
        } else {
            while (null != $current->getNextNode()) {
                $current = $current->getNextNode();
            }
            $current->setNextNode(new Node($data));
        }
    }

    /**
     * Prepend data in list
     */
    public function prepend(int $data)
    {
        $node = new Node($data);
        if (is_null($this->getHead())) {
            $this->setHead($node);
        } else {
            $node->setNextNode($this->getHead());
            $this->setHead($node);
        }
    }

    /**
     * Remove a node with given value
     * @param  int  $data
     * @throws EmptyLinkedListException
     */
    public function removeWithValue(int $data): void
    {
        if (is_null($this->getHead())) {
            throw new EmptyLinkedListException("Linked list is empty");
        }
        $current = $this->getHead();
        if ($current->getData() == $data) {
            $this->setHead($current->getNextNode());
        } else {
            while (null !== ($nextNode = $current->getNextNode())) {
                if ($data = $nextNode->getData()) {
                    $current->setNextNode($nextNode->getNextNode());
                }
            }
        }
    }
}
