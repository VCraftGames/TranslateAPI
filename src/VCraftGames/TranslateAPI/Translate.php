<?php

declare(strict_types=1);

namespace VCraftGames\TranslateAPI;

use pocketmine\utils\Internet;

class Translate {

    private const URL = "https://vcraftmc.cf/api/translate.php?sl=%s&tl=%s&text=%s";

    public static function translate($text, $from, $to): TranslateResults|null{
        $url = sprintf(Translate::URL, $from, $to, $text);
        $query = Internet::getURL($url);
        if($query === false){
            return null;
        } else{
            $json = json_decode($query->getBody(), true);
            return new TranslateResults($json["from"], $json["to"], $json["translated"]);
        }
    }
}