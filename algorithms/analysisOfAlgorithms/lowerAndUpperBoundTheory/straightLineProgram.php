<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("fortest1");

function sum($a, $b) {
    return $a + $b;
}

echo sum(10, 20);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>