<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Projets</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/projets.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <?php include("header.php") ?>
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Projets</h2>
        <ol>
          <li><a href="index.html">Acceuil</a></li>
          <li>Projets</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <!-- ======= Departments Section ======= -->
  <section id="departments" class="departments">
    <div class="container">
      <div class="section-title">
        <p>Bilan de l'Assemblée Populaire Communale (APC) des années 2017, 2018, 2019, 2019, 2020, 2021.</p>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Hydraulique</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Batiment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Aménagement urbain</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Stades, aires de jeux et foyers de jeunes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Chemins et pistes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Divers</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Hydraulique</h3>
                  <p>
                    <ul>
                      <?php
                      require("dbconn.php");
                      $sql = mysqli_query($conn, "SELECT * FROM projets WHERE type = 'hydro'");
                      while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <li><?php echo $row['article'] ?> <strong><?php echo "(" . $row['ap'] . " DA)"  ?></strong></li>
                      <?php } ?>
                    </ul>

                  </p>
                </div>

              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Batiment</h3>
                  <ul>
                    <?php
                    require("dbconn.php");
                    $sql = mysqli_query($conn, "SELECT * FROM projets WHERE type = 'batiment'");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                      <li><?php echo $row['article'] ?> <strong><?php echo "(" . $row['ap'] . " DA)"  ?></strong></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Aménagement urbain</h3>
                  <p>
                    <ul>
                      <?php
                      require("dbconn.php");
                      $sql = mysqli_query($conn, "SELECT * FROM projets WHERE type = 'urbain'");
                      while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <li><?php echo $row['article'] ?> <strong><?php echo "(" . $row['ap'] . " DA)"  ?></strong></li>
                      <?php } ?>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Stades, aires de jeux et foyers des jeunes</h3>
                  <p>
                    <ul>
                      <?php
                      require("dbconn.php");
                      $sql = mysqli_query($conn, "SELECT * FROM projets WHERE type = 'loisirs'");
                      while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <li><?php echo $row['article'] ?> <strong><?php echo "(" . $row['ap'] . " DA)"  ?></strong></li>
                      <?php } ?>
                    </ul>
                  </p>
                </div>

              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Chemins et pistes</h3>
                  <p>
                    <ul>
                      <?php
                      require("dbconn.php");
                      $sql = mysqli_query($conn, "SELECT * FROM projets WHERE type = 'chemin'");
                      while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <li><?php echo $row['article'] ?> <strong><?php echo "(" . $row['ap'] . " DA)"  ?></strong></li>
                      <?php } ?>
                    </ul>

                  </p>
                </div>

              </div>
            </div>

            <div class="tab-pane" id="tab-6">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Education</h3>
                  <p>
                    <ul>
                      <?php
                      require("dbconn.php");
                      $sql = mysqli_query($conn, "SELECT * FROM projets WHERE type = 'edu'");
                      while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <li><?php echo $row['article'] ?> <strong><?php echo "(" . $row['ap'] . " DA)"  ?></strong></li>
                      <?php } ?>
                    </ul>
                  </p>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="tab-7">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Divers</h3>
                  <ul>
                    <?php
                    require("dbconn.php");
                    $sql = mysqli_query($conn, "SELECT * FROM projets WHERE type = 'divers'");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                      <li><?php echo $row['article'] ?> <strong><?php echo "(" . $row['ap'] . " DA)"  ?></strong></li>
                    <?php } ?>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Projets Section -->
  <?php include("footer.php") ?>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--  Main JS File -->
  <script src="assets/js/main.js"></script> <!-- pour le fonctionement de slide etc...-->

</body>

</html>