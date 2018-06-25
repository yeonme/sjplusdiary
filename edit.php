<?php
require_once "inc.php";
$y = $_GET["y"];
$m = $_GET["m"];
$d = $_GET["d"];
$datefrom = $y . "-" . $m . "-" . $d;
$dateto = $y . "-" . $m . "-" . ($d + 1);
/*if ($result = $dbcon->query("select * from sj_diary where date >= '" . $datefrom . "' and date < '" . $dateto . "'") && $result->num_rows > 0) {
while ($row = $result->fetch_row()) {
printf("%s (%s)\n", $row[0], $row[1]);
}
} else {
mysqli_close($dbcon);
exit;
}*/
$title = "";
$body = "";
echo $datefrom;
?>
<div class="title">
<textarea id="titleEdit" rows='1' data-min-rows='1' placeholder='Title' class="autoExpand"></textarea>
</div>
<div id="summernote" style="height:100%;">Hello Summernote</div>
<script>cloadFinish();</script>
<?php mysqli_close($dbcon);?>
