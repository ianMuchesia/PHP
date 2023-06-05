<?php
//sessions are a way to store informatin (in Variables)
//to be used across multiple pages.
//unlike cookies , sessions are stored on the server
session_start();

if(isset($_POST['submit'])){

    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
  
    $password = $_POST['password'];

    if($name === 'ian' && $password = 'password'){
        $_SESSION['name'] = $name;
        header('Location:/php/extras/dashboard.php');
    }else{
        echo 'Invalid Details';
    }

    echo $name;
    
}
?>







<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
method="POST">
    <div>
        <label for="name">Username:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>
    
    <input type="submit" value="Submit" name="submit">
</form>