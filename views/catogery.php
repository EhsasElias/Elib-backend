<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/css/styleAR.css">
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="stylesheet" href="../public/css/signup.css">


    <title>E-Library</title>
</head>

<body>

    <div id="inneContent">

        <header>
            <nav>
                <div class="svgs">
                    
                    <a id="login">
                        <img src="../public/images/svg/user.svg" width="20" alt="" class="svg">
                        ادخل لحسابك او سجل الان
                    </a>
                    <a href="../index.html">
                        <img src="../public/images/svg/start.svg" width="20" alt="" class="svg">
                        الرئيسية
                    </a>
                    <a href="">
                        <img src="../public/images/svg/car.svg" width="20" alt="" class="svg">
                        من نحن
                    </a>
                    <a href="">
                        <span class="fa fa-check-square"></span>
                        اتصل بنا
                    </a>
                    <a href="">
                       <img src="../public/images/svg/help.svg" width="20" alt="" class="svg">
                        المساعدة
                    </a>
                    <a href="">
                        <img src="../public/images/svg/location.svg" alt="">
                        سياسة الخصوصية
                    </a>
                    <a class="language">
                        <img src="../public/images/svg/flag.svg" width="20" alt="" class="svg">
                        <p>اليمن</p>
                        <p>YER</p>
                    </a>
                    <a  id="language">
                        English
                        <img src="../public/images/svg/lan.svg" width="20" alt="" class="svg">
                    </a>
                </div>
            </nav>




            <div class="header-bottom">

                <div class="logo">

                   <a href="../index.html"><img src="../public/images/svg/logo.svg" width="180px" alt=""></a> 
                </div>
                <div class="search-div">

                    <a id="menu"><img src="../public/images/svg/menu.svg" alt=""></a>

                    <input type="search" value="" placeholder="البحث" id="search">
                    <button class="fa fa-search"></button>
                    </button>
                    <a class="fa fa-shopping-cart" id="headerChart" href="../views/payment_page.html">0</a>
                </div>
            </div>
            <div class="logoResponsive">

                <a href="../index.html"><img src="../public/images/svg/logo.svg" width="180px" alt=""></a> 
             </div>
        </header>


       
        <!-- slider by html css pure -->
        <section class="CSSgal">

            <div class="container">
                <p class="fa fa-angle-right sliderArrow" id="_p"></p>
                <div class="slider" style="display: block;">
        
                    <img src="../public/images/sliderImages/1.jpg" alt="">
        
                </div>
                <div class="slider">
                    <img src="../public/images/sliderImages/2.jpg" alt="">
        
                </div>
                <div class="slider">
                    <img src="../public/images/sliderImages/3.jpg" alt="">
        
                </div>
                <div class="slider">
                    <img src="../public/images/sliderImages/4.jpg" alt="">
        
                </div>
                <div class="slider">
                    <img src="../public/images/sliderImages/5.jpg" alt="">
        
                </div>
                <div class="slider">
                    <img src="../public/images/sliderImages/6.jpg" alt="">
        
                </div>
                <div class="slider">
                    <img src="../public/images/sliderImages/7.jpeg" alt="">
                </div>
                <p class="fa fa-angle-left sliderArrow" id="_n"></p>
            </div>
            <div style="text-align:center">
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
            </div>

        </section>

        <!-- aside + catogries -->
        <section class="categoriesSec">
            <aside>
                <div class="bookLinks">
                    <a href="../index.html"> الرئيسية</a>
                    <a href="">&nbsp; /&nbsp; الكتب العربية</a>
                    <a href="">&nbsp; /&nbsp; كتب إلكترونية</a>
                </div>
                <div class="categories-name">
                    <h1 class="eBooks-title">
                        <!-- books svg -->
                        <span></span>
                        كتب إلكترونية
                    </h1>
                    <div class="resultDeatails">
                        <p class="results">تصفية النتائج</p>
                        <p class="bookDetails">
                            علامة تجارية
                            <span class="fa fa-minus-square-o"></span>
                        </p>
                        <p class="bookDetails">
                            السعر
                            <span class="fa fa-minus-square-o"></span>
                        </p>
                        <div>
                            <div class="prograssDetails">
                                <button></button>
                                <div></div>
                                <button></button>
                            </div>
                            <div class="priceDetaile">
                                <p>ر.س.0</p>
                                <p>ر.س.150</p>
                            </div>
                        </div>
                        <p class="bookDetails">
                            صيغة الكتاب
                            <span class="fa fa-minus-square-o"></span>
                        </p>
                    </div>

                </div>


            </aside>
            <section class="productImgs productImgscate">
                <div class="storBy">
                    <div class="storByDiv">
                        <label for="categoriesSorting">الترتيب بحسب : </label>
                        <select name="categoriesSorting" id="_cate">
                            <option value="*">الرجاء الإختيار</option>
                            <option value="name">الاسم</option>
                            <option value="date">التاريخ</option>
                            <option value="price">السعر</option>
                        </select>
                    </div>
                </div>
                <div class="booksimgs">
                    <section class="bookRow1">
                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/eat-sleep.jpg" width="200" height="200" alt="" class="image">
                                <img src="../public/images/books/eat-sleep-back.jpg" class="image2" alt="">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                كلي و نامي و ابهري الأخرين
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    24.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <a  class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </a>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/you-Allah.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/you-Allah-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                لأنك الله
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    12.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <a href="../views/payment_page.html" class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </a>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/Ababeel.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/Ababeel-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                أبابيل
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    42.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <h3 class="offer">عرض خاص</h3>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/noon.jpg" width="200" height="200" alt="" class="image">
                                <img src="../public/images/books/noon.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                ن النسوية
                                (كتاب إلكتروني)
                            </p>

                            <div class="cost">
                                <h2>
                                    34.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>

                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>
                    </section>


                    <section class="bookRow1">
                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/eat-sleep.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/eat-sleep-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                كلي و نامي و ابهري الأخرين
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    24.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/you-Allah.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/you-Allah-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                لأنك الله
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    12.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/Ababeel.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/Ababeel-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                أبابيل
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    42.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <h3 class="offer"> عرض خاص </h3>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/noon.jpg" width="200" height="200" alt="" class="image">
                                <img src="../public/images/books/noon.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                ن النسوية
                                (كتاب إلكتروني)
                            </p>

                            <div class="cost">
                                <h2>
                                    34.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>

                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>
                    </section>


                    <section class="bookRow1">
                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/eat-sleep.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/eat-sleep-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                كلي و نامي و ابهري الأخرين
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    24.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/you-Allah.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/you-Allah-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                لأنك الله
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    12.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/Ababeel.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/Ababeel-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                أبابيل
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    42.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <br>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/noon.jpg" width="200" height="200" alt="" class="image">
                                <img src="../public/images/books/noon.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                ن النسوية
                                (كتاب إلكتروني)
                            </p>

                            <div class="cost">
                                <h2>
                                    34.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>

                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>
                    </section>


                    <section class="bookRow1">
                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/eat-sleep.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/eat-sleep-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                كلي و نامي و ابهري الأخرين
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    24.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/you-Allah.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/you-Allah-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                لأنك الله
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    12.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/Ababeel.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/Ababeel-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                أبابيل
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    42.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <br>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/noon.jpg" width="200" height="200" alt="" class="image">
                                <img src="../public/images/books/noon.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                ن النسوية
                                (كتاب إلكتروني)
                            </p>

                            <div class="cost">
                                <h2>
                                    34.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>

                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>
                    </section>


                    <section class="bookRow1">
                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/eat-sleep.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/eat-sleep-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                كلي و نامي و ابهري الأخرين
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    24.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/you-Allah.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/you-Allah-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="yellow-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                لأنك الله
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    12.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/Ababeel.jpg" width="200" height="200" alt=""
                                    class="image">
                                <img src="../public/images/books/Ababeel-back.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <p class="searchCheck">
                                أبابيل
                                (كتاب إلكتروني)
                            </p>
                            <div class="cost">
                                <h2>
                                    42.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>
                            <br>
                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>


                        <div class="bookCard-v1">
                            <div>
                                <img src="../public/images/books/noon.jpg" width="200" height="200" alt="" class="image">
                                <img src="../public/images/books/noon.jpg" alt="" class="image2">
                            </div>
                            <h3>
                                <span>
                                    <img src="../public/images/svg/book.svg" alt="">
                                </span>
                                <p>كتاب إلكتروني</p>
                            </h3>
                            <div>
                                <span class="yellow-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                                <span class="gray-star fa fa-star"></span>
                            </div>
                            <p class="searchCheck">
                                ن النسوية
                                (كتاب إلكتروني)
                            </p>

                            <div class="cost">
                                <h2>
                                    34.99

                                </h2>
                                <span>ر.س.</span>
                            </div>
                            <span class="taxDetails">شامل الضريبة</span>
                            <p class="otherCopies">
                                <span> صيغ أخرى:</span>
                                <span>كتاب مطبوع</span>
                            </p>

                            <div class="bookRefer">

                                <p>
                                    <img src="../public/images/svg/start.svg" width="25" alt="">
                                </p>
                                <p class="bookReferFont">
                                    <span class="fa fa-cart-plus"></span>
                                </p>
                                <p>
                                    <img src="../public/images/svg/arrows.svg" width="25" alt="">
                                </p>
                            </div>

                        </div>
                    </section>
                </div>
            </section>
            <div class="bookCateFooter">
                <button>
                    <h3> عرض المزيد</h3>

                </button>
                <div></div>
                <h4>
                    اشتر من كتب إلكترونية على متجر جرير الإلكتروني
                </h4>
            </div>
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
                        <img src="../public/images/logos/a.png" alt="">
                        <img src="../public/images/logos/b.png" alt="">
                        <img src="../public/images/logos/c.png" alt="">
                        <img src="../public/images/logos/d.png" alt="">
                        <img src="../public/images/logos/e.png" alt="">
                        <img src="../public/images/logos/f.png" alt="">
                    </div>
                    <div>
                        <p>سياسة الخصوصية | شروط الخدمة</p>
                        <p>.جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 1010654213</p>
                    </div>

                </div>
            </div>
        </footer>
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

    <section class="bookSliderContainer" id="bookSliderContainer">
        <span class="fa fa-angle-right" id="right"></span>
        <div class="bookSlider" id="bookSlider">
            <img src="" alt="" id="imgmodel">
            <img src="" alt="" id="imgmode2">
            
        </div>
        <span class="fa fa-angle-left" id="left"></span>
        <span class="fa fa-close" id="closing"></span>
        <section id="counter">
            <div class="counterChild">
                <button id="counterChild1But1"></button>

                &nbsp;&nbsp;
                &nbsp;&nbsp;
                <button id="counterChild2But1"></button>

                &nbsp;&nbsp;
                &nbsp;&nbsp;
                <button id="counterChild3But1"></button>

                &nbsp;&nbsp;
                &nbsp;&nbsp;
                <button id="counterChild4But1"></button>


            </div>
            <div class="SmHd">
                <p>ثانية</p>
                &nbsp;&nbsp;

                <p>دقيقة</p>
                &nbsp;&nbsp;

                <p>ساعة</p>
                &nbsp;&nbsp;

                <p>يوم</p>


            </div>
        </section>
    </section>
 
    <script src="../public/js/js.js"></script>
</body>

</html>