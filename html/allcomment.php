<!DOCTYPE html>
<?php session_start();?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>輔大課程評價系統-所有評價</title>

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
            <li class="menu-item  ">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">首頁</div>
              </a>
            </li>

             <!--所有評價 -->
             <li class="menu-item active">
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
              <a href="alertlogin.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Layouts">新增評價</div>
              </a>
            </li>
                           <?php }?>
           

            <?php
            if(isset($_SESSION["Ismanager"])){?>
             <!-- 我的收藏 -->
             <li class="menu-item">
              <a href="usercollect.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-heart"></i>
                <div data-i18n="Layouts">我的收藏</div>
              </a>
            </li><?php }
            else{ ?> 
            <li class="menu-item">
              <a href="alertlogin.php" class="menu-link">
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
                  <a href="allcomment.php?searchtxt=自然領域" class="menu-link">自然領域</a>  
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=人文領域" class="menu-link">人文領域</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=社會領域" class="menu-link">社會領域</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=外國語文" class="menu-link">外國語文</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=體育" class="menu-link">體育</a>
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
                  <a href="allcomment.php?searchtxt=國文" class="menu-link">國文</a>  
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=軍訓" class="menu-link">軍訓</a>
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
                  <a href="allcomment.php?searchtxt=中國文學系" class="menu-link">中國文學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=歷史學系" class="menu-link">歷史學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=哲學系" class="menu-link">哲學系</a>
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
                  <a href="allcomment.php?searchtxt=音樂學系" class="menu-link">音樂學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=應用美術學系" class="menu-link">應用美術學系</a>
                </li>
                
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=景觀設計學系" class="menu-link">景觀設計學系</a>
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
                  <a href="allcomment.php?searchtxt=影像傳播學系" class="menu-link">影像傳播學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=新聞傳播學系" class="menu-link">新聞傳播學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=廣告傳播學系" class="menu-link">廣告傳播學系</a>
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
                  <a href="allcomment.php?searchtxt=體育學系" class="menu-link">體育學系</a>
                </li>
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=圖書資訊學系" class="menu-link">圖書資訊學系</a>
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
                  <a href="allcomment.php?searchtxt=醫學系" class="menu-link">醫學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=護理學系" class="menu-link">護理學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=公共衛生學系" class="menu-link">公共衛生學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=臨床心理學系" class="menu-link">臨床心理學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=職能治療學系" class="menu-link">職能治療學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=呼吸治療學系" class="menu-link">呼吸治療學系</a>
                </li>

              </ul>
            </li>


            <!-- 理工學院 -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>理工學院
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=數學系" class="menu-link">數學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=物理學系" class="menu-link">物理學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=化學系" class="menu-link">化學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=生命科學系" class="menu-link">生命科學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=資訊工程系" class="menu-link">資訊工程系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=電機工程系" class="menu-link">電機工程系</a>
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
                  <a href="allcomment.php?searchtxt=英國語文學系" class="menu-link">英國語文學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=德語語文學系" class="menu-link">德語語文學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=法國語文學系" class="menu-link">法國語文學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=西班牙語文學系" class="menu-link">西班牙語文學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=日本語文學系" class="menu-link">日本語文學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=義大利語文學系" class="menu-link">義大利語文學系</a>
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
                  <a href="allcomment.php?searchtxt=兒童與家庭學系" class="menu-link">兒童與家庭學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=餐旅管理學系" class="menu-link">餐旅管理學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=食品科學系" class="menu-link">食品科學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=營養科學系" class="menu-link">營養科學系</a>
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
                  <a href="allcomment.php?searchtxt=法律系" class="menu-link">法律學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=財經法律學系" class="menu-link">財經法律學系</a>
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
                  <a href="allcomment.php?searchtxt=社會系" class="menu-link">社會系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=社會工作學系" class="menu-link">社會工作學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=經濟學系" class="menu-link">經濟學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=宗教學系" class="menu-link">宗教學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=心理學系" class="menu-link">心理學系</a>
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
                  <a href="allcomment.php?searchtxt=織品服裝學系" class="menu-link">織品服裝學系</a>
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
                  <a href="allcomment.php?searchtxt=企業管理學系" class="menu-link">企業管理學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=會計學系" class="menu-link">會計學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=統計資訊學系" class="menu-link">統計資訊學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=金融與國際企業學系" class="menu-link">金融與國際企業學系 </a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=資訊管理學系" class="menu-link">資訊管理學系</a>
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
                  <a href="allcomment.php?searchtxt=中國文學系" class="menu-link">中國文學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=歷史學系" class="menu-link">歷史學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=哲學系" class="menu-link">哲學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=應用美術學系" class="menu-link">應用美術學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=圖書資訊學系" class="menu-link">圖書資訊學系</a>
               </li>

               <li class="menu-item">
                  <a href="allcomment.php?searchtxt=英國語文學系" class="menu-link">英國語文學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=日本語文學系" class="menu-link">日本語文學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=餐旅管理學系" class="menu-link">餐旅管理學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=法律學系" class="menu-link">法律學系</a>
                </li>

                <li class="menu-item">
                  <a href="allcomment.php?searchtxt=經濟學系" class="menu-link">經濟學系</a>
               </li>

               <li class="menu-item">
                  <a href="allcomment.php?searchtxt=宗教學系" class="menu-link">宗教學系</a>
               </li>

              </ul>
              </li>

            
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
                    <div class="avatar avatar">
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
                    <div class="card">

                      <section>
                        <div class="container "><br/>
                        <h3>課程評價</h3><br>
                        <table id="allcomment" class="table table-hover display" cellspacing="0">
                        <thead>
                          <tr width="1000px" white-space="nowrap" align=center>
                            <th>開課學院</th>
                            <th>開課系所</th>
                            <th>課程名稱</th>
                            <th>選別</th>
                            <th>授課教授</th>
                            <th>收藏</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $searchtxt=$_GET["searchtxt"];
                      
                          $link=mysqli_connect("localhost","root","12345678","sa");
                          
                          if(isset($searchtxt))
                            {
                              $sql="select * from comment where comment_course like '%$searchtxt%' or comment_teacher like '%$searchtxt%' or comment_dept like '%$searchtxt%' group by course_id order by comment_course";
                            }
                          else
                            {
                              $sql="select * from comment group by course_id order by comment_course";
                            
                          }
                              
                        $rs=mysqli_query($link,$sql);
                        while($record=mysqli_fetch_row($rs)){
                        ?>
                          <tr align=center>

                            <td><?php echo $record[1];?></td>
                            <td><?php echo $record[2];?></td>
                            <td><a href = "course.php?course_id=<?php echo $record[14];?>"><?php echo $record[3];?></td>
                            <td><?php echo $record[4];?></td>
                            <td><?php echo $record[5];?></td>
                            
                            <!-- 收藏-->
                            <?php
                            if(isset($_SESSION["Ismanager"])){?>
                            <td><a href="collect.php?course_id=<?php echo $record[14];?>&email=<?php echo $_SESSION["Email"]?>">        
                            <img
                                src="../assets/img/icons/unicons/heart.png"  
                                alt="chart success"
                                class="rounded"
                                width="20" height="20"
                              />
                            </a></td><?php }
                            else{?>
                             <td><a href="alertlogin.php?course_id=<?php echo $record[14];?>&email=<?php echo $_SESSION["Email"]?>">
                           <img
                               src="../assets/img/icons/unicons/heart.png"  
                               alt="chart success"
                               class="rounded"
                               width="20" height="20"
                             />
                           </a></td> <?php }?>
                          </tr>
                         <?php }?>
        

                        

                        </tbody>
                      </table>
                      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
                      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                      <script type="text/javascript" class="init">
                      $(document).ready(function() {
                      $('#example').DataTable( {
                      "bPaginate":true,
                      "info":	true,
                      "searching":true} );
                    } );
                      </script>
                      </div>
                      </section>

                        </div>
                    
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
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
