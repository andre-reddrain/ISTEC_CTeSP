<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

const nl='<br>';
echo $_SERVER['PHP_SELF'].nl;
$uri=rtrim(dirname( $_SERVER['PHP_SELF']), '/\\');
echo $uri;
$host=$_SERVER['HTTP_HOST'];
echo nl.$host.nl;
echo $_SERVER['QUERY_STRING'].nl;
echo $_SERVER['REQUEST_METHOD'].nl;
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['num']))echo intval($_GET['num']) * 2 . nl;


}
if(isset($_POST['txtinput'])){
    $input = $_POST['txtinput'];
    if(isset($_POST['bt']) && $_POST['bt'] == 'dobro'){
        $result = intval($input) * 2;
    } else {
        $result = "Operação não reconhecida.";
    }
} else {
    $result = null;
}

?>
<body>
<h1>Formulario</h1>
<form action="um.php" method="post" enctype="application/x-www-form-urlencoded">
    <label>INPUT</label>
    <input type="text" name="txtinput" id="txtinput" required>
    <input type="submit" value="dobro" name="bt" id="bt">
    <hr>
    <div>
        <?php
        if(isset($result)){
            echo "<h2>Resultado: $result</h2>";
        } else {
            echo "<h2>Nenhum resultado calculado.</h2>";
        }

        ?>
    </div>
</form>
</body>
</html>