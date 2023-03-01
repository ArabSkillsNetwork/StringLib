<?php

namespace Laith98Dev\StringLib;

class StringResult {

    /**
     * @return self
     */
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

    /**
     * @return string
     */
    public function getText(): string{
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getOutput(): mixed{
        return $this->output;
    }

    /**
     * @return array
     */
    public function asArray(): array{
        $output = $this->getOutput();

        return match (true){
            is_array($output) => $output,
            is_string($output) => [$output],
            default => []
        };
    }

    /**
     * @return string
     */
    public function asString(): string{
        $output = $this->getOutput();

        return match (true){
            is_string($output) => $output,
            is_array($output) => implode("", $output),
            default => ""
        };
    }
}