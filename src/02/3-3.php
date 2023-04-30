<?php
$timestamp = time() + (60 * 60 * 24);
$tomorrow = date('Y 年 m 月 d 日 H 時 i 分 s 秒', $timestamp);

print $tomorrow;
?>