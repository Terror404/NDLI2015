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
           if(isset($_GET['page']) and ($_GET['page']!=''))
                {
                    require("../modele/".$_GET['page'].".php");
                    include("../view/".$_GET['page'].".php");//vue
                    
                }
        ?>
    </body>
</html>
