<?php

namespace IvanDanylenko\Logger;

use Psr\Log\AbstractLogger;

/**
 * Class to provide application logging
 */
class Logger extends AbstractLogger
{
    /**
     * @var array
     */
    private $writers = [];

    public function __construct(WriterInterface $writer)
    {
        $this->writers[] = $writer;
    }

    /**
     * Write logs with help of writers
     *
     * @param string $level
     * @param string $message
     * @param array $context
     */
    public function log($level, $message, $context = [])
    {
        foreach ($this->writers as $writer) {
            $writer->write($level, $message, $context);
        }
    }

    /**
     * Gives avility to add more writers
     * @param WriterInterface $writer
     */
    public function addWriter(WriterInterface $writer)
    {
        $this->writers[] = $writer;
    }
}
