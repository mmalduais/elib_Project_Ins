<!DOCTYPE html>
<html lang="en">

<?php include "components/header.php" ?>


<body dir="rtl">
    <header>
        <!-- <div class="container"> -->
        <nav>

            <ul>
                <i class="fas fa-bars toggle"></i>
                <li class="head" id="openForm">
                    <i class="fas fa-user"></i>
                    <label>ادخل لحسابك أو سجل الآن</label>
                </li>
                <li class="head">
                    <i class="fas fa-star"></i>
                    <label> المفضلة</label>
                <li>
                <li class="head">
                    <i class="fas fa-caravan"></i>
                    <label>تتبع الشحنه</label>
                </li>
                <li class="head">

                    <i class="fas fa-star"></i>
                    <label> طلبات الصيانه</label>
                </li>
                <li class="head">
                    <i class="fas fa-info-circle" style=""></i>
                    <label>المساعدة</label>
                </li>
                <li class="head">
                    <i class="fas fa-shield-alt"></i>
                    <label>سياسة الخصوصيه</label>
                </li>
                <li class="head">
                    <i class="fas fa-language"></i>
                    <label> اليمن</label>
                </li>
                <li class="head">
                    <i class="fas fa-language"></i>
                    <label>English</label>
                </li>

            </ul>

        </nav>

        <!-- </div> -->

    </header>
    <!--------------------Starts Search-------------------->

    <div class="serch">
        <div class="container">
            <div class="icon">

                <img src="assets/pagesAssets/image/اogo.PNG">
                <form>
                    <input class="main-input" type="search" placeholder="البحث" rirc>
                    <i class="fas fa-search"></i>
                </form>
                <!-- <i class="fas fa-search"></i> -->
                <div class="image-trash">
                    <a href="/checkout"><img src="assets/pagesAssets/image/trash.PNG"></a>
                </div>
                <!-- <i class="fas fa-trash " style="background-color: #eeeeee; border-radius: 50%; width: 4%; height: 40px; position: relative;"></i>
                -->
            </div>
        </div>
    </div>
    <!--------------------End Search----------------------------------->



    <!--------------------modelogin-------------Layout-->

    <!--------------------modelogin-------------Layout-->


    <!-----------------------Star modelogin-------------------------->
    <div class="overlay hide"></div>

    <div class="contact hide" id="myForm">

        <div class="container">
            <button class="hide-form">Close</button>
            <form style="width: 100%;" action="#" method="post">
                <h2>تسجيل الدخول</h2>

                <input class="main" type="text" name="name" placeholder="البريد الالكتروني او رقم الجوال">
                <input class="main" type="password" name="name" placeholder="كلمة السر">
                <p>نسيت؟</p>

                <input class="main-sub" type="submit" value="تسجيل الدخول">
            </form>
            <div class="info">
                <button class="btn">ليس لدي حساب</button>
                <button> <a href="sing.html">انشاء حساب جديد</a> </button>

            </div>
        </div>
    </div>
    <!------------------End--modelogin------------------------>


    <!-------------------Start slideshow-container---------------->

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="assets/pagesAssets/image/img1.jpg" height="300px">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="assets/pagesAssets/image/img2.jpg" height="300px">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="assets/pagesAssets/image/img3.jpg" height="300px">
            <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="assets/pagesAssets/image/img4.jpg" height="300px">
            <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="assets/pagesAssets/image/img5.jpg" height="300px">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>


    <!-- End Landing -->
    <!----------Sttart Getgory-->


    <!---------------------------------Start Rataing---------------------------------------------------->



    <!------------Start-Details-------------------------------->
    <div class="detail">

        <ul class="main-nav">
            <li><a href="#">الرئسية/</a></li>
            <li><a href="#">الكتب العربية/</a></li>
            <li><a href="#">كتب الكترونية/</a></li>
            <li><a href="#">لأنك الله(كتاب الكتروني)</a></li>
        </ul>
        <div class="container">

            <div class="buy-det">
                <div class="image">
                    <img src="assets/pagesAssets/image/book.PNG">
                </div>
            </div>
            <div class="content">
                <div class="cont-text">
                    <h2>لأنك الله (كتاب الكتروني)</h2>
                    <p style="color: blue;">عرض المزيد</p>
                    <p style="color:red ;">12.99رس</p>
                </div>
                <div class="cont-text2">
                    <h3>وحدة البيع </h3>
                    <h3>( 15 المراجعات)</h3>
                    <h3> رقم المنتج 4 JBB410165 رقم الصنف</h3>
                </div>
                <h4 style="color: #646464;;">الصيغ المتوفرة</h4>
                <div class="style">
                    <div class="style1">
                        <input type="checkbox" name=""> كتاب الكتروني
                        <label style="color: red; font-size: 18px; font-weight: bold; margin: 70px;">12.99 رس</label>
                    </div>
                    <div class="style1">
                        <input type="checkbox" name="">كتاب مطبوع
                        <label style="color: red; font-size: 18px; font-weight: bold; margin: 85px;">17.25رس</label>
                    </div>

                </div>
            </div>
            <div class="add-trash">
                <div class="content">
                    <h2>ملاحظه:سيتم اضافة هذا الكتاب الى مكتبتك في قارئ جرير</h2>
                    <a href="#">اقرا المزيد</a>
                </div>
                <div class="btn">
                    <select class="number-book">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <!-- <svg style="color: white; font-size:20px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="button__icon" width="32"  height="32" ><defs><symbol viewBox="0 0 32 32" id="cart" xmlns="http://www.w3.org/2000/svg"><path d="M1.932 0A1.957 1.957 0 000 1.97c0 1.082.872 1.968 1.935 1.968a1.95 1.95 0 001.633-.924 1.97 1.97 0 00.105-1.882A4.398 4.398 0 016.84 4.645l3.622 20.977a2.917 2.917 0 002.613 2.417 2.462 2.462 0 00-.275 2.574A2.438 2.438 0 0014.975 32a2.438 2.438 0 002.171-1.374 2.462 2.462 0 00-.253-2.567H23.2a2.47 2.47 0 00-.243 2.56 2.446 2.446 0 002.16 1.379 2.438 2.438 0 002.17-1.374 2.462 2.462 0 00-.252-2.565h2.43v-.982H13.316a1.938 1.938 0 01-1.905-1.63l-.654-3.785h15.458c1.56 0 2.924-1.096 3.289-2.642L32 8.418 8.128 6.43 7.79 4.478A5.347 5.347 0 002.557 0h-.625zm10.065 11.429h14.865a.57.57 0 01.568.571.57.57 0 01-.568.571H11.997A.57.57 0 0111.43 12a.57.57 0 01.568-.571zm-11.57 0h6.006c.236 0 .426.256.426.571 0 .315-.19.571-.426.571H.426C.191 12.571 0 12.315 0 12c0-.315.19-.571.426-.571h.002zM14.283 16h10.293a.574.574 0 01.492.857.568.568 0 01-.492.285H14.282a.568.568 0 01-.492-.285.574.574 0 010-.571.568.568 0 01.492-.286zM2.858 16h3.428a.57.57 0 01.569.571.57.57 0 01-.569.571H2.858a.568.568 0 01-.492-.285.574.574 0 010-.571.568.568 0 01.492-.286z"></path></symbol></defs>
                <use xlink:href="#cart" fill="#42526E"></use>
                </svg> -->
                    <button>اضف الئ السلة</button>

                </div>
                <div class="icon">
                    <p>تسوق امن <samp style="margin-right: 50px;">أصلي ومضمون</samp></p>
                    <p> شحن سريع ومجاني</p>
                </div>
                <div class="media mm">
                    <button><img src="assets/pagesAssets/image/share.PNG" width="77px"> </button>
                    <button><img src="assets/pagesAssets/image/prever.PNG" width="77px"> </button>
                    <button><img src="assets/pagesAssets/image/compare.PNG" width="77px"> </button>
                </div>
                <div class="media ">
                    <button><img src="assets/pagesAssets/image/share.PNG" width="77px"> </button>
                    <button><img src="assets/pagesAssets/image/prever.PNG" width="77px"> </button>
                    <button><img src="assets/pagesAssets/image/compare.PNG" width="77px"> </button>
                </div>

            </div>
        </div>


    </div>
    <!----------------------------------->
    <div class="com-det">
        <div class="container">

            <h2>كتاب يتحدث عن اسماء الله الحسنى وكيف نعيشها في حياتنا حرص المؤلف ان يكون الكتاب مناسبا لمن لديهم مستوى
                متوسط من الثقافه ويكون مناسب للمحتاج والمريض والسليم</h2>
            <h1>المواصفات</h1>
            <p>رقم الصنف <span style="margin-right: 50px;">JBB44146</span> </p>

            <p>رقم المنتج <span style="margin-right: 50px;">7</span> </p>

            <p>المؤلف <span style="margin-right: 50px;"> علي الجابري </span></p>

            <p>الناشر <span style="margin-right: 50px;">دار الحضارة لنشر والتوزيع </span> </p>

            <p>صيغة الكتاب <span style="margin-right: 50px;">2016</span> </p>


            <p>عدد الصفحات <span style="margin-right: 50px;">Ebook</span> </p>

            <p>صيغة الملف <span style="margin-right: 50px;"></span> </p>

            <p>اللغه <span style="margin-right: 80px;">عربي</span> </p>
        </div>

    </div>
    <!----------------------------------->
    <div class="rev">
        <div class="container">
            <p> مراجعات العملاء<button>اكتب مراجعتك +</button></p>

            <form action="#">

                <input type="text" placeholder="من قبل reem">
                <p id="for">good</p>
                <input type="text" placeholder="من مثل خالد ابو حميدة">
                <p id="for">جميل جدا</p>
                <input type="text" placeholder="من قبل بابيل">
                <p id="for">جميل جدا ومفيد</p>
            </form>
            <a href="#">لأضافة العديد من المراجع</a>
            <hr>

        </div>
    </div>
    <h2 id="mon">منتجات مشابهة</h2>
    <div class="boxx">
        <div class="image">
            <img src="assets/pagesAssets/image/كتاب الصلاة.PNG">
            <p>الصلاة وحكم تاركها</p>
            <h2>15رس</h2>

        </div>
        <div class="assets/pagesAssets/image">
            <img src="assets/pagesAssets/image/كتاب الصلاة.PNG">
            <p>الله</p>
            <h2>15رس</h2>

        </div>
        <div class="image">
            <img src="assets/pagesAssets/image/كتاب الصلاة.PNG">
            <p>علامات القيامة الكبرى</p>
            <h2>15رس</h2>

        </div>
        <div class="image">
            <img src="assets/pagesAssets/image/كتاب الصلاة.PNG">
            <p>بدا العد التنازلي</p>
            <h2>15رس</h2>

        </div>
        <div class="assets/pagesAssets/image">
            <img src="assets/pagesAssets/image/كتاب الصلاة.PNG">
            <p>ضع الامة وهزيمتها</p>
            <h2>15رس</h2>

        </div>
        <div class="image">
            <img src="assets/pagesAssets/image/كتاب الصلاة.PNG">
            <p>جهنم الصغرى</p>
            <h2>15رس</h2>

        </div>
    </div>




    <!---------------Start Footer--------------------------------Start fotter-------------------------------------------------------------->
  

    <?php include "components/footer.php" ?>
    <script src="assets/pagesAssets/js/Details.js"></script>
</body>

</html>