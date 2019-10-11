<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="newsletter__title page-title">
  <div class="container-fluid">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row justify-content-between">
        <div class="col-xl-3 col-lg-3"></div>
        <div class="col-xl-9 col-lg-9 align-self-end">
          <div class="page-title-content">
            <h1>Nyhetsbrev</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER BG -->

<!-- BEGIN NEWSLETTER CONTENT & SIDE MENU -->
<div class="container-fluid newsletter__content top-section">
  <div class="row">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row">
        <!-- BEGIN SIDE MENU -->
        <?php include "sidebar-menu.php"; ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN AVAILABLE POSITIONS CONTENT -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto content-padding-top">
          <div class="row">
            <div class="col-12">
              <!-- Content -->
              <div class="d-flex flex-column justify-content-start">
                <p class="newsletter__content-paragraph">Som prenumerant av vårt nyhetsbrev får du spännande nyheter och
                  erbjudanden mailade till dig regelbundet.</p>
                <p class="newsletter__content-paragraph">Visste du att Rolfs Flyg & Buss producerar resor till nya
                  destinationer löpande? Varje vecka finns det ett nytt spännande resmål att välja bland.</p>
                <div class="d-flex align-items-center newsletter__content-form">
                  <form action="/" class="d-flex flex-column flex-sm-row justify-content-start">
                  <label for="subscribe-email">
                      <input id="subscribe-email" type="text" placeholder="Your E-mail">
                  </label>
                    <input type="submit" value="subscribe" class="text-uppercase btn-orange">
                  </form>
                </div>
              </div>
              <!-- Content -->
            </div>
          </div>
        </div>
      </div>
      <!-- END AVAILABLE POSITIONS CONTENT -->
    </div>
  </div>
</div>
<!-- END NEWSLETTER CONTENT & SIDE MENU -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>