<?php

namespace IvanDanylenko\Logger;

interface WriterInterface
{
    public function write($level, $message, $context = []);
}
