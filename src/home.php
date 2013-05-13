<html>
<body>


<?php

if (isset($_COOKIE["user"]))
    echo "Welcome " . $_COOKIE["user"] . "!<br>";
else
    echo "Welcome guest!<br>";
    setcookie("user", "Alex Porter", time()+3600);
?>
</body>
</html>
