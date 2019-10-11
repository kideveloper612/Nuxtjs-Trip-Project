<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="page-title small-page-title boka-title">
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
<div class="container-fluid top-section boka1-top-section">
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
                <div class="boka-step-1 boka-step boka-step__active">Rumsinformation</div>
                <div class="boka-step-2 boka-step">Personuppgifter</div>
                <div class="boka-step-3 boka-step">Bekräftelse</div>
              </div>
              <!-- END STEPS -->
              <!-- BEGIN CONTENT -->
              <form action="">
                <div class="row">
                  <div class="col-12">
                    <h5 class="mt-5">Resmål:</h5>
                    <p>2018-05-17 New York och Washington 9d</p>
                  </div>
                  <div class="col-12">
                    <h5>Antal resenärer:</h5>
                    <label for="one" class="art-select small-select boka1-art-select">
                      <select name="one" id="one" class="orange-bg border-0">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                      </select>
                    </label>
                    <h5 class="mt-4">Rumsval: </h5>
                    <div class="d-flex align-items-center mt-3">
                      <label for="two" class="art-select small-select boka1-art-select">
                        <select name="two" id="two" class="orange-bg border-0">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                        </select>
                      </label>
                      <span class="pl-3">x 3 (2st -130 cm)</span>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <label for="three" class="art-select small-select boka1-art-select">
                        <select name="three" id="three" class="orange-bg border-0">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                        </select>
                      </label>
                      <span class="pl-3"> x Enkel,  -6975 per rum</span>
                    </div>
                  </div>
                  <div class="col-xl-10 mt-5">
                    <hr>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="boka-form__btn text-uppercase btn btn-blue mt-5">Fortsätt</button>
                  </div>
                </div>
              </form>
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
