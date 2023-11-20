<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <section class="contact">
    <div class="content">
      <h1>Contact Us</h1>
      <p>Say hello, or ask us anything using this contact number and we will respond within 24 hours(usually). </p>
    </div>
    <div class="container">
      <div class="contactInfo">
        <div class="box">
          <div class="icon"><i class="bi bi-shop"></i></div>
          <div class="text">
            <h2>Address</h2>
            <p>120 North Road,<br>owatonna,Minnesota <br>555999</p>
          </div>
        </div>

        <div class="box">
          <div class="icon"><i class="bi bi-envelope"></i></div>
          <div class="text">
            <h2>Email</h2>
            <p>@work1234gmail.com</p>
          </div>
        </div>

        <div class="box">
          <div class="icon"><i class="bi bi-telephone"></i></div>
          <div class="text">
            <h2>Phone</h2>
            <p>112345678</p>
          </div>
        </div>
      </div>
      <div class="contactForm">
        <form id="contactForm" method="post" action="contact.php">
          <h2>Send Message</h2>
          <div class="inputBox">
            <input type="text" name="name" required="required">
            <span>Full Name</span>
          </div>

          <div class="inputBox">
            <input type="text" name="email" required="required">
            <span>Email </span>
          </div>

          <div class="inputBox">
           <textarea name="msg" required="required"></textarea>
            <span>Type Your Message..</span>
          </div>

          <div class="inputBox">
          <input type="submit" name="submit" value="Send">
          </div>


        </form>
      </div>
    </div>

  </section>

</body>

</html>