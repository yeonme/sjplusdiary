<?php
require_once "inc.php";
$y = $_GET["y"];
$m = $_GET["m"];
$d = $_GET["d"];
$datefrom = $y . "-" . $m . "-" . $d;
$dateto = $y . "-" . $m . "-" . ($d + 1);
if ($result = $dbcon->query("select * from sj_diary where date >= '" . $datefrom . "' and date < '" . $dateto . "'") && $result->num_rows > 0) {
    /* fetch object array */
    while ($row = $result->fetch_row()) {
        printf("%s (%s)\n", $row[0], $row[1]);
    }
} else {
    mysqli_close($dbcon);
    header("Location: edit.php?y=" . $y . "&m=" . $m . "&d=" . $d);
    exit;
}
$title = "";
$body = "";
?>
<div class="title">
  <h1 id="readonlyTitle"><?php echo $title; ?></h1>
</div>
<div id="readonlynote">
<?php echo $body; ?>
</div>
<?php mysqli_close($dbcon);?>