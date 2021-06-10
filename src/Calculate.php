<?php

namespace Homework2;


class Calculate
{
    public function execute($str)
    {
        $str = $this->removeSubstr($str);
        var_dump($str);
    }

    public static function removeSubstr($str)
    {
        $pattern = ['/\n/'];
        $replacement = "";
        return preg_replace($pattern, $replacement, $str);
    }
}
