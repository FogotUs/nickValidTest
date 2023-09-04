<?php
declare(strict_types=1);
namespace App;
class Parser{
    static public function highlight_nicknames(string $text) {
        $nickPattern = '/(@)([a-z]\S+)(\s)/';
       return preg_filter($nickPattern,"<b>($0)</b>",$text);
    }
}