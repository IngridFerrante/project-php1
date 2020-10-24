<?php include 'header.php' ?>
<!-- my header included from footer page  --->
    <!--CSS style-->
    <link rel="stylesheet" href="../stylesheet.css" type="text/css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>

</style>
    
    <?php
// Array called countries 
$countries = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
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
<p class="fifaAbout">Founded in 1904, the Fédération Internationale de Football Association (FIFA) is the umbrella organisation of its members, currently 211 national football associations. Its main objectives, enshrined in its statutes, are to develop football around the world, to stage international competitions and to protect the integrity of football (against match manipulation, doping etc.).

FIFA is composed of a number of political bodies (such as the FIFA Congress and the FIFA Council) and the administration. The highest political position is the FIFA President, elected every four years by FIFA’s member associations. The FIFA administration, with some 720 people from over 50 nations, is based in Zurich. It is run by the Secretary General (CEO).

FIFA stages FIFA World Cups™ in various forms such as youth, men’s and women’s, futsal, beach soccer or club competitions. The men’s FIFA World Cup™ is not only the most popular single sporting event in the world but also the financial backbone for FIFA and its efforts to develop football worldwide. 

The financial success of the FIFA World Cup™ allows FIFA to run a wide range of football development programmes and to provide funds, infrastructure and know-how to its member associations through the FIFA Forward Development Programme.</p>
      

      <h1>
       Our offices are located in:
    </h1>
    <center>

<table class="countryTable">
<tr>
<th class="titleCountry">Country </th>
<th class="titleCountry">Capital</th>
</tr>

<tr>
<?php // doing a loop of the array and put it in pairs (matches and capitals);
//and print a table with the countries and the capitals stored in the array. 
foreach($countries as $matches=> $capitals)
{
    echo "<tr><td class='CountryCapital'>$matches</td>";

    echo "<td class='CountryCapital'>$capitals</td></tr>";
}
?>
</tr>

</table>
<br>

    
</center>

<!-- my foooter included from footer page  --->
    <?php include 'footer.php' ?>