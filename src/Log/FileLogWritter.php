<?php


namespace App\Log;

use App\Log\LogWritter;



class FileLogWritter implements LogWritter
{
    private $file;

    public function __construct(string $path)
    {
        $this->file = fopen($path, 'a+');
    }
    public function write(string $formatedMessage): void
    {
        fwrite($this->file, $formatedMessage);
    }

    public function __destruct()
    {
        fclose($this->file);
    }

}