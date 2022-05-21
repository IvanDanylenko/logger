<?php

namespace IvanDanylenko\Logger;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    private $writers = [];

    public function __construct(WriterInterface $writer)
    {
        $this->writers[] = $writer;
    }

    public function log($level, $message, $context = [])
    {
        foreach ($this->writers as $writer) {
            $writer->write($level, $message, $context);
        }
    }

    public function addWriter(WriterInterface $writer)
    {
        $this->writers[] = $writer;
    }
}
