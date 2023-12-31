<!DOCTYPE html>
<?php session_start();?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>輔大課程評價系統-課程|學分介紹</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">輔大<br>課程評價系統</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">首頁</div>
              </a>
            </li>

               <!--所有評價 -->
               <li class="menu-item ">
              <a href="allcomment.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">所有評價</div>
              </a>
            </li>

             <!-- 新增評價 -->
             <?php
            if(isset($_SESSION["Ismanager"])){?>
            <li class="menu-item ">
              <a href="agreecomment.php" class="menu-link">
                <i class="menu-icon tf-icons  bx bx-message"></i>
                <div data-i18n="Layouts">新增評價</div>
              </a>
            </li>
            <?php }
            else{ ?> <li class="menu-item">
              <a href="login-basic.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Layouts">新增評價</div>
              </a>
            </li>
                           <?php }?>
           

          
             <!-- 課程|學分介紹 -->
             <li class="menu-item active">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">學分|選課指南</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="introduce.php?searchtxt=國文" class="menu-link"><div data-i18n="Accordion">課程|學分介紹</div></a>  
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=軍訓" class="menu-link"><div data-i18n="Alerts">軍訓</div></a>
                </li>
                
              </ul>
            </li>


            <?php
            if(isset($_SESSION["Ismanager"])){?>
             <!-- 我的收藏 -->
             <li class="menu-item">
              <a href="usercollect.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-heart"></i>
                <div data-i18n="Layouts">我的收藏</div>
              </a>
            </li><?php }
            else{ ?> <li class="menu-item">
              <a href="login-basic.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Layouts">我的收藏</div>
              </a>
            </li>
                           <?php }?>

          
             
             

            
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text"><h5>課程分類</h5></span></li>

             <!-- 通識領域 -->
             <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">全人中心</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=自然領域" class="menu-link"><div data-i18n="Accordion">自然領域</div></a>  
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=人文領域" class="menu-link"><div data-i18n="Alerts">人文領域</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=社會領域" class="menu-link"><div data-i18n="Badges">社會領域</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=外國語文" class="menu-link"><div data-i18n="Alerts">外國語文</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=體育" class="menu-link"><div data-i18n="Badges">體育</div></a>
                </li>
                
              </ul>
            </li>

            
            <!--其他-->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">其他</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=國文" class="menu-link"><div data-i18n="Accordion">國文</div></a>  
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=軍訓" class="menu-link"><div data-i18n="Alerts">軍訓</div></a>
                </li>
                
              </ul>
            </li>


        

            <!-- 文學院 -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">文學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=中國文學系" class="menu-link"><div data-i18n="Accordion">中國文學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=歷史學系" class="menu-link"><div data-i18n="Alerts">歷史學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=哲學系" class="menu-link"><div data-i18n="Badges">哲學系</div></a>
                </li>
             
              </ul>
            </li>

             <!-- 藝術學院 -->
             <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">藝術學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=音樂學系" class="menu-link"><div data-i18n="Accordion">音樂學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=應用美術學系" class="menu-link"><div data-i18n="Accordion">應用美術學系</div></a>
                </li>
                
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=景觀設計學系" class="menu-link"><div data-i18n="Alerts">景觀設計學系</div></a>
                </li>
              </ul>
            </li>

            <!-- 傳播學院 -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">傳播學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=影像傳播學系" class="menu-link"><div data-i18n="Accordion">影像傳播學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=新聞傳播學系" class="menu-link"><div data-i18n="Accordion">新聞傳播學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=廣告傳播學系" class="menu-link"><div data-i18n="Alerts">廣告傳播學系</div></a>
                </li>

              </ul>
            </li>


            <!-- 教育學院 -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">教育學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=體育學系" class="menu-link"><div data-i18n="Accordion">體育學系</div></a>
                </li>
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=圖書資訊學系" class="menu-link"><div data-i18n="Accordion">圖書資訊學系</div></a>
                </li>

              </ul>
            </li>


             <!-- 醫學院 -->
             <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">醫學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=醫學系" class="menu-link"><div data-i18n="Accordion">醫學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=護理學系" class="menu-link"><div data-i18n="Alerts">護理學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=公共衛生學系" class="menu-link"><div data-i18n="Badges">公共衛生學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=臨床心理學系" class="menu-link"><div data-i18n="Badges">臨床心理學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=職能治療學系" class="menu-link"><div data-i18n="Badges">職能治療學系</div> </a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=呼吸治療學系" class="menu-link"><div data-i18n="Badges">呼吸治療學系</div></a>
                </li>

              </ul>
            </li>

            <!-- 理工學院 -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">理工學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=數學系" class="menu-link"><div data-i18n="Accordion">數學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=物理學系" class="menu-link"><div data-i18n="Alerts">物理學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=化學系" class="menu-link"><div data-i18n="Badges">化學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=生命科學系" class="menu-link"><div data-i18n="Badges">生命科學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=資訊工程系" class="menu-link"><div data-i18n="Badges">資訊工程系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=電機工程系" class="menu-link"><div data-i18n="Badges">電機工程系</div></a>
                </li>

              </ul>
            </li>

             <!-- 外語學院 -->
             <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">外語學院</div>
              </a>
              
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=英國語文學系" class="menu-link"><div data-i18n="Accordion">英國語文學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=德語語文學系" class="menu-link"><div data-i18n="Alerts">德語語文學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=法國語文學系" class="menu-link"><div data-i18n="Badges">法國語文學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=西班牙語文學系" class="menu-link"><div data-i18n="Badges">西班牙語文學系</div> </a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=日本語文學系" class="menu-link"><div data-i18n="Badges">日本語文學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=義大利語文學系" class="menu-link"><div data-i18n="Badges">義大利語文學系</div></a>
                </li>

              </ul>
            </li>

            <!-- 民生學院-->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">民生學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=兒童與家庭學系" class="menu-link"><div data-i18n="Accordion">兒童與家庭學系、所</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=餐旅管理學系" class="menu-link"> <div data-i18n="Alerts">餐旅管理學系、所</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=食品科學系" class="menu-link"><div data-i18n="Badges">食品科學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=營養科學系" class="menu-link"><div data-i18n="Badges">營養科學系</div></a>
                </li>

              </ul>
            </li>

             <!-- 法律學院-->
             <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">法律學院</div>
              </a>
              
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=法律系" class="menu-link"><div data-i18n="Accordion">法律學系、所</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=財經法律學系" class="menu-link"><div data-i18n="Alerts">財經法律學系、所</div></a>
                </li>

              </ul>
            </li>

             <!-- 社會科學學院-->
             <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">社會科學學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=社會系" class="menu-link"><div data-i18n="Accordion">社會系、所</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=社會工作學系" class="menu-link"><div data-i18n="Alerts">社會工作學系、所</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=經濟學系" class="menu-link"> <div data-i18n="Badges">經濟學系、所</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=宗教學系" class="menu-link"><div data-i18n="Badges">宗教學系、所</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=心理學系" class="menu-link"><div data-i18n="Badges">心理學系、所</div> </a>
               </li>

              </ul>
            </li>

             <!-- 織品服裝學院-->
             <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">織品服裝學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=織品服裝學系" class="menu-link"><div data-i18n="Accordion">織品服裝學系</div></a>
                </li>

              </ul>
            </li>


             <!-- 管理學院-->
             <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">管理學院</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=企業管理學系" class="menu-link"><div data-i18n="Accordion">企業管理學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=會計學系" class="menu-link"><div data-i18n="Alerts">會計學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=統計資訊學系" class="menu-link"><div data-i18n="Badges">統計資訊學系</div></a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=金融與國際企業學系" class="menu-link"><div data-i18n="Badges">金融與國際企業學系</div> </a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=資訊管理學系" class="menu-link"><div data-i18n="Badges">資訊管理學系</div></a>
               </li>

              </ul>
              </li>
              <!-- 進修部-->
             <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">進修部</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=進修部" class="menu-link"><div data-i18n="Accordion">進修部</div></a>
                </li>

              </ul>
              </li>


            <!-- Forms & Tables -->
            
            <!-- Forms -->
           
            <!-- Tables -->
            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

        
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <form action="allcomment.php?searchtxt=<?php echo $searchtxt?>" method="get">
                  <input
                    type="text"
                    name="searchtxt"
                    class="form-control border-0 shadow-none"
                    placeholder="搜尋課程名稱/授課教授"
                    aria-label="Search..."
                    autocomplete="on"
                  />
                  </div>
                 
                
                </form>
               
              </div>
              <!-- /Search -->
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-">
                      <img src="../assets/img/avatars/user.png" alt class="w-px-30 h-auto rounded-circle" />
                    </div>
                  </a>
                
                  <ul class="dropdown-menu dropdown-menu-end"> 
                    <?php if(isset($_SESSION["Ismanager"])){?>
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                  
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $_SESSION["Email"]?></span>
                           
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">登出</span>
                      </a>
                    </li>
                  </ul><?php }
                  else{ ?>
                    <li>
                    <a class="dropdown-item" href="login-basic.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">登入</span>
                    </a>
                  </li>
                  <?php }?>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
            
              <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Examples -->
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/elements/fju.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                      </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                    </div>
                    <img class="img-fluid" src="../assets/img/elements/13.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                      <a href="javascript:void(0);" class="card-link">Card link</a>
                      <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                      <img
                        class="img-fluid d-flex mx-auto my-4"
                        src="../assets/img/elements/4.jpg"
                        alt="Card image cap"
                      />
                      <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                      <a href="javascript:void(0);" class="card-link">Card link</a>
                      <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Examples -->

              <!-- Content types -->
              <h5 class="pb-1 mb-4">Content types</h5>

              <div class="row mb-5">
                <div class="col-md-6 col-lg-4">
                  <h6 class="mt-2 text-muted">Body</h6>
                  <div class="card mb-4">
                    <div class="card-body">
                      <p class="card-text">
                        This is some text within a card body. Jelly lemon drops tiramisu chocolate cake cotton candy
                        soufflé oat cake sweet roll. Sugar plum marzipan dragée topping cheesecake chocolate bar. Danish
                        muffin icing donut.
                      </p>
                    </div>
                  </div>
                  <h6 class="mt-2 text-muted">Titles, text, and links</h6>
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <div class="card-subtitle text-muted mb-3">Card subtitle</div>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                      </p>
                      <a href="javascript:void(0)" class="card-link">Card link</a>
                      <a href="javascript:void(0)" class="card-link">Another link</a>
                    </div>
                  </div>
                  <h6 class="mt-2 text-muted">List groups</h6>
                  <div class="card mb-4">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <h6 class="mt-2 text-muted">Images</h6>
                  <div class="card mb-4">
                    <img class="card-img-top" src="../assets/img/elements/5.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                      </p>
                      <p class="card-text">
                        Cookie topping caramels jujubes gingerbread. Lollipop apple pie cupcake candy canes cookie ice
                        cream. Wafer chocolate bar carrot cake jelly-o.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <h6 class="mt-2 text-muted">Kitchen sink</h6>
                  <div class="card">
                    <img class="card-img-top" src="../assets/img/elements/7.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                      <a href="javascript:void(0)" class="card-link">Card link</a>
                      <a href="javascript:void(0)" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
              </div>

              <h6 class="pb-1 mb-4 text-muted">Header and footer</h6>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card">
                    <div class="card-header">Featured</div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">
                        With supporting text below as a natural lead-in to additional content natural lead-in to
                        additional content.
                      </p>
                      <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card">
                    <h5 class="card-header">Quote</h5>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem
                          ipsum dolor sit amet, consectetur.
                        </p>
                        <footer class="blockquote-footer">
                          Someone famous in
                          <cite title="Source Title">Source Title</cite>
                        </footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card text-center">
                    <div class="card-header">Featured</div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural.</p>
                      <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">2 days ago</div>
                  </div>
                </div>
              </div>
              <!--/ Content types -->

              <!-- Text alignment -->
              <h5 class="pb-1 mb-4">Text alignment</h5>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card text-end mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Text alignment -->

              <!-- Images -->
              <h5 class="pb-1 mb-4">Images caps & overlay</h5>
              <div class="row mb-5">
                <div class="col-md-6 col-xl-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="../assets/img/elements/18.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This
                        content is a little bit longer.
                      </p>
                      <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This
                        content is a little bit longer.
                      </p>
                      <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </p>
                    </div>
                    <img class="card-img-bottom" src="../assets/img/elements/1.jpg" alt="Card image cap" />
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-dark border-0 text-white">
                    <img class="card-img" src="../assets/img/elements/11.jpg" alt="Card image" />
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This
                        content is a little bit longer.
                      </p>
                      <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Images -->

              <!-- Horizontal -->
              <h5 class="pb-1 mb-4">Horizontal</h5>
              <div class="row mb-5">
                <div class="col-md">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img class="card-img card-img-left" src="../assets/img/elements/12.jpg" alt="Card image" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                          </p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                          </p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <img class="card-img card-img-right" src="../assets/img/elements/17.jpg" alt="Card image" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Horizontal -->

              <!-- Style variation -->
              <h5 class="pb-1 mb-4">Style variation</h5>
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-primary text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">Primary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-secondary text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">Secondary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-success text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">Success card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-danger text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">Danger card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-warning text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">Warning card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-info text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">Info card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Outline -->
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="card shadow-none bg-transparent border border-primary mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Primary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card shadow-none bg-transparent border border-secondary mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Secondary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card shadow-none bg-transparent border border-success mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Success card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card shadow-none bg-transparent border border-danger mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Danger card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card shadow-none bg-transparent border border-warning mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Warning card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card shadow-none bg-transparent border border-info mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Info card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Style variation -->
                  
              <!-- / Content -->
  
              
  

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

  

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
