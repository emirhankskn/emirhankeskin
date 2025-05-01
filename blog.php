<section id="blog" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Blog</h2>
            <p>My Posts</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row b-portfolio-container">
            <?php
            for ($x2 = 1; $x2 <= 13; $x2++) {
                $id = "blog$x2";
                $title = "Çin Seddi'nin Yapılış Nedeni Hakkında Değişik Bir Görüş";
                $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, iste cum! Expedita, quae
                        officiis
                        quod laborum eaque mollitia reiciendis, fugiat provident eius minima dolorum inventore quasi!
                        Magnam
                        eos optio soluta esse dignissimos distinctio, maiores doloribus, voluptatibus magni reiciendis
                        voluptatem. Repudiandae, voluptas. Excepturi qui eius facilis nemo natus dicta, totam sed?";
                $img = "https://picsum.photos/id/$x2/1200";
                $category = "Kategori";
                $date = "27.08.2024";
                $imgs = array("https://picsum.photos/id/$x1/1900", "https://picsum.photos/id/2$x1/1900", "https://picsum.photos/id/3$x1/1900");
                $url = "/";
                include("components/blog-card-1.php");
            }
            ?>
        </div>

    </div>
</section>