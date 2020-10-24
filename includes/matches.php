<?php include 'header.php' ?>
    <!--CSS style-->
    <link rel="stylesheet" href="../stylesheet.css" type="text/css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>

    


      </style>



    <main>
<center>    
    <h1>
        Which country are you interested in?
    </h1>
<br>
   
<div class="container-flags">
<table>
    <tr>
        <td><img src="../images/ukraine.png" width="50px"></td>
        <td><img src="../images/china.png" width="50px"></td>
        <td><img src="../images/puerto-rico.png" width="50px"></td>
        <td><img src="../images/taiwan.png" width="50px"></td>
        <td><img src="../images/russia.png" width="50px"></td>
        <td><img src="../images/hungary.png" width="50px"></td>
        <td><img src="../images/austria.png" width="50px"></td>
        <td><img src="../images/south-korea.png" width="50px"></td>
        <td><img src="../images/sweden.png" width="50px"></td>
        <td><img src="../images/belgium.png" width="50px"></td>
        <td><img src="../images/brazil.png" width="50px"></td>
        <td><img src="../images/germany.png" width="50px"></td>
        <td><img src="../images/italy.png" width="50px"></td>
        <td><img src="../images/jamaica.png" width="50px"></td>
        <td><img src="../images/scotland.png" width="50px"></td>
        <td><img src="../images/portugal.png" width="50px"></td>
        <td><img src="../images/poland.png" width="50px"></td>
        <td><img src="../images/argentina.png" width="50px"></td>
        <td><img src="../images/switzerland.png" width="50px"></td>
        <td><img src="../images/japan.png" width="50px"></td>
        <td><img src="../images/netherlands.png" width="50px"></td>
        <td><img src="../images/uruguay.png" width="50px"></td>
        <td><img src="../images/iceland.png" width="50px"></td>
        <td><img src="../images/chile.png" width="50px"></td>
        <td><img src="../images/england.png" width="50px"></td>
        <td><img src="../images/egypt.png" width="50px"></td>
        <td><img src="../images/south-africa.png" width="50px"></td>
        <td><img src="../images/spain.png" width="50px"></td>
        <td><img src="../images/united-states-of-america.png" width="50px"></td>
        <td><img src="../images/united-arab-emirates.png" width="50px"></td>
    </tr>
</table>
</div>

<?php
// A sample countries array
        $countries = array("Argentina"=>"Buenos Aires", "Brazil"=> "Brasilia", "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
        ?>

<div class="seguraPiao">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<select class="dropDownForm" name="choose">
    <option value="0">Choose a country</option>
    <option value="1">China</option>
    <option value="1">Peru</option>
    <option value="1">Paraguay</option>
    <option value="1">Venezuela</option>
    <option value="1">Ecquador</option>
 
    <?php
  //Use array to create options for select field.
  //Be sure to escape the quotes and include a line feed. 
  foreach($countries as $matches=>$capital){
    echo "<option value=\"$matches\">$matches</option>\n";
    
  }
?>
 
</select> 
<input type="submit" id="btnCountry" name="submit" value="Choose">
</form>

</div>
 
<?php
//If form not submitted, display form.
if(!isset($_POST['submit'])){
  //If form submitted, process input.
  }else if(isset($_REQUEST['choose']) && $_REQUEST['choose'] == '0')
  { 
      echo "<p class='userMessage'>Please select a country</p>"; 
  
  }
  else if (isset($_REQUEST['choose']) && $_REQUEST['choose'] == '1')
  {
      echo "<p class='userMessage'>Sorry this country is not in the world cup</p>";
  }
  else{
    //Retrieve user response.
    $country=$_POST['choose'];
    //Find corresponding key in associative array.
    $capitalSelected=$countries[$country];
    //Send the data back to the user.
    echo "<p class='userMessage'><b> $country </b> is in the world cup ! <br>
    for more details about tickets find our office in <b> $capitalSelected. </b></p>"; 

    echo '<a href="welcome.php"><input type="submit" id="btnCountry" name="checkMatches" value="Check matches"></a>';
  }
?>


</center>
    </main>
    

    <?php include 'footer.php' ?>