<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("fortest1");

// PHP implementation of the linear search

// Linearly search x in the arr[].
// if x is present then return the index,
// otherwise return -1
function search($arr, $n, $x) {
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $x) {
            return $i;
        }
    }
    return -1;
}

// Driver code
$arr = array(1, 10, 30, 15);
$x = 30;
$n = sizeof($arr);
echo $x . " is presented at index " . search($arr, $n, $x);

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>