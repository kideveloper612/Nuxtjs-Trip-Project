<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="main-head-bg page-title"></div>
<!-- END HEADER BG -->

<!-- BEGIN ARTICLES & SIDE MENU -->
<div class="container-fluid top-section">
  <div class="row">
    <div class="col-xl-10 col-12 mx-auto"> 
      <!-- BEGIN NEWS BLOCK -->
      <div class="blue-container header-news flex-column">
        <h4>Italien - mat & vin</h4>
        <h5>En smak av Emilia Romagna</h5>
        <p>Regionen Emilia-Romagna i norra Italien är känd för sin matkultur. Här finns flera intressanta vinområden och
          historiska…</p>
        <a href="#" class="header-news-btn d-flex align-self-end text-uppercase">Läs mer<i class="icon-arrow-right"></i></a>
      </div>
      <!-- END NEWS BLOCK -->
      <div class="row">
        <!-- BEGIN SIDE MENU -->
		  <?= $sidebarmenu ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN ARTICLES -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto articles-content">
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
                  <div class="grid-item grid-item-width">
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

<!-- BEGIN BOOKING -->
<div id="someId" class="container-fluid booking-wrap">
  <div class="row">
    <!-- BEGIN BOOKING TITLE -->
    <div class="col-xl-6 d-flex align-items-center justify-content-start justify-content-md-center flex-column text-center booking-title">
      <h3 class="booking-title-header">Bussresor och flygresor till hela världen</h3>
      <p class="booking-title-footer">Rolfs Flyg & Buss arrangerar gruppresor till hela världen. Vi fokuserar på kunniga
        reseledare, väl valda hotell
        och bra priser. Årligen reser närmare 100 000 resenärer på våra gruppresor. Nöjda kunder är återkommande kunder
        är vårt koncept.</p>
    </div>
    <!-- END BOOKING TITLE -->
    <!-- BEGIN BOOKING CONTENT -->

    <div class="col-xl-6 booking-content">
      <div class="booking-content-items">
        <div class="booking-table">
          <!-- Ticket #1 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">08/29</span>
              <span class="booking-content__day">Tis</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Östersjön runt 9d</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 6975</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">3</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #2 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">08/30</span>
              <span class="booking-content__day">Ons</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Vikingakryssning Färöarna & Island 8d Relexa Hotel 4d</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 7975</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">3</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #3 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">08/30</span>
              <span class="booking-content__day">Tor</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Dagstur Vänerskärgården Torsö</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 6546</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">>8</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #4 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">08/30</span>
              <span class="booking-content__day">Lör</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Lloret de Mar 8d</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 9878</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">7</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #5 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">08/31</span>
              <span class="booking-content__day">Ons</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Berlin Flyg Relexa Hotel 4d </h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 2312</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">3</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #6 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">08/31</span>
              <span class="booking-content__day">Tis</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Berlin Relexa Hotel 4d</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 231</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">>8</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #7 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">09/01</span>
              <span class="booking-content__day">Tis</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Birkakryssning 2d</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 3254</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">7</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #8 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">09/01</span>
              <span class="booking-content__day">Tis</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Dagstur Kosteröarna</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 1200</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">>8</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #9 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">09/02</span>
              <span class="booking-content__day">Tor</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Köpenhamn 3d</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 2560</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">7</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #10 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">09/03</span>
              <span class="booking-content__day">Tis</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Polen Rundresa 7d</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 8999</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">3</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
          <!-- Ticket #11 -->
          <div class="booking-table__row">
            <div class="booking-table__col">
              <span class="booking-content__date">09/03</span>
              <span class="booking-content__day">Tis</span>
            </div>
            <div class="booking-table__col">
              <h3 class="booking-content__title text-truncate">Dagstur Ullared Shopping</h3>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__price">fr 9559</span>
            </div>
            <div class="booking-table__col">
              <span class="booking-content__plats">7</span>
              <a href="#" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
          </div>
        </div>
      </div>
      <nav class="booking-nav justify-content-center">
        <a href="#" class="d-flex justify-content-start align-items-center"><span class="icon-arrow-left"></span>Tidigare</a>
        <a href="#" class="d-flex justify-content-end align-items-center">Senare<span class="icon-arrow-right"></span></a>
      </nav>
    </div>

    <!-- END BOOKING CONTENT -->
  </div>
</div>
<!-- END BOOKING -->

<!-- BEGIN INSTAGRAM SECTION -->
<div class="container-fluid instagram-wrap">
  <div class="row">
    <div class="col-12">
      <div class="instagram-title text-center">
        <h2>Follow us on Instagram</h2>
        <h4>and post images with hashtag #rolfbuss</h4>
      </div>
      <div class="instagram-slider d-none d-md-block">
        <div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-3.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-4.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-3.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-4.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-4.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-3.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-3.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-4.png" alt=""></div>
      </div>
      <!-- Mobile slider -->
      <div class="instagram-slider__mobile d-block d-md-none">
        <div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-3.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-4.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-3.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-4.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-4.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-3.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-3.png" alt=""></div>
        <div class="instagram-slider-slide"><img src="images/slider-pic-4.png" alt=""></div>
      </div>
    </div>
  </div>
</div>
<!-- END INSTAGRAM SECTION -->

<!-- BEGIN STAY WITH US -->
<div class="container stay-with-us">
  <div class="row">
    <div class="col">
      <h2>Stay with us</h2>
      <h3>and do not miss the important</h3>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <a href="#" class="stay-with-us-facebook stay-with-us-social"><i class="icon-fb"></i></a>
    <a href="#" class="stay-with-us-youtube stay-with-us-social"><i class="icon-youtube"></i></a>
    <a href="#" class="stay-with-us-instagram stay-with-us-social"><i class="icon-instagram"></i></a>
    <a href="#" class="stay-with-us-pinterest stay-with-us-social"><i class="icon-pinterest"></i></a>
  </div>
</div>
<!-- BEGIN STAY WITH US -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>