  <?php require_once("../../../sections/admin/entete.php")?>

  <!-- ======= Menu Haut ======= -->
  <?php require_once("../../../sections/admin/menuGaucheHaut.php")?>

  <?php
    require_once("../../../../model/evenmentDB.php");
    $evenment = getAllEvenment($_GET['idEvenment'])->fetch();
  ?>


  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Modification Evennement</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="listeEvenment">Liste</a></li>
                  <li class="breadcrumb-item"><a href="corbeilleEvenment">Corbeille</a></li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">

                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-center fs-4"># Modifier Evennement</h5>
                          <hr>
                          <form action="evenmentController" class="mx-auto col-lg-6" method="post"
                              enctype="multipart/form-data">

                              <!-- Nom -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="nom" class="form-label">Nom</label>
                                      <input required type="text" name="nom" id="nom" value="<?=$evenment['nom']?>"
                                          class="form-control">
                                  </div>
                              </div>


                              <!-- description -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="description" class="form-label">Description</label>
                                      <input required type="text" name="description" id="description"
                                          value="<?=$evenment['description']?>" class="form-control">
                                  </div>
                              </div>

                              <!-- Photo -->
                              <div class="row">
                                  <div class="col-lg-12 mt-3">
                                      <label for="photo" class="form-label">Photo</label>
                                      <input required type="file" name="photo" id="photo" class="form-control">
                                  </div>
                              </div>

                              <input type="hidden" name="id_evenment"
                                  value="<?php echo isset($_POST['id_evenment']) ? $_POST['id_evenment'] : ''; ?>"
                                  hidden>
                              <div class="row">
                                  <div class="col-lg-12 mt-3">
                                      <button type="submit" name="frmAddEvenment"
                                          class="fw-bold btn btn-primary">Enrégistrer</button>
                                      <button type="reset" class="fw-bold btn btn-danger">Annuler</button>
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