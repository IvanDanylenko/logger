<?php

namespace IvanDanylenko\Logger;

class StringFormatter implements FormatterInterface
{
    public function format($level, $message, $context = [])
    {
        $now = date('Y-m-d H:i:s');
        return $now . ' | ' . strtoupper($level) . ' | ' . trim($message) . ' | ' . serialize($context);
    }
}
