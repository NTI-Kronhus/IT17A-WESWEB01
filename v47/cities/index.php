<style>
.city, .big_city{
    background-color: pink;
    padding: 5px;
    text-align: center;
    width: 200px;
    height:150px;
    margin:5px;
    float:left;
}
    
    .big_city{
        height:400px;
        width: 400px;
        font-size: 200%;
    }
    
a{
    color:black;
}
</style>

<form action="" method="GET">
    <input type="text" name="search">
    <input type="submit" value="Sök på city">
    <input type="submit" name="column" value="Sök på country">
</form>

<?php

$dbc = mysqli_connect("localhost","root","","cities");
mysqli_query($dbc,"SET NAMES utf8");


if(isset($_GET['city'])){
    $city = $_GET['city'];
        
    $query = "SELECT * FROM cities JOIN countries ON country = countrycode WHERE AccentCity = '$city' ";

    $result = mysqli_query($dbc,$query);

    $row = mysqli_fetch_array($result);
 
    ?>
    
    <div class="big_city">
            <h2>
            <?php echo $row["AccentCity"]; ?>
            </h2>
            <p>Befolkning: 
            <?php echo $row["Population"]; ?>
            </p>
            <p>Land: 
            <?php echo $row["Countryname"]; ?>
            </p>
            <p>Longitud: 
            <?php echo $row["Longitude"]; ?>
            </p>
            <p>Latitud: 
            <?php echo $row["Latitude"]; ?>
            </p>
    </div>
    
    <?php
    
    
}
else{


$search = "";
if(isset($_GET['search'])){
    $search = $_GET['search'];
}


$column = "city";
if(isset($_GET['column'])){
    $column = "countryname";
}


$query = "SELECT * FROM cities JOIN countries ON country = countrycode WHERE $column LIKE '%$search%' ";


$result = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($result)){
    ?>
    <a href="?city=<?php echo $row["AccentCity"]; ?>">
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
    </a>
    <?php
}
}
?>