<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="category-bg page-title">
  <div class="container-fluid">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row justify-content-between">
        <div class="col-xl-3 col-lg-3"></div>
        <div class="col-xl-9 col-lg-9 align-self-end">
          <div class="page-title-content">
            <h1>Resor</h1>
            <p class="fz-20">Djupa dalar, pittoreska byar och underbart klimat</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER BG -->

<!-- BEGIN ARTICLES & SIDE MENU -->
<div class="container-fluid top-section">
  <div class="col-xl-10 col-12 mx-auto">
    <div class="row">
      <!-- BEGIN SIDE MENU -->
		<?php include 'sidebar-menu.php' ?>
      <!-- END SIDE MENU -->
      <!-- BEGIN ARTICLES -->
      <div class="col-xl-9 col-lg-9 col-12 ml-auto category-content">
        <div class="row">
          <!-- BEGIN ARTICLES SEARCH -->
          <div class="col articles-content-search">
            <form action="/" class="d-flex align-items-center">
              <label for="articles-search">
                <input id="articles-search" type="text" placeholder="Sök resmål eller utflykt">
              </label>
              <input type="submit" value="SOK" class="text-uppercase articles-content-search-btn btn-orange">
            </form>
          </div>
          <!-- END ARTICLES SEARCH -->
          <!-- BEGIN CATEGORY MENU -->
          <div class="col-12 category-link">
            <div class="category-link__sort">
              <a href="#" class="icon-cards-default"></a>
              <a href="#" class="icon-list-default"></a>
              <a href="#" class="icon-calendar-default category-link__sort--active"></a>
            </div>
            <ul class="category-link__list d-none d-md-flex">
              <li class="active"><a href="#">Avresa</a></li>
              <li><a href="#">Längd</a></li>
              <li><a href="#">Pris</a></li>
              <li><a href="#">Alfabetisk</a></li>
              <li><a href="#">Bedömning</a></li>
              <li><a href="#">Popularitet</a></li>
            </ul>
            <form action="" class="category-link__form d-flex d-md-none">
              <label for="link-1">
                <select name="links" id="link-1">
                  <option value="1">Avresa</option>
                  <option value="2">Längd</option>
                  <option value="3">Pris</option>
                  <option value="4">Alfabetisk</option>
                  <option value="5">Bedömning</option>
                  <option value="6">Popularitet</option>
                </select>
              </label>
            </form>
          </div>
          <!-- END CATEGORY MENU -->
          <!-- BEGIN GRID -->
          <!-- BEGIN FEATURED -->
          <div class="col-xl-12 category-featured">
            <div class="article-grid">
              <div class="grid-item grid-item-wide">
                <article class="article-block">
                  <a href="#">
                    <div class="article-block-img" style="background-image: url(images/articles/article-pic-11.png);">
<!--                      <img src="images/articles/article-pic-11.png" alt="">-->
                      <div class="article-block-price">Från 14 375 :-</div>
                    </div>
                    <aside class="article-block-footer">
                      <h5>Port Sterling</h5>
                      <p>Global Resorts Network</p>
                      <span>7 avgångar</span><span>15 dagar</span><span><i class="icon-star"></i>4.8</span>
                    </aside>
                  </a>
                </article>
              </div>
            </div>
          </div>
          <!-- END FEATURED -->
          <!-- BEGIN TABLE -->
          <div class="col-xl-12 category__list">
            <div class="category-calendar__table">
				<?php for ( $i = 0; $i < 15; $i ++ ): ?>
                  <div class="category-calendar__table--row">
                    <!-- Hidden at 767 -->
                    <div class="category-calendar__table--col d-none d-md-flex justify-content-center align-items-center">
                      <div class="category-list--img">
                        <img src="images/calendar-list-img-1.jpg" alt="">
                      </div>
                    </div>
                    <div class="category-calendar__table--col f-grow">
                      <div class="category-list__mobile--img d-block d-md-none" style="background-image: url(images/category-list-pic-1.png);"></div>
                      <span class="category-list__table--star-point d-flex d-md-none">
                          <i class="icon-star category-list__table--star"></i>
                          4.8
                      </span>
                      <h4 class="category-list__table--title">Hickleport</h4>
                      <div class="category-list__table--subtitle">The Big Apple</div>
                      <div class="category-list__table--bot-section d-none d-md-flex">
                        <span>7 avgångar</span>
                        <span>5 dagar</span>
                        <span class="category-list__table--star-point">
                            <i class="icon-star category-list__table--star"></i>
                            4.8
                        </span>
                      </div>
                    </div>
                    <div class="category-calendar__table--col align-items-end align-items-md-center justify-content-around text-right text-md-center">
                      <div class="d-flex flex-column d-md-none mb-3">
                        <span>5 dagar</span>
                        <span>7 avgångar</span>
                      </div>
                      <div class="category-list__table--price">Från 14 493 :-</div>
                      <button class="category-list__table--btn btn btn-blue">Läs mer</button>
                    </div>
                  </div>
				<?php endfor; ?>
            </div>
            <button class="category-calendar__more-btn btn btn-blue">More</button>
          </div>
          <!-- END TABLE -->
          <!-- END GRID -->
        </div>
      </div>
      <!-- END ARTICLES -->
    </div>
  </div>
</div>
<!-- END ARTICLES & SIDE MENU -->
<!-- BEGIN MAP -->
<div class="container-fluid product-map">
  <div class="row">
    <div class="col">
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23505.6429868005!2d-74.01114115481872!3d40.71138233539344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z0J3RjNGOLdCZ0L7RgNC6LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1507883993525"
                frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!-- END MAP -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>