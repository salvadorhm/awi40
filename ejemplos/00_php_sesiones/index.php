<html>

<head>
    <title>PHP sesiones</title>
</head>

<body>
    <?php

session_start();

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}
?>

    <p>
        Hola visitante, ha visto esta página
        <?php echo $_SESSION['count']; ?> veces.
    </p>
</body>

</html>