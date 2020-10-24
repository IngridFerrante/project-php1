<?php include 'header.php' ?>
<!-- my header included from footer page  --->

    <!--CSS style-->
    <link rel="stylesheet" href="../stylesheet.css" type="text/css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    
    <main>

 


        
        <!--Contact form-->
    
    <div class="contact-me">
        <h1 id="contactTxt"> Contact us </h1>
       
        <form class="contact-form" name="contactForm" method="post" >
            <input type="text"  class="contact-text" placeholder="Full name" name="name"> <!--inputs to fill the form-->
            <input type="email" class="contact-text" placeholder="Email" name="email"> 
            <input type="text" class="contact-text" placeholder="Phone number" name="phone"> 
            <select class="contact-text" name="doubts">
                <option selected="doubts">Doubts</option>
                <option value="cancelTicket">Cancel Tickets</option>
                <option value="payments">Payments</option>
                <option value="payments">Register/Login</option>
                <option value="others">Others</option>
              </select>
            <textarea class="contact-text" placeholder="Message..." name="messages"></textarea>
            <input type="submit" class="contact-btn" name="area" value="send"><!--button to send the infos from form-->
    </div>




    </main>

    <!-- my foooter included from footer page  --->
<?php include 'footer.php' ?>