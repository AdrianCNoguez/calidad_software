<?php
foreach ($data as $row):
foreach ($row['id'] as $cell):
// Escape double quotation marks
$cell = '"' . preg_replace('/"/','""',$cell) . '"';
endforeach;
echo implode(',', $row['id']) . "\n";
endforeach;
?>
