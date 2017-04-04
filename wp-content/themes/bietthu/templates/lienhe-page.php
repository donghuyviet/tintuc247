<?php
/*
    Template Name: Liên Hệ page


*/
    ?>
    
    <?php get_header(); ?>
  

<?php
// assumes $to, $subject, $message have already been defined earlier...
 
 $hoten = $_POST['name'];
 $diachi = $_POST['address'];
 $dt = $_POST['phone'];
 $email = $_POST['email'];
 $message = $_POST['comments'];


$to = 'phkhaikk@gmail.com';
$subject = 'angia';
$body = 'zzzz';
$headers = array('Content-Type: text/html; charset=UTF-8');
 
wp_mail( $to, $subject,$body,  $headers );
?>



    <!--CONTAINER-->
    <div class="container">
        
        <!--CENTER-->
        <div class="center" style="opacity:1">
            <div class="googlemap">
                <div class="zoom-control">
                    <a href="#" id="zoom-in">+</a>
                    <a href="#" id="zoom-out">-</a>
                </div>
                <div id="map-canvas"></div>
            </div>
            <h2 class="lh">Liên hệ</h2>
            <div class="contact-box">
                <div class="contact-info">
                    <h3><?php $tt = cs_get_option("form_tt"); echo $tt['tt_contact'] ;?></h3>
                   <?php $ttd = cs_get_option("form_tt"); echo $ttd['nd_contact'] ;?>
                </div>
                <div class="contact-form">
                   <form onSubmit="return validatecontact();" id="frm_contact" name="frm_contact" method="post" enctype="multipart/form-data">
                        <div class="require-col">
                            <div class="input-text">
                                <input name="name" placeholder="Họ Tên (*)" id="name" type="text" />
                            </div>
                            <div class="input-text">
                                <input name="address" placeholder="Địa Chỉ" id="address" type="text" />
                            </div>
                            <div class="input-text">
                                <input name="phone" placeholder="Điện Thoại (*)" id="phone" type="text" />
                            </div>
                            <div class="input-text">
                                <input name="email" placeholder="Email (*)" id="email" type="text" />
                            </div>
                            <div class="input-area">
                                <textarea id="comments" name="comments" placeholder="Ý Kiến (*)"></textarea>
                            </div>
                            <div class="input-but">
                                <input id="btn-contact-submit" type="submit" value="GỬI" />

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--CENTER-->

        <!--BOTTOM-->
       

        <!--BOTTOM-->


   <?php get_footer(); ?>