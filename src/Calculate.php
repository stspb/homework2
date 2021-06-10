<?php

namespace Homework2;


class Calculate
{
    public function execute($str)
    {
        $pattern = ["/\\\\n/", "/\\\\r/", "/\\\\t/", "/\s/"];
        $replacement = "";
        $str = preg_replace($pattern, $replacement, $str);
        if (preg_match_all('/[^\(^\)]/', $str, $matches)) {
            throw new \InvalidArgumentException('Лишние символы!');
        }

        return preg_match_all('/\(/', $str, $matches) === preg_match_all('/\)/', $str, $matches);
    }

    public function readFromFile($path)
    {
        if (!$path) return;
        return file_get_contents($path);
    }
}
