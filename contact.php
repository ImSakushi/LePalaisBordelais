<?php require_once 'header.php';

if (isset($_POST['submit'])) {
  $mailto = "pablo.casola@mmibordeaux.com";  
  $name = $_POST['name'];
  $fromEmail = $_POST['email']; 
  $message = $_POST['message'];
  echo $name;
  echo $fromEmail;
  echo $message;
  $message = "Nom du client " . $name . "\n"
    . "Message: " . "\n" . $_POST['message'];
  $headers = "De: " . $fromEmail;
  $result1 = mail($mailto, $subject, $message, $headers); 
  if ($result1) {
    $success = "Merci de nous avoir contacté, on reviendra vers vous rapidement !";
  } else {
    $sucesss = "Votre message n'a pas pu être envoyé, veuillez réessayer.";
  }
}


?>



<h1>Formulaire de contact</h1>
<h4><?php echo $success?></h4>

<div class="container py-4">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="mb-3">
      <label class="form-label" for="name">Nom</label>
      <input class="form-control" name="name" id="name" type="text" placeholder="Nom" />
    </div>
    <div class="mb-3">
      <label class="form-label" for="emailAddress">Adresse Mail</label>
      <input class="form-control" name="email" id="email" type="email" placeholder="Adresse Mail" />
    </div>
    <div class="mb-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" name="message" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
    </div>
    <div class="d-grid">
      <button class="btn btn-dark btn-lg" name="submit" type="submit">Envoyer</button>
    </div>
  </form>

</div>
<style>
  label {
    font-weight: bold;
    color: #828282;
  }

  h1 {
    text-align: center;
    padding-top: 40px
  }

  h4 {
    text-align: center;
  }
</style>
<?php require_once 'footer.php'; ?>