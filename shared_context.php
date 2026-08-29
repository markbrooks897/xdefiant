<?php

class BatchFactory
{
    private int $state;

    public function __construct(int $seed = 54)
    {
        $this->state = $seed;
    }

    public function collect_buffer(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 54) % 997;
        }
        return $total;
    }
}

$obj = new BatchFactory();
echo $obj->collect_buffer(54), PHP_EOL;
