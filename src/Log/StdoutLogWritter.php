<?php


namespace APp\Log;

use App\Log\LogWritter;

class StdoutLogWritter implements LogWritter
{

	public function write(string $formatedMessage): void
	{
		echo $formatedMessage;
	}

	
}