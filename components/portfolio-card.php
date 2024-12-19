<div class="col-12 text-white d-flex m-0 p-0 rounded-3 position-relative portfolio-card">
  <div class="d-flex flex-column flex-fill gap-3 px-4 py-3 portfolio-information">
    <div class="text-center pb-2" style="border-bottom: 1px solid #18d26e;">
      <h2 class="m-0"><?php echo $title; ?></h2>
      <span><i class="bi bi-calendar-fill"></i> <?php echo $date; ?></span>
    </div>
    <p class="flex-fill m-0 overflow-auto">
      <?php echo $description; ?>
    </p>
    <div class="d-flex gap-3">
      <?php $title = $category;
      $className = "bi bi-tag-fill";
      include("components/tag.php") ?>
      <?php $title = "Overview";
      $className = "bi bi-play-fill";
      include("components/tag.php") ?>
    </div>
  </div>
  <!-- <div class="portfolio-inclined-border"></div> -->
  <img class="portfolio-img" src="<?php echo $img; ?>">
</div>