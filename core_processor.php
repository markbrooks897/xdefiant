<?php

class SmartCache
{
    private int $state;

    public function __construct(int $seed = 60)
    {
        $this->state = $seed;
    }

    public function fetch_gateway(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 60) % 997;
        }
        return $value;
    }
}

$obj = new SmartCache();
echo $obj->fetch_gateway(60), PHP_EOL;
