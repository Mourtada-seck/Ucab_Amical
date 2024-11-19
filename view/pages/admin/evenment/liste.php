  <?php require_once("../../../sections/admin/entete.php")?>

  <!-- ======= Menu Haut ======= -->
  <?php require_once("../../../sections/admin/menuGaucheHaut.php")?>

  <?php
    require_once("../../../../model/evenmentDB.php");
    $listeEvenments = getAllEvenment()->fetchAll();
  ?>

  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Liste des Evennements</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="addEvenment">Ajout</a></li>
                  <li class="breadcrumb-item"><a href="corbeilleEvenment">Corbeille</a></li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">

                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title"># Evennement</h5>

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
                                foreach ($listeEvenments as $evenments)
                                {
                            ?>
                                  <tr>
                                      <th scope="row">
                                          <img width="35px" style="border-radius:50%"
                                              src="public/images/<?= $evenments['photo']?>" alt="">
                                      </th>
                                      <td><?= $evenments['nom']?></td>
                                      <td><?= $evenments['description']?></td>
                                      <td><?= $evenments['created_at']?></td>
                                      <td>
                                          <?php
                                        if ($evenments['updated_at'] != null) {
                                            echo $evenments['updated_at'];
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
                                          <a onclick="return confirm('Voulez vous bien supprimer')"
                                              href="evenmentController?suppression=1&id_evenment=<?=$evenments['id_evenment']?>"
                                              class="btn btn-danger fw-bold">Supprimer</a>
                                          <a href="evenmentController?edition=1&idEvenment=<?= $evenments['id_evenment']?>"
                                              class="btn btn-warning fw-bold">Modifier</a>
                                      </td>
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