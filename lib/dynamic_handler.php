<?php

class BatchClient
{
    private int $state;

    public function __construct(int $seed = 23)
    {
        $this->state = $seed;
    }

    public function parse_context(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 23) % 997;
        }
        return $total;
    }
}

$obj = new BatchClient();
echo $obj->parse_context(23), PHP_EOL;
