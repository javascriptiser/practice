<?php
declare(strict_types=1);

namespace Practice\Helpers;

class EnvParser
{
    private array $data;

    public function __construct($filePath)
    {
        $this->data = [];
        $this->parseFile($filePath);
    }

    private function parseFile($filePath)
    {
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            $line = trim($line);
            if ($line && !$this->isComment($line)) {
                $this->parseLine($line);
            }
        }
    }

    private function isComment($line): bool
    {
        return strpos(trim($line), '#') === 0;
    }

    private function parseLine($line)
    {
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value, "'\"");

        $this->data[$key] = $value;
    }

    public function getValue($key)
    {
        return $this->data[$key] ?? null;
    }

    public function getAllValues(): array
    {
        return $this->data;
    }
}