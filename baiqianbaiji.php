<?php

header("content-type:text/html;charset = utf-8");
$count = 0;
for ($gongji = 0; $gongji <= 100; ++$gongji) {

    for ($muji = 0; $muji <= 100; ++$muji) {

        for ($xiaoji = 0; $xiaoji <= 100; ++$xiaoji) {

            if ($gongji * 5 + $muji * 3 + $xiaoji / 3 == 100 && $gongji + $muji + $xiaoji == 100) {

                echo "<br />公鸡有 $gongji 只；母鸡有 $muji 只；小鸡有 $xiaoji 只；";
            }
        }
    }
}
echo '<br />';
