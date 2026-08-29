<?php

class HybridFactory
{
    private int $state;

    public function __construct(int $seed = 72)
    {
        $this->state = $seed;
    }

    public function encode_factory(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 72) % 997;
        }
        return $acc;
    }
}

$obj = new HybridFactory();
echo $obj->encode_factory(72), PHP_EOL;
