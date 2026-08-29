<?php

class SharedCache
{
    private int $state;

    public function __construct(int $seed = 25)
    {
        $this->state = $seed;
    }

    public function run_cache(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 25) % 997;
        }
        return $result;
    }
}

$obj = new SharedCache();
echo $obj->run_cache(25), PHP_EOL;
