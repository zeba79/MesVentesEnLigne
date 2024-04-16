<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mes ventes en ligne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
  </head>
  <body>
<div class="d-flex">


    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="articles.php" class="nav-link active" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      </li>
      <li >
        <a href="produits.php" class="nav-link text-white parrotbtn m-1">
        <i class="bi bi-person-circle"></i>
          Produits
        </a>
      </li>
      <li >
        <a href="statistiques.php" class="nav-link text-white parrotbtn m-1">
        <i class="bi bi-person-circle"></i>
          Statistiques
        </a>
      </li>

    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>LogOut</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">Se déconnecter</a></li>
      </ul>
    </div>
  </div>
  <main class="d-flex flex-column px-4">
  <h1>Bienvenue sur mes ventes en ligne</h1>

  </main>
  </div>

  <footer class="py-3 my-4 header_footer">
        <p class="text-center">Interface de gestion produits</p>
        <p class=" text-center text-body-secondary copyright">© 2024 - Ventes en ligne</p>
    </footer>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
  </body>
</html>
