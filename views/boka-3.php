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

<!-- BEGIN BOKA 1 & SIDE MENU -->
<div class="container-fluid top-section">
  <div class="row">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row">
        <!-- BEGIN SIDE MENU -->
		  <?php include "sidebar-menu.php"; ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN BOKA 1 CONTENT -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto boka-content small-content-padding-top">
          <div class="row">
            <div class="col-12">
              <!-- BEGIN STEPS -->
              <div class="boka-steps">
                <div class="boka-step-1 boka-step">Rumsinformation</div>
                <div class="boka-step-2 boka-step">Personuppgifter</div>
                <div class="boka-step-3 boka-step boka-step__active">Bekräftelse</div>
              </div>
              <!-- END STEPS -->
              <!-- BEGIN CONTENT -->
              <div class="row">
                <div class="col-12">
                  <h5 class="mt-5">Resmål:</h5>
                  <p>2018-05-17 New York och Washington 9d</p>
                  <h5 class="mt-4">Antal:</h5>
                  <p>1 personer</p>
                  <!-- BEGIN FIRST TABLE -->
                  <h5 class="mt-5 mb-3">Kontaktuppgifter:</h5>
                  <table class="boka-table-word-break">
                    <tbody>
                    <tr>
                      <td>Namn</td>
                      <td>Hasan Gunnarsson</td>
                    </tr>
                    <tr>
                      <td>Telefon</td>
                      <td>039-3900103</td>
                    </tr>
                    <tr>
                      <td>Mobiltelefon</td>
                      <td>650219-3136</td>
                    </tr>
                    <tr>
                      <td>Adress</td>
                      <td>Karlsängen 4, 430 92 FOTÖ</td>
                    </tr>
                    <tr>
                      <td>Epost</td>
                      <td>HasanGunnarsson@teleworm.us</td>
                    </tr>
                    </tbody>
                  </table>
                  <!-- END FIRST TABLE -->
                  <!-- BEGIN SECOND TABLE -->
                  <h5 class="pt-2 mt-5 mb-4">Resenarer:</h5>
                  <table class="table table-striped table-responsive boka-table">
                    <tbody>
                    <tr>
                      <td colspan="2">Enkel</td>
                      <td colspan="2">fr 750</td>
                    </tr>
                    <tr>
                      <td>Hasan Gunnarsson</td>
                      <td colspan="2">Gotebörg Gotebörgsoperan kl. 7.30</td>
                      <td>fr 6975</td>
                    </tr>
                    <tr>
                      <td>Ansultningar</td>
                      <td>Utresa</td>
                      <td>Hemresa</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Hasan Gunnarsson</td>
                      <td>Lidköping</td>
                      <td>Lidköping</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="2"><h4 class="mb-0">Totalpris</h4></td>
                      <td colspan="2"><h4 class="mb-0">fr 6975</h4></td>
                    </tr>
                    </tbody>
                  </table>
                  <!--<div class="art-flex-table art-flex-table__striped">
                    <div class="art-flex-table__row">
                      <div class="art-flex-table__col">Enkel</div>
                      <div class="art-flex-table__col text-align-right">fr 750</div>
                    </div>
                    <div class="art-flex-table__row">
                      <div class="art-flex-table__col">Hasan Gunnarsson</div>
                      <div class="art-flex-table__col">Gotebörg Gotebörgsoperan kl. 7.30</div>
                      <div class="art-flex-table__col"></div>
                      <div class="art-flex-table__col text-align-right">fr 6975</div>
                    </div>
                    <div class="art-flex-table__row">
                      <div class="art-flex-table__col">Ansultningar</div>
                      <div class="art-flex-table__col">Utresa</div>
                      <div class="art-flex-table__col">Hemresa</div>
                      <div class="art-flex-table__col"></div>
                    </div>
                    <div class="art-flex-table__row">
                      <div class="art-flex-table__col">Hasan Gunnarsson</div>
                      <div class="art-flex-table__col">Lidköping</div>
                      <div class="art-flex-table__col">Lidköping</div>
                      <div class="art-flex-table__col text-align-right">fr 600</div>
                    </div>
                    <div class="art-flex-table__row">
                      <div class="art-flex-table__col"><h4 class="mb-0">Totalpris</h4></div>
                      <div class="art-flex-table__col text-align-right"><h4 class="mb-0">fr 6975</h4></div>
                    </div>
                  </div>-->
                  <!-- END SECOND TABLE -->
                  <h5 class="mt-5">Eventuella önskemål:</h5>
                  <p class="mt-3">Notera att det inte går att önska platser långt fram i bussen då vi tillämpar
                    bussplacering i bokningsordning.</p>
                  <form action="">
                    <label for="message" class="w-100">
                      <textarea class="mt-3 mt-sm-0" name="" id="message" cols="30" rows="3" placeholder="Placeholder"></textarea>
                    </label>
                    <div class="d-flex justify-content-between align-items-start align-items-sm-center flex-column flex-sm-row">
                      <input type="checkbox" id="checkbox-1">
                      <label for="checkbox-1">Du måste godkänna resevillkoren</label>
                      <a href="" class="c-blue mt-3 mt-sm-0">Läs villkoren här
                        <i class="icon-chevron-right pl-5" style="font-size: 14px;"></i></a>
                    </div>
                    <hr class="mt-4 mb-1">
                    <button type="submit" class="boka-form__btn text-uppercase btn btn-blue mt-4">Fortsätt</button>
                  </form>
                </div>
              </div>
              <!-- END CONTENT -->
            </div>
          </div>
        </div>
        <!-- END BOKA 1 CONTENT -->
      </div>
    </div>
  </div>
</div>
<!-- END BOKA 1 & SIDE MENU -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>
