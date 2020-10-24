<?php include 'header.php' ?>
    <!--CSS style-->
    <link rel="stylesheet" href="../stylesheet.css" type="text/css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <main>
<center>

<!-- Page to buy the tickets----> 
    <H1>Tickets World Cup 2022</H1>
<div class="container-tickets">
    <div class="row">
      <div class="column">
        <img src="../images/stadium.png" alt="Snow" style="width:100%">
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
             <label for="match">Choose a Match:</label>
            <select id="match" name="match">
              <option >Brazil x Germany</option>
              <option >Argentina x Spain</option>
              <option >France x England</option>
              <option >Iceland x Switzerland</option>
            </select>
            <br>
             <label for="category">Choose a Category:</label>
            <select id="category" name="category">
              <option >cat 1</option>
              <option >cat 2</option>
              <option >cat 3</option>
            </select>
            <br>
             <label for="tickets">How many tickets ?:</label>
            <select id="tickets" name="tickets">
              <option >1</option>
              <option >2</option>
              <option >3</option>
              <option >4</option>
            </select>
            <br>
             <input type="submit" value="Buy" class="btn-ticket">
          </a>
          </form>
      </div>
    </div>
  </div>
</center>
</main>

<?php include 'footer.php' ?>