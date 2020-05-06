<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>

    <?$APPLICATION->IncludeComponent("sebekon:complex", ".default", ["SEF_FOLDER" => "/complex/"]);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>