<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/steper.css" />

    <title>finish</title>
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
                            <li><a href="/"><img src="img\svg\svgexport-2.svg"><span>الرئيسية</span></a></li>
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
                            <a href="/"><img src="img/logo.png" alt=""></a>
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
     

        <section class="sec">



            <!-- start of stepper -->
            <form action="index.html" class="form">
                <h1 class="text-center">انهاء التسوق</h1>
                <!-- Progress bar -->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>

                    <div class="progress-step progress-step-active" data-title="المعلومات الشخصية"></div>
                    <div class="progress-step" data-title="معلومات الدفع"></div>
                    <div class="progress-step" data-title="التأكيد"></div>
                    <div class="progress-step" data-title="تم"></div>
                </div>

                <!-- Steps -->
                <div class="form-step form-step-active">
                    <div class="input-group">
                        <label for="username">الاسم</label>
                        <input type="text" name="username" id="username" required />
                    </div>
                    <div class="input-group">
                        <label for="uemail">الايميل</label>
                        <input type="email" name="position" id="uemail" required />
                    </div>
                    <div class="input-group">
                        <label for="position">العنوان</label>
                        <input type="text" name="position" id="position" required />
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-next width-50 ml-auto">التالي</a>
                    </div>
                </div>
                <div class="form-step">
                    <div class="input-group">
                        <label for="idnumber">رقم البطاقة</label>
                        <input type="number" name="idnumber" id="idnumber" />
                    </div>
                    <div class="input-group">
                        <label for="idname">الاسم في البطاقة</label>
                        <input type="text" name="idname" id="idname" />
                    </div>
                    <div class="input-group">
                        <label for="idexdate">تاريخ الانتهاء</label>
                        <input type="date" name="idexdate" id="idexdate" />
                    </div>
                    <div class="input-group">
                        <label for="ccv">الرقم السري</label>
                        <input type="number" name="ccv" id="ccv" />
                    </div>
                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">السابق</a>
                        <a href="#" class="btn btn-next">التالي</a>
                    </div>
                </div>
                <div class="form-step">
                    <div>
                        <p> :اسم الكتاب </p>
                        <p> لانك الله</p>
                        <p> :سعر الكتاب</p>
                        <p>12.99 ر.س</p>
                        <p> لتأكيد الطلب اضغط على زر التالي
                    </div>
                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">السابق</a>
                        <a href="#" class="btn btn-next">التالي</a>
                    </div>
                </div>
                <div class="form-step">
                    <p> تم الطلب </p>
                    <p>شكرا لزيارتكم مكتبة جرير </p>
                    للعوده للصفحة الرئيسيه
                    <a href="/"> الصفحة الرئيسية</a>
                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">السابق</a>
                        <!-- <input type="submit" value="Submit" class="btn" /> -->
                    </div>
                </div>
            </form>
        </section>
        <footer class="ft">
            <div class="ft-color">
                <div class="main-continer">
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
    <!-- end of stepper -->
    <script src="js/app.js"></script>
    <script src="js/app2.js"></script>
    <script src="js/app3.js"></script>
</body>

</html>