<?php
$success = null;

if(isset($_POST['g-recaptcha-response']))
$captcha=$_POST['g-recaptcha-response'];
if(!$captcha){
  //Captcha hasn't been checked
}
$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeR79EUAAAAAOKnJgEdja4m_vO8rZDsdANf8LDz&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
if($response['success'] == false){
  //Captcha incorrect
}
else {
  //Success code here
  if (isset($_POST['send'])) {
    $to = 'steve.jones@stevejonesguttering.co.uk';
    $subject = 'Enquiry';
    $message = 'First Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Second Name: ' . $_POST['surname'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .= 'Contact Number: ' . $_POST['phone'] . "\r\n\r\n";
    $message .= 'Comments: ' . $_POST['comments'];

    $firstname = $_POST['name'];
    $surname = $_POST['surname'];
  }

  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  $headers = "From: Website\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';

  $com = strpos($_POST['email'], ".com");
  $couk = strpos($_POST['email'], ".co.uk");
  $net = strpos($_POST['email'], ".net");
  $hobbies = $_POST['email'];
  $getonline = strpos($_POST['email'], "get-online-visibility.com");

  if (($com != false) || ($couk != false) || ($net != false)) {
    if ($getonline != false) {

    } elseif ($firstname == $surname) {

    } else {
      if (empty($honeypot)) {
        $success = mail($to, $subject, $message, $headers);
      }
    }
  }
}
?>

<html>

<head>
  <title>Thank You | Metal Gutter Company South West </title>
  <meta charset="utf-8">

  <meta name="description" content="Supplier & Installer of Metal Guttering, Rainwater Systems in the South West. Including Aluminium, Cast-Iron, Steel & Copper. Carpentry services also available.">
  <meta name="keywords" content="Metal Gutter Company, Steve Jones Guttering, Guttering Devon and Cornwall, Cast Iron Guttering Downpipes, Aluminium Guttering Downpipes and Box Gutters, Galvanised Steel Guttering Downpipes, Carpentry and Traditional Timber Fascia, Plymouth and Tavistock and South Hams, Hopper Heads and Fascias and Soffits, Rock and Looe and Fowey">
  <link rel="icon" href="../images/logos/logo2.png">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/otherpages.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Quattrocento:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <section class="container">
      <div class="primary-header">
        <h1>
          <a href="../index.html">Metal Gutter Company</a>
        </h1>
      </div>
    </section>
  </header>

  <section class="navigation group">
    <div class="container">
      <label for="toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </label>
      <input type="checkbox" id="toggle"/>

      <ul class="menu">
        <li><a href="./aboutus.html">About Us</a>
          <li><a href="./portfolio.html">Portfolio</a>
            <li><a href="./styles.html">Styles</a>
              <li class="active"><a href="./contactus.html">Quotes</a>
              </ul>
            </div>
          </section>

          <section>
            <div class="line-red">
            </div>
          </section>

          <section class="title">
            <div class="container">
              <h2>
                Receive a free consultation & quotation upon request.
              </h2>
            </div>
          </section>

          <section class="text">
            <div class="container">
              <div class="quote">
                <p>
                  Contact us with the <strong>form</strong> below to organise a meeting to receive a quotation.<br>
                  Equally, you can get hold of us by <strong>mobile</strong> or <strong>e-mail</strong>.
                </p>
              </div>
            </div>
          </section>

          <section class="responsecontent">
            <div class="container">

            </div>
          </section>

          <section class="formcontent">
            <div class="container">
              <div class="formcontainer">
                <div class="form col5">
                  <?php if (isset($success) && $success) { ?>
                    <h1>Thank You</h1>
                    <p>Your message has been sent. We will aim to get back to you as soon as possible.</p>
                  <?php } else { ?>
                    <h1>Oops!</h1>
                    <p>Sorry, there was a problem sending your message.</p>
                  <?php } ?>
                </div><!--
                --><div class="map col5">
                <p>
                  <!--AIzaSyDCGhiYvb9ktSd_poauh9M6rcfLRDsER_M!-->
                  <iframe class="iframe"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31899.068095063987!2d-4.151723217596864!3d50.41372776431424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16ed7bf297df52be!2sMetal+Gutter+Company+South+West!5e0!3m2!1sen!2suk!4v1497455111534"
                  width="400"
                  height="500"
                  frameborder="0"
                  allowfullscreen>
                </iframe>
              </p>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="line-white">
        </div>
      </section>

      <footer class="container">
        <div class="primary-footer">
          <div class="business">
            <p><strong>Metal Gutter Co.</strong></p>
            <p class="address">
              51 Bethany Gardens,<br>
              Plymouth,<br>
              PL23FG<br>
            </p>
          </div>

          <div class="contact">
            <p>
              Metalgutterco2001@gmail.com<br>
              07866389802<br>
            </p>
            <a target="_blank" href="http://www.twitter.com/MetalGutter2001"><img alt="Twitter Page" src="../images/tags/twitter.png"></a>
            <a target="_blank" href="https://www.facebook.com/Metal-Gutter-Company-South-West-243278799478103/"><img alt="Facebook Page" class="facebook" src="../images/tags/facebook.png"></a>
            <a href="mailto:metalgutterco2001@gmail.com"><img alt="Email Us" src="../images/tags/email.png"></a>
          </div>
        </div>
      </footer>

    </body>
    </html>
