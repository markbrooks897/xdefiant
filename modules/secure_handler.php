<?php

class SmartWorker
{
    private int $state;

    public function __construct(int $seed = 34)
    {
        $this->state = $seed;
    }

    public function build_client(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 34) % 997;
        }
        return $acc;
    }
}

$obj = new SmartWorker();
echo $obj->build_client(34), PHP_EOL;
