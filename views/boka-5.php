<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="page-title small-page-title">
  <div class="container-fluid">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row justify-content-between">
        <div class="col-xl-3 col-lg-3"></div>
        <div class="col-xl-9 col-lg-9 align-self-end">
          <div class="page-title-content small-page-title-content">
            <h1>Boka</h1>
            <h3 class="fz-20">Djupa dalar, pittoreska byar och underbart klimat</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER BG -->

<!-- BEGIN BOKA 4 & SIDE MENU -->
<div class="container-fluid top-section">
  <div class="row">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row">
        <!-- BEGIN SIDE MENU -->
		  <?php include "sidebar-menu.php"; ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN BOKA 4 CONTENT -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto boka-content small-content-padding-top">
          <div class="row">
            <div class="col-12">
              <!-- BEGIN CONTENT -->
              <div class="row">
                <div class="col-12">
                  <h3 class="fz-30">Må bra resa Rügen 6d 2018-05-01</h3>
                  <!-- TABLE SECTION 1 -->
                  <h4 class="mt-5"><i class="icon-information pr-2"></i>Bokningsinformation</h4>
                  <table class="boka-4__table table-responsive mt-3">
                    <tbody>
                    <tr>
                      <td><b>Kundnummer:</b></td>
                      <td><span>12453403</span></td>
                    </tr>
                    <tr>
                      <td><b>Bokningsnummer:</b></td>
                      <td><span>124503</span></td>
                    </tr>
                    <tr>
                      <td><b>Bokningsansvarig:</b></td>
                      <td><span>Name Surname</span></td>
                    </tr>
                    <tr>
                      <td><b>Antal resenärer:</b></td>
                      <td><span>1</span></td>
                    </tr>
                    <tr>
                      <td><b>Epostadress:</b></td>
                      <td>
                        <form action="" class="boka-5__email">
                          <label for="email">
                            <input type="email" value="email@gmail.com">
                          </label>
                        </form>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                  <!-- TABLE SECTION 2 -->
                  <h4 class="mt-5"><i class="icon-people pr-2"></i>Resenärer</h4>
                  <table class="boka-4__table table-responsive mt-3">
                    <tbody>
                    <tr>
                      <td><b>Namn:</b></td>
                      <td><b>Påstigning:</b></td>
                    </tr>
                    <tr>
                      <td><span>Name Surname</span></td>
                      <td><span>07.30 Göteborg Göteborgsoperan</span></td>
                    </tr>
                    </tbody>
                  </table>
                  <!-- TABLE SECTION 3 -->
                  <h4 class="mt-5"><i class="icon-credit-card pr-2"></i>Betalningsinformation</h4>
                  <table class="boka-4__table table-responsive mt-3">
                    <tbody>
                    <tr>
                      <td><b>Totalpris:</b></td>
                      <td><span>7.045 kr</span></td>
                    </tr>
                    <tr>
                      <td><b>Totalt inbetalt:</b></td>
                      <td><span>0 kr</span></td>
                    </tr>
                    <tr>
                      <td><b>Återstående:</b></td>
                      <td><span>7.045 kr</span></td>
                    </tr>
                    </tbody>
                  </table>

                  <p class="mt-5 pt-0 pt-md-4">Observera att om ni betalar över bankgiro så tar det cirka 3 arbetsdagar innan er betalning registreras.</p>
                  <div class="row no-gutters mt-5">
                    <div class="col-md-4 col-12">
                      <div class="boka-5__pay-type">
                        <p>Betala bokningsavgiften<br>
                          Förfallodag 2017-12-10</p>
                        <h4>fr 750</h4>
                        <a href="#" class="btn btn-orange p-3 boka-5__btn">betala</a>
                      </div>
                    </div>
                    <div class="col-md-4 col-12">
                      <div class="boka-5__pay-type">
                        <p>Betala hela resan direkt<br>
                          Förfallodag 2018-04-10</p>
                        <h4>fr 7.590</h4>
                        <a href="#" class="btn btn-orange p-3 boka-5__btn">betala</a>
                      </div>
                    </div>
                    <div class="col-md-4 col-12">
                      <div class="boka-5__pay-type">
                        <p>
                          Betala annan delsumma<br>
                          Förfallodag 2018-04-10
                        </p>
                        <form action="" class="boka-5__amount">
                          <label for="amount">
                            <input type="text" placeholder="Type amount">
                          </label>
                        </form>
                        <a href="#" class="btn btn-orange p-3 boka-5__btn">betala</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- END CONTENT -->
            </div>
          </div>
        </div>
        <!-- END BOKA 4 CONTENT -->
      </div>
    </div>
  </div>
</div>
<!-- END BOKA 4 & SIDE MENU -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>
