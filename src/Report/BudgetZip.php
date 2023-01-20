<?php

namespace App\Report;
use App\Budget;
use ZipArchive;


class BudgetZip
{
    public function export(Budget $budget): void 
    {
        $path = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'budget.zip';

        $zip = new ZipArchive;
        $zip->open($path, ZipArchive::CREATE);

        $zip->addFromString('budget.serial', serialize($budget));
        $zip->close();
    }
}