<?php
$date = new DateTime('now');
if (isset($_GET["y"]) && isset($_GET["m"])) {
    $date->setDate($_GET["y"], $_GET["m"], 1);
}?>
<div style="display:flex;">
    <div style="flex-basis: auto;">
        <button class="ui icon button" onclick="calGo('<?php
$tmpdate = clone $date;
$tmpdate->modify('-1 month');
echo $tmpdate->format('Y-m-d');?>');">
            <i class="caret left icon"></i>
        </button>
    </div>
    <div style="flex-grow: 1;text-align:center;vertical-align:middle;line-height:36px;">
        <?php echo $date->format('m') . '월'; ?>
    </div>
    <div style="flex-basis: auto;">
        <button class="ui icon button" onclick="calGo('<?php
$tmpdate = clone $date;
$tmpdate->modify('+1 month');
echo $tmpdate->format('Y-m-d');?>');">
            <i class="caret right icon"></i>
        </button>
    </div>
</div>
<table style="width:100%;">
    <tr>
        <th>S</th>
        <th>M</th>
        <th>T</th>
        <th>W</th>
        <th>T</th>
        <th>F</th>
        <th>S</th>
    </tr>
    <tbody>
        <?php
$date->modify('last day of this month');
$lastday = intval($date->format('d')); //이 달의 마지막 날
$date->modify('first day of this month');
$idow = idate('w', $date->getTimestamp()); //요일 숫자 GET (1=Mon, 2=Tue)
echo "<tr>";
$tdow = 0;
for ($i = 0; $i < $idow; $i++) { //시작일의 요일 숫자만큼 좌측에서 띄우기
    echo "<td>&nbsp;</td>";
    $tdow++;
}

for ($i = 1; $i <= $lastday; $i++) { //1부터 막날까지 채우기
    if ($tdow == 0) {
        echo "<tr>";
    }
    echo "<td>" . $i . "</td>";
    $tdow++;
    if ($tdow >= 7) {
        echo "</tr>";
        $tdow = 0;
    }
}
?>
    </tbody>
</table>