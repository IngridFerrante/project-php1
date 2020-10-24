<?php include 'header.php' ?>

    <!--CSS style-->
    <link rel="stylesheet" href="../stylesheet.css" type="text/css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>

.matchesTable, .matchesLine 
{
padding: 10px;
text-align: left;
width: 500px;
font-weight: bold;
letter-spacing: 2px;
}

.matchTitle 
{
text-transform: uppercase;
background-color: black;
color: white;
}
</style>
    
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
<center>

<table class="matchesTable">
<tr>
<th class="matchTitle">Matches </th>
<th class="matchTitle"></th>
<th class="matchTitle"></th>

<tr>

<?php

// Loop to print a table with the countries from the array in a column agains the countries of the same array
foreach($countries as $matches=> $capitals)
{
    // array rand to collect random countries inside the aray
    $stageGroup = array_rand($countries);

    // print the table country x country
    echo "<tr><td class='matchesLine'>$stageGroup </td>";

    echo "<td class='matchesLine'> x </td>";
 
    echo "<td class='matchesLine'>$matches</td></tr>";

}
?>
</tr>
</table>

</table>
<br>

    
</center>

    <?php include 'footer.php' ?>