<?php include 'header.php' ?>
    <!--CSS style-->
    <link rel="stylesheet" href="../stylesheet.css" type="text/css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <main>
<center>
    <H1>Tickets World Cup 2022</H1>
<div class="container-tickets">
    <div class="row">
      <div class="column">
        <img src="images/stadium.png" alt="Snow" style="width:100%">
      </div>
      <div class="column">
       <form class="form-tickets">
            <label for="city">Choose a City:</label>
            <select id="city" name="city">
              <option value="Al Khor">Al Khor</option>
              <option value="Doha">Doha</option>
              <option value="Al Wakrah">Al Wakrah</option>
              <option value="Al Rayyan">Al Rayyan</option>
            </select>
            <br>
             <label for="cars">Choose a Match:</label>
            <select id="cars" name="cars">
              <option value="volvo">Brazil x Germany</option>
              <option value="saab">Argentina x Spain</option>
              <option value="fiat">France x England</option>
              <option value="audi">Iceland x Switzerland</option>
            </select>
            <br>
             <label for="cars">Choose a Category:</label>
            <select id="cars" name="cars">
              <option value="volvo">cat 1</option>
              <option value="saab">cat 2</option>
              <option value="fiat">cat 3</option>
            </select>
            <br>
             <label for="cars">How many tickets ?:</label>
            <select id="cars" name="cars">
              <option value="volvo">1</option>
              <option value="saab">2</option>
              <option value="fiat">3</option>
              <option value="fiat">4</option>
            </select>
            <br>
           <a href="checkout.html">
             <input type="submit" value="Buy" class="btn-ticket">
          </a>
          </form>
      </div>
    </div>
  </div>
</center>
</main>

<?php include 'footer.php' ?>