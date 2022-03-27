<!DOCTYPE html>
<html lang="en">

<?php include "include/header.php"; ?> 
        <!-- end header -->
    <!-- slidebar -->
   <?php include "include/sidebar.php"; ?> 
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
                            <img src="app/public/img/book1.jpg" alt="" class="book-width">
                            <!-- Images used to open the lightbox -->
                            <div class="row">
                                <div class="column-book">
                                    <img src="img/book2.jpg" alt="" class="book-width1"
                                        onclick="openModal();currentSlide(1)" class="hover-shadow">
                                </div>
                                <div class="column-book">
                                    <img src="app/public/img/book1.jpg" alt="" class="book-width1"
                                        onclick="openModal();currentSlide(2)" class="hover-shadow">
                                </div>
                                <div class="column-book">
                                    <img src="app/public/img/book1.jpg" alt="" class="book-width1"
                                        onclick="openModal();currentSlide(3)" class="hover-shadow">
                                </div>

                            </div>
                            <!--  The Modal/Lightbox -->
                            <div id="myModal" class="modal-book">
                                <span class="close10 cursor" onclick="closeModal()">&times;</span>
                                <div class="modal-content-book">

                                    <div class="mySlides-book">
                                        <div class="numbertext">1 / 4</div>
                                        <img src="app/public/img/book2.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides-book">
                                        <div class="numbertext">2 / 4</div>
                                        <img src="app/public/img/book1.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides-book">
                                        <div class="numbertext">3 / 4</div>
                                        <img src="app/public/img/book1.jpg" style="width:100%">
                                    </div>


                                    <!-- Next/previous controls -->
                                    <a class="prev4" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next4" onclick="plusSlides(1)">&#10095;</a>



                                    <!-- Thumbnail image controls -->
                                    <div class="column-book">
                                        <img class="demo-book" src="app/public/img/book2.jpg" onclick="currentSlide(1)"
                                            alt="Nature">
                                    </div>

                                    <div class="column-book">
                                        <img class="demo-book" src="app/public/img/book1.jpg" onclick="currentSlide(2)" alt="Snow">
                                    </div>

                                    <div class="column-book">
                                        <img class="demo-book" src="app/public/img/book1.jpg" onclick="currentSlide(3)"
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
                                    <button id="btndet" class="flex-2-det"><img src="app/public/img/svg/svgexport-21.svg"
                                            class="add" onclick="add()">اضف الى السلة</button>
                                </form>
                            </div>
                            <div>
                                <div class="flex-det">
                                    <div class="taswqamen">
                                        <img src="app/public/img/svg/svgexport-29-1.svg">
                                        <p>تسوق امن </p>
                                        <img src="app/public/img/svg/svgexport-8.svg">
                                    </div>
                                    <div class="taswqamen">
                                        <img src="app/public/img/svg/svgexport-9.svg">
                                        <p>اصلي ومضمون</p> <img src="app/public/img/svg/svgexport-8.svg">
                                    </div>
                                </div>
                                <div class="shahn">

                                    <img src="app/public/img/svg/svgexport-33-1.svg">
                                    <p>
                                        شحن سريع ومجاني
                                    </p> <img src="app/public/img/svg/svgexport-8.svg">
                                </div>

                            </div>
                            <div class="flex-det">
                                <div class="mosharkah">
                                    <img src="app/public/img/svg/svgexport-34-1.svg">
                                    <p>مشاركه</p>
                                </div>

                                <div class="mosharkah">
                                    <img src="app/public/img/svg/svgexport-35-1.svg">
                                    <p>المفضلة</p>

                                </div>
                                <div class="mosharkah">
                                    <img src="app/public/img/svg/svgexport-36-1.svg">
                                    <p>مقارنة</p>
                                </div>


                            </div>
                        </div>

                        <div class="flex-det dubleclass">
                            <div class="mosharkah">
                                <img src="app/public/img/svg/svgexport-34-1.svg">
                                <p>مشاركه</p>
                            </div>

                            <div class="mosharkah">
                                <img src="app/public/img/svg/svgexport-35-1.svg">
                                <p>المفضلة</p>

                            </div>
                            <div class="mosharkah">
                                <img src="app/public/img/svg/svgexport-36-1.svg">
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
                            <a href="/details"><img src="app/public/img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">الصلاة وحكم تاركها</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>15</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>

                        <div class="detailflexCard">
                            <a href="/details"><img src="app/public/img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">الله</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>14</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>


                        <div class="detailflexCard">
                            <a href="/details"><img src="app/public/img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">علامات القيامة الكبرى مجلد مقاس صغير</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>14</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>

                        <div class="detailflexCard">
                            <a href="/details"><img src="app/public/img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">وبدأ العد التنازلي</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>14</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>

                        <div class="detailflexCard">
                            <a href="/details"><img src="app/public/img/book1.jpg" alt="" class="book-photo2"></a>
                            <div class="card-title">

                                <p class="card-title-detailes">ضعف الامه وهزيمتها النفسيه النتيجه والحل</p>

                            </div>

                            <div class="book-price detailsprice">
                                <p>14</p><span>ر.س</span>
                            </div>
                            <div class="dareba darebadetails">شامل الضريبه</div>

                        </div>



                        <div class="detailflexCard">
                            <a href="/details"><img src="app/public/img/book1.jpg" alt="" class="book-photo2"></a>
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
          <?php include "include/footer.php"; ?> 
            <!-- login modal -->
            <!-- <button id="myBtn">Open Modal</button> -->
            <?php include "login.php"; ?> 
            <!-- end login modal -->
            <!-- start signin -->
            <?php include "signin.php"; ?> 
            <!-- end signin -->
        </footer>
    </div>
    <script src="app/public/js/app.js"></script>
    <script src="app/public/js/app2.js"></script>
    <script src="app/public/js/app3.js"></script>
</body>

</html>