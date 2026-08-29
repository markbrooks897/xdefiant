<?php

class AsyncBuffer
{
    private int $state;

    public function __construct(int $seed = 34)
    {
        $this->state = $seed;
    }

    public function flush_controller(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 34) % 997;
        }
        return $value;
    }
}

$obj = new AsyncBuffer();
echo $obj->flush_controller(34), PHP_EOL;
