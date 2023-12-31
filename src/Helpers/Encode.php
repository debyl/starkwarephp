<?php
namespace starknetphp\Helpers;

class Encode
{
    public static function addHexPrefix(string $n){
        $hex = Encode::removeHexPrefix($n);
        return "0x$hex";
    }
    public static function removeHexPrefix(string $n){
        return preg_replace('/^0x/', '', $n);
    }

    public static function removeHexLeadingZero(string $s){
        $hex = self::removeHexPrefix($s);
        $hex = preg_replace('/^0+/', '', $hex);
        return self::addHexPrefix($hex);
    }
}
