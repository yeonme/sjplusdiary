<?php
$date = new DateTime('now');
//$date = new DateTime('2018-06-16');
$is_today = intval($date->format('d'));
if (isset($_GET["y"]) && isset($_GET["m"])) {
    if (!(intval($date->format('Y')) == intval($_GET["y"]) && intval($date->format('m')) == intval($_GET["m"]))) {
        /* 오늘이 있는 달은 제외하는 조건문 */
        $date->setDate(intval($_GET["y"]), intval($_GET["m"]), intval($date->format('d')));
        $is_today = -1;
    }
}

$events = [];

?>
<div style="display:flex;">
    <div style="flex-basis: auto;">
        <button class="ui icon button" onclick="calGo(<?php
$tmpdate = clone $date;
$tmpdate->modify('-1 month');
echo $tmpdate->format('Y');?>,<?php echo $tmpdate->format('m'); ?>);">
            <i class="caret left icon"></i>
        </button>
    </div>
    <div style="flex-grow: 1;text-align:center;vertical-align:middle;line-height:36px;">
        <?php echo intval($date->format('Y')) . "년 " . intval($date->format('m')) . '월'; ?>
    </div>
    <div style="flex-basis: auto;">
        <button class="ui icon button" onclick="calGo(<?php
$tmpdate = clone $date;
$tmpdate->modify('+1 month');
echo $tmpdate->format('Y');?>,<?php echo $tmpdate->format('m'); ?>);">
            <i class="caret right icon"></i>
        </button>
    </div>
</div>
<table class="ui compact small celled table single line" style="max-width:85%;">
    <thead class="full-width">
        <tr><th>S</th>
        <th>M</th>
        <th>T</th>
        <th>W</th>
        <th>T</th>
        <th>F</th>
        <th>S</th></tr>
    </thead>
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
    echo "<td class=\"" . ($tdow == 0 ? 'warning ' : '') . ($i == $is_today ? 'today active ' : '') . "\">" . $i . "</td>";
    $tdow++;
    if ($tdow >= 7) {
        echo "</tr>";
        $tdow = 0;
    }
    if ($i == $lastday && $tdow != 0) {
        while ($tdow < 7) {
            echo "<td></td>";
            $tdow++;
        }
    }
}
?>
    </tbody>
</table>