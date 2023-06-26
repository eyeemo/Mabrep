<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MAB RESEARCH REPOSITORY- Index</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="assets/img/MABB.png" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
  /*--------------------------------------------------------------
# author Section
--------------------------------------------------------------*/
  @media (max-width: 768px) {
    #author {
      width: 100%;
      height: 100vh;
      background: white;
      max-height: 100vh;
      overflow-y: auto;
    }
  }

  #author .container {
    padding-top: 72px;
  }

  #author h3 {
    margin: 0 0 10px 0;
    font-size: 48px;
    font-weight: 700px;
    line-height: 56px;
    color: #fff;
  }

  #author h4 {
    color: rgba(255, 255, 255, 0.6);
    margin-bottom: 50px;
    font-size: 24px;
  }

  .ep_toolbox {
    text-align: center;
    margin-top: 100px;
  }

  .btn {
    display: inline-block;
    padding: 25px 50px;
    /*kiri tinggi,kanan lebar*/
    background-color: #000;
    color: #fff;
    font-weight: bold;
    border-radius: 5px;
    margin: 5px;
    margin-bottom: 15px;
    cursor: pointer;
    border: 2px solid #fff;
  }

  .btn-primary {
    color: #fff;
    background-color: #000;
    border: none;
    border: 2px solid #000;
  }

  .btn-primary:hover {
    background-color: #fff;
    color: #000;
    border: 2px solid #000;
  }
</style>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html"></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="search.php">Search</a></li>
          <li><a class="nav-link scrollto" href="years.php">Year</a></li>
          <li><a class="nav-link scrollto" href="group.php">Subject Area</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <main id="main">
    <section id="author">
      <div class="section-title">
        <h2>Author</h2>
        <div class="ep_toolbox">
          <button class="btn btn-primary" onclick="selectAlphabet('A')">A</button>
          <button class="btn btn-primary" onclick="selectAlphabet('B')">B</button>
          <button class="btn btn-primary" onclick="selectAlphabet('C')">C</button>
          <button class="btn btn-primary" onclick="selectAlphabet('D')">D</button>
          <button class="btn btn-primary" onclick="selectAlphabet('E')">E</button>
          <button class="btn btn-primary" onclick="selectAlphabet('F')">F</button>
          <button class="btn btn-primary" onclick="selectAlphabet('G')">G</button>
          <button class="btn btn-primary" onclick="selectAlphabet('H')">H</button>
          <button class="btn btn-primary" onclick="selectAlphabet('I')">I</button>
          <button class="btn btn-primary" onclick="selectAlphabet('J')">J</button>
          <button class="btn btn-primary" onclick="selectAlphabet('K')">K</button>
          <button class="btn btn-primary" onclick="selectAlphabet('L')">L</button>
          <button class="btn btn-primary" onclick="selectAlphabet('M')">M</button>
          <button class="btn btn-primary" onclick="selectAlphabet('N')">N</button>
          <button class="btn btn-primary" onclick="selectAlphabet('O')">O</button>
          <button class="btn btn-primary" onclick="selectAlphabet('P')">P</button>
          <button class="btn btn-primary" onclick="selectAlphabet('Q')">Q</button>
          <button class="btn btn-primary" onclick="selectAlphabet('R')">R</button>
          <button class="btn btn-primary" onclick="selectAlphabet('S')">S</button>
          <button class="btn btn-primary" onclick="selectAlphabet('T')">T</button>
          <button class="btn btn-primary" onclick="selectAlphabet('U')">U</button>
          <button class="btn btn-primary" onclick="selectAlphabet('V')">V</button>
          <button class="btn btn-primary" onclick="selectAlphabet('W')">W</button>
          <button class="btn btn-primary" onclick="selectAlphabet('X')">X</button>
          <button class="btn btn-primary" onclick="selectAlphabet('Y')">Y</button>
          <button class="btn btn-primary" onclick="selectAlphabet('Z')">Z</button>
        </div>
      </div>
    </section>
  </main>

  <script>
    function selectAlphabet(alphabet) {
      alphabet = alphabet.toLowerCase();
      if (alphabet.match(/^[a-z]$/)) {
        var filename = alphabet + "_Author.php";
        window.location.href = filename;
      } else {
        console.log("Invalid selection");
      }
    }
  </script>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>