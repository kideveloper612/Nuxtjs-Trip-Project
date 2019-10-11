<!-- TODO: Insert HTML header -->
<?php include 'header.php' ?>

<!-- BEGIN HEADER BG -->
<div class="catalog-head-bg page-title">
  <div class="container-fluid">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row justify-content-between">
        <div class="col-xl-3 col-lg-3"></div>
        <div class="col-xl-9 col-lg-9 align-self-end">
          <div class="page-title-content">
            <h1>Kataloger</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER BG -->

<!-- BEGIN GENERAL INFO & SIDE MENU -->
<div class="container-fluid top-section">
  <div class="row">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row">
        <!-- BEGIN SIDE MENU -->
		  <?php include "sidebar-menu.php"; ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN KATALOGER CONTENT -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto catalog-content content-padding-top">
          <div class="row">
            <div class="col-12 catalog-text">
              <p>
                På vår hemsida hittar ni den senaste och mest uppdaterade informationen om våra resor. Under året ger vi
                ut ett flertal kataloger som ni kan läsa direkt eller beställa hem.
              </p>
            </div>
            <!-- BEGIN CATALOG COVER -->
            <!-- CATALOG COVER 1 -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
              <div class="catalog-cover">
                <img src="images/catalog/catalog-1.jpg" alt="">
              </div>
              <a href="#" class="catalog-cover__btn btn btn-orange">visa katalog</a>
            </div>
            <!-- CATALOG COVER 2 -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
              <div class="catalog-cover">
                <img src="images/catalog/catalog-2.jpg" alt="">
              </div>
              <a href="#" class="catalog-cover__btn btn btn-orange">visa katalog</a>
            </div>
            <!-- CATALOG COVER 3 -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
              <div class="catalog-cover">
                <img src="images/catalog/catalog-3.jpg" alt="">
              </div>
              <a href="#" class="catalog-cover__btn btn btn-orange">visa katalog</a>
            </div>
            <!-- END CATALOG COVER -->
            <div class="col-xl-12">
              <div class="catalog-form__wrap">
                <h4 class="catalog-form__title">Beställa</h4>
                <form action="" class="catalog-form">
                  <div class="catalog-form__section-wrap d-flex flex-column flex-sm-row">
                    <div class="catalog-form__section">
                      <!-- Name -->
                      <label for="name">Namn</label>
                      <input type="text" id="name" placeholder="Namn">
                      <!-- Address -->
                      <label for="name">Adress</label>
                      <input type="text" id="address" placeholder="Address">
                      <!-- Postadress -->
                      <label for="name">Postadress</label>
                      <input type="text" id="name" placeholder="Postadress">
                    </div>
                    <div class="catalog-form__section">
                      <span>Kataloger</span>
                      <!-- Checkbox 1 -->
                      <input id="catalog-1" type="checkbox" name="catalog1">
                      <label for="catalog-1">Huvudkatalogen 2017</label>
                      <!-- Checkbox 2 -->
                      <input id="catalog-2" type="checkbox" name="catalog2">
                      <label for="catalog-2">Dagsturer 2017</label>
                      <!-- Checkbox 3 -->
                      <input id="catalog-3" type="checkbox" name="catalog3">
                      <label for="catalog-3">Vinterkatalogen 2017</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-blue catalog-form__btn">Beställ</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- END KATALOGER CONTENT -->
      </div>
    </div>
  </div>
</div>
<!-- END GENERAL INFO & SIDE MENU -->
<?php
$link_next = '/';
$link_prev = '/product.php';
?>
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>
