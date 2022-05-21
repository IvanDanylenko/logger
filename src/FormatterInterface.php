<?php

namespace IvanDanylenko\Logger;

interface FormatterInterface
{
    public function format($level, $message, $context);
}
