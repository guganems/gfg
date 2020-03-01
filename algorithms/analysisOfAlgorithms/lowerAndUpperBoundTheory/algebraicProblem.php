<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("fortest1");

function Algo_Sol($a, $b, $c, $x) {
    $v = $a * $x;
    $v = $v + $b;
    $v = $v * $x;
    return $v + $c;
}

echo Algo_Sol(1, 25, 10, 5);

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>