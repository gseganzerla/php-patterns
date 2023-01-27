<?php

namespace App\Report;

use App\Report\Contracts\ExportedContent;
use App\Report\Contracts\ExportedFile;
use SimpleXMLElement;

class ExportedFileXml implements ExportedFile
{
    public function __construct(private string $parentElement)
    {
    }

    public function save(ExportedContent $exportedContent): string
    {
        $xml = new SimpleXMLElement("<{$this->parentElement}/>");

        foreach ($exportedContent->content() as $item => $value) {
            $xml->addChild($item, $value);
        }

        $tempFile = tmpfile();
        $xml->asXML($tempFile);

        return $tempFile;
    }
}
