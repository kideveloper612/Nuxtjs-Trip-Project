<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="ansultning__bg page-title">
  <div class="container-fluid">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row justify-content-between">
        <div class="col-xl-3 col-lg-3"></div>
        <div class="col-xl-9 col-lg-9 align-self-end">
          <div class="page-title-content">
            <h1>Ansultning</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER BG -->

<!-- BEGIN AVAILABLE POSITIONS CONTENT & SIDE MENU -->
<div class="container-fluid top-section">
  <div class="row">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row">
        <!-- BEGIN SIDE MENU -->
		  <?php include "sidebar-menu.php"; ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN AVAILABLE POSITIONS CONTENT -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto content-padding-top ansultning-content">
          <div class="row">
            <!-- BEGIN Content -->
            <!-- BEGIN Section 1 -->
            <div class="col-12 ansultning-content__section">
              <div class="features d-flex flex-row justify-content-between">
                <a href="#"><img src="/images/ansultning/bed.svg" alt="Bed"></a>
                <a href="#"><img src="/images/ansultning/location.svg" alt="Location"></a>
                <a href="#"><img src="/images/ansultning/taxi.svg" alt="Taxi"></a>
                <a href="#"><img src="/images/ansultning/parking.svg" alt="Parking"></a>
                <a href="#"><img src="/images/ansultning/dont-disturb.svg" alt="Dont disturb"></a>
              </div>
              <h4>Tåganslutning</h4>
              <p>
                Vi erbjuder direktanslutning med tåg på våra resor ut i Europa. Ni går på tåget på morgonen i lugn och
                ro i er hemort och ansluter till resan på Malmö central under förmiddagen. Vid hemkomst kommer ni till
                Malmö Central igen och tåget tar er sista biten hem. Nedan är några prisexempel.
              </p>
              <!-- BEGIN Table -->
              <table class="ansultning-table-3-col">
                <thead>
                <tr>
                  <td colspan="3">Priser per person och väg</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Stockholm</td>
                  <td>06.20</td>
                  <td>250 kr</td>
                </tr>
                <tr>
                  <td>Norrköping</td>
                  <td>07.30</td>
                  <td>250 kr</td>
                </tr>
                <tr>
                  <td>Linköping</td>
                  <td>08.00</td>
                  <td>250 kr</td>
                </tr>
                <tr>
                  <td>Nässjö</td>
                  <td>08.45</td>
                  <td>250 kr</td>
                </tr>
                <tr>
                  <td>Alvesta</td>
                  <td>09.30</td>
                  <td>195 kr</td>
                </tr>
                <tr>
                  <td>Värnamo</td>
                  <td>08.00</td>
                  <td>195 kr</td>
                </tr>
                <tr>
                  <td>Växjö</td>
                  <td>08.00</td>
                  <td>195 kr</td>
                </tr>
                <tr>
                  <td>Kalmar</td>
                  <td>07.00</td>
                  <td>195 kr</td>
                </tr>
                <tr>
                  <td>Karlskrona</td>
                  <td>07.45</td>
                  <td>195 kr</td>
                </tr>
                </tbody>
              </table>
              <!-- END Table -->
            </div>
            <!-- END Section 1 -->
            <!-- BEGIN Section 2 -->
            <div class="col-12 ansultning-content__section">
              <h4>Anslutningspaket med övernattning</h4>
              <p>
                Vi erbjuder anslutningspaket i samband med köp av någon av våra resor. Grand Hotel Opera ligger mitt i
                centrum av Göteborg med bara fem minuters gångväg från Centralstationen och från vår upptagningsplats.
                Det innebär att ni lugnt och stillsamt kan åka till Göteborg och spendera en eftermiddag i en av
                Sveriges mest sevärda städer för att nästa dag åka vidare mot nya spännande resmål. När ni efter resan
                kommer tillbaka till Göteborg så bor ni på samma hotell och åker utvilade hem till respektive hemort.
                OBS för flygresor tillkommer transport från Göteborg till Landvetter (flygbussen, ca 120 kr).
              </p>
              <div class="row no-gutters">
				  <?php for ( $j = 0; $j < 4; $j ++ ): ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                      <table class="ansultning-table-2-col">
                        <tbody>
						<?php for ( $i = 0; $i < 12; $i ++ ): ?>
                          <tr>
                            <td>Borlänge</td>
                            <td>895 kr</td>
                          </tr>
						<?php endfor; ?>
                        </tbody>
                      </table>
                    </div>
				  <?php endfor; ?>
              </div>
            </div>
            <!-- END Section 2 -->
            <!-- BEGIN Section 3 -->
            <div class="col-12 ansultning-content__section">
              <h4>Ordinarie upptagningsplatser</h4>
              <p class="mb-4">
                Våra bussar startar från Ulricehamn och tar sedan upp längs med vägen. Bor ni inte i närheten av någon
                av våra påstigningsplatser så hjälper vi på kontoret er att hitta en anslutningstransport eller
                bilparkering. På resor norrut erbjuder vi andra påstigningsplatser än de som specificeras nedan.
              </p>
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <ul class="blue-span-list">
                    <li><span>06.00</span> - Ulricehamn Hallgrens garage</li>
                    <li><span>06.30</span> - Borås Järnvägstationen</li>
                    <li><span>06.45</span> - Bollebyggd Statoil R-40</li>
                    <li><span>06.55</span> - Landvetter Bilhotell</li>
                    <li><span>07.00</span> - Landvetter Landvettermotet</li>
                    <li><span>07.30</span> - Göteborg Göteborgsoperan</li>
                    <li><span>07.40</span> - Kållered Busstationen</li>
                    <li><span>07.50</span> - Kungsbacka Tingberget</li>
                    <li><span>08.20</span> - Varberg Statoil Varberg Nord</li>
                  </ul>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <ul class="blue-span-list">
                    <li><span>08.40</span> - Falkenberg Stationen</li>
                    <li><span>09.10</span> - Halmstad Arenan huvudingången</li>
                    <li><span>09.45</span> - Hallandsåsen Rasta Hallandsåsen</li>
                    <li><span>10.10</span> - Ängelholm McDonalds</li>
                    <li><span>10.30</span> - Helsingborg</li>
                    <li><span>10.50</span> - Landskrona Statoil Österleden</li>
                    <li><span>11.05</span> - Löddeköpinge Center Syd</li>
                    <li><span>11.30</span> - Malmö Centralstationen</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- END Section 3 -->
            <!-- BEGIN Section 4 -->
            <div class="col-12 ansultning-content__section">
              <h4>Taxianslutning</h4>
              <p>
                På våra resor erbjuder vi anslutning med taxi från utvalda orter. Ni blir hämtade vid dörren och körda
                till vår upptagningsplats i Göteborg. För tjänsten tillkommer en mindre avgift.
              <p>
                Lidköping, Skara, Skövde, 300 kr per person och väg.
                Uddevalla, Vänersborg, Trollhättan, 250 kr per person och väg.
              <p>
                Priserna är från centralorten. För upphämtningar utanför tillkommer en avgift som sätts av taxibolaget.
              </p>
            </div>
            <!-- END Section 4 -->
            <!-- BEGIN Section 5 -->
            <div class="col-12 ansultning-content__section">
              <h4>Parkering</h4>
              <p>
                För er som tar bilen ner till Göteborgsområdet går det bra att parkera vid <a href="#">Landvetter
                  Bilhotell</a>. För
                bussresor kostar det 50 kr per påbörjat dygn och för flygresor får ni 10% rabatt. Observera att ni måste
                boka plats själva på telefon 0301–31900. Uppge att ni åker med Rolfs.
              <p>
                Vi kan även erbjuda gratis parkering vid Hallgrens Bussgarage i Ulricehamn. Parkeringen finns på
                Alängsgatan 4 och här kan en bil stå parkerad under alla våra bussresor. Parkeringen behöver ej
                förbokas. Hallgrens nås på 0321-532090.
              </p>
            </div>
            <!-- END Section 5 -->
            <!-- BEGIN Section 6 -->
            <div class="col-12 ansultning-content__section">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 order-2 order-lg-1 pt-sm-3">
                  <h4 class="mt-3 mt-lg-0">Övernattningshotell i Göteborg</h4>
                  <p>För er som önskar tillbringa en dag i Göteborg så erbjuder vi övernattning på vårt samarbetshotell
                    Grand Hotel Opera. Här bor ni centralt och bra. Hotellet är fyrstjärningt och ligger på gångvägs
                    avstånd från Centralstationen och från vår upptagningsplats. Frukost ingår naturligtvis.
                  <p>
                    Hotellet har 200 rum och ligger precis vid Brunnsparken. Det betyder att du har Operan, Ullevi,
                    Scandinavium, Svenska Mässan, Liseberg och stadens övriga kultur- och nöjesliv på bekvämt
                    gångavstånd. Lika nära har du till shoppingstråken i Nordstan och de mysiga kvarteren runt
                    Kungsgatan och Östra Hamngatan. Hotellet har pool och bastu som är fria att använda för oss så ta
                    gärna med badkläder.
                  <p class="mb-4 mb-md-0">
                    425 kr per person <a href="#" class="d-inline-flex align-items-center">Se hemsida <i
                              class="icon-arrow-right ml-2"></i></a>
                  </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 order-1 order-lg-2">
                  <img src="images/ansultning/ansultning-pic-1.jpg" alt="" width="100%">
                </div>
              </div>
            </div>
            <!-- END Section 6 -->
            <!-- BEGIN Section 7 -->
            <div class="col-12 ansultning-content__section">
              <div class="row d-flex flex-wrap-reverse">
                <div class="col-xl-6 col-lg-6 col-12 order-lg-1 order-2">
                  <img src="images/ansultning/ansultning-pic-1.jpg" alt="" width="100%">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 order-lg-2 order-1 pt-0 pt-md-3">
                  <h4 class="mt-3 mt-lg-0">Övernattningshotell i Malmö</h4>
                  <p>
                    I Malmö erbjuder vi hotellövernattning i centralt på Comfort Hotel. Hotellet ligger centralt med
                    endast 200 meter till centralstationen och vår upphämtningsplats. Stortorget med restauranger och
                    nöjen ligger endast 8 minuters promenad bort. Hotellets populära frukostbuffé ingår.
                  <p class="mb-4 mb-md-0">
                    295 kr per person <a href="#" class="d-inline-flex align-items-center">Se hemsida <i
                              class="icon-arrow-right ml-2"></i></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END Section 7 -->
            <!-- BEGIN Section 8 -->
            <div class="col-12 ansultning-content__section">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 order-2 order-lg-1 pt-0 pt-md-3">
                  <h4 class="mt-3 mt-lg-0">Landvetter flygplatshotell</h4>
                  <p>
                    För er som skall åka på flygresor från Landvetter så erbjuder Landvetter flygplatshotell förmånliga
                    priser till våra resenärer. Deras charterpaket kostar 645 kr per person för del i dubbelrum och
                    inkluderar frukost, trådlöst internet, inträde till relaxavdelning och bastu.
                  <p>
                    Boende bokas på egen hand och ni måste uppge att ni åker med Rolfs Flyg & Buss. Ni behöver även visa
                    er bokningsbekräftelse vid incheckning. Pris gäller endast efter tillgång och fram till 35 dagar
                    före avresa. Uppge kod CHARTER vid bokning.
                  <p class="mb-4 mb-md-0">
                    <a href="#" class="d-inline-flex align-items-center">Landvetter Flygplatshotell <i
                              class="icon-arrow-right ml-2"></i></a>
                  </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 order-1 order-lg-2">
                  <img src="images/ansultning/ansultning-pic-1.jpg" alt="" width="100%">
                </div>
              </div>
            </div>
            <!-- END Section 8 -->
            <!-- BEGIN Section 9 -->
            <div class="col-12 ansultning-content__section">
              <div class="row d-flex flex-wrap-reverse">
                <div class="col-xl-6 col-lg-6 col-12 order-2 order-lg-1">
                  <img src="images/ansultning/ansultning-pic-1.jpg" alt="" width="100%">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 order-1 order-lg-2 pt-0 pt-md-3">
                  <h4 class="mt-3 mt-lg-0">Flygplatshotellet Härryda</h4>
                  <p>
                    Behöver ni boende inför er flygresa från Landvetter så ger flygplatshotellet i Härryda rabatterade
                    priser på bilparkering och övernattningar i samband med resan. Uppge Rolfs Flyg & Buss vid bokning.
                    Priser per rum och natt är enligt följande:
                  <p class="mb-4 mb-md-0">
                    Enkelrum från 695:- <br>
                    Dubbelrum från 850:- <br>
                    Bilparkering från 40:-/dygn <br>
                    <br>
                    <a href="#" class="d-inline-flex align-items-center">Se hemsida <i
                              class="icon-arrow-right ml-2"></i></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END Section 9 -->
            <!-- BEGIN Section 10 -->
            <div class="col-12 ansultning-content__section">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 order-2 order-lg-1 pt-0 pt-md-3">
                  <h4 class="mt-3 mt-lg-0">Övernattning Nyboholms Vandrarhem</h4>
                  <p>
                    För er som tar bilen till Uricehamn kan vi erbjuda en billig övernattning på Nyboholms Vandrarhem
                    som ligger cirka 300 meter från Hallgrens bussgarage. Boende kostar 325 kr per person i dubbelrum.
                    Frukostpaket kan förbokas mot tillägg. Boende bokas på egen hand direkt hos Nyboholms Vandrarhem.
                  <p class="mb-4 mb-md-0">
                    <a href="#" class="d-inline-flex align-items-center">Nyboholms Vandrarhem <i
                              class="icon-arrow-right ml-2"></i></a>
                  </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 order-1 order-lg-2">
                  <img src="images/ansultning/ansultning-pic-1.jpg" alt="" width="100%">
                </div>
              </div>
            </div>
            <!-- END Section 10 -->
            <!-- END Content -->
          </div>
        </div>
      </div>
      <!-- END AVAILABLE POSITIONS CONTENT -->
    </div>
  </div>
</div>
<!-- END AVAILABLE POSITIONS & SIDE MENU -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>