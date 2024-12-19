<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>My Works</p>
        </div>

        <div class="row b-portfolio-container gap-5">
            <?php
            for ($x1 = 0; $x1 <= 12; $x1++) {
                $id = "proj$x1";
                $title = "Proje - $x1";
                $date = "27.08.2024";
                $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, iste cum! Expedita, quae
                          officiis
                          quod laborum eaque mollitia reiciendis, fugiat provident eius minima dolorum inventore quasi!
                          Magnam
                          eos optio soluta esse dignissimos distinctio, maiores doloribus, voluptatibus magni reiciendis
                          voluptatem. Repudiandae, voluptas. Excepturi qui eius facilis nemo natus dicta, totam sed?";
                $category = "Kategori";
                $img = "https://picsum.photos/id/$x1/1900";
                $imgs = array("https://picsum.photos/id/$x1/1900", "https://picsum.photos/id/2$x1/1900", "https://picsum.photos/id/3$x1/1900");
                $url = "";
                include("components/portfolio-card-1.php");
            }
            ?>


            <?/*php $title = "Çin Seddi'nin Yapılış Nedeni Hakkında Değişik Bir Görüş";
$date = "27.08.2024";
$description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, iste cum! Expedita, quae
officiis
quod laborum eaque mollitia reiciendis, fugiat provident eius minima dolorum inventore quasi!
Magnam
eos optio soluta esse dignissimos distinctio, maiores doloribus, voluptatibus magni reiciendis
voluptatem. Repudiandae, voluptas. Excepturi qui eius facilis nemo natus dicta, totam sed?";
$category = "Kategori";
$img = "https://picsum.photos/1900";
include("components/portfolio-card.php") */ ?>


            <div class="col-lg-4 col-md-6 portfolio-item filter-app d-none">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.php" data-gallery="portfolioDetailsGallery"
                                data-glightbox="type: external" class="portfolio-details-lightbox"
                                title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>