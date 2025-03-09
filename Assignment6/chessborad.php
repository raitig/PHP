<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chess Board</title>
</head>
<body>
    <table bordar="1" cellspasing="0" cellpadding="0">
       <?php
       //$size=$_POST["Size"];
       for($r=0;$r<8;$r++)
       {
        ?>
        <tr>
            <?php
            for($c=0;$c<8;$c++){
                //$isblack=($r+$c)%2==1;
                $color=(($r+$c)%2==1)?"black":"white";
                ?>
              <td width="50" height="50" bgcolor="<?php echo $color;?>"></td>
              <?php
            }
            ?>
         </tr>
         <?php
         }
         ?>
    </table>

</body>
</html>