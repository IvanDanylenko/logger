<?php

namespace IvanDanylenko\Logger;

class FileWriter implements WriterInterface
{
    private $formatter;
    private $filename;

    public function __construct(FormatterInterface $formatter, string $filename = '/logs/log.txt')
    {
        $this->formatter = $formatter;
        $this->filename = getcwd() . $filename;
    }

    public function write($level, $message, $context = []): void
    {
        if (!file_exists($this->filename)) {
            $dirname = pathinfo($this->filename)['dirname'];
            mkdir($dirname, 0777, true);
        }

        $logLine = $this->formatter->format($level, $message, $context) . PHP_EOL;
        file_put_contents($this->filename, $logLine, FILE_APPEND);
    }
}
