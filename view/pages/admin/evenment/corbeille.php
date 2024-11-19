  <?php require_once("../../../sections/admin/entete.php")?>

  <!-- ======= Menu Haut ======= -->
  <?php require_once("../../../sections/admin/menuGaucheHaut.php")?>

  <?php
    require_once("../../../../model/evenmentDB.php");
    $listeEvenments = getCorbeilleEvenment()->fetchAll();
  ?>

  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Liste des Evenments supprimées</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="addEvenment">Ajout</a></li>
                  <li class="breadcrumb-item"><a href="listeEvenment">liste</a></li>
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
                                      <th scope="col">description</th>
                                      <th scope="col">Creer le</th>
                                      <th scope="col">Modifier le</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                foreach ($listeEvenments as $evenment)
                                {
                            ?>
                                  <tr>
                                      <th scope="row">
                                          <img width="35px" style="border-radius:50%"
                                              src="public/images/<?= $evenment['photo']?>" alt="">
                                      </th>
                                      <td><?= $evenment['nom']?></td>
                                      <td><?= $evenment['description']?></td>
                                      <td><?= $evenment['created_at']?></td>
                                      <td>
                                          <?php
                                        if ($evenment['updated_at'] != null) {
                                            echo $evenment['updated_at'];
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
                                              href="evenmentController?restaurer=1&id_evenment=<?= $evenment['id_evenment']?>"
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