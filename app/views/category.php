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
    <title>category</title>
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
                           <a href="index.html"> <img src="img/logo.png" alt=""></a>
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
        <!--  -->
        <section class="sec cate">
            <div class="main-continer">
                <ul class="breadcrumb">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="#">الكتب العربية</a></li>
                    <li><a href="#">كتب الكترونية</a></li>
                </ul>
            </div>
            <div class="main-continer">
                <div class="rawcate">
                    <div class="col-cate1">
                        <div class="titlecate">
                            <img src="img/svg/svgexport-34.svg" alt="" style="width: 25px;">
                            <p>كتب إلكترونية</p>
                        </div>
                        <div class="resultfilter">
                            <p>تصفية النتائج</p>
                            <div class="resultfilter1">
                                <p>علامة تجارية</p>
                                <span>-</span>
                            </div>
                        </div>
                        <div class="resultfilter1">
                            <p>السعر </p>
                            <span>-</span>
                        </div>
                        <div class="resultfilter1">
                            <p>السعر </p>
                            <span>-</span>
                        </div>
                        <div class="resultfilter1">
                            <p>صيغة الكتاب </p>
                            <span>-</span>
                        </div>
                    </div>
                    <div class="col-cate2">
                        <div class="flexorder">
                            <select name="" id="">
                                <option value="choose">الرجاء الاختيار</option>

                            </select>
                            <p>الترتيب بحسب</p>

                        </div>
                        <!-- الصف الاول -->
                        <div class="rawcatebook">


                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/koly.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كلي وشربي وابهري الاخرين (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>24.99</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div>
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                </div>
                                <div class="book-title-home">لانك الله (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>12.99</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/ababel.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">ابابيل(كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>49.99</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/nooon.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home"> ن النسوية(كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>34.99</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>



                            </div>

                        </div>
                        <!-- الصف الثاني -->
                        <div class="rawcatebook">


                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div>
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                </div>
                                <div class="book-title-home">لانك الله (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>



                            </div>

                        </div>
                        <!-- الصف الثالث -->
                        <div class="rawcatebook">


                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div>
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                </div>
                                <div class="book-title-home">لانك الله (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>



                            </div>

                        </div>
                        <!-- الصف الرابع -->
                        <div class="rawcatebook">


                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div>
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                </div>
                                <div class="book-title-home">لانك الله (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>



                            </div>

                        </div>
                        <!-- الصف الخامس -->
                        <div class="rawcatebook">


                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div>
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                    <img src="img/svg/svgexport-39-1.svg" alt="" style="width:20px ;">
                                </div>
                                <div class="book-title-home">لانك الله (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>


                            </div>

                            <div class="flexCardcate flexCardsearch">
                                <a href="details.html"><img src="img/book1.jpg" alt="" class="book-photo-cate"></a>
                                <div class="card-title">
                                    <img src="img/svg/svgexport-57.svg" alt="">
                                    <p>كتاب الكتروني</p>

                                </div>
                                <div class="book-title-home">كبريا وهوى (كتاب الكتروني)</div>
                                <div class="book-price">
                                    <p>17</p><span>ر.س</span>
                                </div>
                                <div class="dareba">شامل الضريبه</div>
                                <div class="another-ver"><span>صيغ اخرى:</span>
                                    <p>كتاب مطبوع</p>
                                </div>
                                <div class="icons">
                                    <img src="img/svg/svgexport-2.svg">
                                    <img src="img/svg/svgexport-21.svg" class="add" onclick="clickCounter()">
                                    <img src="img/svg/svgexport-56.svg">
                                </div>



                            </div>

                        </div>
                        <div class="morecate">
                            <button>عرض المزيد</button>
                        </div>
                        <div>
                            <p style="color: rgba(42, 107, 41, 1); font-weight: bold; margin-bottom: 50%;"> اشتر من كتب
                                الكترونيةعلى متجر جرير الالكتروني</p>
                        </div>
                    </div>


                </div>

            </div>
        </section>

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
                                    <p> سوف نرسل لك<span> رمز التحقق عن طريق رسالة نصية </span></p>
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