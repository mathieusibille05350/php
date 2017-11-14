<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>
<?php
function func($arg) {
$result = 0;
for($i=0; $i<$arg; $i++) {
$result = $result + $i;
}
return $result;
}
echo func(5);
?>
<body>
</body>
</html>