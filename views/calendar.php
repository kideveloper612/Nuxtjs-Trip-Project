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
            <h1>Kalender</h1>
            <h3 class="fz-20">Djupa dalar, pittoreska byar och underbart klimat</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER BG -->

<!-- BEGIN CALENDAR CONTENT & SIDE MENU -->
<div class="container-fluid top-section">
  <div class="row">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row">
        <!-- BEGIN SIDE MENU -->
		  <?php include "sidebar-menu.php"; ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN CALENDAR CONTENT -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto gen-info-content small-content-padding-top">
          <div class="row">
            <div class="col-12">
              <!-- BEGIN FILTER -->
              <div class="calendar-filter__wrap d-none d-md-block">
                <ul class="calendar-filter__list">
                  <li class="active-filter"><a href="#">Alla reslängder</a></li>
                  <li><a href="#">1-2 dagar</a></li>
                  <li><a href="#">3-5 dagar</a></li>
                  <li><a href="#">6-10 dagar</a></li>
                  <li><a href="#">Längre</a></li>
                </ul>
                <div class="w-100"></div>
                <ul class="calendar-filter__list">
                  <li class="active-filter"><a href="#">Alla flygplatser</a></li>
                  <li><a href="#">Göteborg</a></li>
                  <li><a href="#">Köpenhamn</a></li>
                  <li><a href="#">Stockholm</a></li>
                  <li><a href="#">Oslo</a></li>
                </ul>
                <div class="w-100"></div>
                <ul class="calendar-filter__list">
                  <li class="active-filter"><a href="#">Alla färdsätt</a></li>
                  <li><a href="#">Bussresa</a></li>
                  <li><a href="#">Flygresa</a></li>
                </ul>
              </div>
              <!-- BEGIN MOBILE FILTER -->
              <div class="calendar-filter__wrap d-block d-md-none">
                <form action="" class="calendar-filter__form">
                  <label for="filter-1">
                    <select name="filter-1" id="filter-1" class="calendar-filter__form--big-select">
                      <option value="1">Alla reslängder</option>
                      <option value="2">1-2 dagar</option>
                      <option value="3">3-5 dagar</option>
                      <option value="4">6-10 dagar</option>
                      <option value="5">Längre</option>
                    </select>
                  </label>
                  <label for="filter-2">
                    <select name="filter-2" id="filter-3">
                      <option value="1">Alla flygplatser</option>
                      <option value="2">Göteborg</option>
                      <option value="3">Köpenhamn</option>
                      <option value="4">Stockholm</option>
                      <option value="5">Oslo</option>
                    </select>
                  </label>
                  <label for="filter-2">
                    <select name="filter-2" id="filter-3">
                      <option value="1">Alla färdsätt</option>
                      <option value="2">Bussresa</option>
                      <option value="3">Flygresa</option>
                    </select>
                  </label>
                </form>
              </div>
              <!-- END MOBILE FILTER -->
              <!-- END FILTER -->
              <!-- BEGIN TABLE -->
              <div class="calendar-table">
                <div class="calendar-table__row calendar-table__row--head font-weight-bold">
                  <div class="calendar-table__col">Datum</div>
                  <div class="calendar-table__col">Resmål</div>
                  <div class="calendar-table__col text-right">Flygplats</div>
                  <div class="calendar-table__col text-right">Pris</div>
                  <div class="calendar-table__col">Plats</div>
                </div>
				  <?php for ( $i = 0; $i < 15; $i ++ ): ?>
                    <div class="calendar-table__row">
                      <div class="calendar-table__col calendar-table__date">
                        <span><span class="d-none d-md-inline-block">09-06-2017</span><span class="d-inline-block d-md-none">09/06</span></span>
                        <span class="calendar-table__day">Tis</span>
                      </div>
                      <div class="calendar-table__col">
                        <div class="text-truncate font-weight-bold">
                          New York Doubletree Hilton 7d Deluxe Dagstur Vänerskärgården Torsö
                        </div>
                      </div>
                      <div class="calendar-table__col">Köpenhamn</div>
                      <div class="calendar-table__col calendar-table__price text-right">fr 6975</div>
                      <div class="calendar-table__col d-flex align-items-center f-grow">
                        <?php if ($i % 2): ?>
                          <span class="font-weight-bold pl-2 pl-md-0">3</span>
                        <?php else: ?>
                          <span class="font-weight-bold pl-2 pl-md-0">>8</span>
                        <?php endif; ?>
                        <button class="calendar-table__btn btn-blue">Läs mer</button>
                      </div>
                    </div>
				  <?php endfor; ?>
              </div>
              <!-- END TABLE -->
              <div class="nav-btn__wrap">
                <a class="nav-btn"><i class="icon-arrow-left"></i> Tidigare</a>
                <a class="nav-btn">Senare <i class="icon-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- END CALENDAR INFO CONTENT -->
      </div>
    </div>
  </div>
</div>
<!-- END CALENDAR CONTENT & SIDE MENU -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>
