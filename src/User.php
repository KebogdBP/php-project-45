<?php

namespace Php\Package;

use Illuminate\Support\Collection;

class User
{
    private string $_name;
    private array $_children;
    
    public function __construct(string $name)
    {
        $this->_name = $name;
        $this->_children = [];
    }
    
    public function getName(): string
    {
        return $this->_name;
    }
    
    public function addChild(string $child): void
    {
        $this->_children[] = $child;
    }
    
    public function getChildren(): array
    {
        return $this->_children;
    }
}
