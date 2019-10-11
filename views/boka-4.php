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
                  <h3 class="fz-30">Tack för din bokning</h3>
                  <span class="fz-20">Din resa är är nu bokad</span>
                  <table class="boka-4__table table-responsive mt-5">
                    <tbody>
                    <tr>
                      <td><b>Kundnummer:</b></td>
                      <td><span>12453403</span></td>
                    </tr>
                    <tr>
                      <td><b>Bokningsnummer:</b></td>
                      <td><span>124503</span></td>
                    </tr>
                    </tbody>
                  </table>
                  <div class="boka-4__save mt-5">
                    <h3 class="fz-20"><i class="icon-letter fz-20 pr-2"></i>Bekräftelse</h3>
                    <p>Vi har skickat en bekräftelse per mail till email@gmail.com. Du kan även ladda ner din bekräftelse genom länken nedan. </p>
                    <a href="#" class="btn btn-orange boka-4__btn p-3">Spara bekräftelse</a>
                  </div>
                  <div class="boka-4__send mt-5">
                    <h3 class="fz-20"><i class="icon-mailbox fz-20 pr-2"></i>Bekräftelse per post</h3>
                    <p>Om du önskar kan vi även posta en kopia till din angivna adress. Observera att det inte står någon mer information på papperskopian.</p>
                    <a href="#" class="btn btn-orange boka-4__btn p-3">Skicka per post</a>
                  </div>
                  <div class="boka-4__pay mt-5">
                    <h3 class="fz-20"><i class="icon-wallet fz-20 pr-2"></i>Betala resan nu</h3>
                    <p>Du kan även betala hela resan och eventuell förskottsbetalning direkt.</p>
                    <a href="#" class="btn btn-orange boka-4__btn p-3">betala</a>
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
