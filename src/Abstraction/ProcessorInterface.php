<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction;

interface ProcessorInterface
{
    public function process();

    public function get();
}
