<?php


namespace App\Report;
use App\Budget;
use SimpleXMLElement;


class BudgetXml{
    public function export(Budget $budget): string 
    {
        $element = new SimpleXMLElement('<budget/>');
        $element->addChild('value', $budget->value);
        $element->addChild('itens', $budget->itens);

        return $element->asXML();
    }
}