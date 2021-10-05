<?php
$characters = [
  [
    "title" => "The Wizard",
    "description" => "very powerful wizard",
  ],
  [
    "title" => "Shrek",
    "description" => "very bad Shrek",
    "reward" => "1000",
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Findtheprecious</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Findtheprecious.com</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Fellows</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="my-card-deck">
      <h1>Fellows wanted dead (or alive if you want to eat them later)</h1>

      <?php foreach($characters as $character): ?>
        <figure class="my-card">
          <img
            class="my-card-img"
            src="https://picsum.photos/200/150"
            alt="<?= $character["title"] ?>"
          />
          <figcaption class="my-card-caption">
            <h2><?= $character["title"] ?></h2>
            <p class=""><?= $character["description"] ?></p>
            <?php if (isset($character["reward"])): ?>
              <aside class="my-card-reward">Reward <?= $character["reward"] ?> gold coins</aside>
            <?php endif; ?>
          </figcaption>
        </figure>
      <?php endforeach; ?>

      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </section>
    <form class="form">
      <h1>Contact us</h1>
      <div class="form-div">
        <label for="email">Your email</label>
        <input
          id="email"
          name="email"
          type="email"
          placeholder="jdoe@mail.com"
        />
      </div>
      <div class="form-div">
        <label for="address">Your address</label>
        <input
          id="address"
          name="address"
          type="text"
          placeholder="6 rue de Saint Brice 51100 Reims"
        />
      </div>
      <div class="form-div">
        <select name="target">
          <option value="">I have seen one of them</option>
          <option value="1">the wizard</option>
          <option value="2">the dwarf</option>
          <option value="3">the orc</option>
        </select>
      </div>
      <div class="form-div">
        <label for="message">Your message</label>
        <textarea
          id="message"
          name="message"
          placeholder="hello world"
        ></textarea>
      </div>
      <button type="submit">Send</button>
    </form>
    <footer class="footer">
      <ul class="footerUl grid">
        <li>About us</li>
        <li>FAQ</li>
        <li>Fellows</li>
        <li>Rewards conditions</li>
        <li>Join our army</li>
        <li>Legal mentions</li>
      </ul>
      <ul class="footerUl">
        <li>Sauron4Ever.com</li>
        <li>Follow him also on Twitter</li>
      </ul>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
