<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Revawilda</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  /*
 * Globals
 */

  /* Links */
  a,
  a:focus,
  a:hover {
    color: #fff;
  }

  /* Custom default button */
  .btn-secondary,
  .btn-secondary:hover,
  .btn-secondary:focus {
    color: #333;
    text-shadow: none;
    /* Prevent inheritance from `body` */
    background-color: #fff;
    border: .05rem solid #fff;
  }


  /*
 * Base structure
 */

  html,
  body {
    height: 100%;
    background-color: #333;
  }


  body {
    background-image: url('logo1.jpg');
    display: -ms-flexbox;
    display: flex;
    color: #fff;
    background-size: cover;
    text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
    box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
  }

  .cover-container {
    max-width: 42em;
  }


  /*
 * Header
 */
  .masthead {
    margin-bottom: 2rem;
  }

  .masthead-brand {
    margin-bottom: 0;
  }

  .nav-masthead .nav-link {
    padding: .25rem 0;
    font-weight: 700;
    color: rgba(255, 255, 255, .5);
    background-color: transparent;
    border-bottom: .25rem solid transparent;
  }

  .nav-masthead .nav-link:hover,
  .nav-masthead .nav-link:focus {
    border-bottom-color: rgba(255, 255, 255, .25);
  }

  .nav-masthead .nav-link+.nav-link {
    margin-left: 1rem;
  }

  .nav-masthead .active {
    color: #fff;
    border-bottom-color: #fff;
  }

  @media (min-width: 48em) {
    .masthead-brand {
      float: left;
    }

    .nav-masthead {
      float: right;
    }
  }


  /*
 * Cover
 */
  .cover {
    padding: 0 1.5rem;
  }

  .cover .btn-lg {
    padding: .75rem 1.25rem;
    font-weight: 700;
  }


  /*
 * Footer
 */
  .mastfoot {
    color: rgba(255, 255, 255, .5);
  }
</style>
<!-- Custom styles for this template -->
<link href="cover.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <nav class="nav nav-masthead justify-content-center">
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <h1 class="cover-heading black">SELAMAT DATANG</h1>
      <p class="lead text-black">Di Aplikasi Pembayaran SPP SMKN 1 CIJATI</p>
      <p class="lead">
        <a href="index1.php" class="btn btn-lg btn-secondary">Silahkan Login Sebagai Siswa</a>
      </p>
      <p class="lead">
        <a href="index2.php" class="btn btn-lg btn-secondary">Silahkan Login Sebagai Admin / Petugas</a>
      </p>
    </main>

    <footer class="mastfoot mt-auto">

    </footer>
  </div>


</body>

</html>