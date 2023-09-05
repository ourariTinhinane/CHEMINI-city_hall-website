<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>assemblée populaire communale</title>
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
  <link href="assets/css/adm.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <?php include("header.php") ?>

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Assemblée populaire communale</h2>
              <ol>
                <li><a href="index.html">Acceuil</a></li>
                <li>Assemblée populaire communale</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs -->

<!-- ======= administration Section ======= -->
    <section id="adm" class="adm">
        <div class="présentation">
            <p>L’Assemblée Populaire Communale (APC) est une assemblée élue, composée de membres élus au suffrage universel, direct et secret, pour une durée de 5ans. Elle se réunit en session ordinaire tous les deux mois et peut se réunir en session extraordinaire chaque fois que les affaires de la commune le requièrent à la demande de son président ou des deux tiers ou à la demande du wali. Sur le plan de l’organisation intérieure,l’APC forme des commissions permanentes.</p>
            <p>L’Assemblée Populaire Communale règle les affaires relevant de ses compétences. Les délibérations sont prises à la majorité simple de ses membres présents ou représentés au moment du vote. En cas de partage égal des voix, celle du présiden test prépondérante. Les délibérations de l’APC sont exécutoires de plein droit vingt et un jours après leurs dépôts à la wilaya.</p>
            <p>Concernant les délibérations portant sur le budget et les comptes, l’acceptation de dons et legs étrangers, les conventions de jumelage et les aliénations du patrimoine communal, ne seront pas exécutoires qu’après avoir été approuvées par le wali. Sont nulles de plein droit les délibérations de l’APC prisent en violation de la constitution et non conformes aux lois et règlements. Dans ces cas-là, le wali constate par arrêté la nullité de la délibération</p>
            <strong>L’assemblée populaire communale de chemini est composée de 15 Elus, répartis entre formation politiques comme suit :</strong>
            <br>
            <ul>
              <br>
                <li>RASSEMBLEMENT POUR LA CULTURE ET LA DEMOCRATIE(06 sièges)</li>
                <li>CONSENSUS COMMENAL(05 sièges)</li>
                <li>PARTI DU FRONT DE LIBERATION NATIONALE(02 sièges)</li>
                <li>FRONT DES FORCES SOCIALISTES(02 sièges)</li>
            </ul>

        </div>
        <?php foreach(glob("assets/img/elus.*") as $elus) ?>
        <center><h3><a href="<?php echo $elus ?>" style=" color : black">Consulter la liste des élus</a></h3></center>
    </section><!--End administration section-->

    <?php include("footer.php") ?>
    <!--  Main JS File -->
    <script src="assets/js/main.js"></script> <!-- pour le fonctionement de slide etc...-->
</body>
</html>