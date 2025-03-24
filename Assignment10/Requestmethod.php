<!-- To create a selfprocessing form,use, teh $_SERVER['REQUEST_METHOD'] that returns the reque4st method e.g.,GET or POST -->
 <?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    echo "Hello $name";
 }else{
    ?>
    <form method="post" action="">
        <label>Enter your name </label>&nbsp;&nbsp;
        <input type="text" name="name" required><br><br>
        <input type="reset">&nbsp;&nbsp;
        <input type="submit" value="Submit">
    </form>
    <?php } ?>