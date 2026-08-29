<?php

class AtomicGateway
{
    private int $state;

    public function __construct(int $seed = 81)
    {
        $this->state = $seed;
    }

    public function fetch_manager(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 81) % 997;
        }
        return $total;
    }
}

$obj = new AtomicGateway();
echo $obj->fetch_manager(81), PHP_EOL;
