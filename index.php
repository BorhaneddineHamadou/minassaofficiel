<?php
include_once("include/config.php");
include_once("include/function.php");
session_start();
$sel_setting=mysqli_query($conn,"SELECT * FROM `setting`");
$setting=mysqli_fetch_assoc($sel_setting);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" >

    <title><?php echo $setting['site_name'] ; ?></title>
  </head>
  <body>
        <!--Start First Header-->
        <div class="first-header">
          <div class="container">
            <ul class="icons float-right classic-list">
              <a target="_blank" href="<?php echo $setting['facebook'] ; ?>"><li><img src="images/facebook.png" alt="facebook" class="responsive-image"></li></a>
              <a target="_blank" href="<?php echo $setting['google'] ; ?>"><li class="hidden-xs"><img src="images/gmail.png" alt="gmail" class="responsive-image"></li></a>
              <a target="_blank" href="<?php echo $setting['instagram'] ; ?>"><li><img src="images/instagram.png" alt="instagram" class="responsive-image"></li></a>
              <a target="_blank" href="<?php echo $setting['linkedin'] ; ?>"><li><img src="images/linkedin.png" alt="linkedin" class="responsive-image"></li></a>
              <a target="_blank" href="<?php echo $setting['twitter'] ; ?>"><li class="hidden-xs"><img src="images/twitter.png" alt="twitter" class="responsive-image"></li></a>
            </ul>
           <div class="sign float-left">
             <a href="sign-up.php"><span>التسجيل</span></a>
             <a href="sign-in.php"><span>تسجيل الدخول</span></a>
           </div>
          </div>
          <div class="clearfix"> </div>
        </div>

        <!--End First Header-->

        <!--Start Logo-->
             <div class="container">
               <div class="logo float-right">
                  <img src="<?php echo $setting['logo'] ; ?>" alt="logo" class="responsive-image">
             </div>
             <div class="drop float-left">
               <img src="images/menu.png" class="menu responsive-image">
             </div>
           </div>
        <!--End Logo-->
        <!--Start Tabs-->
       <div class="tabs">
         <div class="container">
           <ul class="classic-list tab-list float-right">
             <li data-class="main" class="selected">الرئيسية</li>
             <li data-class="services">الخدمات</li>
             <li class="myforma" data-class="formations">الدورات</li>
             <li class="mytext" data-class="skills">المقالات</li>
             <li data-class="companies">شركاؤنا</li>
             <li data-class="contact">تواصل معنا</li>
           </ul>
       </div>
     </div>
     <div class="contents">
         <div class="main">
           <div class="header">
             <div class="overlay">
               <div class="container">
                 <?php
                   echo '
                   <div class="saying1 text-center">
                     <span class="part1">'.$setting['saying1'].'</span>
                     <span class="part2">'.$setting['saying1_part2'].'</span>
                     <span class="part3">'.$setting['saying1_part3'].'</span>
                   </div>
                   <div class="saying2 text-center">
                     <span class="part1">'.$setting['saying2'].'</span>
                     <span class="part2">'.$setting['saying2_part2'].'</span>
                     <span class="part3">'.$setting['saying2_part3'].'</span>
                   </div>
                   <div class="saying3 text-center">
                     <span class="part1">'.$setting['saying3'].'</span>
                     <span class="part2">'.$setting['saying3_part2'].'</span>
                     <span class="part3">'.$setting['saying3_part3'].'</span>
                   </div>
                   <div class="saying4 text-center">
                     <span class="part1">'.$setting['saying4'].'</span>
                     <span class="part2">'.$setting['saying4_part2'].'</span>
                     <span class="part3">'.$setting['saying4_part3'].'</span>
                   </div>
                   ';
                  ?>
               </div>
             </div>
           </div>
           <div class="head">
             <div class="container">
               <section class="text-center">
                 <span class="h1">اخر الدورات</span>
               </section>
               <div class="fs">
                 <?php
                    $frm=mysqli_query($conn,"SELECT * FROM `formations` WHERE `forma_state`='published' ORDER BY `id` DESC LIMIT 4 ");
                    $num=1;
                    while ($forma=mysqli_fetch_assoc($frm)){
                       echo '
                       <a target="_blank" href="show_forma.php?id='.$forma['id'].'">
                       <div class="fm float-right" data-class="f'.$num.'">
                           <h2 class="h2">'.$forma['forma_title'].'</h2>
                           <section>
                             <img src="'.$forma['forma_image'].'" alt="" style="width:100px;height:100px ;margin-left:2%;opacity:.7" class="float-right ">
                             <img src="images/video.png" class="video_image f'.$num.'">
                             <p class="responsive-paragraphe" style="font-size:18px;text-align:right;">'.$forma['about_forma'].'</p>
                           </section>
                       </div>
                       </a>
                       ';
                       $num++;
                     }
                  ?>
                <div class="clearfix"></div>
                <hr style="width:90%;margin-left:5%">
               </div>
               <div class="text-center buf">
                 <span class="button forma_button" data-class="formations">شاهد كل الدورات</span>
               </div>
             </div>
           </div>
           <!--Start services in main function-->
           <div class="servic">
             <div class="container">
               <div class="th1 text-center">
                 <span class="h1">خدماتنا</span>
               </div>
               <section class="one-serv float-right education">
                 <div class="serv text-center">
                   <section style="width:200px;height:200px;border-radius:50%;border:1px solid #483219e3;padding:20px;" class="img">
                     <img src="images/education.png" style="width:150px;height:150px;" alt="service" class="responsive-image">
                   </section>
                    <h2 class="h2">الدورات التدريبية</h2>
                 </div>
              </section>
              <section class="one-serv float-right formation">
                <div class="serv text-center">
                  <section style="width:200px;height:200px;border-radius:50%;border:1px solid #483219e3;padding:20px;" class="img">
                    <img src="images/formation.png" style="width:150px;height:150px;" alt="service" class="responsive-image">
                  </section>
                   <h2 class="h2">تدريب المدربين</h2>
                </div>
             </section>
             <section class="one-serv float-right guidance">
               <div class="serv text-center">
                 <section style="width:200px;height:200px;border-radius:50%;border:1px solid #483219e3;padding:28px;" class="img">
                   <img src="images/guidance.png" style="width:150px;height:150px;" alt="service" class="responsive-image">
                 </section>
                  <h2 class="h2">الارشاد الشخصي</h2>
               </div>
            </section>
        </div>
        <div class="clearfix"></div>
    </div>
        <!--End services in main function-->
           <div class="modawana text-center">
             <div class="container">
              <div class="th1">
               <span class="h1">مقالات</span>
             </div>
             <?php
             $sel_text=mysqli_query($conn,"SELECT * FROM `texts` WHERE `state`='published' ORDER BY `text_id` DESC LIMIT 4 ");
             $num=1;
             while ($text = mysqli_fetch_assoc($sel_text)) {
               $sel_author=mysqli_query($conn,"SELECT * FROM `users` WHERE `user_id`= '$text[author]'");
               $author_def=mysqli_fetch_assoc($sel_author);
               $author=$author_def['user_name'];
               echo '
               <section class="text float-right">
                 <div class="image float-right">
                   <img src="'.$text['image'].'" alt="modawana" class="responsive-image">
                 </div>
                 <div class="th2 float-left">
                   <h2 class="h2">'.$text['title'].'</h2>
                   <p class="responsive-paragraphe cuspar">:الكاتب</p>
                   <p class="responsive-paragraphe">'.$author.'</p>
                   <a target="_blank" href="text.php?id='.$text['text_id'].'"><span class="morespan">اقرأ المقال</span></a>
                 </div>
               </section>
               ';
             }
              ?>
               <div class="text-center buf">
                 <span class="button text_bottom" data-class="skills">شاهد باقي المقالات</span>
               </div>
             </div>
           </div>

        <div class="about">
          <div class="container">
            <div class="about-us">
              <div class="th1 text-center">
                <span class="h1">حول الأستاذ</span>
              </div>
              <div class="about-prof float-right">
                <?php
                  $select_about=mysqli_query($conn,"SELECT `about` FROM `about_admin`");
                  $about=mysqli_fetch_assoc($select_about);
                 ?>
                  <span><?php echo $about['about']; ?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <!--Start Footer-->
        <div class="footer">
          <div class="container">
              <div class="image float-right">
                <img src="<?php echo $setting['logo'] ; ?>" alt="logo" class="responsive-image float-right">
              </div>
              <div class="icons float-right">
                <ul class=" classic-list float-right">
                  <a target="_blank" href="<?php echo $setting['facebook'] ; ?>"><li><img src="images/facebook-footer.png" alt="facebook" class="responsive-image"></li></a>
                  <a target="_blank" href="<?php echo $setting['google'] ; ?>"><li class=""><img src="images/mail-footer.png" alt="gmail" class="responsive-image"></li></a>
                  <a target="_blank" href="<?php echo $setting['instagram'] ; ?>"><li><img src="images/instagramme-footer.png" alt="instagram" class="responsive-image"></li></a>
                  <a target="_blank" href="<?php echo $setting['linkedin'] ; ?>"><li><img src="images/linkdin-footer.png" alt="linkedin" class="responsive-image"></li></a>
                  <a target="_blank" href="<?php echo $setting['twitter'] ; ?>"><li class=""><img src="images/twitter-footer.png" alt="twitter" class="responsive-image"></li></a>
                </ul>
            </div>
            <div class="clearfix"></div>
              <div class="footer-span">
                  <span>تواصل معنا</span>
                  <img src="images/phone.png" alt="phone" class="responsive-image">
              </div>
              <div class="text-center copie">
                   <span>جميع الحقوق محفوظة</span>
              </div>
            <div class="clearfix"> </div>
          </div>
        </div>
        <!--End Footer-->
         </div>
         <div class="services">
           <div class="container">
             <section class="text-center">
               <span class="h1 text-center">خدماتنا</span>
               <p class="text-center" style="color:blue">الرئيسية>>الخدمات</p>
             </section>
             <section class="one-serv float-right education">
               <div class="serv text-center">
                 <section style="width:200px;height:200px;border-radius:50%;border:1px solid #483219e3;padding:20px;" class="img">
                   <img src="images/education.png" style="width:150px;height:150px;" alt="service" class="responsive-image">
                 </section>
                  <h2 class="h2">الدورات التدريبية</h2>
               </div>
            </section>
            <section class="one-serv float-right formation">
              <div class="serv text-center">
                <section style="width:200px;height:200px;border-radius:50%;border:1px solid #483219e3;padding:20px;" class="img">
                  <img src="images/formation.png" style="width:150px;height:150px;" alt="service" class="responsive-image">
                </section>
                 <h2 class="h2">تدريب المدربين</h2>
              </div>
           </section>
           <section class="one-serv float-right guidance">
             <div class="serv text-center">
               <section style="width:200px;height:200px;border-radius:50%;border:1px solid #483219e3;padding:28px;" class="img">
                 <img src="images/guidance.png" style="width:150px;height:150px;" alt="service" class="responsive-image">
               </section>
                <h2 class="h2" style="text-align:center;">الارشاد الشخصي</h2>
             </div>
          </section>
               <div class="clearfix">

               </div>

           </div>
           <?php
            include_once("include/footer.php");
           ?>
         </div>
         <div class="formations">
           <div class="container">
             <section class="text-center">
               <span class="h1">الدورات التدريبية</span>
             </section>
             <div class="fs">
               <?php
                  $frm=mysqli_query($conn,"SELECT * FROM `formations` WHERE `forma_state`='published' ORDER BY `id` DESC");
                  $num=1;
                  while ($forma=mysqli_fetch_assoc($frm)){
                     echo '
                     <a target="_blank" href="show_forma.php?id='.$forma['id'].'">
                     <div class="fm float-right" data-class="f'.$num.'">
                         <h2 class="h2">'.$forma['forma_title'].'</h2>
                         <section>
                           <img src="'.$forma['forma_image'].'" alt="" style="width:100px;height:100px ;margin-left:2%;opacity:.7" class="float-right ">
                           <img src="images/video.png" class="video_image f'.$num.'">
                           <p class="responsive-paragraphe" style="font-size:18px;text-align:right;">'.$forma['about_forma'].'</p>
                         </section>
                     </div>
                     </a>
                     ';
                     $num++;
                   }
                ?>
              <div class="clearfix"></div>
              <hr style="width:90%;margin-left:5%">
             </div>
           </div>
           <!--Start Footer-->
           <div class="footer">
             <div class="container">
                 <div class="image float-right">
                   <img src="<?php echo $setting['logo'] ; ?>" alt="logo" class="responsive-image float-right">
                 </div>
                 <div class="icons float-right">
                   <ul class=" classic-list float-right">
                     <a target="_blank" href="<?php echo $setting['facebook'] ; ?>"><li><img src="images/facebook-footer.png" alt="facebook" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['google'] ; ?>"><li class=""><img src="images/mail-footer.png" alt="gmail" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['instagram'] ; ?>"><li><img src="images/instagramme-footer.png" alt="instagram" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['linkedin'] ; ?>"><li><img src="images/linkdin-footer.png" alt="linkedin" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['twitter'] ; ?>"><li class=""><img src="images/twitter-footer.png" alt="twitter" class="responsive-image"></li></a>
                   </ul>
               </div>
               <div class="clearfix"></div>
                 <div class="footer-span">
                     <span>تواصل معنا</span>
                     <img src="images/phone.png" alt="phone" class="responsive-image">
                 </div>
                 <div class="text-center copie">
                      <span>جميع الحقوق محفوظة</span>
                 </div>
               <div class="clearfix"> </div>
             </div>
           </div>
           <!--End Footer-->
         </div>
         <div class="skills" id="ma9alat">
           <div class="container">
             <section class="text-center">
               <span class="h1">المقالات</span>
               <p style="color:blue">الرئيسية>>المقالات</p>
             </section>
             <?php
             $sel_text=mysqli_query($conn,"SELECT * FROM `texts` WHERE `state`='published' ORDER BY `text_id` DESC");
             $num=1;
             while ($text = mysqli_fetch_assoc($sel_text)) {
               $sel_author=mysqli_query($conn,"SELECT * FROM `users` WHERE `user_id`= '$text[author]'");
               $author_def=mysqli_fetch_assoc($sel_author);
               $author=$author_def['user_name'];
               echo '
               <section class="text float-right">
                 <div class="image float-right">
                   <img src="'.$text['image'].'" alt="modawana" class="responsive-image">
                 </div>
                 <div class="th2 float-left">
                   <h2 class="h2">'.$text['title'].'</h2>
                   <p class="responsive-paragraphe cuspar">:الكاتب</p>
                   <p class="responsive-paragraphe">'.$author.'</p>
                   <a target="_blank" href="text.php?id='.$text['text_id'].'"><span class="morespan">اقرأ المقال</span></a>
                 </div>
               </section>
               ';
             }
              ?>
             <section class="clearfix"></section>
           </div>
           <!--Start Footer-->
           <div class="footer">
             <div class="container">
                 <div class="image float-right">
                   <img src="<?php echo $setting['logo'] ; ?>" alt="logo" class="responsive-image float-right">
                 </div>
                 <div class="icons float-right">
                   <ul class=" classic-list float-right">
                     <a target="_blank" href="<?php echo $setting['facebook'] ; ?>"><li><img src="images/facebook-footer.png" alt="facebook" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['google'] ; ?>"><li class=""><img src="images/mail-footer.png" alt="gmail" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['instagram'] ; ?>"><li><img src="images/instagramme-footer.png" alt="instagram" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['linkedin'] ; ?>"><li><img src="images/linkdin-footer.png" alt="linkedin" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['twitter'] ; ?>"><li class=""><img src="images/twitter-footer.png" alt="twitter" class="responsive-image"></li></a>
                   </ul>
               </div>
               <div class="clearfix"></div>
                 <div class="footer-span">
                     <span>تواصل معنا</span>
                     <img src="images/phone.png" alt="phone" class="responsive-image">
                 </div>
                 <div class="text-center copie">
                      <span>جميع الحقوق محفوظة</span>
                 </div>
               <div class="clearfix"> </div>
             </div>
           </div>
           <!--End Footer-->


         </div>
         <div class="companies">
           <div class="container">
             <section class="text-center">
               <span class="h1">شركاؤنا</span>
               <p style="color:blue">الرئيسية>>شركاؤنا</p>
             </section>

             <section class="buttons float-right">
               <span class="companiespan selected compan" data-class="our">شركاؤنا</span>
               <span class="companiespan compan" data-class="why">من هو الشريك ؟</span>
             </section>
             <section class="companietabs text-center">
               <ul class="classic-list companies-list">
                 <li data-class="our" class="selected compan">شركاؤنا</li>
                 <li data-class="why" class="compan">من هو الشريك ؟</li>
               </ul>
             </section>
             <section class="companicent">
               <section class="why">
                 <span class="h2" style="margin-bottom:10px;font-size:20px">من هو الشريك ؟</span>
                 <?php
                 $sel=mysqli_query($conn,"SELECT * FROM `about_admin`");
                 $select=mysqli_fetch_assoc($sel);
                  ?>
                <span><?php echo $select['what']; ?></span>
               </section>
               <section class="our">
                 <span class="h2" style="margin-bottom:10px;font-size:20px">شركاؤنا</span>
                 <table class="table-spacing" style="direction:rtl">
                     <?php
                       $num=1;
                       $select_comp=mysqli_query($conn,"SELECT * FROM `category` ORDER BY `cate_id` DESC");
                       while($comp=mysqli_fetch_assoc($select_comp)){
                         echo '
                         '.($num % 3 == 1 ? '<tr>' : '').'
                         <td>
                           <a href="'.$comp['comp_lien'].'" target="_blank">
                           <img src="'.$comp['comp_image'].'" class="responsive-image">
                           <span class="text-center">'.$comp['comp_name'].'</span>
                           </a>
                         </td>

                         ';
                         $num++;
                       }
                      ?>
                 </table>
               </section>
             </section>
           </div>



           <!--Start Footer-->
           <div class="footer">
             <div class="container">
                 <div class="image float-right">
                   <img src="<?php echo $setting['logo'] ; ?>" alt="logo" class="responsive-image float-right">
                 </div>
                 <div class="icons float-right">
                   <ul class=" classic-list float-right">
                     <a target="_blank" href="<?php echo $setting['facebook'] ; ?>"><li><img src="images/facebook-footer.png" alt="facebook" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['google'] ; ?>"><li class=""><img src="images/mail-footer.png" alt="gmail" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['instagram'] ; ?>"><li><img src="images/instagramme-footer.png" alt="instagram" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['linkedin'] ; ?>"><li><img src="images/linkdin-footer.png" alt="linkedin" class="responsive-image"></li></a>
                     <a target="_blank" href="<?php echo $setting['twitter'] ; ?>"><li class=""><img src="images/twitter-footer.png" alt="twitter" class="responsive-image"></li></a>
                   </ul>
               </div>
               <div class="clearfix"></div>
                 <div class="footer-span">
                     <span>تواصل معنا</span>
                     <img src="images/phone.png" alt="phone" class="responsive-image">
                 </div>
                 <div class="text-center copie">
                      <span>جميع الحقوق محفوظة</span>
                 </div>
               <div class="clearfix"> </div>
             </div>
           </div>
           <!--End Footer-->
         </div>
         <div class="contact">
             <div class="container">
               <section class="text-center">
                 <span class="h1">تواصل معنا</span>
                 <p style="color:blue">الرئيسية>>تواصل معنا</p>
               </section>
               <section class="first-contact">
                 <section class="form-span">
                   <span>للاتصال بنا يرجى ملأ البيانات التالية :</span>
                 </section>
                 <form class="contact-form" action="" method="post">
                   <input type="text" name="" value="" placeholder="الاسم الكامل">
                   <input type="email" name="" value="" placeholder="البريد الالكتروني">
                   <input type="text" name="" value="" placeholder="الهاتف">
                   <input type="text" name="" value="" placeholder="الوظيفة">
                   <textarea name="name" rows="4" class="area" placeholder="موضوع الرسالة"></textarea>
                   <input type="submit" value="ارسال">
                 </form>
               </section>
               <section class="second-contact">
                 <section class="form-span">
                    <?php
                    $select_setting=mysqli_query($conn,"SELECT * FROM `setting`");
                    $setting=mysqli_fetch_assoc($select_setting);
                     ?>
                    <span>معلومات الاتصال بالأستاذ :</span>
                 </section>
                 <section class="phone-number">
                    <span>رقم الهاتف :</span>
                    <span><?php echo $setting['phone']; ?></span>
                 </section>
                 <section class="mail-count">
                    <span>البريد الالكتروني :</span>
                    <span><?php echo $setting['mail']; ?></span>
                 </section>
               </section>
             </div>
             <!--Start Footer-->
             <div class="clearfix"> </div>
             <div class="footer">
               <div class="container">
                   <div class="image float-right">
                     <img src="<?php echo $setting['logo'] ; ?>" alt="logo" class="responsive-image float-right">
                   </div>
                   <div class="icons float-right">
                     <ul class=" classic-list float-right">
                       <a target="_blank" href="<?php echo $setting['facebook'] ; ?>"><li><img src="images/facebook-footer.png" alt="facebook" class="responsive-image"></li></a>
                       <a target="_blank" href="<?php echo $setting['google'] ; ?>"><li class=""><img src="images/mail-footer.png" alt="gmail" class="responsive-image"></li></a>
                       <a target="_blank" href="<?php echo $setting['instagram'] ; ?>"><li><img src="images/instagramme-footer.png" alt="instagram" class="responsive-image"></li></a>
                       <a target="_blank" href="<?php echo $setting['linkedin'] ; ?>"><li><img src="images/linkdin-footer.png" alt="linkedin" class="responsive-image"></li></a>
                       <a target="_blank" href="<?php echo $setting['twitter'] ; ?>"><li class=""><img src="images/twitter-footer.png" alt="twitter" class="responsive-image"></li></a>
                     </ul>
                 </div>
                 <div class="clearfix"></div>
                   <div class="footer-span">
                       <span>تواصل معنا</span>
                       <img src="images/phone.png" alt="phone" class="responsive-image">
                   </div>
                   <div class="text-center copie">
                        <span>جميع الحقوق محفوظة</span>
                   </div>
                 <div class="clearfix"> </div>
               </div>
             </div>
             <!--End Footer-->
         </div>
     </div>
        <!--End Tabs-->
        <?php
        close_db();
        ?>
     <script src="js/jquery-1.12.4.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/form.js"></script>
  </body>
</html>
