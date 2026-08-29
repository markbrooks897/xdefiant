<?php

class DynamicMonitor
{
    private int $state;

    public function __construct(int $seed = 21)
    {
        $this->state = $seed;
    }

    public function load_context(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 21) % 997;
        }
        return $value;
    }
}

$obj = new DynamicMonitor();
echo $obj->load_context(21), PHP_EOL;
