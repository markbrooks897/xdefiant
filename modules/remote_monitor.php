<?php

class CoreProcessor
{
    private int $state;

    public function __construct(int $seed = 35)
    {
        $this->state = $seed;
    }

    public function resolve_handler(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 35) % 997;
        }
        return $acc;
    }
}

$obj = new CoreProcessor();
echo $obj->resolve_handler(35), PHP_EOL;
