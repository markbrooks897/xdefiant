<?php

class SharedProcessor
{
    private int $state;

    public function __construct(int $seed = 50)
    {
        $this->state = $seed;
    }

    public function fetch_monitor(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 50) % 997;
        }
        return $result;
    }
}

$obj = new SharedProcessor();
echo $obj->fetch_monitor(50), PHP_EOL;
