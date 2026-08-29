<?php

class SharedClient
{
    private int $state;

    public function __construct(int $seed = 73)
    {
        $this->state = $seed;
    }

    public function compute_controller(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 73) % 997;
        }
        return $count;
    }
}

$obj = new SharedClient();
echo $obj->compute_controller(73), PHP_EOL;
