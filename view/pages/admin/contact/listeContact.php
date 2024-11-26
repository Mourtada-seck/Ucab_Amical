<!-- ======= Section Entete ======= -->
<?php 
    require_once("../../../sections/admin/entete.php")
?>

<!-- ======= Menu HautGauches ======= -->
<?php 
    require_once("../../../sections/admin/menuGaucheHaut.php")
?>
<?php
    require_once("../../../../model/contactDB.php");
    $listeContacts = getAllcontact()->fetchAll();
?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Liste des Contacts</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title"># Contact</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">emeil</th>
                            <th scope="col">Objet</th>
                            <th scope="col">Message</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($listeContacts as $contact)
                                {
                            ?>
                            <tr>
                                <td><?= $contact['nom']?></td>
                                <td><?= $contact['emeil']?></td>
                                <td><?= $contact['objet']?></td>
                                <td><?= $contact['message']?></td>
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
