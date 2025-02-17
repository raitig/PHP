<?php
$n1=$_POST['num1'];
$n2=$_POST['num2'];

$choice=$_POST['choice'];
switch($choice){
    case"add":
        echo"addition of $n1 and $n2: ".($n1+$n2);
        break;
        case"sub":
            echo"subtraction of $n1 and $n2: ".($n1-$n2);
            break;
            case"mul":
                echo"multiplication of $n1 and $n2: ".($n1*$n2);
                break;
                case"div":
                    echo"division of $n1 and $n2: ".($n1/$n2);
                    break;
                    default:
                    echo "wrong choice";
}
?>
