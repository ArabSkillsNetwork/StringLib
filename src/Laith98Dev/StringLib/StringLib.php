<?php

namespace Laith98Dev\StringLib;

use RuntimeException;

class StringLib {

    /**
     * Get double quotations args from the text
     * 
     * Example:
     * <Hello "Mr Laith98Dev" or "Hi Sir Laith98Dev">
     * The result of below text is array contains the double quotations => ["Mr Laith98Dev", "Hi Sir Laith98Dev"]
     * 
     * I am actully using this for custom command like
     * /set-player-nick "Laith98Dev" "Owner"
     * so i can easily get the args
     */
    public static function getQuotationMarks(string $input_text, string $type = '"'): StringResult{
        $output = [];

        if(!in_array($type, ["'", '"'])){
            throw new RuntimeException("Unsupported quotation mark");
        }

        preg_match_all('/' . $type . '/', $input_text, $matches, PREG_OFFSET_CAPTURE);

        $positions = array_column($matches[0], 1);
        $chunks = array_chunk($positions, 2);

        $out = [];

        foreach ($chunks as $_ => $data){
            if(count($data) < 2) continue;
            [$pos1, $pos2] = $data;
            $out[] = str_replace($type, '', substr($input_text, $pos1, ($pos2 - $pos1) + 1));
        }
        
        return StringResult::create($input_text, $output);
    }
}
