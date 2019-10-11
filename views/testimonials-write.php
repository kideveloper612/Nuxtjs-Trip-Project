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
            <h1>Efter resan</h1>
            <h3 class="fz-20">Djupa dalar, pittoreska byar och underbart klimat</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER BG -->

<!-- BEGIN TESTIMONIALS WRITE & SIDE MENU -->
<div class="container-fluid top-section">
  <div class="row">
    <div class="col-xl-10 col-12 mx-auto">
      <div class="row">
        <!-- BEGIN SIDE MENU -->
		  <?php include "sidebar-menu.php"; ?>
        <!-- END SIDE MENU -->
        <!-- BEGIN CALENDAR CONTENT -->
        <div class="col-xl-9 col-lg-9 col-12 ml-auto testimonials-write-content small-content-padding-top">
          <div class="row">
            <div class="col-12">
              <h4>Utvärderingsformulär</h4>
              <p>För att kunna upprätthålla hög standard är det av stort värde för oss att få era synpunkter på resorna.
                Vi är därför ytterst tacksamma om ni efter resan tar er tid och fyller i följande formulär.
              <p>
                Hela formuläret tar ca en minut att besvara</p>
              <!-- BEGIN FORM -->
              <div class="row">
                <div class="col-xl-9">
                  <form action="" class="testimonials-write-content--select-testimonials">
                    <!-- SECTION 1 -->
                    <label for="testimonials-id" class="art-select w-100"><span class="label-placeholder">Vilken resa har ni åkt på</span>
                      <select name="selected-testimonials" id="testimonials-id" class="d-flex align-items-end"  style="height: 50px;">
                        <option value="">Välj resa</option>
                        <option value="">Välj resa</option>
                        <option value="">Välj resa</option>
                        <option value="">Välj resa</option>
                      </select>
                    </label>
                    <!-- SEPARATOR -->
                    <hr class="testimonials-write-content--section">
                    <!-- SECTION 2 -->
                    <table class="testimonials-write-content--table testimonials-write-content--section">
                      <tbody>
                      <tr>
                        <td><b>Resa:</b></td>
                        <td>2018-07-10 Riga-Tallinn 5d</td>
                      </tr>
                      <tr>
                        <td><b>Chaufför:</b></td>
                        <td>Lars Gunnarsson</td>
                      </tr>
                      </tbody>
                    </table>
                    <!-- SECTION 3 -->
                    <div class="testimonials-write-content--section">
                      <h5>Var det här er första resa med oss?:</h5>
                      <input type="radio" id="yes" name="yes">
                      <label for="yes">Ja</label>
                      <input type="radio" id="no" name="yes">
                      <label style="margin-left: 75px;" for="no">Nej</label>
                    </div>
                    <!-- SECTION 4 -->
                    <div class="testimonials-write-content--section">
                      <h5>Ert namn (frivilligt)</h5>
                      <label for="ert_namn" class="w-100">
                        <textarea placeholder="Namn" name="some_name" id="ert_namn" cols="30" rows="2"></textarea>
                      </label>
                    </div>
                    <!-- SECTION 5 -->
                    <div class="testimonials-write-content--section">
                      <h5>Värdera följande som 1 till 5, där 5 är väldigt bra och 1 är väldigt dåligt</h5>
                      <span class="c-blue text-uppercase" style="letter-spacing: 1px; font-size: 12px;">Tallink Victoria</span>
                      <div class="testimonials-write-content__table mt-3">
                        <div class="testimonials-write-content__table--first-col">Standard</div>
                        <div class="radio-in-line testimonials-write-content__table--second-col">
                          <input type="radio" checked id="standard-0" name="radio-in-line-1">
                          <label for="standard-0">Ingen åsikt</label>
                          <input type="radio" id="standard-1" name="radio-in-line-1">
                          <label for="standard-1">1</label>
                          <input type="radio" id="standard-2" name="radio-in-line-1">
                          <label for="standard-2">2</label>
                          <input type="radio" id="standard-3" name="radio-in-line-1">
                          <label for="standard-3">3</label>
                          <input type="radio" id="standard-4" name="radio-in-line-1">
                          <label for="standard-4">4</label>
                          <input type="radio" id="standard-5" name="radio-in-line-1">
                          <label for="standard-5">5</label>
                        </div>
                      </div>
                      <div class="testimonials-write-content__table mt-3">
                        <div class="testimonials-write-content__table--first-col">Mat</div>
                        <div class="radio-in-line testimonials-write-content__table--second-col">
                          <input type="radio" checked id="mat-0" name="radio-in-line-2">
                          <label for="mat-0">Ingen åsikt</label>
                          <input type="radio" id="mat-1" name="radio-in-line-2">
                          <label for="mat-1">1</label>
                          <input type="radio" id="mat-2" name="radio-in-line-2">
                          <label for="mat-2">2</label>
                          <input type="radio" id="mat-3" name="radio-in-line-2">
                          <label for="mat-3">3</label>
                          <input type="radio" id="mat-4" name="radio-in-line-2">
                          <label for="mat-4">4</label>
                          <input type="radio" id="mat-5" name="radio-in-line-2">
                          <label for="mat-5">5</label>
                        </div>
                      </div>
                      <div class="testimonials-write-content__table mt-5">
                        <div class="testimonials-write-content__table--first-col">Busschauffören</div>
                        <div class="radio-in-line testimonials-write-content__table--second-col">
                          <input type="radio" checked id="busschauffören-0" name="radio-in-line-3">
                          <label for="busschauffören-0">Ingen åsikt</label>
                          <input type="radio" id="busschauffören-1" name="radio-in-line-3">
                          <label for="busschauffören-1">1</label>
                          <input type="radio" id="busschauffören-2" name="radio-in-line-3">
                          <label for="busschauffören-2">2</label>
                          <input type="radio" id="busschauffören-3" name="radio-in-line-3">
                          <label for="busschauffören-3">3</label>
                          <input type="radio" id="busschauffören-4" name="radio-in-line-3">
                          <label for="busschauffören-4">4</label>
                          <input type="radio" id="busschauffören-5" name="radio-in-line-3">
                          <label for="busschauffören-5">5</label>
                        </div>
                      </div>
                      <div class="testimonials-write-content__table mt-3">
                        <div class="testimonials-write-content__table--first-col">Bussen</div>
                        <div class="radio-in-line testimonials-write-content__table--second-col">
                          <input type="radio" checked id="bussen-0" name="radio-in-line-4">
                          <label for="bussen-0">Ingen åsikt</label>
                          <input type="radio" id="bussen-1" name="radio-in-line-4">
                          <label for="bussen-1">1</label>
                          <input type="radio" id="bussen-2" name="radio-in-line-4">
                          <label for="bussen-2">2</label>
                          <input type="radio" id="bussen-3" name="radio-in-line-4">
                          <label for="bussen-3">3</label>
                          <input type="radio" id="bussen-4" name="radio-in-line-4">
                          <label for="bussen-4">4</label>
                          <input type="radio" id="bussen-5" name="radio-in-line-4">
                          <label for="bussen-5">5</label>
                        </div>
                      </div>
                      <div class="testimonials-write-content__table mt-3">
                        <div class="testimonials-write-content__table--first-col">Utflykter</div>
                        <div class="radio-in-line testimonials-write-content__table--second-col">
                          <input type="radio" checked id="utflykter-0" name="radio-in-line-5">
                          <label for="utflykter-0">Ingen åsikt</label>
                          <input type="radio" id="utflykter-1" name="radio-in-line-5">
                          <label for="utflykter-1">1</label>
                          <input type="radio" id="utflykter-2" name="radio-in-line-5">
                          <label for="utflykter-2">2</label>
                          <input type="radio" id="utflykter-3" name="radio-in-line-5">
                          <label for="utflykter-3">3</label>
                          <input type="radio" id="utflykter-4" name="radio-in-line-5">
                          <label for="utflykter-4">4</label>
                          <input type="radio" id="utflykter-5" name="radio-in-line-5">
                          <label for="utflykter-5">5</label>
                        </div>
                      </div>
                      <div class="testimonials-write-content__table mt-3">
                        <div class="testimonials-write-content__table--first-col">Resan som helhet</div>
                        <div class="radio-in-line testimonials-write-content__table--second-col">
                          <input type="radio" checked id="resan-0" name="radio-in-line-6">
                          <label for="resan-0">Ingen åsikt</label>
                          <input type="radio" id="resan-1" name="radio-in-line-6">
                          <label for="resan-1">1</label>
                          <input type="radio" id="resan-2" name="radio-in-line-6">
                          <label for="resan-2">2</label>
                          <input type="radio" id="resan-3" name="radio-in-line-6">
                          <label for="resan-3">3</label>
                          <input type="radio" id="resan-4" name="radio-in-line-6">
                          <label for="resan-4">4</label>
                          <input type="radio" id="resan-5" name="radio-in-line-6">
                          <label for="resan-5">5</label>
                        </div>
                      </div>
                    </div>
                    <!-- SECTION 6 -->
                    <div class="testimonials-write-content--section">
                      <h5>Om ni har svarat 1 eller 2 på någon fråga ovan, vänligen förklara varför</h5>
                      <label for="message-1" class="w-100">
                        <textarea placeholder="Type your message" name="some_name-1" id="message-1" cols="30" rows="4"></textarea>
                      </label>
                    </div>
                    <!-- SECTION 7 -->
                    <div class="testimonials-write-content--section">
                      <h5>Har ni några synpunkter och förslag?</h5>
                      <label for="message-2" class="w-100">
                        <textarea placeholder="Type your message" name="some_name-2" id="message-2" cols="30" rows="4"></textarea>
                      </label>
                    </div>
                    <!-- SECTION 8 -->
                    <div class="testimonials-write-content--section">
                      <h5>Kommer ni att resa med Rolfs Flyg & Buss igen?</h5>
                      <input type="radio" id="yes-1" name="name-1">
                      <label for="yes-1">Ja</label>
                      <input type="radio" id="kanske" name="name-1">
                      <label class="testimonials-write-content--y-n-margin" for="kanske">Kanske</label>
                      <input type="radio" id="no-1" name="name-1">
                      <label class="testimonials-write-content--y-n-margin" for="no-1">Nej</label>
                    </div>
                    <!-- SECTION 9 -->
                    <div class="testimonials-write-content--section">
                      <h5>Får vi använda eventuella kommentarer i marknadsföringssyfte?</h5>
                      <input type="radio" id="yes-2" name="yes-2">
                      <label for="yes-2">Ja</label>
                      <input type="radio" id="no-2" name="yes-2">
                      <label class="testimonials-write-content--y-n-margin" for="no-2">Nej</label>
                    </div>
                    <!-- SEPARATOR -->
                    <hr class="testimonials-write-content--section">
                    <!-- BUTTON -->
                    <div class="testimonials-write-content--section text-right">
                      <button type="submit" class="btn btn-blue text-uppercase testimonials-write-content--btn">skicka</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- END FORM -->
            </div>
          </div>
        </div>
        <!-- END CALENDAR INFO CONTENT -->
      </div>
    </div>
  </div>
</div>
<!-- END TESTIMONIALS WRITE & SIDE MENU -->
<!-- TODO: Insert HTML footer -->
<?php include 'footer.php' ?>
