<?php

header("content-type:text/html;charset=utf-8");
$day = 1;
$count = 31;

echo "<table border='1' width='500'>";
echo <<<th
        <tr style="background-color:#ccc;">
            <th>星期天</th>
            <th>星期一</th>
            <th>星期二</th>
            <th>星期三</th>
            <th>星期四</th>
            <th>星期五</th>
            <th>星期六</th>
        </tr>
th;
        for($i = 1;$i<=5;$i++){
            echo "<tr >";
                for($j=1;$j<=7;$j++){
                    echo "<td bgcolor='yellow' border = ‘1px solid #black';>{$day}</td>";
                    $day++;
                    if($day >$count){
                     /*echo "<td bgcolor='yellow' border = ‘1px solid #black';></td>";*/
                    break;
                    }
                }
            echo "</tr>";
            }
   

echo "</table>";
