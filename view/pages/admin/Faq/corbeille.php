  <!-- ======= Section Entete ======= -->
  <?php require_once("../../../sections/admin/entete.php")?>

  <!-- ======= Menu Haut ======= -->
  <?php require_once("../../../sections/admin/menuGaucheHaut.php")?>

  <?php
    require_once("../../../../model/faqDB.php");
    $listeFaqs =  getCorbeilleFaq()->fetchAll();
  ?>

  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Liste des Faqs supprimées</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="addFaq">Ajout</a></li>
                  <li class="breadcrumb-item"><a href="listeFaq">Listes</a></li>
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
                                      <!-- <th scope="col"></th> -->
                                      <th scope="col"></th>
                                      <th scope="col">Nom</th>
                                      <th scope="col">Description</th>
                                      <th scope="col">Creer le</th>
                                      <th scope="col">Modifier le</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                foreach ($listeFaqs as $faq)
                                {
                            ?>
                                  <tr>
                                      <th scope="row">
                                      </th>
                                      <td><?= $faq['nom']?></td>
                                      <td><?= $faq['description']?></td>
                                      <td><?= $faq['created_at']?></td>
                                      <td>
                                          <?php
                                        if ($faq['updated_at'] != null) {
                                            echo $faq['updated_at'];
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
                                          <!-- cette espace un probleme -->
                                          <a onclick="return confirm('Voulez vous bien Restaurer ?')"
                                              href="faqController?restaurer=1&idfaq=<?=$faq['id_faq']?>"
                                              class="btn btn-danger fw-bold">Restaurer</a>

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