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
                <div class="assets/pagesAssets/image-trash">
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
    <!----------Sttart Type---------------->



    <!---------------------------------Start Rataing---------------------------------------------------->

    <div class="filter-container">
        <label style="padding: 20px; font-size: 20px; color: rgb(29, 6, 6);">الترتيب بحسب:</label>
        <select name="" id="" class="filter">
            <option value="all">الكل</option>
            <!-- <option value="c-offers" id="current-offers">العروض الحالية</option> -->
            <option value="religious" id="religious">الكتب الدينية</option>
            <!-- <option value="historical" id="historical">الكتب التاريخية</option> -->
            <option value="political" id="political">الكتب السياسية</option>
            <option value="economical" id="economical">الكتب اللإقتصادية</option>
            <option value="hestrical" id="hestrical">الكتب التاريخية</option>
            <option value="cook" id="cook"> كتب الطبخ</option>
            <option value="novel" id="novel">الكتب والروايات</option>
            <option value="current" id="current">العروض الحالية</option>
            <!-- <option value="cooking" id="cooking">كتب الطبخ</option> -->
            <!-- <option value="romantic" id="romantic"> -->
            افضل الروايات الرومانسية
            </option>
        </select>
    </div>

    <!---------------------------------End Rataing---------------------------------------------------->

    <!------------Start-Article-------------------------------->

    <div class="articles">


        <div class="dtype">
            <ul>
                <li><a href="#">/الرئيسية</a></li>
                <li><a href="#">/الكتب العربي</a></li>
                <li><a href="#">/كتب الكترونية</a></li>
            </ul>

            <div class="card">
                <div class="inpu"> <input type="text" placeholder="كتب الكترونية"></div>
                <div class="result">
                    <p>تصفية النتائج</p>
                </div>
                <div class="mark-trade">
                    <p> علامة تجارية</p>
                </div>
                <div class="price">
                    <p> السعر </p>
                </div>
                <div class="sbiner">
                    <meter></meter>
                </div>
                <div class="book">
                    <p> صبغة الكتاب </p>
                </div>


            </div>
        </div>


        <div class="dbox">
            <div class="container">
                <!---------------------------------------------------------------------------------->
                <!-- <div class="relegen" id="relegen"> religious (current)--political- hestrical-- economical-----cook-----novel--->
                <h2>العروض الحالية</h2>
                <div class="box1">


                    <div class="box current" id="current">


                       <a href="/details" > <img src="assets/pagesAssets/image/book.PNG" alt=""></a>
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>

                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg class="add-to-basket" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns="http://www.w3.org/2000/svg" class="icon list__icon side-menu__icon ar-flip"
                                    width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box current" id="current">
                        <img src="assets/pagesAssets/image/book2.PNG" alt="">
                        <div class=" content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg class="add-to-basket" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns="http://www.w3.org/2000/svg" class="icon list__icon side-menu__icon ar-flip"
                                    width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box current" id="current">
                        <a href="/details"> </a><img src="assets/pagesAssets/image/الامبالاة.PNG" alt=""></a>
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box" id="current">
                    <a href="/details">   <img src="assets/pagesAssets/image/magic3.PNG" alt=""></a>
                        <div class="content">
                            <div class="book current">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box current" id="current">
                    <a href="/details">    <img src="assets/pagesAssets/image/marrid7.PNG" alt=""></a>
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>

                </div>
                <!----End class Box1-->
                <!-- </div> -->

                <!---------------------------------------------------------------------------------->
                <!-- <div class="religious" id="religious"> -->
                <h2> الكتب الدينية</h2>
                <div class="box2">
                    <div class="box" id="religious">
                        <img src="assets/pagesAssets/image/book3.PNG" alt="">
                        <div class="content">
                            <div class="book political">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box religious" id="religious">
                        <img src="assets/pagesAssets/image/magic.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box religious" id="religious">
                    <a href="/details">  <img src="assets/pagesAssets/image/magic3.PNG" alt=""></a>
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box religious" id="religious">
                    <a href="/details">  <img src="assets/pagesAssets/image/book2.PNG" alt=""></a>
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box religious" id="religious">
                        <img src="assets/pagesAssets/image/marrid7.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                </div>
                <!------End Box2-->

                <!---------------------------------------------------------------------------------->
                <!-- <div class="hestrical" id="hestrical"> -->
                <h2> الكتب التاريخية</h2>
                <div class="box3">
                    <div class="box hestrical" id="hestrical">
                        <img src="assets/pagesAssets/image/marrid2.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box hestrical" id="hestrical">
                        <img src="assets/pagesAssets/image/marrid6.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box hestrical" id="hestrical">
                        <img src="assets/pagesAssets/image/marrid2.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box hestrical" id="hestrical">
                        <img src="assets/pagesAssets/image/magic3.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box hestrical" id="hestrical">
                        <img src="assets/pagesAssets/image/marrid2.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                </div>
                <!-----End-Box3-->

                <!---------------------------------------------------------------------------------->

                <!---------------------------------------------------------------------------------->
                <!-- <div class="economical" id="economical"> -->
                <h2> الكتب السياسية</h2>
                <div class="box4">
                    <div class="box political" id="political">
                        <img src="assets/pagesAssets/image/book2.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box political" id="political">
                        <img src="assets/pagesAssets/image/marrid7.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box political" id="political">
                        <img src="assets/pagesAssets/image/magic.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box political" id="political">
                        <img src="assets/pagesAssets/image/magic2.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box political" id="political">
                        <img src="assets/pagesAssets/image/marrid4.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                </div>
                <!-----End-Box4-->

                <!---------------------------------------------------------------------------------->

                <!---------------------------------------------------------------------------------->
                <!-- <div class="economical" id="economical"> -->
                <h2> الكتب الاقتصادية</h2>
                <div class="box5">
                    <div class="box economical" id="economical">
                        <img src="assets/pagesAssets/image/الامبالاة.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box economical" id="economical">
                        <img src="assets/pagesAssets/image/الله.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box economical" id="economical">
                        <img src="assets/pagesAssets/image/magic.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box economical" id="economical">
                        <img src="assets/pagesAssets/image/book1PNG.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box economical" id="economical">
                        <img src="assets/pagesAssets/image/magic.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                </div>
                <!-----End-Box5-->

                <!---------------------------------------------------------------------------------->

                <!---------------------------------------------------------------------------------->
                <!-- <div class="cook" id="cook"> -->
                <h2> كتب الطبخ </h2>
                <div class="box6">
                    <div class="box cook" id="cook">
                        <img src="assets/pagesAssets/image/marrid7.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box cook" id="cook">
                        <img src="assets/pagesAssets/image/marrid2.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box cook" id="cook">
                        <img src="assets/pagesAssets/image/magic2.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box cook" id="cook">
                        <img src="assets/pagesAssets/image/marrid6.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box cook" id="cook">
                        <img src="assets/pagesAssets/image/marrid2.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                </div>
                <!-----End-Box6-->
                <!---------------------------------------------------------------------------------->

                <!-- <div class="cook" id="cook"> -->
                <h2> كتب الروايات </h2>
                <div class="box7">
                    <div class="box novel" id="novel">
                        <img src="assets/pagesAssets/image/marrid7.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box novel" id="novel">
                        <img src="assets/pagesAssets/image/marrid2.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box novel" id="novel">
                        <img src="assets/pagesAssets/image/marrid4.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box novel" id="novel">
                        <img src="assets/pagesAssets/image/magic3.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                    <div class="box novel" id="novel">
                        <img src="assets/pagesAssets/image/magic.PNG" alt="">
                        <div class="content">
                            <div class="book">
                                <p> كتاب الكتروني</p>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="book-type__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                                <path
                                                    d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                    fill="#9E1D22"></path>
                                                <path
                                                    d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                    fill="#9E1D22"></path>
                                                <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                                <path
                                                    d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                    fill="#9E1D22"></path>
                                                <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                                <path
                                                    d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                    fill="#9E1D22"></path>
                                                <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#ebook">
                                    </use>
                                </svg>

                            </div>

                            <div class="start">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <p>ابابيل (كتاب الكتروني)</p>
                            </div>
                            <div class="price">
                                <h2>49.99 <small>رس</small></h2>
                                <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                                <p id="demo"></p>

                            </div>
                            <div class="info">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon--default list__icon" width="24" height="24">
                                    <defs>
                                        <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#star" fill="#42526E"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                            </path>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#compare" fill="#42526E">
                                    </use>
                                </svg>


                            </div>

                        </div>
                    </div>
                </div>
                <!-----End-Box7----->
                <!---------------------------------------------------------------------------------->

            </div>
            <button>عرض المزيد</button>
            <p>اشتري من كتب الكتروني على متجر جرير الالكتروني</p>
        </div>


    </div>



    <!---------------Start Footer--------------------------------Start fotter-------------------------------------------------------------->
   
    <?php include "components/footer.php" ?>
    <script src="assets/pagesAssets/js/gategory.js"></script>
    <!-- <script src="js/gategory.js"></script> -->
</body>

</html>