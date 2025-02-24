<!-- Write a php program to check whether given string is palindrome or not. -->

<form action="./Stringpalindrome.php" method="post">
    <input type="text" name="num" placeholder="Enter a String" required><br>
    <input type="submit" value="Check">
</form>
<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $rev = strrev($num);
    echo "$num is " . ($num == $rev ? "" : "not ") . "a palindrome";
}
?>