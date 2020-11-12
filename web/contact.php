<!doctype html>
<html>

<?php include "../top-page/contact_page.php"; ?>
<?php include "../include/header.php"; ?>

<body>

<section class="contact-form">
  <form action="" method="post">
    <div class="form-group row">
      <div class="">
        <input type="text" class="form-control" name="nom" placeholder="Nom" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="">
      <input type="text" class="form-control" name="prenom" placeholder="Prénom" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="">
      <input type="text" class="form-control" name="mail" placeholder="Email" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="">
      <input type="textarea" class="form-control" name="msg" placeholder="Message" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="">
      <input type="submit" class="form-control" value="Valider">
    </div>
  </div>
  </form>
</section>

</body>
</html>
