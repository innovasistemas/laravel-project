<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>View 2</title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <span id="span1" class="color-text1">
        <?php
            echo "Hello, this is the View 2 with controllers in Laravel";
        ?>
        </span>
        
        <h3>Data controller: <?php echo $title ?></h3>
        <?php
            $data = json_decode($json, TRUE);
            echo e($json);
            echo "<br>";
            echo e($data[0] . "  -- " . $data[1]);
        ?>
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script>
            $(function(){
                $('#span1').addClass('size-text1');
            });
        </script>
    </body>
</html>
