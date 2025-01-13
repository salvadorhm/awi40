<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

    <p>
        Color favorito : <?php echo $_SESSION['favcolor']; ?>.
    </p>
    <p>
        Animal favorito : <?php echo $_SESSION['favanimal']; ?>.
    </p>
    
</body>
</html>