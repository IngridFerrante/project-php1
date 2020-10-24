<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$countries = array("Argentina"=>"Buenos Aires", "Brazil"=> "Brasilia", "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", "France" => "Paris", 
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", 
"Sweden"=>"Stockholm", "United Kingdom"=>"London", 
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", 
"Austria" => "Vienna", "Poland"=>"Warsaw");


?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="country_select">
    <?php foreach ($countries as $matches => $capitals) { ?>
        <option value="<?php echo $matches; ?>"><?php echo $matches; ?></option>
        <?php
    }
    ?>

    </select>
    <input type="submit" name="submit" value="Confirm">
</form>
<?php

$matches = $_POST['country_select'];
$capitals=$countries[$matches];

 if (ISSET($_POST['submit'])) {
    
    echo "The capital city of your country, " . $matches . ", is " . $capitals . ".";
} 
else 
{
    echo "Sorry this country is not in the world cup";
}
?> 
</body>
</html>