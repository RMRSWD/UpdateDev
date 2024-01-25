<?php
namespace App\Service;
use Parsedown;
class MardownParser{
    public function parse(string $markdown):string{
        $parsedown = new Parsedown();
        return $parsedown->text($markdown);

}
}