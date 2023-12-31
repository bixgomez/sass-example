<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <link rel="stylesheet" href="css/styles.css">
    <?php require_once './browsersync-check.php'; ?>
</head>
<body>
  <div class="page">
    <header class="section-outer">
      <div class="section-inner">
        <h1>This is the header area</h1>
      </div>
    </header>
    <main class="section-outer">
      <div class="section-inner">
        <h2>This is the main area</h2>
        <p>
          <?php require './random-words.php'; ?>
        </p>
        <p>
          <?php require './random-words.php'; ?>
        </p>
        <p>
          <?php require './random-words.php'; ?>
        </p>
      </inner>
    </main>
    <footer class="section-outer">
      <div class="section-inner">
        This is the footer area
      </div>
    </footer>
  </div>
  <script src="js/script.js"></script>
</body>
</html>
