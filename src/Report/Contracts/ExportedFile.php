<?php

namespace App\Report\Contracts;

interface ExportedFile
{
    public function save(ExportedContent $exportedContent): string;
}
