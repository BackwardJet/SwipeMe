<?php
    echo "<!DOCTYPE html>\n<html>\n<head>\n";
    #echo "\t<link rel=\"stylesheet\" href=\"public/css/main.css\">";
    echo "</head>\n";
    echo "<body>\n";
    foreach($_POST as $key => $value) {
        echo $key . " : " . $value . "<br />\r\n";
    }
    
    echo "</body>\n</html>\n";
?>
