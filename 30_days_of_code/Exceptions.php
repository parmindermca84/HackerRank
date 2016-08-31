<?php
/**
 * @author Parminder Singh <parmindermca84@gmail.com>
 * Day 16: Exceptions - String to Integer
 */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);
set_error_handler("BadString");
function BadString($errno, $errstr, $errfile, $errline)
{
    throw new BadStringException('Bad String');
}


class BadStringException extends Exception { }    

class Numeric extends BadStringException
{
    private $number;
    public function __construct($input)
    {
        $this->number = intval($input);
    }
    
    public function Display()
    {
        echo ($this->number / $this->number) + ($this->number - 1);
    }
}

try {
    (new Numeric($S))->Display();
} catch (BadStringException $E) {
    echo $E->getMessage();
}
