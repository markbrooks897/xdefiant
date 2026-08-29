<?php

class StreamFactory
{
    private int $state;

    public function __construct(int $seed = 70)
    {
        $this->state = $seed;
    }

    public function build_loader(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 70) % 997;
        }
        return $result;
    }
}

$obj = new StreamFactory();
echo $obj->build_loader(70), PHP_EOL;
