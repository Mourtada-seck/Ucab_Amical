  <!-- ======= Section Entete ======= -->
  <?php require_once("../../../sections/admin/entete.php")?>

  <!-- ======= Menu Haut ======= -->
  <?php require_once("../../../sections/admin/menuGaucheHaut.php")?>

  <?php
    require_once("../../../../model/galerieDB.php");
    $listeGaleries = getCorbeilleGalerie()->fetchAll();
  ?>

  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Liste des galeries supprimées</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="addGalerie">Ajout</a></li>
                  <!-- <li class="breadcrumb-item"><a href="addGalerieVideo">Ajout Video</a></li> -->
                  <li class="breadcrumb-item"><a href="listeGalerie">liste</a></li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">

                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title"># Corbeille</h5>

                          <!-- Table with stripped rows -->
                          <table class="table datatable">
                              <thead>
                                  <tr>
                                      <th scope="col">Photo</th>
                                      <th scope="col">Nom</th>
                                      <th scope="col">Description</th>
                                      <th scope="col">Creer le</th>
                                      <th scope="col">Modifier le</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                foreach ($listeGaleries as $galeries)
                                {
                            ?>
                                  <tr>
                                      <th scope="row">
                                          <img width="35px" style="border-radius:50%"
                                              src="public/images/<?= $galeries['photo']?>" alt="">
                                      </th>
                                      <td><?= $galeries['nom']?></td>
                                      <td><?= $galeries['description']?></td>
                                      <td><?= $galeries['created_at']?></td>
                                      <td>
                                          <?php
                                        if ($galeries['updated_at'] != null) {
                                            echo $galeries['updated_at'];
                                        }
                                        else
                                        {
                                        ?>
                                          <span class="text-danger fw-bold">Jamais modifier</span>
                                          <?php
                                        }
                                        ?>
                                      </td>
                                      <td>
                                          <a onclick="return confirm('Voulez vous bien restaurer')"
                                              href="galerieController?restaurer=1&idGalerie=<?= $galeries['id_galerie']?>"
                                              class="btn btn-danger fw-bold">Restaurer</a>

                                  </tr>
                                  <?php
                                }
                            ?>
                              </tbody>
                          </table>
                          <!-- End Table with stripped rows -->

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