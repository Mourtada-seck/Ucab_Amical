<?php
//session_start();
require_once(__DIR__ . "/../../../model/evenmentDB.php");
$listeEvenments = getAllEvenment()->fetchAll();
?>

<style>
/*--------------------------------------------------------------
        # Trending Category Section
        --------------------------------------------------------------*/
.trending-category .post-entry {
    margin-bottom: 30px;
}

.trending-category .post-entry img {
    margin-bottom: 30px;
}

.trending-category .post-entry h2 {
    margin-bottom: 20px;
    font-size: 20px;
    font-weight: 600;
    line-height: 1.2;
}

.trending-category .post-entry h2 a {
    color: var(--heading-color);
}

.trending-category .post-entry h2 a:hover {
    text-decoration: underline;
}

.trending-category .post-entry.lg h2 {
    font-size: 40px;
    line-height: 1;
}

.trending-category .post-meta {
    font-size: 11px;
    letter-spacing: 0.07rem;
    text-transform: uppercase;
    font-weight: 600;
    color: color-mix(in srgb, var(--default-color), transparent 50%);
    margin-bottom: 10px;
}

.trending-category .custom-border {
    border-color: color-mix(in srgb, var(--default-color), transparent 90%) !important;
}

@media (max-width: 768px) {
    .trending-category .custom-border {
        border: none !important;
    }
}

.trending-category .author .photo {
    margin-right: 10px;
}

.trending-category .author .photo img {
    width: 40px;
    border-radius: 50%;
    margin-bottom: 0;
}

.trending-category .author .name h3 {
    margin: 0;
    padding: 0;
    font-size: 15px;
    font-family: var(--default-font);
}

.trending-category .trending {
    border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.trending-category .trending>h3 {
    color: var(--default-color);
    padding: 20px;
    border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.trending-category .trending .trending-post {
    padding: 0;
    margin: 0;
}

.trending-category .trending .trending-post li {
    padding: 0;
    margin: 0;
    list-style: none;
    display: block;
}

.trending-category .trending .trending-post li a {
    display: block;
    padding: 20px;
    border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    position: relative;
    overflow: hidden;
    z-index: 2;
}

.trending-category .trending .trending-post li a .number {
    position: absolute;
    z-index: 1;
    font-size: 5rem;
    left: -10px;
    top: -20px;
    font-weight: 700;
    font-family: var(--heading-font);
    color: color-mix(in srgb, var(--default-color), transparent 95%);
}

.trending-category .trending .trending-post li a h3 {
    font-size: 18px;
    color: var(--default-color);
    transition: 0.3s;
}

.trending-category .trending .trending-post li a .author {
    color: color-mix(in srgb, var(--default-color), transparent 50%);
    font-weight: 500;
}

.trending-category .trending .trending-post li a:hover h3 {
    color: var(--default-color);
    text-decoration: underline;
}

.trending-category .trending .trending-post li:last-child a {
    border-bottom: none;
}
</style>



<!-- Trending Category Section -->
<section id="trending-category" class="trending-category section">
    <div class="section-title">
        <h2>Evenements</h2>
        <!-- <p>Frequently Asked Questions</p> -->
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <?php
            foreach ($listeEvenments as $evenment) {
            ?>
            <div class="col-lg-6 mb-4">
                <div class="post-entry">
                    <a href="#">
                        <img src="public/images/<?= $evenment['photo']?>" alt="" class="img-fluid"
                            style="width: 640px; height: 500px; object-fit: cover;">
                    </a>

                    <div class="post-meta">
                        <span class="date"><?= $evenment['nom']?></span>
                        <span class="mx-1">•</span>
                    </div>
                    <h2><?= $evenment['description']?></h2>
                </div>
            </div>
            <?php
            }
            ?>
        </div> <!-- End .row -->
    </div> <!-- End .container -->
</section><!-- /Trending Category Section -->
<?php
    ob_flush();
?>