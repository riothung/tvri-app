<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TVRI Kupang</title>
  <link rel="stylesheet" href="index.css">
  <link rel="icon" href="assets/img/ntt.png">
</head>

<body>
  <div class="login">
    <form action="cek_login.php" method="POST">
      <h2 class="title">TVRI Kupang</h2>
      <h2 class="title">Login</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error">
          <?php echo $_GET['error']; ?>
        </p>
      <?php } ?>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" autocomplete="off" placeholder="Masukan Username" required />
        <br />
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukan Password" required />
        <br />
        <button type="submit" value="login">Login</button>
      </div>
    </form>
  </div>
</body>

</html>