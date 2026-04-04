<?php

namespace Php\Package;

use Illuminate\Support\Collection;

class User
{
    public readonly string $name;
    public readonly Collection $children;

    public function __construct(string $name, array $children = [])
    {
        $this->name = $name;
        $this->children = collect($children);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChildren(): Collection
    {
        return $this->children;
    }
}
