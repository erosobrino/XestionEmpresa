<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function Ejer1($num) {
            for ($i = 0; $i <= 10; $i++) {
                $result = $num * $i;
                echo "$num x $i = $result <br>";
            }
        }
        
        function Ejer2($cantidad){
            for ($i=0;$i<$cantidad;$i++){
                echo '*';
            }
            echo "<br>";
            for ($j = 0; $j < ($cantidad-2); $j++) {
                echo '*';
                for ($k = 0; $k < ($cantidad-2) ; $k++) {
                    echo "&nbsp;&nbsp;";
                }
                echo "*";
            echo "<br>";
            }
             for ($i=0;$i<$cantidad;$i++){
                echo '*';
            }
            echo "<br><br>";
        }
        function Ejer3($base){
            for ($i = 0; $i <= $base; $i++) {
                for ($j = 0; $j < $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }
        
        Ejer1(4);
        Ejer2(3);
        Ejer3(4);
        ?>
    </body>
</html>
