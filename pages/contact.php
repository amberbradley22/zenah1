<?php $message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {


        //submit the form

      $userName = htmlspecialchars($_POST['fullname']);
      $userEmail = htmlspecialchars($_POST['email']);
      $userMessage = htmlspecialchars($_POST['message']);

      if (empty($userName) || empty($userEmail) || empty($userMessage)) {
      exit();
      header("Location:contact.php");
      }
      $to = "amberbradley22@hotmail.com";
      $body ="";
   
      $body .= "From: " .$userName. "\r\n" ;
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "Message: ".$userMessage. "\r\n";

      mail($to,$userMessage, $body);
     
      $message_sent = true;
    }
}
    else {
      header("Location:contact.php");
    }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zenah|Women's Swimwear And Clothing</title>
  <link rel="stylesheet" href="../contact.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>

<body>

  <div class="hambu"></div>
  <div class="cart-bag"></div>
  <div class="search-bar"></div>

  <div class="body-content">
    <div class="navigation"></div>
  <?php
  if ($message_sent):
  ?>
    <div class="formsubmit">
    <div class="formsubtext">
    <h3>THANK YOU FOR WRITING TO US.</h3>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="clos" onClick="location.href='index.html'"
      viewBox="0 0 16 16">
      <path
        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
      <path
        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
    </svg><p> We recieved your message and within 48 hours, we will get in touch.</p>
  </div>
</div>
<?php
else: 
?>
    <div class="header">
      <h1>GET IN TOUCH</h1>
      <p>Please contact us if you have any questions or concerns.
        Our customer service team will do their best to get back to you in less than 24 hours.</p>
      <h1>CONTACT US</h1>
    </div>
    <div class="contentt">
      <form method="post" action="contact.php">
        <div class="roww">
          <div class="input-groupp">
            <input type="text" id="fullname" name="fullname" required>
            <label for="fullname"> Name</label>
          </div>

          <div class="input-groupp">
            <input type="text" id="email" name="email" required>
            <label for="email"> Email</label>
          </div>
        </div>
        <div class="input-groupp">
          <textarea id="message" rows="8" name="message" required></textarea>
          <label for="message"> Message</label>
        </div>

        <button type="submit">SUBMIT</button>
      </form>
    </div>
    <?php
    endif;
    ?>
    <div class="foot-nav"></div>
  </div>

</body>
<script> $(function () { $(".navigation").load("../components/navigation.html"); }); </script>
<script> $(function () { $(".hambu").load("../components/hamburger.html"); }); </script>
<script> $(function () { $(".foot-nav").load("../components/footer.html"); }); </script>
<script> $(function () { $(".cart-bag").load("../components/cart.html"); }); </script>
<script> $(function () { $(".search-bar").load("../components/search.html"); }); </script>

</html>