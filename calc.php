<?php
    eval('$total = '.$_GET['resultado']. ';');
    header("Location: index.php?total=" . $total);
?> 