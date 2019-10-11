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
<div class="container-fluid top-section boka2-top-section">
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
                <div class="boka-step-2 boka-step boka-step__active">Personuppgifter</div>
                <div class="boka-step-3 boka-step">Bekräftelse</div>
              </div>
              <!-- END STEPS -->
              <div class="mt-5">
                <h5>Resmål:</h5>
                <p>2017-10-18 New York Doubletree Hilton 7d</p>
              </div>
              <div class="mt-4">
                <h5>Antal:</h5>
                <p>1 personer</p>
              </div>
              <form action="" class="boka-form">
                <div class="row">
                  <div class="col-md-6">
                    <label for="personnummer">
                      <input type="text" id="personnummer" placeholder="Personnummer (frivilligt)">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="namn">
                      <input type="text" id="namn" placeholder="Namn">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="telefon">
                      <input type="text" id="telefon" placeholder="Telefon">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="mobiltelefon">
                      <input type="text" id="mobiltelefon" placeholder="Mobiltelefon">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="adress">
                      <input type="text" id="adress" placeholder="Adress">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="postnummer">
                      <input type="text" id="postnummer" placeholder="Postnummer">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="postort">
                      <input type="text" id="postort" placeholder="Postort">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="epost">
                      <input type="text" id="epost" placeholder="Epost">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="land" class="art-select"><span class="label-placeholder">Land</span>
                      <select name="land" id="land" class="d-flex align-items-end">
                        <option value="">Sverige</option>
                        <option value="">Sverige</option>
                        <option value="">Sverige</option>
                      </select>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="eventuell">
                      <input type="text" id="eventuell" placeholder="Eventuell kampanjkod">
                    </label>
                  </div>
                  <div class="col-12">
                    <h5>Enkel</h5>
                    <h5 class="mt-md-4 mb-md-4 resenar">Resenär 1</h5>
                  </div>
                  <div class="col-md-6">
                    <label for="fornamn">
                      <input type="text" id="fornamn" placeholder="Förnamn">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="efternamn">
                      <input type="text" id="efternamn" placeholder="Efternamn">
                    </label>
                  </div>
                  <div class="col-12">
                    <label for="avreseplats" class="art-select"><span class="label-placeholder">Avreseplats</span>
                      <select name="avreseplats" id="avreseplats" class="d-flex align-items-end">
                        <option value="">Köpenhamn flygplats (CPH). Biljetter skickas ca 3 veckor innan</option>
                        <option value="">Köpenhamn flygplats (CPH). Biljetter skickas ca 3 veckor innan</option>
                        <option value="">Köpenhamn flygplats (CPH). Biljetter skickas ca 3 veckor innan</option>
                      </select>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="utresa" class="art-select"><span class="label-placeholder">Ansultning utresa</span>
                      <select name="utresa" id="utresa" class="d-flex align-items-end">
                        <option value="">Ingen</option>
                        <option value="">Ingen</option>
                        <option value="">Ingen</option>
                      </select>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label for="hemresa" class="art-select"><span class="label-placeholder">Ansulnting hemresa</span>
                      <select name="hemresa" id="hemresa" class="d-flex align-items-end">
                        <option value="">Ingen</option>
                        <option value="">Ingen</option>
                        <option value="">Ingen</option>
                      </select>
                    </label>
                  </div>
                  <div class="col-xl-12">
                    <hr>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="boka-form__btn text-uppercase btn btn-blue mt-5">Fortsätt</button>
                  </div>
                </div>
              </form>
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
