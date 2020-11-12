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


<section class="info-contact">
  <aside>
    <div class="container">
      <div class="form-group row">
        <h3 class="title">E2C Paris</h3>
        <p>27, rue du Maroc 75019 Paris</p>
      </div>

      <div class="container">
        <div class="form-group row">
          <p><strong>Fax :</strong>01 40 05 53 10</p>
          <p><strong>Email :</strong>mgassama@e2c-paris.fr</p>
        </div>
      </div>      
    </div>
  </aside>
</section>

<section class="E2C-map">
  <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.4924315200506!2d2.365659915088613!3d48.886951806650195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e783e9780ef%3A0x89b60b584c60ede!2s27%20Rue%20du%20Maroc%2C%2075019%20Paris!5e0!3m2!1sfr!2sfr!4v1605169719160!5m2!1sfr!2sfr"
    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
  </iframe>
  </div>
</section>

</body>
</html>
