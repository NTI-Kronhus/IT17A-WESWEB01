<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    
    if(isset($_GET['namn']) && isset($_GET['datum'])){
        echo "Du svarade: <br>";
        echo $_GET['namn'] . "<br>";
        echo $_GET['datum'] . "<br>";
    }
    
    ?>


    <form action="form.php" method="get">

        Namn: <input name="namn" type="text" /><br>
        Födelsedatum: <input name="datum" type="date" /><br>

        <input type="submit" />

    </form>


</body>

</html>
