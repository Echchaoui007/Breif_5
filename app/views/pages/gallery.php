<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="hero_area">
<?php 
echo $data;
?>

  <!-- price section -->
  <?php foreach ($data['allItems'] as $zedka) : ?>
    <section class="price_section layout_padding">
      <div class="container">
        <div class="price_container">
          <div class="box">
            <div class="name">
              <h6>
              <?= $zedka->name_product ?>
              </h6>
            </div>
            <div class="img-box">
              <img src="<?= $zedka->img_product ?>" alt="">
            </div>
            <div class="detail-box">
            <h5>
                $<span><?= $zedka->quantite_product ?></span>
              </h5>
              <h5>
                $<span><?= $zedka->price_product ?></span>
              </h5>
              <a href="#">
                Buy Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endforeach; ?>

  <!-- end price section -->




  <?php require APPROOT . '/views/inc/footer.php'; ?>