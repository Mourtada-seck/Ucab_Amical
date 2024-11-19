  <!-- ======= Section Entete ======= -->
  <?php require_once("../../../sections/admin/entete.php")?>

  <!-- ======= Menu Haut ======= -->
  <?php require_once("../../../sections/admin/menuGaucheHaut.php")?>

  <?php
    require_once("../../../../model/userDB.php");
    $user = getAlluser($_GET['idUser'])->fetch();
  ?>


  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Modifier L'utilisateur</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="listeUser">Liste</a></li>
                  <li class="breadcrumb-item"><a href="corbeilleUser">Corbeille</a></li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">

                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-center fs-4"># Modification </h5>
                          <hr>
                          <form action="userController" class="mx-auto col-lg-6" method="post"
                              enctype="multipart/form-data">

                              <!-- Nom -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="nom" class="form-label">Nom</label>
                                      <input required type="text" name="nom" id="nom" value="<?=$user['nom']?>"
                                          class="form-control">
                                  </div>
                              </div>


                              <!-- prenom -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="prenom" class="form-label">Prenom</label>
                                      <input required type="text" name="prenom" id="prenom" value="<?=$user['prenom']?>"
                                          class="form-control">
                                  </div>
                              </div>


                              <!-- adresse -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="adresse" class="form-label">Adresse</label>
                                      <input required type="text" name="adresse" id="adresse"
                                          value="<?=$user['adresse']?>" class="form-control">
                                  </div>
                              </div>


                              <!-- email -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="email" class="form-label">Email</label>
                                      e <input required type="text" name="email" id="email" value="<?=$user['email']?>"
                                          class="form-control">
                                  </div>
                              </div>


                              <!-- telephone-->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="telephone" class="form-label">Telephone</label>
                                      <input required type="text" name="telephone" id="telephone"
                                          value="<?=$user['telephone']?>" class="form-control">
                                  </div>
                              </div>

                              <!-- Photo -->
                              <div class="row">
                                  <div class="col-lg-12 mt-3">
                                      <label for="photo" class="form-label">Photo</label>
                                      <input required type="file" name="photo" id="photo" class="form-control">
                                  </div>
                              </div>

                              <input type="text" name="idUser" value="<?=$_GET['idUser']?>" hidden>
                              <!-- password -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="password" class="form-label">Password</label>
                                      <input required type="text" name="password" id="password"
                                          value="<?=$user['password']?>" class="form-control">
                                  </div>
                              </div>

                              <!-- role -->
                              <div class="row">
                                  <div class="col-lg-12">
                                      <label for="role" class="form-label">role</label>
                                      <input required type="text" name="role" id="role" value="<?=$user['role']?>"
                                          class="form-control">
                                  </div>
                              </div>

                              <!-- enregistrer -->
                              <div class="row">
                                  <div class="col-lg-12 mt-3">
                                      <button type="submit" name="frmAddUser"
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