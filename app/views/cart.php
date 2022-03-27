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
    <link rel="stylesheet" href="app/public/css/style.css">
    <title>Cart</title>
</head>

<body>
    <div class="grid-continer">

        <header class="hd">

            <nav>
                <div class="hd-color">
                    <div class="main-continer">
                        <i class="fas fa-bars toggle-menue"></i>
                        <ul id="dropmenue">


                            <li><a href="#sec1" id="myBtn"><img src="app/public/app/public/img\svg\svgexport-1.svg"><span>ادخل لحسابك أو
                                        سجل الآن</span></a>
                            </li>
                            <li><a href="index.html"><img src="app/public/img\svg\svgexport-2.svg"><span>الرئيسية</span></a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-3.svg"><span>من نحن</span></a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-4.svg"><span>اتصل بنا</span> </a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-5.svg"><span>المساعدة</span></a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-11.svg"><span>سياسة الخصوصية</span></a></li>
                            <li><a href=""><img src="app/public/img\svg\svgexport-12.svg"><span>اليمن YER</span></a></li>
                            <li><a href=""><span>English</span><img src="app/public/img\svg\svgexport-14.svg"></a></li>

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
      
     
        <section class="sec cart">
            <div class="cart-continer">
                <div class="title-cart">
                    <img src="img/svg/cart.svg" alt="">
                    <p>السلة </p><span>(3 منتجات)</span>
                </div>
                <div class="book-details">
                    <div class="col-cart1">
                        <div class="cart-row">
                            <div class="cart-det">
                                <div class="book-name"> <img src="app/public/img/book1.jpg" alt="">
                                    <p>البداية والنهاية الجزء الأول (كتاب الكتروني)<span><br>منتج قابل للخصم لحاملي
                                            بطاقة
                                            خصم مكتبة جرير</span></p>


                                </div>
                                <p class="price">3.99 <span>ر.س</span></p>
                            </div>
                            <div class="note-container">
                                <div class="note-space"></div>
                                <div class="note">
                                    <p><span>ملاحظة:</span>هذا المنتج رقمي وسيتم توصيله من خلال البريد الاكتروني</p>
                                    <p><a href="#">كيفية الحصول على المنتج</a></p>
                                </div>
                                <div class="numbers">
                                    <table>
                                        <tr>
                                            <td class="table-number" id="cart-number">1</td>
                                            <td class="table-opertion">
                                                <div class="plus" id="plus" onclick="pluse()">+</div>
                                                <div class="muns" id="muns" onclick="muns()">-</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="dele-cart">
                                <i class="fa-solid fa-circle-xmark"></i><span>احذف </span>
                            </div>
                        </div>


                        <div class="cart-row">
                            <div class="cart-det">
                                <div class="book-name"> <img src="app/public/img/book1.jpg" alt="">
                                    <p>البداية والنهاية الجزء الأول (كتاب الكتروني)<span><br>منتج قابل للخصم لحاملي
                                            بطاقة
                                            خصم مكتبة جرير</span></p>

                                </div>
                                <p class="price">3.99 <span>ر.س</span></p>
                            </div>

                            <div class="note-container">
                                <div class="note-space"></div>
                                <div class="note">
                                    <p><span>ملاحظة:</span>هذا المنتج رقمي وسيتم توصيله من خلال البريد الاكتروني</p>
                                    <p><a href="#">كيفية الحصول على المنتج</a></p>
                                </div>
                                <div class="numbers">
                                    <table>
                                        <tr>
                                            <td class="table-number" id="cart-number1">1</td>
                                            <td class="table-opertion">
                                                <div class="plus" id="plus" onclick="pluse1()">+</div>
                                                <div class="muns" id="muns" onclick="muns1()">-</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="dele-cart">
                                <i class="fa-solid fa-circle-xmark"></i><span>احذف </span>
                            </div>
                        </div>

                        <div class="cart-row">
                            <div class="cart-det">
                                <div class="book-name"> <img src="app/public/img/book1.jpg" alt="">
                                    <p>البداية والنهاية الجزء الأول (كتاب الكتروني)<span><br>منتج قابل للخصم لحاملي
                                            بطاقة
                                            خصم مكتبة جرير</span></p>
                                </div>
                                <p class="price">3.99 <span>ر.س</span></p>
                            </div>
                            <div class="note-container">
                                <div class="note-space"></div>
                                <div class="note">
                                    <p><span>ملاحظة:</span>هذا المنتج رقمي وسيتم توصيله من خلال البريد الاكتروني</p>
                                    <p><a href="#">كيفية الحصول على المنتج</a></p>
                                </div>
                                <div class="numbers">
                                    <table>
                                        <tr>
                                            <td class="table-number" id="cart-number2">1</td>
                                            <td class="table-opertion">
                                                <div class="plus" id="plus" onclick="pluse2()">+</div>
                                                <div class="muns" id="muns" onclick="muns2()">-</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="dele-cart">
                                <i class="fa-solid fa-circle-xmark"></i><span>احذف </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-cart2">
                        <div class="cost-cart">
                            
                            <p>المجموع</p>
                            <p> 86.97 <span style="font-size: 10px;">ر.س</span></p>
                        </div>
                        <div class="cost-cart">
                            <p>تكاليف الشحن </p>
                            <p class="green"> مجاني</p>
                        </div>
                        <div class="cost-cart">
                            <p class="red">المجموع الكلي <span class="dareba"> شامل الضريبة</span></p>
                            <div class="book-price">
                                <p style="color: red;">86.97</p><span>ر.س</span>
                            </div>
                            <!-- <p class="red"> 86.97 ر.س</p> -->
                        </div>
                        <div class="cart-p">
                            <p>بالضغط على انهاء التسوق فانت توافق عللى الشروط والاحكام وسياسة الخصوصية</p>
                        </div>
                        <div class="cost-btn">
                            <a href="/steper"><input type="submit" value="انهاء التسوق" class="cart-sub"></a>
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
    <script src="app/public/js/cart.js"></script>
</body>

</html>