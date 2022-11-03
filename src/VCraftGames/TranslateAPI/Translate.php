<?php

declare(strict_types=1);

namespace VCraftGames\TranslateAPI;

use pocketmine\utils\Internet;

class Translate {

    private const URL = "https://vcraftmc.cf/api/translate.php?sl=%s&tl=%s&text=%s";

    public static function translate($from = "", $to = "", $text = ""): TranslateResults|null{
        $url = sprintf(Translate::URL, $from, $to, $text);
        $query = Internet::getURL($url);
        if($query === false || $query === null){
            return null;
        }
        $json = json_decode($query->getBody(), true);
        if(isset($json["status"]) && $json["status"] === 0){
            throw new TranslateException($json["message"]);
        }
        return new TranslateResults($json["from"], $json["to"], $json["translated"]);
    }
}