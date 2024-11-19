  <?php
    require_once("model/faqDB.php");
    $listFaqs= getAllFaq()->fetchAll();
  
  ?>
  <style>
/*--------------------------------------------------------------
      # F.A.Q
      --------------------------------------------------------------*/
.faq {
    padding: 60px 0;
}

.faq .faq-list {
    padding: 0;
    list-style: none;
}

.faq .faq-list li {
    border-bottom: 1px solid #eae7e5;
    margin-bottom: 20px;
    padding-bottom: 20px;
}

.faq .faq-list .question {
    display: block;
    position: relative;
    font-family: #eb5d1e;
    font-size: 18px;
    line-height: 24px;
    font-weight: 400;
    font-weight: 600;
    padding-left: 25px;
    cursor: pointer;
    color: #c54811;
    transition: 0.3s;
}

.faq .faq-list i {
    font-size: 16px;
    position: absolute;
    left: 0;
    top: -2px;
}

.faq .faq-list p {
    margin-bottom: 0;
    padding: 10px 0 0 25px;
}

.faq .faq-list .icon-show {
    display: none;
}

.faq .faq-list .collapsed {
    color: #343a40;
}

.faq .faq-list .collapsed:hover {
    color: #13640F;
}

.faq .faq-list .collapsed .icon-show {
    display: inline-block;
    transition: 0.6s;
}

.faq .faq-list .collapsed .icon-close {
    display: none;
    transition: 0.6s;
}
  </style>


  <!-- ======= F.A.Q Section ======= -->
  <section id="ffaq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>F.A.Q</h2>
              <!-- <p>Frequently Asked Questions</p> -->
          </div>

          <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
              <?php foreach ($listFaqs as $index => $faq) {?>
              <li>
                  <div data-bs-toggle="collapse" class="collapsed question" href="#faq-<?=$index?>">
                      <?=htmlspecialchars($faq['nom']) ?>
                      <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                  </div>
                  <div id="faq-<?=$index?>" class=" collapse" data-bs-parent=".faq-list">
                      <p>
                          <?=htmlspecialchars($faq['description']) ?>
                      </p>
                  </div>
              </li>

              <?php } ?>
          </ul>

      </div>
  </section><!-- End F.A.Q Section -->