<?php include 'header.php' ?>
    <!--CSS style-->
    <link rel="stylesheet" href="../stylesheet.css" type="text/css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <main>
      <!---tickets price table-------->
      <div class="price-container">
        <table class="price-table">
            <tr class="table-column">
              <th class="table-titles">Match</th>
              <th class="table-titles">Cat 1</th>
              <th class="table-titles">Cat 2</th>
              <th class="table-titles" >Cat 3</th>
            </tr>
            <tr class="table-column" >
              <td class="table-conteudo">Opening Matches</td>
              <td class="table-conteudo">$590</td>
              <td class="table-conteudo">$390</td>
              <td class="table-conteudo">$220</td>
            </tr>
            <tr class="table-column">
              <td class="table-conteudo">Group Matches</td>
              <td class="table-conteudo">$210</td>
              <td class="table-conteudo">$165</td>
              <td class="table-conteudo">$105</td>
            </tr>
            <tr class="table-column">
              <td class="table-conteudo">Round of 16</td>
              <td class="table-conteudo">$245</td>
              <td class="table-conteudo">$185</td>
              <td class="table-conteudo">$115</td>
            </tr>
            <tr class="table-column">
              <td class="table-conteudo">Quarters Finals</td>
              <td class="table-conteudo">$365</td>
              <td class="table-conteudo">$255</td>
              <td class="table-conteudo">$175</td>
          </tr>
           <tr class="table-column">
              <td class="table-conteudo">Semi Finals</td>
              <td class="table-conteudo">$750</td>
              <td class="table-conteudo">$480</td>
              <td class="table-conteudo">$285</td>
          </tr>
           <tr class="table-column">
              <td class="table-conteudo">Final</td>
              <td class="table-conteudo">$1100</td>
              <td class="table-conteudo">$710</td>
              <td class="table-conteudo">$455</td> 
          </tr>
          </table>

         <div>
           <!-- go to the shopping page to buy tickets--->
        <a href="shopping.php">
            <input type="submit" class="btn-buy" name="area" value="Buy">
        </a>        
        </div> 
        <br>
      </div>
    </main>

    <?php include 'footer.php' ?>