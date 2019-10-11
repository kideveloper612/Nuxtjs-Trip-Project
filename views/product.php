<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="page-title product-title" style="background-image: url(<?= $main_picture ?>);">
    <div class="container-fluid h-100">
        <div class="row justify-content-between h-75">
            <div class="col-xl-10 col-12 mx-auto">
                <div class="row h-100 product-title__title">
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block"></div>
                    <div class="col-xl-7 col-lg-7 col-md-9 col-12 align-self-center product-title__title--wrap">
                        <div class="d-flex flex-column align-items-start justify-content-around page-title-content product-page-title-content">
                            <h1 class="w-100"><?= $producttitle ?></h1>
                            <h4><?= $subtitle ?></h4>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 d-block d-md-none product-content__hotel-single d-flex justify-content-end flex-column">
                        <div class="product-content__hotel--title-star">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-stroke c-gray-star"></i>
                        </div>
                        <p>1354 personer ger den här resan<br>
                            helhetsomdömet 4.6 av 5</p>
                        <p>Läs omdömen här</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5 page-title-content-price">

                        <? if($days == 1){?>
                            <span>Dagstur</span>
                        <? } else { ?>
                            <span><?= $days ?> dagar</span>
                        <? } ?>
                        <h4>fr <?= number_format($price_min, 0, "", ".") ?>:-</h4>
                        <button class="btn-orange product-title-btn text-uppercase">BOKA</button>
                        <div class="product-title__share">
                            <i class="icon-star product-title__share--star"></i>
                            <span>4.8</span>
                            <a href="#"><i class="icon-share product-title__share--icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-self-end justify-content-between h-25">
            <div class="col-xl-10 col-12 mx-auto d-none d-md-block">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-12"></div>
                    <div class="col-xl-9 col-lg-9 col-12 product-content__hotel-single d-flex justify-content-end flex-column">
                        <div class="product-content__hotel--title-star">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-stroke c-gray-star"></i>
                        </div>
                        <p>1354 personer ger den här resan<br>
                            helhetsomdömet 4.6 av 5</p>
                        <p>Läs omdömen här</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END HEADER BG -->

<!-- BEGIN PRODUCT CONTENT & SIDE MENU -->
<div class="container-fluid product-top-section">
    <div class="row">
        <div class="col-xl-10 col-12 mx-auto">
            <div class="row">
                <!-- BEGIN SIDE MENU -->
                <?= $sidebarmenu ?>
                <!-- END SIDE MENU -->
                <!-- BEGIN PRODUCT CONTENT -->
                <div class="col-xl-9 col-lg-9 col-12 ml-auto product-padding-top product-content">
                    <div class="row">
                        <!-- Nav tabs -->
                        <div class="col-12">
                            <ul class="nav nav-tabs justify-content-start justify-content-md-around" role="tablist">
                                <li class="nav-item">
                                    <a class="d-flex justify-content-center align-items-center nav-link active" data-toggle="tab" href="#descr" role="tab">översikt</a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab" href="#details" role="tab">Dagprogram</a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab" href="#testimonials" role="tab">Omdömen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab" href="#video" role="tab">filmer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab" href="#hotels-list" role="tab">Hotell</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content col-xl-12">
                            <!-- BEGIN DESCRIPTION TAB -->
                            <div class="tab-pane active product-content__descr" id="descr" role="tabpanel">
                                <div class="row">
                                    <!-- Product description title -->
                                    <? if($departure_info){ ?>
                                    <div class="col-xl-12">
                                        <h3 class="fz-20 d-flex product-content__descr--title"><i class="icon-clock"></i>Avgångstider</h3>
                                    </div>
                                    <!-- Product description time-line -->
                                    <div class="col-12 product-content__descr--time-line d-flex flex-column d-md-block">
                                        <?= $departure_info ?>
                                       <!-- <span><b>06.00</b> Ulricehamn</span>
                                        <span><b>06.30</b> Borås</span>
                                        <span><b>07.30</b> Göteborg</span>
                                        <span><b>08.50</b> Falkenberg</span>
                                        <span><b>11.40</b> Malmö och ytterligare ett tiotal orter i södra Sverige.</span>-->
                                    </div>
                                    <? } ?>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6 col-12 fz-20 product-content__descr--text order-2 order-md-1">
                                                <p>
                                                    <?= $preamble ?>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-12 product-content__descr--img order-1 order-md-2">
                                                <img src="images/new-york-product-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 product-content__descr--days">
                                        <ul class="two-columns">

                                            <? foreach($itinerary as $day){?>
                                                <? if($day['day'] == 'x') continue; ?>

                                                <li><span>Dag <?= $day['day'] ?>.</span> <?= $day['title'] ?></li>
                                            <? } ?>
                                        </ul>
                                    </div>
                                    <div class="col d-flex justify-content-center align-items-center justify-content-md-end">
                                        <button class="btn btn-blue product-content__descr--btn">Detaljerat dagprogram</button>
                                    </div>
                                </div>
                            </div>
                            <!-- END DESCRIPTION TAB -->
                            <!-- BEGIN DETAILS TAB -->
                            <div class="tab-pane" id="details" role="tabpanel">
                                <div class="row">
                                    <!-- Product description title -->
                                    <? if($departure_info){ ?>
                                    <div class="col-xl-12">
                                        <h3 class="fz-20 d-flex product-content__descr--title"><i class="icon-clock"></i>Avgångstider</h3>
                                    </div>
                                    <!-- Product description time-line -->
                                    <div class="col-12 product-content__descr--time-line d-flex flex-column d-md-block">
                                        <?= $departure_info ?>
                                       <!-- <span><b>06.00</b> Ulricehamn</span>
                                        <span><b>06.30</b> Borås</span>
                                        <span><b>07.30</b> Göteborg</span>
                                        <span><b>08.50</b> Falkenberg</span>
                                        <span><b>11.40</b> Malmö och ytterligare ett tiotal orter i södra Sverige.</span>-->
                                    </div>
                                    <? } ?>
                                    <div class="col-xl-12">
                                        <p><?= $preamble ?>
                                        </p>
                                        <ul class="product-content__details">
                                            <? foreach($itinerary as $day){ ?>
                                            <li>
                                                <? if($day['day'] != 'x'){?>
                                                <h5 class="product-content__details--days">Dag <?= $day['day'] ?>.</h5>
                                                <h4 class="product-content__details--subtitle"><?= $day['title'] ?></h4>
                                                <? } ?>
                                                <p><?= $day['htmltext'] ?></p>
                                            </li>
                                            <? } ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- END DETAILS TAB -->
                            <!-- BEGIN TESTIMONIALS TAB -->
                            <div class="tab-pane product-content__testimonials" id="testimonials" role="tabpanel">
                                <div class="row">
                                    <!-- Product testimonials content -->
                                    <div class="col-xl-12 product-content__testimonials-content">
                                        <?php for ( $i = 0; $i < 10; $i ++ ): ?>
                                            <article class="product-content__testimonials-article">
                                                <ul class="d-flex justify-content-start flex-wrap product-content__testimonials-title">
                                                    <li><i class="icon-calendar-default"></i></li>
                                                    <li>14:34, 2017-09-20</li>
                                                    <li><b>New York Doubletree Hilton</b></li>
                                                </ul>
                                                <p class="product-content__testimonials-descr">
                                                    Första gången med "paketresa" för oss. Verkligen en positiv överraskning. Prisvärt, mycket
                                                    väl
                                                    planerat med superduktig och proffsig reseledare. Bussguiden i NewYork berättade levande och
                                                    engarat om staden, jättebra! Vi hade inte heller förväntat oss att det skulle bli ett så
                                                    glatt
                                                    "gäng" med deltagare, blev mycket socialt och trevligt tillsammans.
                                                </p>
                                            </article>
                                        <?php endfor; ?>
                                        <button type="button" class=" product-content__testimonials--more-btn btn btn-blue">See more
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- END TESTIMONIALS TAB -->
                            <!-- BEGIN VIDEO TAB -->
                            <div class="tab-pane product-content__video" id="video" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/APw3hmyrvVw" frameborder="0"
                                                allowfullscreen></iframe>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/MF2GsvelF7c" frameborder="0"
                                                allowfullscreen></iframe>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/d9XdnkToX3c" frameborder="0"
                                                allowfullscreen></iframe>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/APw3hmyrvVw" frameborder="0"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- END VIDEO TAB -->
                            <!-- BEGIN HOTELS LIST TAB -->
                            <div class="tab-pane product-content__hotel-list" id="hotels-list" role="tabpanel">
                                <div class="row">
                                    <!-- Hotel 1 -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 product-content__hotel--wrap">
                                        <div class="product-content__hotel">
                                            <a href="#" class="product-content__hotel--img"
                                               style="background-image: url(images/hotels/hotel-3.png)">
                                                <div class="product-content__hotel--date">04-22-2017</div>
                                                <div class="product-content__hotel--title">
                                                    <h4 class="product-content__hotel--title-text">Hotel Pennsylvania</h4>
                                                    <div class="product-content__hotel--title-star">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-stroke c-gray-star"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Hotel 2 -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 product-content__hotel--wrap">
                                        <div class="product-content__hotel">
                                            <a href="#" class="product-content__hotel--img"
                                               style="background-image: url(images/hotels/hotel-1.png)">
                                                <div class="product-content__hotel--date">04-22-2017</div>
                                                <div class="product-content__hotel--title">
                                                    <h4 class="product-content__hotel--title-text">Hotel Edison Times Square</h4>
                                                    <div class="product-content__hotel--title-star">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-stroke c-gray-star"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Hotel 3 -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 product-content__hotel--wrap">
                                        <div class="product-content__hotel">
                                            <a href="#" class="product-content__hotel--img"
                                               style="background-image: url(images/hotels/hotel-2.png)">
                                                <div class="product-content__hotel--date">04-22-2017</div>
                                                <div class="product-content__hotel--title">
                                                    <h4 class="product-content__hotel--title-text">New York Doubletree Hilton 7d</h4>
                                                    <div class="product-content__hotel--title-star">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-stroke c-gray-star"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Hotel 4 -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 product-content__hotel--wrap">
                                        <div class="product-content__hotel">
                                            <a href="#" class="product-content__hotel--img"
                                               style="background-image: url(images/hotels/hotel-4.png)">
                                                <div class="product-content__hotel--date">04-22-2017</div>
                                                <div class="product-content__hotel--title">
                                                    <h4 class="product-content__hotel--title-text">Park Central</h4>
                                                    <div class="product-content__hotel--title-star">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-stroke c-gray-star"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- TODO: Add buttons -->
                                    <!-- HOTEL BUTTONS -->
                                    <div class="col-xl-12 product-content__btn">

                                    </div>
                                </div>
                            </div>
                            <!-- END HOLES LIST TAB -->
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT CONTENT -->
            </div>
        </div>
    </div>
</div>
<!-- END PRODUCT CONTENT & SIDE MENU -->

<!-- BEGIN INFO SECTION -->
<div class="container-fluid product-info">
    <div class="row">
        <div class="col-xl-10 col-12 mx-auto">
            <div class="row">
                <!-- BLOCK 1 -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="product-info-header">
                        <i class="icon-ingar"></i>
                        <h4 class="product-info-header-title">Ingår</h4>
                        <hr>
                    </div>
                    <p><?= $included_in_trip ?>
                        <!--Flyg t/r inklusive flygplansmåltider<br>
                        5 övernattningar i dubbelrum<br>
                        5 frukostar<br>
                        utflykter enligt program<br>
                        metrokort för obegränsat antal resor<br>
                        reseledare-->
                    </p>
                </div>
                <!-- BLOCK 2 -->
                <? if($extras){ ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="product-info-header">
                        <i class="icon-trillag"></i>
                        <h4 class="product-info-header-title">Tillägg</h4>
                        <hr>
                    </div>
                    <p><?= $extras ?>
                    </p>
                </div>
                <? } ?>
                <!-- BLOCK 3 -->
                <? if($currency){ ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="product-info-header">
                        <i class="icon-reservat"></i>
                        <h4 class="product-info-header-title">Resevaluta</h4>
                        <hr>
                    </div>
                    <p><?= $currency ?>
                    </p>
                </div>
                <? } ?>
                <!-- BLOCK 4 -->
                <? if($special_info){ ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="product-info-header">
                        <i class="icon-info-square"></i>
                        <h4 class="product-info-header-title">Speciellt</h4>
                        <hr>
                    </div>
                    <p><?= $special_info ?>
                    </p>
                </div>
                <? } ?>
            </div>
        </div>
    </div>
</div>
<!-- END INFO SECTION -->

<!-- BEGIN TABLE SECTION -->
<div class="container-fluid product-table-wrap">
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <div class="row">
                <!-- BEGIN TABLE NAV -->
                <div class="col"></div>
                <!-- END TABLE NAV -->
                <div class="w-100"></div>
                <!-- BEGIN TABLE -->
                <div class="col">
                    <!-- Nav tabs -->
                    <div class="product-table-tabs-wrap">
                        <ul class="nav nav-tabs product-table-tabs d-inline-flex justify-content-start justify-content-md-center" role="tablist">
                            <li class="nav-item active-tab">
                                <a class="d-flex justify-content-center align-items-center nav-link active" data-toggle="tab" href="#table-tab-one" role="tab">Alla
                                    flygplatser</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab" href="#table-tab-two" role="tab">Göteborg</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab" href="#table-tab-three" role="tab">Köpenhamn</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab" href="#table-tab-four" role="tab">Stockholm</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab" href="#table-tab-five" role="tab">Oslo</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="table-tab-one" role="tabpanel">
                            <div class="product-table">
                                <div class="product-table__row product-table__row-head">
                                    <div class="product-table__col justify-content-center">Datum</div>
                                    <div class="product-table__col f-grow">Resmål</div>
                                    <div class="product-table__col justify-content-end">Flygplats</div>
                                    <div class="product-table__col justify-content-center">Reseledare</div>
                                    <div class="product-table__col justify-content-end">Pris</div>
                                    <div class="product-table__col">Plats</div>
                                </div>
                                <!-- ROW 1 -->
                                <div class="product-table__row">
                                    <div class="product-table__col">
                                        <div class="product-table__icon d-none d-md-block"><i class="icon-info-circle"></i></div>
                                        <div class="product-table__date">
                                            <div class="d-flex flex-column">
                                                <span class="d-none d-md-inline-block">2017-09-27</span>
                                                <span class="d-inline-block d-md-none">09/27</span>
                                                <span>Tis</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-table__col f-grow">
                                        <div class="product-table__directions text-truncate">New York Doubletree Hilton 7d Deluxe Dagstur
                                            Vänerskärgården Torsö
                                        </div>
                                    </div>
                                    <div class="product-table__col justify-content-end">
                                        <div class="product-table__airport text-truncate">South Sandrine</div>
                                    </div>
                                    <div class="product-table__col">
                                        <div class="product-table__lead-tour">Malin Eriksson</div>
                                    </div>
                                    <div class="product-table__col justify-content-start justify-content-md-end">
                                        <div class="product-table__price">fr 27597</div>
                                    </div>
                                    <div class="product-table__col">
                                        <div class="product-table-place">3</div>
                                        <button class="product-table-btn btn-blue ml-auto">boka</button>
                                    </div>
                                </div>
                                <!-- ROW 2 -->
                                <div class="product-table__row">
                                    <div class="product-table__col">
                                        <div class="product-table__icon d-none d-md-block"><i class="icon-info-circle"></i></div>
                                        <div class="product-table__date">
                                            <div class="d-flex flex-column">
                                                <span class="d-none d-md-inline-block">2017-09-27</span>
                                                <span class="d-inline-block d-md-none">09/27</span>
                                                <span>Tis</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-table__col f-grow">
                                        <div class="product-table__directions text-truncate">Dagstur Vänerskärgården Torsö</div>
                                    </div>
                                    <div class="product-table__col justify-content-end">
                                        <div class="product-table__airport text-truncate">Yundtmouth</div>
                                    </div>
                                    <div class="product-table__col">
                                        <div class="product-table__lead-tour">Malin Eriksson</div>
                                    </div>
                                    <div class="product-table__col justify-content-start justify-content-md-end">
                                        <div class="product-table__price">fr 65556</div>
                                    </div>
                                    <div class="product-table__col">
                                        <div class="product-table-place">&gt;8</div>
                                        <button class="product-table-btn btn-red ml-auto">väntelista</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="table-tab-two" role="tabpanel">...</div>
                        <div class="tab-pane" id="table-tab-three" role="tabpanel">...</div>
                        <div class="tab-pane" id="table-tab-four" role="tabpanel">...</div>
                        <div class="tab-pane" id="table-tab-five" role="tabpanel">...</div>
                    </div>
                    <div class="tabs-btn-wrap">
                        <a class="tabs-btn tabs-btn-left"><i class="icon-arrow-left"></i> Tidigare</a>
                        <a class="tabs-btn tabs-btn-right">Senare <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
                <!-- END TABLE -->
            </div>
        </div>
    </div>
</div>
<!-- END TABLE SECTION -->

<!-- BEGIN MAP -->
<!--<div class="container-fluid product-map">
  <div class="row">
    <div class="col">
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23505.6429868005!2d-74.01114115481872!3d40.71138233539344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z0J3RjNGOLdCZ0L7RgNC6LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1507883993525"
                frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>-->
<!-- END MAP -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>