<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/slider.css"> -->
    <title>details</title>
</head>

<body>

    <div class="grid-continer">

        <header class="hd">

            <nav>
                <div class="hd-color">
                    <div class="main-continer">
                        <i class="fas fa-bars toggle-menue"></i>
                        <ul id="dropmenue">

                           
                            <li><a href="#sec1" id="myBtn"><img src="img\svg\svgexport-1.svg"><span>ادخل لحسابك أو
                                        سجل الآن</span></a>
                            </li>
                            <li><a href="index.html"><img src="img\svg\svgexport-2.svg"><span>الرئيسية</span></a></li>
                            <li><a href=""><img src="img\svg\svgexport-3.svg"><span>من نحن</span></a></li>
                            <li><a href=""><img src="img\svg\svgexport-4.svg"><span>اتصل بنا</span> </a></li>
                            <li><a href=""><img src="img\svg\svgexport-5.svg"><span>المساعدة</span></a></li>
                            <li><a href=""><img src="img\svg\svgexport-11.svg"><span>سياسة الخصوصية</span></a></li>
                            <li><a href=""><img src="img\svg\svgexport-12.svg"><span>اليمن YER</span></a></li>
                            <li><a href=""><span>English</span><img src="img\svg\svgexport-14.svg"></a></li>

                        </ul>

                    </div>
                </div>
                <div class="main-continer">
                    <div class="nav2">
                        <div class="logo">
                            <img src="img/logo.png" alt="">
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
                            <div class="icon-continer"><a href="cart.html"><img src="img/svg/cart.svg"></a></div>
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
                <img src="img/slider_img.webp" alt="">
    
            </div>
            <div class="slider">
                <img src="img/slider_img2.webp" alt="">
    
            </div>
            <div class="slider">
                <img src="img/slider_img3.jpg" alt="">
    
            </div>
            <div class="slider">
                <img src="img/slider_img4.webp" alt="">
    
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
        <!-- تفاصيل الكتب -->
        <section class="sec detalils">
            <div class="main-continer">
                <ul class="breadcrumb">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="#">الكتب العربية</a></li>
                    <li><a href="#">كتب الكترونية</a></li>
                    <li><a href="#">لانك الله(كتاب الكتروني)</a></li>
                </ul>
                <div class="book-details">
                    <div class="col-3">
                        <div class="book-slide">
                            <img src="img/book1.jpg" alt="" class="book-width">
                            <!-- Images used to open the lightbox -->
                            <div class="row">
                                <div class="column-book">
                                    <img src="img/book2.jpg" alt="" class="book-width1"
                                        onclick="openModal();currentSlide(1)" class="hover-shadow">
                                </div>
                                <div class="column-book">
                                    <img src="img/book1.jpg" alt="" class="book-width1"
                                        onclick="openModal();currentSlide(2)" class="hover-shadow">
                                </div>
                                <div class="column-book">
                                    <img src="img/book1.jpg" alt="" class="book-width1"
                                        onclick="openModal();currentSlide(3)" class="hover-shadow">
                                </div>

                            </div>
                            <!--  The Modal/Lightbox -->
                            <div id="myModal" class="modal-book">
                                <span class="close10 cursor" onclick="closeModal()">&times;</span>
                                <div class="modal-content-book">

                                    <div class="mySlides-book">
                                        <div class="numbertext">1 / 4</div>
                                        <img src="img/book2.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides-book">
                                        <div class="numbertext">2 / 4</div>
                                        <img src="img/book1.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides-book">
                                        <div class="numbertext">3 / 4</div>
                                        <img src="img/book1.jpg" style="width:100%">
                                    </div>


                                    <!-- Next/previous controls -->
                                    <a class="prev4" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next4" onclick="plusSlides(1)">&#10095;</a>



                                    <!-- Thumbnail image controls -->
                                    <div class="column-book">
                                        <img class="demo-book" src="img/book2.jpg" onclick="currentSlide(1)"
                                            alt="Nature">
                                    </div>

                                    <div class="column-book">
                                        <img class="demo-book" src="img/book1.jpg" onclick="currentSlide(2)" alt="Snow">
                                    </div>

                                    <div class="column-book">
                                        <img class="demo-book" src="img/book1.jpg" onclick="currentSlide(3)"
                                            alt="Mountains">
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-3">
                        <!-- تفاصيب الكتاب -->
                        <div class="book-title-details">
                            <div class="book-details-part1">
                                <div class="book-title-head">
                                    <p>لانك الله(كتاب الكتروني)</p>
                                </div>
                                <a href="#"><span>عرض المزيد</span></a>
                                <div class="book-price-details">
                                    <p>12.99</p><span>ر.س</span>
                                </div>
                                <div class="dareba" style="margin-right: 17px;">شامل الضريبه</div>
                            </div>
                            <div class="book-details-part2">

                                <p>وحدة البيع:Each</p>

                                <div class="yellostar">

                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <p>(15) المراجعات</p>
                                </div>
                                <div class="flex">
                                    <p>رقم الصنف <span style="font-weight: bold;"> JBB410156</span>
                                    <p>رقم المنتج <span style="font-weight: bold;"> 4</span></p>
                                </div>
                            </div>
                            <div class="book-details-part3">
                                <div>
                                    <p>الصيغ المتوفرة:</p>
                                    <di class="flex">
                                        <input type="radio" id="electronicbook" name="fav_language" value="ele" checked>
                                          كتاب الكتروني
                                        <div class="book-price-details">
                                            <p>12.99</p><span>ر.س</span>
                                        </div>
                                    </di><br>
                                    <div class="flex">
                                          <input type="radio" id="printbook" name="fav_language" value="print">
                                          <label for="css">كتاب مطبوع</label>
                                        <div class="book-price-details">
                                            <p>12.99</p><span>ر.س</span>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-3">
                        <div class="rcol-details">
                            <div class="note">
                                <p><span>ملاحظة:</span>سيتم اضافة هذا الكتاب الى مكتبتك في قارئ جربر</p>
                                <p><a href="#">اقرا المزيد</a></p>
                            </div>
                            <div>
                                <form action="/action_page.php" class="flex-det">
                                    <select name="nuum" id="nuum" class="flex-1-det">
                                        <option value="one">1</option>
                                    </select>
                                    <button id="btndet" class="flex-2-det"><img src="img/svg/svgexport-21.svg"
                                            class="add" onclick="add()">اضف الى السلة</button>
                                </form>
                            </div>
                            <div>
                                <div class="flex-det">
                                    <div class="taswqamen">
                                        <img src="img/svg/svgexport-29-1.svg">
                                        <p>تسوق امن </p>
                                        <img src="img/svg/svgexport-8.svg">
                                    </div>
                                    <div class="taswqamen">
                                        <img src="img/svg/svgexport-9.svg">
                                        <p>اصلي ومضمون</p> <img src="img/svg/svgexport-8.svg">
                                    </div>
                                </div>
                                <div class="shahn">

                                    <img src="img/svg/svgexport-33-1.svg">
                                    <p>
                                        شحن سريع ومجاني
                                    </p> <img src="img/svg/svgexport-8.svg">
                                </div>

                            </div>
                            <div class="flex-det">
                                <div class="mosharkah">
                                    <img src="img/svg/svgexport-34-1.svg">
                                    <p>مشاركه</p>
                                </div>

                                <div class="mosharkah">
                                    <img src="img/svg/svgexport-35-1.svg">
                                    <p>المفضلة</p>

                                </div>
                                <div class="mosharkah">
                                    <img src="img/svg/svgexport-36-1.svg">
                                    <p>مقارنة</p>
                                </div>


                            </div>
                        </div>

                        <div class="flex-det dubleclass">
                            <div class="mosharkah">
                                <img src="img/svg/svgexport-34-1.svg">
                                <p>مشاركه</p>
                            </div>

                            <div class="mosharkah">
                                <img src="img/svg/svgexport-35-1.svg">
                                <p>المفضلة</p>

                            </div>
                            <div class="mosharkah">
                                <img src="img/svg/svgexport-36-1.svg">
                                <p>مقارنة</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="book-explain">كتاب تحدث عن اسماء الله الحسنى كيف نعيشها في حياتناحرص المؤلف ان يكون
                    الكتاب
                    مناسبا لمن هم متوسطي الثقافه ويكون مناسبا للمحتاج والمريض والسليم</div>
                <!-- المواصفات -->
                <div>
                    <h1>المواصفات</h1>
                    <div id="table">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="first"> رقم الصنف</td>
                                    <td style="font-weight: bold;">JBB410156</td>

                                </tr>

                                <tr>
                                    <td class="first"> رقم المنتج</td>
                                    <td style="font-weight: bold;">4</td>

                                </tr>
                                <tr>
                                    <td class="first"> المؤلف</td>
                                    <td style="font-weight: bold;">علي جابر الفيفي</td>

                                </tr>
                                <tr>
                                    <td class="first">الناشر</td>
                                    <td style="font-weight: bold;">دار الحضارة للنشر والتوزيع</td>

                                </tr>
                                <tr>
                                    <td class="first"> تاريخ النشر</td>
                                    <td style="font-weight: bold;">2016</td>

                                </tr>
                                <tr>
                                    <td class="first"> صيغة الكتاب</td>
                                    <td style="font-weight: bold;">Ebook</td>

                                </tr>

                                <tr>
                                    <td class="first"> عدد الصفحات </td>
                                    <td>182</td>

                                </tr>
                                <tr>
                                    <td class="first"> وزن الشحن (كجم)</td>
                                    <td style="font-weight: bold;">0.0100</td>

                                </tr>
                                <tr>
                                    <td class="first"> صيغة الملف</td>
                                    <td style="font-weight: bold;">ePub</td>

                                </tr>
                                <tr>
                                    <td class="first"> اللغة </td>
                                    <td style="font-weight: bold;">عربي</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div> <span id="lessbtn" class="lessbtn">عرض اقل</span></div>
                <!-- المراجعات -->
                <div class="custom">
                    <h1>مراجعات العملاء</h1>
                    <input type="button" value="+ اكتب مراجعتك">
                </div>
                <div class="customReview">
                    <div class="reviewname">
                        <p>good</p>
                        <div class="reviewdate">
                            <p>من قبل reem</p>
                            <p>2021/11/16</p>
                        </div>
                    </div>
                    <p>Good</p>
                </div>
                <div class="customReview">
                    <div class="reviewname">
                        <p>كتاب رائع</p>
                        <div class="reviewdate">
                            <p>من قبل خالد ابو جميلة</p>
                            <p>2021/9/25</p>
                        </div>
                    </div>
                    <p>جمبل جدا</p>
                </div>
                <div class="customReview">
                    <div class="reviewname">
                        <p>لانك الله</p>
                        <div class="reviewdate">
                            <p>من قبل باسل</p>
                            <p>2021/9/20</p>
                        </div>
                    </div>
                    <p>جميل جدا ومفيد</p>
                </div>
                <div class="endreview">
                    <p class="lessbtn">اظهار جميع المراجعات(15)</p>
                </div>
                <!-- منتجات مشابهه -->
                <div class="semiproduct">
                    <h1>منتجات مشابهة</h1>

                    <div class="rawdetails">


                        <div class="detailflexCard">
                            <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">الصلاة وحكم تاركها</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>15</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>

                        <div class="detailflexCard">
                            <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">الله</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>14</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>


                        <div class="detailflexCard">
                            <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">علامات القيامة الكبرى مجلد مقاس صغير</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>14</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>

                        <div class="detailflexCard">
                            <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">وبدأ العد التنازلي</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>14</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>

                        <div class="detailflexCard">
                            <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">ضعف الامه وهزيمتها النفسيه النتيجه والحل</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>14</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>



                        <div class="detailflexCard">
                            <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">جهنم الصغرى</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>14</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>




                    </div>
                </div>
            </div>
    </div>
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
                        <li><a href="#"><img src="img/svg/svgexport-59.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/svg/svgexport-60.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/svg/svgexport-61.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/svg/svgexport-62.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/svg/svgexport-63.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/svg/svgexport-64.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/svg/svgexport-65.svg" alt=""></a></li>

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
                        <li> <img src="img/svg/svgexport-66.svg" alt=""></li>
                        <li><img src="img/svg/svgexport-67.svg" alt=""></li>
                        <li> <img src="img/svg/svgexport-68.svg" alt=""></li>
                        <li> <img src="img/svg/svgexport-69.svg" alt=""></li>
                        <li> <img src="img/svg/svgexport-70.svg" alt=""></li>
                        <li> <img src="img/svg/svgexport-71.svg" alt=""></li>
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
                    <div class="modal-content">
                        <div class="col-1">
                            <span class="close2">&times;</span>
                            <h1>إنشاء حساب</h1>

                            <form>
                                <input type="text" id="uphone" placeholder="رقم الجوال">
                                <input type="text" id="uphone" placeholder="رمز البلد">
                                <p>سوف نرسل لك<span>رمز التحقق عن طريق رسالة نصية</span></p>
                                <input type="button" id="valiNum" placeholder="إرسال رمز التحقق">
                                <br>
                                <input type="text" id="fname" placeholder="الاسم الاول ">
                                <br>
                                <input type="text" id="familyname" placeholder="اسم العائلة ">
                                <br>
                                <input type="email" id="vsignemail" placeholder="البريدالالكتروني">
                                <br>
                                <input type="email" id="email" placeholder=" تأكيد البريدالالكتروني ">
                                <br>
                                <input type="password" id="signpass" placeholder="كلمة السر ">
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
    <script src="js/app.js"></script>
    <script src="js/app2.js"></script>
    <script src="js/app3.js"></script>
</body>

</html>