  <!-- ======= Section Entete ======= -->
  <?php require_once("../../../sections/admin/entete.php")?>

  <!-- ======= Menu Haut ======= -->
  <?php require_once("../../../sections/admin/menuGaucheHaut.php")?>

  <?php
    require_once("../../../../model/faqDB.php");
    $faq = getByIdFaq($_GET['id_faq'])->fetch();
    
  ?>

  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Ajout Faq</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="listeFaq">Liste</a></li>
                  <li class="breadcrumb-item"><a href="corbeilleFaq">Corbeille</a></li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">

                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-center fs-4"># Modifier faq</h5>
                          <hr>
                          <form action="faqController" class="mx-auto col-lg-6" method="post"
                              enctype="multipart/form-data">

                              <!-- Nom -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="nom" class="form-label">Nom</label>
                                      <input required type="text" name="nom" id="nom" value="<?= $faq['nom']?>"
                                          class="form-control">
                                  </div>
                              </div>


                              <!-- permet de savoir l'id de faq qu'on veut modifier -->
                              <input type="text" name="id_faq" value="<?=$_GET['id_faq']?>" hidden>


                              <!-- Decription -->
                              <div class="row">
                                  <div class="col-lg-12 mt-3">
                                      <label for="description" class="form-label">Decription</label>
                                      <textarea required name="description" id="description"
                                          class="form-control"><?= $faq['description']?></textarea>
                                  </div>
                              </div>

                              <!-- Soumition -->
                              <div class="row">
                                  <div class="col-lg-12 mt-3">
                                      <button type="submit" name="frmEditFaq"
                                          class="fw-bold btn btn-primary">Modifier</button>
                                  </div>
                              </div>

                          </form>
                      </div>
                  </div>

              </div>
          </div>
      </section>
  </main>

  <!-- ======= Footer ======= -->
  <?php require_once("../../../sections/admin/footer.php")?>

  <!-- ======= Script ======= -->
  <?php require_once("../../../sections/admin/script.php")?>