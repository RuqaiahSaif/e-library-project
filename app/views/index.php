<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="css/styleEN.css"> -->
    <title>library</title>
</head>

<body>

    <div class="grid-continer">

        <header class="hd">

            <nav>
                <div class="hd-color">
                    <div class="main-continer">
                        <i class="fas fa-bars toggle-menue"></i>
                        <ul id="dropmenue">


                            <li><a href="#sec1" id="myBtn"><img src="app/public/img/svg/svgexport-1.svg"><span>ادخل لحسابك أو
                                        سجل الآن</span></a>
                            </li>
                            <li><a href="index.html"><img src="app/public/img\svg\svgexport-2.svg"><span>الرئيسية</span></a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-3.svg"><span>من نحن</span></a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-4.svg"><span>اتصل بنا</span> </a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-5.svg"><span>المساعدة</span></a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-11.svg"><span>سياسة الخصوصية</span></a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-12.svg"><span>اليمن YER</span></a></li>
                            <li><a href=""><span onclick="togglestyle()">English</span><img
                                        src="app/public/img\svg\svgexport-14.svg"></a></li>

                        </ul>

                    </div>
                </div>
                <div class="main-continer">
                    <div class="nav2">
                        <div class="logo">
                            <a href="index.html"><img src="app/public/img/logo.png" alt=""></a>
                        </div>
                        <div class="form-div">
                            <form class="search-form">
                                <!-- <input type="text" id="search" name="search" placeholder="البحث" > -->
                                <input id="searchbar" onkeyup="search_book()" type="text" name="search"
                                    placeholder="البحث">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="cart-icon">
                            <div class="icon-continer"><a href="cart.html"><img src="app/public/img/svg/cart.svg"></a></div>
                            <span id="counter"></span>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- </div> -->
        </header>
        <!-- end header -->
        <!-- slidebar -->
        <section class="sidebar">
            <div class="continer">
                <div class="slider">
                    <img src="app/public/img/slider_img.webp" alt="">

                </div>
                <div class="slider">
                    <img src="app/public/img/slider_img2.webp" alt="">

                </div>
                <div class="slider">
                    <img src="app/public/img/slider_img3.jpg" alt="">

                </div>
                <div class="slider">
                    <img src="app/public/img/slider_img4.webp" alt="">

                </div>
                <a class="prev1" onclick="plusSlides_he(-1)">&#10094;</a>
                <a class="next1" onclick="plusSlides_he(1)">&#10095;</a>
            </div>

            <div style="text-align: center;">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>

            </div>
            <br>


        </section>
        <div class="ads">

        </div>
        <!-- books section -->
        <section class="sec">
            <div class="main-continer">
                <h2>تصفح حسب القسم</h2>
                <div class="raw">
                    <div class="col-7">

                        <img src="app/public/img/svg/svgexport-46.svg" alt="">
                        <p style="margin-top: 10px; color:#5e2f26; font-weight: bold;">دين</p>
                    </div>
                    <div class="col-7">

                        <img src="app/public/img/svg/svgexport-42.svg" alt="">
                        <p style="margin-top: 10px; color:#f67828; font-weight: bold;">تاريخ</p>
                    </div>
                    <div class="col-7">

                        <img src="app/public/img/svg/svgexport-40.svg" alt="">
                        <p style="margin-top: 10px; color:#76689a; font-weight: bold;">روايات</p>
                    </div>
                    <div class="col-7">

                        <img src="app/public/img/svg/svgexport-43.svg" alt="">
                        <p style="margin-top: 10px; color: #bc4077; font-weight: bold;">سياسة</p>
                    </div>

                    <div class="col-7">

                        <img src="app/public/img/svg/svgexport-45.svg" alt="">
                        <p style="margin-top: 10px; color:#0089b6; font-weight: bold;">اقتصاد</p>
                    </div>
                    <div class="col-7">

                        <img src="app/public/img/svg/svgexport-47.svg" alt="">
                        <p style="margin-top: 10px; color:#7db344; font-weight: bold;">طبخ</p>

                    </div>
                    <div class="col-7">

                        <img src="app/public/img/svg/svgexport-48.svg" alt="">
                        <p style="margin-top: 10px; color:#9c223f; font-weight: bold;">تربية</p>
                    </div>
                </div>
            </div>

            <!-- العروض الحاليه -->
            <section class="">
                <div class="main-continer">
                    <div class="section-title">
                        <h2>العروض الحالية</h2>
                        <a href="category.html">
                            <p>عرض الكل</p>
                        </a>
                    </div>
                    <div class="raw1 list">


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/kebr.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>17.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
                            <div class="sptialshow">
                                <i class="far fa-clock"></i>
                                عرض لمدة <span class="days"></span><span>يوم</span>
                                <span class="hours"></span></span><span>ساعة</span>
                                <span class="minutes">:</span></span><span>دقيقة</span>
                                <span class="seconds">:</span></span><span>ثانيه</span>
                            </div>
                        </div>

                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/khalf.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">خلف قوتي ضعف يحبك(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>24.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
                            <div class="sptialshow">
                                <i class="far fa-clock"></i>
                                عرض لمدة <span class="days"></span><span>يوم</span>
                                <span class="hours"></span></span><span>ساعة</span>
                                <span class="minutes">:</span></span><span>دقيقة</span>
                                <span class="seconds">:</span></span><span>ثانيه</span>
                            </div>

                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/katlog.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كتالوج الحب(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="another-ver"><span>صيغ اخرى:</span>
                                <p>كتاب مطبوع</p>
                            </div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
                            <div class="sptialshow">
                                <i class="far fa-clock"></i>
                                عرض لمدة <span class="days"></span><span>يوم</span>
                                <span class="hours"></span></span><span>ساعة</span>
                                <span class="minutes">:</span></span><span>دقيقة</span>
                                <span class="seconds">:</span></span><span>ثانيه</span>
                            </div>


                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/asaran.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">الى الذي اسرني حبه (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
                            <div class="sptialshow">
                                <i class="far fa-clock"></i>
                                عرض لمدة <span class="days"></span><span>يوم</span>
                                <span class="hours"></span></span><span>ساعة</span>
                                <span class="minutes">:</span></span><span>دقيقة</span>
                                <span class="seconds">:</span></span><span>ثانيه</span>
                            </div>

                        </div>



                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/zawag.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">زواج غير متوقع (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>3.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
                            <div class="sptialshow">
                                <i class="far fa-clock"></i>
                                عرض لمدة <span class="days"></span><span>يوم</span>
                                <span class="hours"></span></span><span>ساعة</span>
                                <span class="minutes">:</span></span><span>دقيقة</span>
                                <span class="seconds">:</span></span><span>ثانيه</span>
                            </div>

                        </div>




                    </div>
                </div>
            </section>
            <!-- الكتب الدينية  -->
            <section class="">
                <div class="main-continer">
                    <div class="section-title">
                        <h2>الكتب الدينية</h2>
                        <a href="category.html">
                            <p>عرض الكل</p>
                        </a>
                    </div>
                    <div class="raw1 list">


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/kebr.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>17.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>

                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/khalf.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">خلف قوتي ضعف يحبك(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>24.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/katlog.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كتالوج الحب(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="another-ver"><span>صيغ اخرى:</span>
                                <p>كتاب مطبوع</p>
                            </div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>



                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/asaran.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">الى الذي اسرني حبه (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>



                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/zawag.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">زواج غير متوقع (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>3.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>




                    </div>
                </div>
            </section>
            <!-- نهاية الكتب الدينيه -->
            <!-- الكتب التاريخية -->
            <section class="">
                <div class="main-continer">
                    <div class="section-title">
                        <h2>الكتب التاريخية</h2>
                        <a href="category.html">
                            <p>عرض الكل</p>
                        </a>
                    </div>
                    <div class="raw1 list">


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/kebr.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>17.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>

                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/khalf.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">خلف قوتي ضعف يحبك(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>24.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/katlog.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كتالوج الحب(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="another-ver"><span>صيغ اخرى:</span>
                                <p>كتاب مطبوع</p>
                            </div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>



                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/asaran.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">الى الذي اسرني حبه (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>



                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/zawag.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">زواج غير متوقع (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>3.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>




                    </div>
                </div>
            </section>
            <!-- نهاية الكتب التاريخية -->
            <!-- السياسة -->
            <section class="">
                <div class="main-continer">
                    <div class="section-title">
                        <h2>السياسة</h2>
                        <a href="category.html">
                            <p>عرض الكل</p>
                        </a>
                    </div>
                    <div class="raw1 list">


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/kebr.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>17.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>

                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/khalf.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">خلف قوتي ضعف يحبك(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>24.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/katlog.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كتالوج الحب(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="another-ver"><span>صيغ اخرى:</span>
                                <p>كتاب مطبوع</p>
                            </div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>



                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/asaran.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">الى الذي اسرني حبه (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>



                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/zawag.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">زواج غير متوقع (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>3.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>




                    </div>
                </div>
            </section>
            <!-- نهاية السياسة -->
            <!-- الاقتصاد -->
            <section class="">
                <div class="main-continer">
                    <div class="section-title">
                        <h2>الاقتصاد</h2>
                        <a href="category.html">
                            <p>عرض الكل</p>
                        </a>
                    </div>
                    <div class="raw1 list">


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/kebr.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>17.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>

                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/khalf.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">خلف قوتي ضعف يحبك(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>24.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/katlog.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كتالوج الحب(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="another-ver"><span>صيغ اخرى:</span>
                                <p>كتاب مطبوع</p>
                            </div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>



                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/asaran.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">الى الذي اسرني حبه (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>



                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/zawag.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">زواج غير متوقع (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>3.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>




                    </div>
                </div>
            </section>
            <!-- نهاية الاقتصاد -->
            <!-- الطبخ -->
            <section class="">
                <div class="main-continer">
                    <div class="section-title">
                        <h2>الطبخ</h2>
                        <a href="category.html">
                            <p>عرض الكل</p>
                        </a>
                    </div>
                    <div class="raw1 list">


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/kebr.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>17.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>

                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/khalf.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">خلف قوتي ضعف يحبك(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>24.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/katlog.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">كتالوج الحب(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="another-ver"><span>صيغ اخرى:</span>
                                <p>كتاب مطبوع</p>
                            </div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>



                        </div>


                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/asaran.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">الى الذي اسرني حبه (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>



                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/zawag.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>

                            </div>
                            <div class="book-title-home">زواج غير متوقع (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>3.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>


                        </div>




                    </div>
                </div>
            </section>
            <!-- نهاية الطبخ -->
            <!-- افضل الروايات الرومانسيه -->
            <section class="">
                <div class="main-continer">
                    <div class="section-title">
                        <h2>افضل الروايات الرومانسيه</h2>
                        <a href="category.html">
                            <p>عرض الكل</p>
                        </a>
                    </div>
                    <div class="raw1 list">
            
            
                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/kebr.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>
            
                            </div>
                            <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>17.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
            
            
                        </div>
            
                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/khalf.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>
            
                            </div>
                            <div class="book-title-home">خلف قوتي ضعف يحبك(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>24.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
            
            
                        </div>
            
            
                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/katlog.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>
            
                            </div>
                            <div class="book-title-home">كتالوج الحب(كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="another-ver"><span>صيغ اخرى:</span>
                                <p>كتاب مطبوع</p>
                            </div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
            
            
            
                        </div>
            
            
                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/asaran.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>
            
                            </div>
                            <div class="book-title-home">الى الذي اسرني حبه (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>19.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
            
            
                        </div>
            
            
            
                        <div class="flexCard flexCardsearch">
                            <a href="details.html"><img src="app/public/img/zawag.jpg" alt="" class="book-photo"></a>
                            <div class="card-title">
                                <img src="app/public/img/svg/svgexport-57.svg" alt="">
                                <p>كتاب الكتروني</p>
            
                            </div>
                            <div class="book-title-home">زواج غير متوقع (كتاب الكتروني)</div>
                            <div class="book-price">
                                <p>3.99</p><span>ر.س</span>
                            </div>
                            <div class="dareba">شامل الضريبه</div>
                            <div class="icons">
                                <img src="app/public/img/svg/svgexport-2.svg">
                                <img src="app/public/img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                <img src="app/public/img/svg/svgexport-56.svg">
                            </div>
            
            
                        </div>
            
            
            
            
                    </div>
                </div>
            </section>
            <!-- نهاية الروايات الرومانسيه -->
            <!-- end books section-->
        </section>
        <footer class="ft">
            <div class="ft-color">
                <div class="main-continer">
                    <!-- Footer main -->
                    <section class="ft-main">
                        <div class="ft-main-item">

                            <h2 class="ft-title">انضم إلى نشرتنا البريدية</h2>
                            <div class="form-continer">
                                <form>
                                    <input type="email" name="email" placeholder="ادخل البريد الالكتروني">

                                    <input type="submit" value="اشتراك">
                                </form>
                            </div>
                        </div>
                        <div class="ft-main-item">
                            <h2 class="ft-title">خدمة العملاء</h2>
                            <ul>
                                <li><a href="#">مبيعات الشركات</a></li>
                                <li><a href="#">الأسئلة المتكررة</a></li>
                                <li><a href="#">دليل التسوق والمطبوعات</a></li>
                                <li><a href="#">مواقع المعارض</a></li>
                                <li><a href="#">سياسة الضمان</a></li>
                                <li><a href="#">سياسة الاسترجاع والاستبدال</a></li>
                                <li><a href="#">اتصل بنا ></a></li>
                                <li><a href="#"><span style="font-weight: bold; font-size: 20px;">920000089</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="ft-main-item">
                            <h2 class="ft-title">خدمات جرير</h2>
                            <ul>
                                <li><a href="#">تذاكر جرير</a></li>
                                <li><a href="#">خدمة تقسيط المشتريات</a></li>
                                <li><a href="#">خدمات ما بعد البيع</a></li>
                                <li><a href="#">خدمة الحماية الشاملة</a></li>
                                <li><a href="#">خدمة تمديد الضمان</a></li>
                                <li><a href="#">حماية أجهزة آبل</a></li>
                                <li><a href="#">بطاقة خصم جرير</a></li>
                                <li><a href="#">بطاقة جرير للهدايا</a></li>
                            </ul>
                        </div>
                        <div class="ft-main-item">
                            <h2 class="ft-title">روابط سريعة</h2>
                            <ul>
                                <li><a href="#">إصدارات جرير</a></li>
                                <li><a href="#">قارئ جرير</a></li>
                                <li><a href="#">شركاء برامج المكافئات</a></li>
                                <li><a href="#">خدمات شركات الإتصالات</a></li>
                            </ul>
                        </div>
                        <div class="ft-main-item">
                            <h2 class="ft-title">عن جرير</h2>
                            <ul>
                                <li><a href="#">من نحن</a></li>
                                <li><a href="#">الحوكمة</a></li>
                                <li><a href="#">علاقات المستثمرين والتقارير</a></li>
                                <li><a href="#">الاستدامة</a></li>
                                <li><a href="#">الأخبار</a></li>
                                <li class="ft-title"><a href="#">فرص العمل</a></li>
                            </ul>
                        </div>

                    </section>
                    <!-- Footer social -->
                    <section class="ft-social">
                        <h2 class="ft-title">
                            تواصل معنا
                        </h2>
                        <ul class="ft-social-list">
                            <li><a href="#"><img src="app/public/img/svg/svgexport-59.svg" alt=""></a></li>
                            <li><a href="#"><img src="app/public/img/svg/svgexport-60.svg" alt=""></a></li>
                            <li><a href="#"><img src="app/public/img/svg/svgexport-61.svg" alt=""></a></li>
                            <li><a href="#"><img src="app/public/img/svg/svgexport-62.svg" alt=""></a></li>
                            <li><a href="#"><img src="app/public/img/svg/svgexport-63.svg" alt=""></a></li>
                            <li><a href="#"><img src="app/public/img/svg/svgexport-64.svg" alt=""></a></li>
                            <li><a href="#"><img src="app/public/img/svg/svgexport-65.svg" alt=""></a></li>

                        </ul>
                    </section>
                </div>
            </div>
            <!-- Footer legal -->
            <section class="ft-legal">
                <div class="main-continer">
                    <div class="ft-legal-list">
                        <div class="brands">
                            <!-- <li><img src="img/svg/svgexport-65.svg" alt=""></li> -->
                            <li> <img src="app/public/img/svg/svgexport-66.svg" alt=""></li>
                            <li><img src="app/public/img/svg/svgexport-67.svg" alt=""></li>
                            <li> <img src="app/public/img/svg/svgexport-68.svg" alt=""></li>
                            <li> <img src="app/public/img/svg/svgexport-69.svg" alt=""></li>
                            <li> <img src="app/public/img/svg/svgexport-70.svg" alt=""></li>
                            <li> <img src="app/public/img/svg/svgexport-71.svg" alt=""></li>
                        </div>
                        <div class="copy">
                            <ul class="sm-menue">
                                <li><a href="#">سياسة الخصوصية|</a></li>
                                <li><a href="#">شروط الخدمة</a></li>
                            </ul>
                            <p>.جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 1010654213
                            </p>

                        </div>
                    </div>
                </div>
            </section>
            <!-- login modal -->
            <!-- <button id="myBtn">Open Modal</button> -->
            <div class="model-continer">
                <section id="modal">
                    <div class="small-continer">
                        <div class="modal-content">
                            <div class="col-1">
                                <span class="close">&times;</span>
                                <!-- <div class="col-1"> -->
                                <h1>تسجيل الدخول</h1>

                                <form>
                                    <input type="email" id="uemail" placeholder="البريد الاكتروني او رقم الجوال">
                                    <div class="forget">
                                        <input type="password" id="upass" name="lastname" placeholder="كلمة السر">
                                        <p>نسيت؟</p>
                                    </div>
                                    <input type="submit" value="تسجيل الدخول">
                                    <br>
                                    <p class="txt"> ليس لديك حساب؟</p>
                                    <button id="btn2">انشاء حساب جديد</button>
                                </form>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end login modal -->
            <!-- start signin -->
            <div class="model-continer">
                <section id="modal2">
                    <div class="small-continer-mod2">
                        <div class="modal-content center">
                            <div class="col-1">
                                <span class="close2">&times;</span>
                                <h1>إنشاء حساب</h1>

                                <form>
                                    <div class="signinflex"><input type="text" id="uphone" placeholder="رقم الجوال"
                                            class="flex1">
                                        <div class="flex2"><input type="text" id="uphone" placeholder="رمز البلد"></div>
                                    </div>
                                    <p class="vercode"> سوف نرسل لك<span> رمز التحقق عن طريق رسالة نصية</span></p>
                                    <input type="button" id="valiNum" value="إرسال رمز التحقق">
                                    <br>
                                    <input type="text" id="fname" placeholder="الاسم الاول " required>
                                    <br>
                                    <input type="text" id="familyname" placeholder="اسم العائلة " required>
                                    <br>
                                    <input type="email" id="vsignemail" placeholder="البريدالالكتروني" required>
                                    <br>
                                    <input type="email" id="email" placeholder=" تأكيد البريدالالكتروني " required>
                                    <br>
                                    <input type="password" id="signpass" placeholder="كلمة السر " required>
                                    <div class="flexinput" style="display: inline-block;">
                                        <input type="checkbox" checked="checked" name="remember"
                                            style="margin-bottom:15px" style="display: inline-block;">
                                        <p style="display: inline-block;">اوفق على الشروط والاحكام</p>
                                    </div>
                                    <br>
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                                    <p>التسجيل للانظمام للنشرة البريدية</p>
                                    <br>
                                    <input type="submit" value="إنشاء حساب">
                                    <br>
                                    <p class="txt"> ليس لديك حساب؟ <span id="return1"><a href="#">تسجيل
                                                الدخول</a></span></p>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end signin -->
        </footer>
    </div>
    <script src="app/public/js/app.js"></script>
    <!-- <script src="js/app2.js"></script> -->
    <script src="app/public/js/app3.js"></script>
</body>

</html>