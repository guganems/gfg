<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("fortest1");

function polynomial($A, $x, $n) {
    $v = 0;
    for ($i = $n; $i > 0; $i--) {
        $v = ($v + $A[$i]) * $x;
    }
    return $v;
}

$arr = array(1, 20, 30, 33, 149, 200);
$x = 2;
$length = sizeof($arr);
echo polynomial($arr, $x, $length);

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>