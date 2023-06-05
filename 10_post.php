<?php 


echo $_GET['name'];
echo $_GET['age'];

if(isset($_POST['submit'])){

    echo $_POST['name'];
echo $_POST['age'];
}

?>
<a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Ian&age=25">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"
method="GET>
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    
    <input type="submit" value="Submit" name="submit">
</form>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>"
method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    
    <input type="submit" value="Submit" name="submit">
</form>