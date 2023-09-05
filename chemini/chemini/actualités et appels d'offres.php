<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Actualités et appels d'offres</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File-->
  <link href="assets/css/actualités.css" rel="stylesheet">

</head>

<body>

<?php include("header.php") ?>
 
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Actualités et appels d'offres</h2>
          <ol>
            <li><a href="index.html">Acceuil</a></li>
            <li>Actualités et appels d'offres</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            <?php
            require("dbconn.php");
            $sql = "SELECT *, DATE_FORMAT(date, \"%d/%m/%Y\") AS date FROM infos ORDER BY id DESC";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query)){
            ?>

            <article class="entry">

              <div class="entry-img">
                <a href="assets/infos/<?php echo $row['photo'] ?>">
                  <img src="assets/infos/<?php echo $row['photo'] ?>" alt="" class="img-fluid"></a>
              </div>

              <h2 class="entry-title">
                <?php echo $row['titre']; ?>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?php echo $row['auteur'] ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time><?php echo $row['date'] ?></time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo nl2br($row['article']) ?>
                </p>
            </div> 

            </article><!-- End blog entry -->
            <?php } ?>


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">

                Appels d'offres

              </h3>

              <div class="sidebar-item recent-posts">
              <?php 
              $sql = mysqli_query($conn, "SELECT *, DATE_FORMAT(date, \"%d/%m/%Y\") AS date from appels ORDER BY id DESC ");
              while ($row = mysqli_fetch_array($sql)){
              ?>
                <div class="post-item clearfix">
                  <img src="assets/appels/<?php echo $row['photo'] ?>" alt="">
                  <h4><a href="assets/appels/<?php echo $row['photo'] ?>"><?php echo $row['titre'] ?></a></h4>
                  <time datetime="2020-01-01"><?php echo $row['date'] ?></time>
                </div>
              <?php } ?>

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
  
<?php include("footer.php") ?>
    <!--  Main JS File -->
    <script src="assets/js/main.js"></script> <!-- pour le fonctionement de slide etc...-->
  </body>

</html>