<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="page-title product-title" style="background-image: url(images/header-bg.jpg);">
  <div class="container-fluid h-100">
    <div class="row justify-content-between h-75">
      <div class="col-xl-10 col-12 mx-auto">
        <div class="row h-100 product-title__title">
          <div class="col-xl-3 col-lg-3 d-none d-lg-block"></div>
          <div class="col-xl-7 col-lg-7 col-md-9 col-12 align-self-center product-title__title--wrap">
            <div class="d-flex flex-column align-items-start justify-content-around page-title-content product-page-title-content">
              <h1>Chianti med vinfest</h1>
              <h4>Djupa dalar, pittoreska byar och underbart klimat</h4>
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
            <span>7 dagar</span>
            <h4>fr 13 475:-</h4>
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
		  <?php include 'sidebar-menu.php' ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN PRODUCT CONTENT -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto product-padding-top product-content">
          <div class="row">
            <!-- Nav tabs -->
            <div class="col-12">
              <ul class="nav nav-tabs justify-content-start justify-content-md-around" role="tablist">
                <li class="nav-item">
                  <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab" href="#descr" role="tab">översikt</a>
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
                  <a class="d-flex justify-content-center align-items-center nav-link active" data-toggle="tab" href="#hotels-list" role="tab">Hotell</a>
                </li>
              </ul>
            </div>
            <!-- Tab panes -->
            <div class="tab-content col-xl-12">
              <!-- BEGIN DESCRIPTION TAB -->
              <div class="tab-pane product-content__descr" id="descr" role="tabpanel">
                <div class="row">
                  <!-- Product description title -->
                  <div class="col-xl-12">
                    <h3 class="fz-20 d-flex product-content__descr--title"><i class="icon-clock"></i>Avgångstider</h3>
                  </div>
                  <!-- Product description time-line -->
                  <div class="col-12 product-content__descr--time-line d-flex flex-column d-md-block">
                    <span><b>06.00</b> Ulricehamn</span>
                    <span><b>06.30</b> Borås</span>
                    <span><b>07.30</b> Göteborg</span>
                    <span><b>08.50</b> Falkenberg</span>
                    <span><b>11.40</b> Malmö och ytterligare ett tiotal orter i södra Sverige.</span>
                  </div>

                  <div class="d-flex flex-wrap-reverse flex-md-nowrap">
                    <div class="col-xl-6 fz-20 product-content__descr--text">
                      <p>
                        Celle ligger sydost om Lüneburger Heide och nordost om Hannover. Staden har en stadskärna med
                        hundratals korsvirkeshus och ett vackert slott. Här finns lugna gågator kantade av butiker och
                        restauranger. Julmarknaden i Celle är mindre än i storstäderna men bidrar samtidigt till stadens
                        småstadskänsla.
                      <p>
                        Vi flyger till New York med en mellanlandning. Efter gränskontroller av pass och Visa Waiver
                        samlas vi
                        för avfärd till Manhattan och Hotel Doubletree Chelsea by Hilton där vi bor fem nätter.
                      </p>
                    </div>
                    <div class="col-xl-6 product-content__descr--img">
                      <img src="images/new-york-product-img.png" alt="">
                    </div>
                  </div>



                  <div class="col-xl-12 product-content__descr--days">
                    <ul class="two-columns">
                      <li><span>Dag 1.</span> Hemorten – New York</li>
                      <li><span>Dag 2-5.</span> New York</li>
                      <li><span>Dag 6.</span> New York och hemresa</li>
                      <li><span>Dag 7.</span> Hemkomst</li>
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
                  <div class="col-xl-12">
                    <h3 class="fz-20 d-flex product-content__descr--title"><i class="icon-clock"></i>Avgångstider</h3>
                  </div>
                  <!-- Product description time-line -->
                  <div class="col-xl-12 product-content__descr--time-line d-flex flex-column flex-md-row">
                    <span><b>06.00</b> Ulricehamn</span>
                    <span><b>06.30</b> Borås</span>
                    <span><b>07.30</b> Göteborg</span>
                    <span><b>08.50</b> Falkenberg</span>
                    <span><b>11.40</b> Malmö och ytterligare ett tiotal orter i södra Sverige.</span>
                  </div>
                  <div class="col-xl-12">
                    <p>
                      Celle ligger sydost om Lüneburger Heide och nordost om Hannover. Staden har en stadskärna med
                      hundratals korsvirkeshus och ett vackert slott. Här finns lugna gågator kantade av butiker och
                      restauranger. Julmarknaden i Celle är mindre än i storstäderna men bidrar samtidigt till stadens
                      småstadskänsla.
                    </p>
                    <ul class="product-content__details">
                      <li>
                        <h5 class="product-content__details--days">Dag 1.</h5>
                        <h4 class="product-content__details--subtitle">Hemorten – New York</h4>
                        <p>Vi flyger till New York med en mellanlandning. Efter gränskontroller av pass och Visa Waiver
                          samlas vi för avfärd till Manhattan och Hotel Doubletree Chelsea by Hilton där vi bor fem
                          nätter.
                          Hotellet ligger mycket centralt på West 29th Street nära varuhuset Macys och Madison Square
                          Garden.</p>
                      </li>
                      <li>
                        <h5 class="product-content__details--days">Dag 2–5.</h5>
                        <h4 class="product-content__details--subtitle">New York</h4>
                        <p>
                          <b>Vi erbjuder följande utflykter under din vistelse i New York: </b>
                          Utflykterna ingår i resans pris.
                        <p><b>Stadsrundtur Upper Manhattan och Midtown</b>
                          Tillsammans med en lokalguide gör vi en bussrundtur som varar i cirka fyra timmar. Rundturen
                          tar
                          oss genom stadsdelar som bland annat Morningside Heights, Harlem, East Harlem och Upper East
                          Side.
                          Vi passerar sevärdheter som The Dakota, Apolloteatern, Guggenheimmuseet, Grand Army Plaza
                          Fifth
                          Avenue, Rockefeller Center, Grand Central Terminal och Bryant Park.
                        <p><b>Stadsrundtur Lower Manhattan</b>
                          Vi möter återigen vår lokalguide som tar oss med på ytterligare en fyra timmars rundtur med
                          buss.
                          Idag fokuserar vi på Lower Manhattan och Downtown. Här finns bland annat sevärdheter som Times
                          Square, Flatiron Building, Chelsea Market, High Line, Chinatown, SoHo, FN-högkvarteret, Wall
                          Street, Battery Park och 9/11 Memorial (före detta Ground Zero).
                        <p><b>Halvdagsutflykt till Frihetsgudinnan och Ellis Island</b>
                          Vi gör en båtutflykt till Liberty Island och Ellis Island. Båten avgår från Battery Park och
                          vi
                          går i land på Liberty Island för att se en av världens mest berömda statyer, Frihetsgudinnan.
                          Statyn var en gåva från Frankrike och skapades av den franske skulptören Bartholdi. Därefter
                          fortsätter vi till Ellis Island som från 1892 till 1954 var New Yorks immigrationscentrum. En
                          mycket stor del av landets befolkning kan spåra sina rötter till Ellis Island. Vi besöker
                          immigrationsmuseet som har omfattande utställningar om hur invandringen format New York och
                          landets karaktär. Under eftermiddagen återvänder vi med båt till Manhattan.
                        <p><b>Promenad i Central Park</b>
                          Under ett par timmar vandrar vi i den södra halvan av Central Park. I parken finns konstgjorda
                          sjöar, över 30 broar och underbara promenadvägar. Här finns kända platser och områden som
                          exempelvis Strawberry Fields, The Mall, Sheep Meadow, The Lake, Loeb Boathouse och Bethesda
                          Terrace.
                        <p><b>Utflykt Top of the Rock</b>
                          Vi besöker New Yorks bästa utsiktsplats i Rockefeller Center. Top of the Rock finns i GE
                          Building
                          och ger möjligheten att se New Yorks skyskrapor från ovan. Från den 70:e våningen är utsikten
                          magnifik med Empire State Building i blickfånget.
                        </p>
                        <p>
                          <img src="images/slider-pic-2.png" alt="" style="width: 300px; "
                               class="product-content__details--img-left">
                          <b>Extrautflykter med vår reseledare</b>
                        <p>
                          Under resans gång kommer vår reseledare även att erbjuda ytterligare gemensamma utflykter. De
                          anpassas efter årstid och efter de tillfälliga evenemang som finns i staden. På alla resor
                          avsätts en kväll åt dem som vill gå på Broadwaymusikal och vi rekommenderar att köpa biljetter
                          på plats i New York. Kanske lockar en båtutflykt med The Circle Line eller ett besök på något
                          av de världsberömda museerna.
                        </p>
                        <p>
                          <b>Extrautflykter på egen hand</b>
                          <img src="images/slider-pic-2.png" alt="" style="width: 300px;"
                               class="product-content__details--img-right">
                        <p>Under grundserien i NHL finns goda möjligheter att se någon av New York Rangers hemmamatcher
                          i Madison Square Garden. Biljetterna kan oftast köpas på plats i New York fram till dagarna
                          före matchen. Numera finns även New York Islanders matcher på bekvämt avstånd då de spelar
                          sina hemmamatcher i Barclays Center i Brooklyn. När det gäller slutspelsmatcher i Stanley Cup
                          mångdubblas priserna då efterfrågan på biljetter är mycket stor. Det är då nästintill omöjligt
                          att få tag på biljetter dagarna före matcherna.
                        <p>
                          Utmed Fifth Avenue, på den östra sidan av Central Park, finns The Museum Mile. Här ligger
                          museerna tätt och man finner bland annat Metropolitan Museum of Art, Cooper-Hewitt National
                          Museum of Design och Solomon R. Guggenheimmuseet utmed sträckan. Det sistnämnda kallas oftast
                          Guggenheimmuseet.
                        <p>
                          För dem som är intresserade av flyg och rymdfart finns det Intrepid Sea, Air & Space Museum.
                          Det pensionerade hangarfartyget USS Intrepid ligger förtöjt utmed Hudsonfloden. Det deltog
                          bland annat i andra världskriget och är idag ett spännande museum som lockar besökare i alla
                          åldrar. Här finns militärflygplan av alla de slag. Museets senaste tillskott är rymdfärjan
                          Enterprise som kom hit 2012 och har fått en egen utställning. Här finns även den tidigare
                          kärnvapenbestyckade USS Growler som kan besökas på insidan.
                        </p>
                      </li>
                      <li></li>
                      <li></li>
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
					  <?php for ($i = 0; $i < 10; $i++): ?>
                        <article class="product-content__testimonials-article">
                          <ul class="d-flex justify-content-start flex-wrap product-content__testimonials-title">
                            <li><i class="icon-calendar-default"></i></li>
                            <li>14:34, 2017-09-20</li>
                            <li><b>New York Doubletree Hilton</b></li>
                          </ul>
                          <p class="product-content__testimonials-descr">
                            Första gången med "paketresa" för oss. Verkligen en positiv överraskning. Prisvärt, mycket väl
                            planerat med superduktig och proffsig reseledare. Bussguiden i NewYork berättade levande och
                            engarat om staden, jättebra! Vi hade inte heller förväntat oss att det skulle bli ett så glatt
                            "gäng" med deltagare, blev mycket socialt och trevligt tillsammans.
                          </p>
                        </article>
					  <?php endfor; ?>
                    <button type="button" class=" product-content__testimonials--more-btn btn btn-blue">See more</button>
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
              <!-- BEGIN HOTEL SINGLE TAB -->
              <div class="tab-pane active product-content__hotel-single" id="hotels-list" role="tabpanel">
                <div class="row">
                  <div class="col-12 product-content__hotel-single--description-wrap">
                    <h4 class="product-content__hotel-single--title">
                      <i class="icon-arrow-left"></i> Hotel Edison Times Square
                    </h4>
                    <aside class="product-content__hotel-single--description">
                      <span>Hemsida: </span><a href="#" class="c-blue">Hotel Edison Times Square</a>
                    </aside>
                    <aside class="product-content__hotel-single--description">
                      <span>Officiell kategori: </span>
                      <span class="product-content__hotel-single--star">
                        <i class="icon-star c-orange"></i>
                        <i class="icon-star c-orange"></i>
                        <i class="icon-star c-orange"></i>
                        <i class="icon-star c-orange"></i>
                        <i class="icon-star c-gray-star"></i>
                      </span>
                    </aside>
                    <aside class="product-content__hotel-single--description">
                      <span>Hiss: </span><span>ja</span>
                    </aside>
                  </div>
                  <div class="col-md-6 product-content__hotel-single--img">
                    <img src="images/single-hotel/hotel-single-pic-1.jpg" alt="">
                  </div>
                  <div class="col-md-6 product-content__hotel-single--img">
                    <img src="images/single-hotel/hotel-single-pic-2.jpg" alt="">
                  </div>
                  <div class="col-md-6 product-content__hotel-single--img">
                    <img src="images/single-hotel/hotel-single-pic-3.jpg" alt="">
                  </div>
                  <div class="col-md-6 product-content__hotel-single--img">
                    <img src="images/single-hotel/hotel-single-pic-4.jpg" alt="">
                  </div>
                  <div class="col-md-6 product-content__hotel-single--img">
                    <img src="images/single-hotel/hotel-single-pic-5.jpg" alt="">
                  </div>
                  <div class="col-md-6 product-content__hotel-single--img">
                    <img src="images/single-hotel/hotel-single-pic-6.jpg" alt="">
                  </div>
                  <div class="col-12">
                    <div class="product-content__hotel-single--btn-wrap">
                      <a class="product-content__hotel-single--btn-left btn btn-orange"><i class="icon-arrow-left"></i> button</a>
                      <a class="product-content__hotel-single--btn-right btn btn-orange">Button <i class="icon-arrow-right"></i></a>
                    </div>
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
          <p>Flyg t/r inklusive flygplansmåltider<br>
            5 övernattningar i dubbelrum<br>
            5 frukostar<br>
            utflykter enligt program<br>
            metrokort för obegränsat antal resor<br>
            reseledare
          </p>
        </div>
        <!-- BLOCK 2 -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="product-info-header">
            <i class="icon-trillag"></i>
            <h4 class="product-info-header-title">Tillägg</h4>
            <hr>
          </div>
          <p>
            Enkelrum 4 975:-
            dricks till guider och chaufförer
          </p>
        </div>
        <!-- BLOCK 3 -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="product-info-header">
            <i class="icon-reservat"></i>
            <h4 class="product-info-header-title">Resevaluta</h4>
            <hr>
          </div>
          <p>
            Amerikanska dollar
          </p>
        </div>
        <!-- BLOCK 4 -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="product-info-header">
            <i class="icon-info-square"></i>
            <h4 class="product-info-header-title">Speciellt</h4>
            <hr>
          </div>
          <p>
            Alla tider är lokala. När klockan är 12.00 i Sverige är klockan 06.00 i New York.
          </p>
        </div>
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
                <a class="d-flex justify-content-center align-items-center nav-link active" data-toggle="tab" href="#table-tab-one" role="tab">Alla flygplatser</a>
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
                <!--                --><?php //for ($i = 0; $i < 15; $i++): ?>
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
                    <div class="product-table__directions text-truncate">New York Doubletree Hilton 7d Deluxe Dagstur Vänerskärgården Torsö</div>
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
                <!--                --><?php //endfor; ?>
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