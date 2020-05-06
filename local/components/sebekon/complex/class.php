<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class ComplexComponent extends \CBitrixComponent
{

    use \Sebekon\ComplexComponent\Generator;

    public function onPrepareComponentParams($arParams)
    {
        $this->setBaseUrl($arParams["SEF_FOLDER"]);

        $this->setDefaultVariables(
            [
                'SECTION_ID',
                'ELEMENT_ID',
                'EVENT'
            ]
        );

        $this->setDefaultTemplates(
            [
                'list' => '#SECTION_ID#/',
                'detail' => '#SECTION_ID#/#ELEMENT_ID#/',
                'create' => '#SECTION_ID#/#ELEMENT_ID#/create/',
                'edit' => '#SECTION_ID#/#ELEMENT_ID#/edit/#EVENT#/',
            ]
        );
    }
}
