<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="category-bg page-title">
  <div class="container-fluid">
    <div class="col-xl-10 mx-auto">
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
      <div class="row w-100">
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
            <!-- BEGIN ARTICLES BLOCK -->
            <!-- TODO: Add link to every element -->
            <div class="col-xl-12">
              <div class="row">
                <div class="article-grid">
                  <!-- ARTICLE 1 -->
                  <div class="grid-item grid-item-width">
                    <article class="article-block">
                      <a href="#">
                        <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-11.png)">
                          <!--                          <img src="images/articles/article-pic-11.png" alt="">-->
                          <div class="article-block-price">Från 14 375 :-</div>
                          <span class="article-block-star"><i class="icon-star"></i>4.8</span>
                          <h5 class="article-block--title d-block d-md-none">Port Sterling</h5>
                          <p class="article-block--subtitle mb-1 d-block d-md-none">Global Resorts Network</p>
                          <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                            <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                          </div>
                        </div>
                        <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                          <div class="d-flex flex-column justify-content-start">
                            <h5 class="article-block--title">Port Sterling</h5>
                            <p class="article-block--subtitle">Global Resorts Network</p>
                          </div>
                          <div class="d-flex flex-row justify-content-start">
                            <span class="mr-3">7 avgångar</span><span>15 dagar</span><span class="ml-auto ml-lg-0"><i class="icon-star"></i>4.8</span>
                          </div>
                        </aside>
                      </a>
                    </article>
                  </div>
                  <!-- ARTICLE 2 -->
                  <div class="grid-item">
                    <article class="article-block">
                      <a href="#">
                        <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-9.png)">
                          <!--                          <img src="images/articles/article-pic-9.png" alt="">-->
                          <div class="article-block-price">Från 15 613:-</div>
                          <span class="article-block-star"><i class="icon-star"></i>4.9</span>
                          <h5 class="article-block--title d-block d-md-none">Oscarmouth</h5>
                          <p class="article-block--subtitle mb-1 d-block d-md-none">Havanna - Trinidad - Varadero</p>
                          <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                            <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                          </div>
                        </div>
                        <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                          <div class="d-flex flex-column justify-content-start">
                            <h5 class="article-block--title">Oscarmouth</h5>
                            <p class="article-block--subtitle">Havanna - Trinidad - Varadero</p>
                          </div>
                          <div class="d-flex flex-row justify-content-start">
                            <span>7 avgångar</span><span>15 dagar</span><span class="ml-auto"><i class="icon-star"></i>4.9</span>
                          </div>
                        </aside>
                      </a>
                    </article>
                  </div>
                  <!-- ARTICLE 3 -->
                  <div class="grid-item">
                    <article class="article-block">
                      <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-10.png);">
                        <!--                        <img src="images/articles/article-pic-10.png" alt="">-->
                        <div class="article-block-price">Från 15 613:-</div>
                        <span class="article-block-star"><i class="icon-star"></i>5.0</span>
                        <h5 class="article-block--title d-block d-md-none">Port Sterling</h5>
                        <p class="article-block--subtitle mb-1 d-block d-md-none">Global Resorts Network</p>
                        <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                          <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                        </div>
                      </div>
                      <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                        <div class="d-flex flex-column justify-content-start">
                          <h5 class="article-block--title">Port Sterling</h5>
                          <p class="article-block--subtitle">Global Resorts Network</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                          <span>7 avgångar</span><span>15 dagar</span><span class="ml-auto"><i class="icon-star"></i>5.0</span>
                        </div>
                      </aside>
                    </article>
                  </div>
                  <!-- ARTICLE 4 -->
                  <div class="grid-item">
                    <article class="article-block">
                      <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-6.png);">
                        <!--                        <img src="images/articles/article-pic-6.png" alt="">-->
                        <div class="article-block-price">Från 15 613:-</div>
                        <span class="article-block-star"><i class="icon-star"></i>4.4</span>
                        <h5 class="article-block--title d-block d-md-none">Kristianmouth</h5>
                        <p class="article-block--subtitle d-block d-md-none mb-1">Global Travel And Vacation</p>
                        <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                          <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                        </div>
                      </div>
                      <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                        <div class="d-flex flex-column justify-content-start">
                          <h5 class="article-block--title">Kristianmouth</h5>
                          <p class="article-block--subtitle">Global Travel And Vacation</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                          <span>7 avgångar</span><span>15 dagar</span><span class="ml-auto"><i class="icon-star"></i>4.4</span>
                        </div>
                      </aside>
                    </article>
                  </div>
                  <!-- ARTICLE 5 -->
                  <div class="grid-item grid-item-height">
                    <article class="article-block">
                      <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-3.png)">
                        <!--                        <img src="images/articles/article-pic-3.png" alt="">-->
                        <div class="article-block-price">Från 15 613:-</div>
                        <span class="article-block-star"><i class="icon-star"></i>4.9</span>
                        <h5 class="article-block--title d-block d-md-none">Global Travel And Vacation</h5>
                        <p class="article-block--subtitle d-block d-md-none mb-1">Overseas Adventure</p>
                        <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                          <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                        </div>
                      </div>
                      <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                        <div class="d-flex flex-column justify-content-start">
                          <h5 class="article-block--title">Global Travel And Vacation</h5>
                          <p class="article-block--subtitle">Overseas Adventure</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                          <span>7 avgångar</span><span>15 dagar</span><span class="ml-auto"><i class="icon-star"></i>4.9</span>
                        </div>
                      </aside>
                    </article>
                  </div>
                  <!-- ARTICLE 6 -->
                  <div class="grid-item grid-item-height">
                    <article class="article-block">
                      <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-4.png);">
                        <!--                        <img src="images/articles/article-pic-4.png" alt="">-->
                        <div class="article-block-price">Från 14 375 :-</div>
                        <span class="article-block-star"><i class="icon-star"></i>4.8</span>
                        <h5 class="article-block--title d-block d-md-none">New York</h5>
                        <p class="article-block--subtitle d-block d-md-none mb-1">The Big Apple</p>
                        <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                          <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                        </div>
                      </div>
                      <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                        <div class="d-flex flex-column justify-content-start">
                          <h5 class="article-block--title">New York</h5>
                          <p class="article-block--subtitle">The Big Apple</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                          <span>7 avgångar</span><span>15 dagar</span><span class="ml-auto"><i class="icon-star"></i>4.8</span>
                        </div>
                      </aside>
                    </article>
                  </div>
                  <!-- ARTICLE 7 -->
                  <div class="grid-item">
                    <article class="article-block">
                      <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-8.png);">
                        <!--                        <img src="images/articles/article-pic-8.png" alt="">-->
                        <div class="article-block-price">Från 23 980:-</div>
                        <span class="article-block-star"><i class="icon-star"></i>4.8</span>
                        <h5 class="article-block--title d-block d-md-none">New York</h5>
                        <p class="article-block--subtitle d-block d-md-none mb-1">The Big Apple</p>
                        <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                          <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                        </div>
                      </div>
                      <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                        <div class="d-flex flex-column justify-content-start">
                          <h5 class="article-block--title">New York</h5>
                          <p class="article-block--subtitle">The Big Apple</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                          <span>7 avgångar</span><span>15 dagar</span><span class="ml-auto"><i class="icon-star"></i>4.8</span>
                        </div>
                      </aside>
                    </article>
                  </div>
                  <!-- ARTICLE 8 -->
                  <div class="grid-item">
                    <article class="article-block">
                      <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-5.png);">
                        <!--                        <img src="images/articles/article-pic-5.png" alt="">-->
                        <div class="article-block-price">Från 23 980:-</div>
                        <span class="article-block-star"><i class="icon-star"></i>4.9</span>
                        <h5 class="article-block--title d-block d-md-none">Monaborough</h5>
                        <p class="article-block--subtitle d-block d-md-none mb-1">Overseas Adventure Travel</p>
                        <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                          <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                        </div>
                      </div>
                      <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                        <div class="d-flex flex-column justify-content-start">
                          <h5 class="article-block--title">Monaborough</h5>
                          <p class="article-block--subtitle">Overseas Adventure Travel</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                          <span>7 avgångar</span><span>15 dagar</span><span class="ml-auto"><i class="icon-star"></i>4.9</span>
                        </div>
                      </aside>
                    </article>
                  </div>
                  <!-- ARTICLE 9 -->
                  <div class="grid-item">
                    <article class="article-block">
                      <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-7.png);">
                        <!--                        <img src="images/articles/article-pic-7.png" alt="">-->
                        <div class="article-block-price">Från 15 613:-</div>
                        <span class="article-block-star"><i class="icon-star"></i>4.8</span>
                        <h5 class="article-block--title d-block d-md-none">Overseas Adventure Travel</h5>
                        <p class="article-block--subtitle d-block d-md-none mb-1">Global Resorts Network</p>
                        <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                          <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                        </div>
                      </div>
                      <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                        <div class="d-flex flex-column justify-content-start">
                          <h5 class="article-block--title">Overseas Adventure Travel</h5>
                          <p class="article-block--subtitle">Global Resorts Network</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                          <span>7 avgångar</span><span>15 dagar</span><span class="ml-auto"><i class="icon-star"></i>4.8</span>
                        </div>
                      </aside>
                    </article>
                  </div>
                  <!-- ARTICLE 10 -->
                  <div class="grid-item">
                    <article class="article-block">
                      <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-1.png);">
                        <!--                        <img src="images/articles/article-pic-1.png" alt="">-->
                        <div class="article-block-price">Från 14 375 :-</div>
                        <span class="article-block-star"><i class="icon-star"></i>4.8</span>
                        <h5 class="article-block--title d-block d-md-none">Overseas Adventure Travel</h5>
                        <p class="article-block--subtitle d-block d-md-none mb-1">Global Resorts Network</p>
                        <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                          <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                        </div>
                      </div>
                      <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                        <div class="d-flex flex-column justify-content-start">
                          <h5 class="article-block--title">Overseas Adventure Travel</h5>
                          <p class="article-block--subtitle">Global Resorts Network</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                          <span>7 avgångar</span><span>15 dagar</span><span class="ml-auto"><i class="icon-star"></i>4.8</span>
                        </div>
                      </aside>
                    </article>
                  </div>
                  <!-- ARTICLE 11 -->
                  <div class="grid-item">
                    <article class="article-block">
                      <a href="#">
                        <!--  flex-wrap-reverse flex-sm-nowrap justify-content-end -->
                        <div class="article-block-img d-flex flex-column" style="background-image: url(images/articles/article-pic-2.png);">
                          <!--                          <img src="images/articles/article-pic-2.png" alt="">-->
                          <div class="article-block-price">Från 14 375 :-</div>
                          <span class="article-block-star"><i class="icon-star"></i>4.8</span>
                          <h5 class="article-block--title d-block d-md-none">Port Sterling</h5>
                          <p class="article-block--subtitle mb-1 d-block d-md-none">Global Resorts Network</p>
                          <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                            <span class="mr-3">7 avgångar</span><span>15 dagar</span>
                          </div>
                        </div>
                        <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                          <div class="d-flex flex-column justify-content-start">
                            <h5 class="article-block--title">Port Sterling</h5>
                            <p class="article-block--subtitle">Global Resorts Network</p>
                          </div>
                          <div class="d-flex flex-row justify-content-start">
                            <span class="mr-3">7 avgångar</span><span>15 dagar</span><span class="ml-auto ml-lg-0"><i class="icon-star"></i>4.8</span>
                          </div>
                        </aside>
                      </a>
                    </article>
                  </div>
                  <!-- MORE LINK -->
                  <div class="grid-item">
                    <a href="#" class="grid-item__btn btn-blue">More</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- END ARTICLES BLOCK -->
          </div>
        </div>
        <!-- END ARTICLES -->
      </div>
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