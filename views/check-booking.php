<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="check-booking__title page-title">
  <div class="container-fluid">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row justify-content-between">
        <div class="col-xl-3 col-lg-3"></div>
        <div class="col-xl-9 col-lg-9 align-self-end">
          <div class="page-title-content">
            <h1>Kontrollera och betala din bokning</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER BG -->

<!-- BEGIN CHECK BOOKING CONTENT & SIDE MENU -->
<div class="container-fluid check-booking__content">
  <div class="row">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row">
        <!-- BEGIN SIDE MENU -->
        <?php include "sidebar-menu.php"; ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN CHECK BOOKING CONTENT -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto content-padding-top">
          <div class="row">
            <div class="col-12">
              <!-- Content -->
                <p class="check-booking__content-paragraph">Du hittar kundnummer och OCR-nummer längst upp på din
                  faktura</p>
                  <form action="/" class="d-flex flex-column flex-md-row justify-content-between check-booking__content-form">
                    <label for="client-number" class="d-flex flex-column">Kundnummer
                      <input id="client-number" type="text" placeholder="Kundnummer">
                    </label>
                    <label for="ocr" class="d-flex flex-column mt-4 mt-md-0">OCR
                      <input id="ocr" type="text" placeholder="OCR">
                    </label>
                    <button type="submit" class="check-booking__content-form--btn text-uppercase btn-blue border-0 mb-2 mt-4 mt-md-0">Till bokning</button>
                  </form>
              <!-- Content -->
            </div>
          </div>
        </div>
      </div>
      <!-- END CHECK BOOKING CONTENT -->
    </div>
  </div>
</div>
<!-- END CHECK BOOKING CONTENT & SIDE MENU -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>