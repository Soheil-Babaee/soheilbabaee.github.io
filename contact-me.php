<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>سهیل بابایی | ارتباط با من </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style-contactMe.css">
  <link rel="icon" href="img/logo.jpg" type="image/x-icon">
</head>
<body>
    <!-- mobile nav  -->
  <nav class="navbar mobile_nav">

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end body_canvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 ul_canvas">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">رزومه من</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">نمونه کار ها</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> مهارت ها </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-me.html"> ارتباط با من </a>
          </li>
          <li class="nav-item">
            <button class="btn_download" onclick="downloadFile()">دانلود رزومه</button>
          </li>
        </ul>
      </div>
    </div>
</nav>
<!-- mobile nav -->
  <header>
      <nav>
        <ul>
        <li><a href="index.php">صفحه اصلی</a></li>  
      <li><a href="">رزومه من</a></li>  
      <li><a href="">نمونه کار ها</a></li>   
      <li><a href="">مهارت ها</a></li>   
      <button class="btn_download" onclick="downloadFile()">دانلود رزومه</button>
      </ul>
          </nav>
    </header>
    <!-- menu bar -->
<!-- start code HTML form -->


<div class="login-box">
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo '<div class="message success">پیام شما با موفقیت ارسال شد.</div>';
        } else if ($_GET['status'] == 'error') {
            echo '<div class="message error">ارسال پیام با خطا مواجه شد. لطفاً مجدداً تلاش کنید.</div>';
        }
    }
    ?>
    <h2>ارتباط با من</h2>
    <form action="send_email.php" method="POST">

        <div class="user-box">
            <input type="text" name="name" id="name" required="">
            <label>نام</label>
            <p class="alert_p alert_name" id="name_id"> لطفا اسم خود را به درستی وارد کنید *</p>
        </div>
        <div class="user-box">
            <input type="text" name="family" id="family" required="">
            <label>نام خانوادگی</label>
            <p class="alert_p alert_family" id="family_id"> لطفا فامیلی خود را به درستی وارد کنید *</p>
        </div>
  
        <div class="user-box">
          <input type="email" name="email" id="email" required="">
          <label> ایمیل </label>
          <p class="alert_p alert_email" id="email_id"> لطفا ایمیل خود را به درستی وارد کنید *</p>
      </div>
      <div class="user-box">
        <input type="tel" name="phone" id="phone" required="">
        <label> شماره تلفن </label>
        <p class="alert_p alert_phone" id="phone_id"> لطفا شماره تلفن خود را به درستی وارد کنید *</p>
    </div>
    <div class="user-box">
      <input type="text" name="title" id="title" required="">
      <label> موضوع </label>
      <p class="alert_p alert_title" id="title_id"> لطفا موضوع خود را وارد کنید* </p>
  </div>
  
  <div>
    <label for="txt_area" class="lable_txt_area">پیام</label>
    <textarea name="txt_area" class="txt-area" id="message" placeholder="در اینجا بنویسید ... "></textarea>
    <p class="alert_p alert_txtarea" id="txtarea_id"> پیام مربوطه را وارد کنید* </p>
  </div>
        <input type="submit" class="inp_submit" value="ارسال" id="inp_submit"> 
    </form>
  
  </div>
  <div class="div_alert">
    <p id="all_alert"> پر کردن و درست وارد کردن تمامی فیلد ها اجباریست* </p>
  </div>
  
  
  <!-- end code HTML form  -->
<!-- footer -->
<div class=" text-center div_social_media">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="h3_social_media">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
          </svg>
           شبکه های اجتماعی 
           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
          </svg>
          </h3>
        <ul class="wrapper">
          <li class="icon linkedin">
              <span class="tooltip">لینکدین</span>
              <span><i class="fab fa-linkedin"></i></span>
          </li>
  
          <li class="icon twitter">
              <span class="tooltip">ایکس (توییتر)</span>
              <span><i class="fab fa-twitter"></i></span>
          </li>
  
          <li class="icon instagram">
              <span class="tooltip">اینستاگرام</span>
              <span><i class="fab fa-instagram"></i></span>
          </li>
  
          <li class="icon telegram">
              <span class="tooltip">تلگرام</span>
              <span><i class="fab fa-telegram"></i></span>
          </li>

          <li class="icon github">
            <span class="tooltip">گیت هاب</span>
            <span><i class="fab fa-github"></i></span>
        </li>
      </ul>
      </div>
      <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d404.9354152344423!2d51.3151146!3d35.7143302!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dfde0733908b5%3A0xa4487d3ee8a1ce65!2z2LTYqtin2KjigIzYr9mH2YbYr9mHINmG2YjYotmI2LHbjOKAjNmH2KfbjCDYotmF2YjYsti024wg2LPYsdii2YXYrw!5e0!3m2!1sen!2snl!4v1721492001872!5m2!1sen!2snl" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        class="iframe_map"
        >
        </iframe>
      </div>
      <div class="col col_info">
        <h5 class="h5_email"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
          </svg>
          ایمیل: <span><a href="mailto:soheilbabaee@gmail.com">soheilbabaee@gmail.com</a></span> </h5>
        <h5 class="h5_phone">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg>
          تلفن همراه : <span><a href="tel:09104114596">09104114596</a></span></h5>
          <h6 class="h6_address"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
              <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
            </svg>
            آدرس محل کار:تهران، شهرک اکباتان، پردیس دانشگاه شهید بهشتی، مرکز نوآوری اکباتان</h6>
      </div>
    </div>
  </div>        
  <!-- footer -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="js/app-contactMe.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
    </html>