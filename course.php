<?php
session_start();
$_SESSION["language"]="PHP";
?>
<html>

<body>
  <p>セッション開始</p>
  <p>代入した値は<?php print $_SESSION["language"]?>です</p>
  <p><a href="result.php">次のページ</a>へ</p>
</body>

</html>