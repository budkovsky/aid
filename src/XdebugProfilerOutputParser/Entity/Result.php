<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\XdebugProfilerOutputParser\Entity;

/**
 * Parsed result from xdebug profiler output
 */
class Result
{
    protected $version;
    protected $creator;
    protected $cmd;
    protected $part;
    protected $position;
    protected $events;
    protected $files;
    protected $functions;
    protected $summary;
}
