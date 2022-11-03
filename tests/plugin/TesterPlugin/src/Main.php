<?php

declare(strict_types=1);

namespace VCraftGames\TesterPlugin;

use pocketmine\plugin\PluginBase;
use VCraftGames\TranslateAPI\Translate;

final class Main extends PluginBase{

    public function onEnable(): void{
        $text = "Hello World!";
        $from = "en";
        $to = "ja";
        $results = Translate::translate($text, $from, $to);
        if($results === null){
            $this->getLogger()->error("Failed to translate!");
        } else{
            $this->getLogger()->info("Translated text: " . $results->getText());
            $this->getLogger()->info("Translated from: " . $results->getFrom());
            $this->getLogger()->info("Translated to: " . $results->getTo());
        }
    }
}