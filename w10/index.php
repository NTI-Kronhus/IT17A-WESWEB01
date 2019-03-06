<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    .item_container{
        width:175px;
        height:250px;
        background-color: lightblue;
        margin: 5px;
        float:left;
    }    
    
    .item_img{
        margin-left:5%;
        margin-top:5%;
        width:90%;
        height:60%;
    }
    
    .item_name{
        margin:0px;
        font-size: 30px;
        text-align: center;
    }
    
    .item_price{
        margin:0px;
        font-size: 20px;
        color:red;
        text-align: center;
    }
    
    .item_desc{
        margin:0px;
        font-size: 15px;
        text-align: center;
        font-style:italic;
    }
</style>
<body>
    
    <?php
    
    $dbc = mysqli_connect("localhost","root","","webshop");
    
    $query = "SELECT * FROM items";
    
    mysqli_query($dbc,"SET NAMES utf8");
    
    $result = mysqli_query($dbc,$query);
    
    while($row = mysqli_fetch_array($result)){
        
    ?>
        <div class="item_container">
            <img class="item_img" src="/images/<?php echo $row['img']; ?>" />
            <p class="item_name"><?php echo $row['name']; ?></p>
            <p class="item_price"><?php echo $row['price']; ?>kr</p>
            <p class="item_desc"><?php echo $row['description']; ?></p>
        </div>
    <?php
    }
?>
</body>
</html>