<?php

class LiteContext
{
    private int $state;

    public function __construct(int $seed = 23)
    {
        $this->state = $seed;
    }

    public function run_gateway(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 23) % 997;
        }
        return $acc;
    }
}

$obj = new LiteContext();
echo $obj->run_gateway(23), PHP_EOL;
