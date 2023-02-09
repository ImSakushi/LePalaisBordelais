<?php require_once 'header.php'; ?>

<h1>Formulaire de contact</h1>

<div class="container py-4">
  <form id="contactForm">
    <div class="mb-3">
      <label class="form-label" for="name">Nom</label>
      <input class="form-control" id="name" type="text" placeholder="Nom" />
    </div>
    <div class="mb-3">
      <label class="form-label" for="emailAddress">Adresse Mail</label>
      <input class="form-control" id="emailAddress" type="email" placeholder="Adresse Mail" />
    </div>
    <div class="mb-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
    </div>

    <div class="d-grid">
      <button class="btn btn-dark btn-lg" type="submit">Envoyer</button>
    </div>

  </form>

</div>
<style>
label {
    font-weight:bold;
    color:#828282;
}

h1 {
    text-align:center;
    padding-top:40px
}
</style>
<?php require_once 'footer.php'; ?>