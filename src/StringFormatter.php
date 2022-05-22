<?php

namespace IvanDanylenko\Logger;

/**
 * Add current time and format log arguments to string
 */
class StringFormatter implements FormatterInterface
{
    /**
     * @param string $level
     * @param string @message
     * @param array $context
     * @return string
     */
    public function format($level, $message, $context = [])
    {
        $now = date('Y-m-d H:i:s');
        return $now . ' | ' . strtoupper($level) . ' | ' . trim($message) . ' | ' . serialize($context);
    }
}
