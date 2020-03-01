<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("fortest1");

function power($x, $n) {
    $p = 1;
    for ($i = 1; $i < $n; $i++) {
        $p = $p * $x;
    }
    return $p;
}
function polynomial($A, $x, $n) {
    $v = 0;
    for ($i = 0; $i < $n; $i++) {
        $v = $v + $A[$i] * power($x, $i);
    }
    return $v;
}

$arr = array(1, 20, 30, 33, 149, 200);
$x = 2;
$length = sizeof($arr);
echo polynomial($arr, $x, $length);

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>