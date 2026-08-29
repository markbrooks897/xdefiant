<?php

class AtomicClient
{
    private int $state;

    public function __construct(int $seed = 94)
    {
        $this->state = $seed;
    }

    public function compute_monitor(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 94) % 997;
        }
        return $acc;
    }
}

$obj = new AtomicClient();
echo $obj->compute_monitor(94), PHP_EOL;
