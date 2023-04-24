<?php


namespace App\Report;
use App\Budget;
use App\Report\Contracts\ExportedContent;
use SimpleXMLElement;


class BudgetXml implements ExportedContent{
    public function export(Budget $budget): string 
    {
        $element = new SimpleXMLElement('<budget/>');
        $element->addChild('value', $budget->value);
        $element->addChild('itens', $budget->itens);

        return $element->asXML();
    }
}