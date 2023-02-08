<?php

namespace Laith98Dev\StringLib;

class StringResult {

    public static function create(string $text, mixed $output): self
    {
        return new self($text, $output);
    }
    
    public function __construct(
        private string $text,
        private mixed $output
    ){
        // NOOP
    }

    public function getText(): string{
        return $this->text;
    }

    public function asArray(): array{

        if(is_array($this->output)){
            return $this->output;
        }

        return [];
    }
}