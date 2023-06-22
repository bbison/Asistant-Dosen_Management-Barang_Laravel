<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="\bootstrap-5.3.0-alpha1\bootstrap-5.3.0-alpha1\dist\css\bootstrap.css">
    <script src="\bootstrap-5.3.0-alpha1\bootstrap-5.3.0-alpha1\dist\js\bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color:#88c2eb">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Management Produk</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/admin">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pabrik">Pabrik</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@yield('body')

</body>
</html>