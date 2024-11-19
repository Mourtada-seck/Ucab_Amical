  <!-- ======= Section Entete ======= -->
  <?php require_once("../../../sections/admin/entete.php")?>

  <!-- ======= Menu Haut ======= -->
  <?php require_once("../../../sections/admin/menuGaucheHaut.php")?>


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
                          <h5 class="card-title text-center fs-4"># Ajout Faq</h5>
                          <hr>
                          <form action="faqController" class="mx-auto col-lg-6" method="post"
                              enctype="multipart/form-data">

                              <!-- Nom -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="nom" class="form-label">Nom</label>
                                      <input required type="text" name="nom" id="nom" class="form-control">
                                  </div>
                              </div>

                              <!-- Decription -->
                              <div class="row">
                                  <div class="col-lg-12 mt-3">
                                      <label for="description" class="form-label">Decription</label>
                                      <textarea required name="description" id="description"
                                          class="form-control"></textarea>
                                  </div>
                              </div>

                              <!-- soumition -->
                              <div class="row">
                                  <div class="col-lg-12 mt-3">
                                      <button type="submit" name="frmAddFaq"
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