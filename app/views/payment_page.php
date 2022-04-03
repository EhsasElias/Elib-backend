<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="css/styleAR.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/payment.css">
    <link rel="stylesheet" href="css/font-awesome.css">
   
</head>

<body>
    <header>
        <nav>
            <div class="svgs">
                
                <a id="login">
                    <img src="images/svg/user.svg" width="20" alt="" class="svg">
                    ادخل لحسابك او سجل الان
                </a>
                <a href="/home">
                    <img src="images/svg/start.svg" width="20" alt="" class="svg">
                    الرئيسية
                </a>
                <a href="">
                    <img src="images/svg/car.svg" width="20" alt="" class="svg">
                    من نحن
                </a>
                <a href="">
                    <span class="fa fa-check-square"></span>
                    اتصل بنا
                </a>
                <a href="">
                   <img src="images/svg/help.svg" width="20" alt="" class="svg">
                    المساعدة
                </a>
                <a href="">
                    <img src="images/svg/location.svg" alt="">
                    سياسة الخصوصية
                </a>
                <a class="language">
                    <img src="images/svg/flag.svg" width="20" alt="" class="svg">
                    <p>اليمن</p>
                    <p>YER</p>
                </a>
                <a  id="language">
                    English
                    <img src="images/svg/lan.svg" width="20" alt="" class="svg">
                </a>
            </div>
        </nav>




        <div class="header-bottom">

            <div class="logo">

               <a href="/home"><img src="images/svg/logo.svg" width="180px" alt=""></a> 
            </div>
            <div class="search-div">

                <a id="menu"><img src="images/svg/menu.svg" alt=""></a>

                <input type="search" value="" placeholder="البحث" id="search">
                <button class="fa fa-search"></button>
                </button>
                <a class="fa fa-shopping-cart" id="headerChart" href="/payment_page">0</a>
            </div>
        </div>
        <div class="logoResponsive">

            <a href="/home"><img src="images/svg/logo.svg" width="180px" alt=""></a> 
         </div>
    </header>
    <div class="container">

        <div class="progress" id="progress"></div>
        <div class="progress-active"></div>
        <div class="circal active">1 </div>
        <div class="circal">2</div>
        <div class="circal">3</div>
        <div class="circal">4</div>


    </div>
    <div class="slidercontainer">
        <div class="showSlide show">

            <div class="content">
                <form>
                    <h4>البيانات الشخصية</h4>
                    <input type="username" placeholder="الاسم">
                    <input type="email" placeholder="الإيميل">
                    <input type="text" placeholder="العنوان">
                    <input type="text" placeholder="المدينة">
                    <input type="text" placeholder="zip">



                </form>
            </div>
        </div>

        <div class="showSlide">

            <div class="content">
                <form>
                    <h4>فاتورة الشراء</h4>
                    <div id="CArt">
                        <div class="productDesign">
                            <h3 class="fa fa-shopping-cart">
                                3
                            </h3>
                            <h3>
                                السلة
                            </h3>
                            
                        </div>
                        <div class="productDesign">
                           
                            <p>
                             $ 50  
                              
                           </p>
                           <p>
                            منتج 1
                        </p>
                        </div>
                        <div class="productDesign">
                            
                            <p>
                              $ 15 
                            </p>
                            <p>
                                منتج 2
                            </p>
                        </div>
                        <div class="productDesign">
                           
                            <p>
                                $ 20
                            </p>
                            <p>
                                منتج 3
                            </p>
                        </div>
                        <div class="productDesign total">
                            <h3>
                                $ 85
                            </h3>
                            <p>
                                المجموع
                            </p>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="showSlide">

            <div class="content">
                <form>
                    <h4>الدفع</h4>
                    <label for="Ptype">
                        أليات الدفع المتاحة

                    </label>
                    <div id="Ptype">
                        <i class="fa fa-cc-visa"></i>
                        <i class="fa fa-cc-amex"></i>
                        <i class="fa fa-cc-mastercard"></i>
                    </div>
                    <label for="uname">
                        اسم المشتري (الإسم على بطاقة الدفع)
                    </label>
                    <input type="text" placeholder="احساس الياس العزعزي" id="uname">
                    <label for="CardNum">
                        رقم بطاقة الدفع
                    </label>
                    <input type="text" placeholder="1111-2222-3333-4444">
                    <label for="Emonth">
                        (Exp month)شهر الإنتهاء
                    </label>
                    <input type="text" id="Emonth" placeholder="يناير">
                    <label for="ccv">
                        CCV
                    </label>
                    <input type="text" placeholder="352" id="ccv">
                    <label for="Eyear">
                        سنة الإنهاء
                    </label>
                    <input type="text" id="Eyear" placeholder="2025">
                </form>
            </div>
        </div>



        <div class="showSlide">

            <div class="content">
                <div class="submit">
                    <p class="fa fa-check-circle-o"></p>
                    <h5>لقد قمت بعملية الشراء بنجاح</h5>
                </div>
            </div>
        </div>
        <div class="container-btn">
            <button class="btn" id="butPrev">السابق</button>
            <button class="btn" id="butNext">التالي</button>
        </div>

       
        

    </div>


    <section id="login-model" class="overlay">
        <div>
            <h3>تسجيل الدخول</h3>
            <form class="loginForm" action="">
                <input type="text" placeholder="البريد الالكتروني او رقم الجوال">
                <div>
                    <input type="password" placeholder="كلمة السر">
                    <p class="forget"> ؟ نسيت</p>
                    <button class="loginbut">تسجيل الدخول</button>
                    <div class="down">
                        <p>ليس لديك حساب</p>
                        <a class="createAccount" id="createAccount">إنشاء حساب جديد</a>
                    </div>

                </div>


            </form>
        </div>
        <span class="fa fa-close" id="closesignin"></span>
    </section>


    <section id="signup">
        <form action="">
            <div class="top">
                <h2>انشاء حساب</h2>
                <input class="num" type="number" placeholder="رقم الجوال">
                <input class="prenum" type="number" placeholder="+970">
                <br> <small>سوف نرسل لك <b>

                        رمز التحقق عن طريق رسالة نصية
                    </b>
                </small>
            </div>
            <div class="mid">
                <input type="button" value="ارسال رمز التحقق">
                <input type="text" placeholder="الاسم الاول">
                <input type="text" placeholder="اسم العائلة">
                <input type="text" placeholder="البريد الالكتروني">
                <input type="text" placeholder="تاكيد البريد الالكتروني">
                <input type="text" placeholder="كلمة السر">
            </div>
            <div class="down">

                <input class="checkbox1" type="checkbox" checked>
                <p>اوافق على
                    <span>
                        الشروط و الاحكام
                    </span>
                </p>
                <input class="checkbox2" type="checkbox" checked>
                <p>التسجيل للانضمام للنشرة البريدية</p>
                <input type="button" value="انشاء حساب">
            </div>
            <div class="downdown">
                <p>
                    <span>
                        لديك حساب ؟

                    </span>
                    <a id="signinFromSingnup">
                        تسجيل الدخول >
                    </a>
                </p>
            </div>
        </form>
        <span class="fa fa-close" id="closesignup"></span>
    </section>

    
    <footer>
        <div class="uperfoter">
            <div>
                <div>
                    <h4>انظم الى نشرتنا البريدية</h4>
                    <form action="">
                        <input type="text" placeholder="ادخل بريدك الالكنروني">
                        <i class="fa fa-lock"></i>
                        <button type="submit">اشتراك</button>
                    </form>
                </div>

            </div>


            <div>
                <h4>خدمة العملاء</h4>
                <p>
                    <br> مبيعات للشركات
                    <br> الأسئلة المتكررة
                    <br> دليل التسويق و المطبوعات
                    <br> مواقع المعارض
                    <br> سياسة الضمان
                    <br> سياسة الاسترجاع و الاستبدال
                    <br> اتصل بنا >

                </p>
                <h4>920000089</h4>
            </div>


            <div>
                <h4>خدمات جرير</h4>
                <p>
                    <br> خدمة تقسيط المشتريات
                    <br> خدمات ما بعد البيع
                    <br> خدمة الحماية الشاملة
                    <br> حماية أجهزة آبل
                    <br> بطاقة خصم جرير
                    <br> بطاقة جرير للهدايا
                </p>
            </div>

            <div>
                <h4>روابط سريعة</h4>
                <p>
                    <br> إصدارات جرير
                    <br> قارئ جرير
                    <br> شركاء برامج المكافئات
                    <br> خدمات شركات الإتصالات
                </p>
            </div>
            <div>
                <h4>عن جرير</h4>
                <p>
                    <br> من نحن
                    <br> الحوكمة
                    <br> علاقات المستثمرين والتقارير
                    <br> الاستدامة
                    <br> الأخبار
                </p>
                <h4>
                    فرص عمل
                </h4>
            </div>
            <div class="fonts">
                <h4>تواصل معنا</h4>
                <div class="cotact-icons">
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-twitter"></a>
                    <a href="" class="fa fa-youtube-play"></a>
                    <a href="" class="fa fa-instagram"></a>
                    <a href="" class="fa fa-linkedin"></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>
            </div>
        </div>
        <div class="down">
            <div class="down-footer">
                <div>
                    <img src="images/logos/a.png" alt="">
                    <img src="images/logos/b.png" alt="">
                    <img src="images/logos/c.png" alt="">
                    <img src="images/logos/d.png" alt="">
                    <img src="images/logos/e.png" alt="">
                    <img src="images/logos/f.png" alt="">
                </div>
                <div>
                    <p>سياسة الخصوصية | شروط الخدمة</p>
                    <p>.جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 1010654213</p>
                </div>

            </div>
        </div>
    </footer>
    <script src="js/payment.js"></script>
    <script src="js/js.js"></script>
</body>

</html>