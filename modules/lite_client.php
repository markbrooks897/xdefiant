<?php

class LocalDispatcher
{
    private int $state;

    public function __construct(int $seed = 96)
    {
        $this->state = $seed;
    }

    public function load_handler(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 96) % 997;
        }
        return $acc;
    }
}

$obj = new LocalDispatcher();
echo $obj->load_handler(96), PHP_EOL;
