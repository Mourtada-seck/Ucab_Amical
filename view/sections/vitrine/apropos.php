



<!-- About Section -->
  <section id="Apropos" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>A propos</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row position-relative">

            <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="UpConstruction/assets/img/ucabBaniere.jpg" style="background-size: cover; width: 70%;"></div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <div class="our-story">
                <!-- <h4>Est 1988</h4> -->
                <h3>Sur nous !</h3>
                <p>
                L'Amicale des étudiants de la faculté des sciences et technologies de l’Université Cheikh Akhmadou Bamba (UCAB) est une organisation vivante et proactive, dédiée à l'essor académique et personnel de ses membres. Elle incarne des valeurs de solidarité et de coopération, favorisant des liens solides entre étudiants. L'amicale s'engage à promouvoir l'excellence 
                par des initiatives éducatives et des activités enrichissantes, telles que des séminaires, des ateliers et des projets innovants.</p>
                
                <p>En soutenant des programmes de mentorat et des échanges intellectuels, elle aspire à forger une communauté dynamique et inclusive. L’organisation joue également un rôle clé dans la mise en œuvre de projets structurants, visant à améliorer les conditions d’étude et à renforcer l’impact social des étudiants. En somme, elle constitue un espace d'épanouissement
                    où les talents s'éveillent et les aspirations s'épanouissent.</p>

                <!-- <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch Video</a>
                </div> -->
                <button onclick="traduireArabe()" class="btn btn-success">Traduire en arabe</button> 
            </div>
            </div>

        </div>

        </div>

</section><!-- /About Section -->



<!-- About Section -->
<section id="Aproposs" class="about section" style="display: none;">
    <div class="container section-title" data-aos="fade-up">
        <h2>A propos</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row position-relative">

            <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="UpConstruction/assets/img/ucabBaniere.jpg" style="background-size: cover; width: 70%;"></div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <div class="our-story">
                <!-- <h4>Est 1988</h4> -->
                <h3>معلومات عنا</h3>
                <p>
                رابطة طلاب كلية العلوم والتكنولوجيا بجامعة الشيخ أحمدو بامبا (UCAB) هي منظمة حيوية واستباقية، مكرسة للتنمية الأكاديمية والشخصية لأعضائها. ويجسد قيم التضامن والتعاون، ويعزز الروابط القوية بين الطلاب. تلتزم الجمعية بتعزيز التميز 
                من خلال المبادرات التعليمية والأنشطة الإثرائية كالندوات وورش العمل والمشاريع المبتكرة.</p>
                
                <p>ومن خلال دعم برامج التوجيه والتبادلات الفكرية، تطمح إلى تكوين مجتمع ديناميكي وشامل. تلعب المنظمة أيضًا دورًا رئيسيًا في تنفيذ المشاريع الهيكلية التي تهدف إلى تحسين ظروف الدراسة وتعزيز التأثير الاجتماعي للطلاب. باختصار، إنه يشكل مساحة للتنمية
                حيث تستيقظ المواهب وتزدهر التطلعات.</p>

                <!-- <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch Video</a>
                </div> -->
            <button onclick="traduireFrancais()" class="btn btn-success">Traduire en francais</button>       
            </div>
            </div>

        </div>

        </div>
        
<script>
   
const francais = document.getElementById("Apropos");
const arabe = document.getElementById("Aproposs");

francais.addEventListener("click", ()=> {
    document.getElementById("Apropos").style.display = 'none';
    document.getElementById("Aproposs").style.display = 'block';
});

arabe.addEventListener("click", ()=> {
    document.getElementById("Apropos").style.display = 'block';
    document.getElementById("Aproposs").style.display = 'none';
});




</script>
</section><!-- /About Section -->