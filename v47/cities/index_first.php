<style>
.city{
    background-color: pink;
    padding: 5px;
    text-align: center;
    width: 200px;
    height:150px;
    margin:5px;
    float:left;
}
    
    .city:hover{
        cursor:pointer;
        background-color: bisque;
    }
</style>

<form action="index.php" method="GET">
    <input type="text" name="search">
    <input type="submit" value="Sök på city">
    <input type="submit" name="column" value="Sök på country">
</form>

<?php

$dbc = mysqli_connect("localhost","root","","cities");

$search = "";
if(isset($_GET['search'])){
    $search = $_GET['search'];
}

$column = "city";
if(isset($_GET['column'])){
    $column = "countryname";
}


$query = "SELECT * FROM cities JOIN countries ON country = countrycode WHERE $column LIKE '%$search%' ";


mysqli_query($dbc,"SET NAMES utf8");


$result = mysqli_query($dbc,$query);

// Skriv ut alla städer från $result
while($row = mysqli_fetch_array($result)){
    ?>
    <div class="city">
        <h2>
        <?php echo $row["AccentCity"]; ?>
        </h2>
        <p>Befolkning: 
        <?php echo $row["Population"]; ?>
        </p>
        <p>Land: 
        <?php echo $row["Countryname"]; ?>
        </p>
    </div>
    <?php
}
?>