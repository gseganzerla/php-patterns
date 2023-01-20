<?php

namespace App\Report;
use App\Report\Contracts\ExportedContent;
use App\Report\Contracts\ExportedFile;

class ExportedFileZip implements ExportedFile
{
    public function __construct(private string $internalFile)
    {
    }

    public function save(ExportedContent $exportedContent): string
    {
        $file = new \ZipArchive();
        $tempFile = tmpfile();

        $file->open($tempFile);
        $file->addFromString($this->internalFile, serialize($exportedContent->content()));
        $file->close();

        return $tempFile;
    }
}
