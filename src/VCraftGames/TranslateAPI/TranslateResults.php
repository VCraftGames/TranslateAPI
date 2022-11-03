<?php

declare(strict_types=1);

namespace VCraftGames\TranslateAPI;

class TranslateResults{

    private string $text, $from, $to;

    public function __construct(string $from, string $to, string $text){
        $this->from = $from;
        $this->to = $to;
        $this->text = $text;
    }

    public function getText(): string{
        return $this->text;
    }

    public function getFrom(): string{
        return $this->from;
    }

    public function getTo(): string{
        return $this->to;
    }
}