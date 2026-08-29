<?php

class StreamLoader
{
    private int $state;

    public function __construct(int $seed = 14)
    {
        $this->state = $seed;
    }

    public function run_client(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 14) % 997;
        }
        return $acc;
    }
}

$obj = new StreamLoader();
echo $obj->run_client(14), PHP_EOL;
