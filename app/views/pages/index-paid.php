<!DOCTYPE html>
<html lang="en">

<?php include "components/header.php" ?>

<body>
  <section class="container">
    <section class="progress">
      <div class="progress_header">
        <div class="step" id="step-1">
          <div class="step-content">1</div>
        </div>
        <div class="step" id="step-2">
          <div class="step-content">2</div>
        </div>
        <div class="step" id="step-3">
          <div class="step-content">3</div>
        </div>
        <div class="step" id="step-4">
          <div class="step-content">4</div>
        </div>
      </div>
    </section>

    <div class="checkout-inputs">
      <form class="user-info checkout-step">
        <input type="text" name="country" placeholder="الدوله" id="country" />

        <input type="text" name="city" placeholder="المدينة" id="city" />
        <input type="number" name="phone" placeholder=" الجوال" id="phone" />

      </form>
      <form class="pay-info hide checkout-step">
        <input type="number" name="card-id" placeholder="رقم الهوية" id="card-id" />
        <input type="text" name="phone" placeholder="طريقة الدفع" id="phone" />
        <input type="text" name="country" placeholder="الدوله" id="country" />
        <input type="text" name="city" placeholder="المدينة" id="city" />
      </form>
      <div class="checkout-confirmation checkout-step hide">
        <div class="discount">
          <div class="price">
            <p>4%</p>
            <p></p>
          </div>
          <div class="text">: الخصم</div>
        </div>
        <div class="delivery">
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="text">: رسوم الشحن</p>
        </div>
        <div class="total">
          <div class="price">
            <p>170.99</p>
            <p>ر.س</p>
          </div>
          <p class="text">: الإجمالي</p>
        </div>
        <p class="insure">
          الرجاء التاكد من صحة جميع المعلومات المدخلة سابقا.
        </p>
      </div>
      <section class="done checkout-step hide">
        <h2>تمت العملية بنجاح</h2>
        <p>إضغط هنا للعودة الى الصفحة الرئيسية</p>
        <button><a style="text-decoration: none; padding: 20px; font-size: 19px;" href="index.html">الرئيسية</a>
        </button>
        <img src="imgs/svg/c" alt="" />
      </section>
    </div>
    <div class="progress_btns">
      <button onclick="handlePrevStep()">
        <img src="imgs/svg/rightArrowBlack.svg" style="transform: rotateY(180deg)" alt="" />السابق
      </button>
      <button onclick="handleNextStep()">
        التالي<img src="imgs/svg/rightArrowBlack (2).svg" alt="" />
      </button>
    </div>



  </section>



  <script src="assets/pagesAssets/js/paid.js"></script>

</body>

</html>