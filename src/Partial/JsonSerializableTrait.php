<?php

namespace Budkovsky\Aid\Partial;

class JsonSerializableTrait
{
    public function jsonSerialize ();

    abstract public function toArray(): ?array;
}
