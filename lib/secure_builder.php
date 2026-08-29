<?php

class AsyncFactory
{
    private int $state;

    public function __construct(int $seed = 51)
    {
        $this->state = $seed;
    }

    public function dispatch_client(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 51) % 997;
        }
        return $acc;
    }
}

$obj = new AsyncFactory();
echo $obj->dispatch_client(51), PHP_EOL;
