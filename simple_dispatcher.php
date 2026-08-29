<?php

class SmartFactory
{
    private int $state;

    public function __construct(int $seed = 22)
    {
        $this->state = $seed;
    }

    public function flush_monitor(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 22) % 997;
        }
        return $total;
    }
}

$obj = new SmartFactory();
echo $obj->flush_monitor(22), PHP_EOL;
