<?php

namespace Zoxsys\Ds\LinkedList;

class Node
{
    /**
     * @var Node
     */
    private $next = null;

    /**
     * @var int
     */
    private $data = null;

    /**
     * Node constructor.
     *
     * @param int $data
     */
    public function __construct(int $data = null)
    {
        $this->setData($data);
    }

    public function setData(int $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Get Next Node
     *
     * @return Node
     */
    public function getNextNode(): ?Node
    {
        return $this->next;
    }

    /**
     * Set Next Node
     *
     * @return Node
     */
    public function setNextNode(Node $node): void
    {
        $this->next = $node;
    }

    /**
     * Get data of the node
     */
    public function getData(): ?int
    {
        return $this->data;
    }
}
