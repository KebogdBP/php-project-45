<?php

namespace Php\Package;

use Illuminate\Support\Collection;

class User
{
    private string $_name;
    private Collection $_children;

    public function __construct(string $name, array $children = [])
    {
        $this->_name = $name;
        $this->_children = collect($children);
    }

    public function getName(): string
    {
        return $this->_name;
    }

    public function getChildren(): Collection
    {
        return $this->_children;
    }
}
