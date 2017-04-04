<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'VN4U OPTION',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'vn4u-fw',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'VN4U OPTION <small>edit VN4U TEAM</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'overwiew',
  'title'       => 'Cài đặt chung',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    
    // end: a field

   
     array(
          'id'        => 'logo_des',
          'type'      => 'image',
          'title'     => 'Logo',
          'desc'  => 'Chọn logo cho website',
          'help'      => 'This option field is useful. You will love it!',
        ),
    array(
      'id'      => 'phone_number',
      'type'    => 'text',
      'title'   => 'Số Điện Thoại',
      'desc'    => 'Nhập số điện thoại',
    ),
    array(
      'id'      => 'email',
      'type'    => 'text',
      'title'   => 'Email',
      'desc'    => 'Nhập Email',
    ),
    array(
      'id'      => 'skype',
      'type'    => 'text',
      'title'   => 'Skype',
      'desc'    => 'Nhập Skype',
    ),

     array(
          'id'       => 'diachi',
          'type'     => 'wysiwyg',
          'title'    => 'Địa chỉ',
          'desc'    => 'Mời nhập địa chỉ',
        ),
   
  ), // end: fields
);


// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------

// ----------------------------------------
// a option section for options overview  -\

// ----------------------------------------
$options[]      = array(
  'name'        => 'socialview',
  'title'       => 'Mạng xã hội',
  'icon'        => 'fa fa-globe',

  // begin: fields
  'fields'      => array(

    // begin: a field
     array(
      'id'      => 'link_fb',
      'type'    => 'text',
      'title'   => 'Link Facebook',
      'desc'    => 'Nhập link Facebook',
      'attributes'    => array(
            'placeholder' => 'https://facebook.com/xxxxxx'
          )
    ),
       array(
      'id'      => 'link_fb2',
      'type'    => 'text',
      'title'   => 'Link Facebook 2',
      'desc'    => 'Nhập link Facebook 2',
      'attributes'    => array(
            'placeholder' => 'https://facebook.com/xxxxxx'
          )
    ),

         array(
      'id'      => 'link_fb3',
      'type'    => 'text',
      'title'   => 'Link Facebook 3',
      'desc'    => 'Nhập link Facebook 3',
      'attributes'    => array(
            'placeholder' => 'https://facebook.com/xxxxxx'
          )
    ),

     array(
      'id'      => 'link_gg',
      'type'    => 'text',
      'title'   => 'Link G+',
      'desc'    => 'Nhập link g+',
      'attributes'    => array(
            'placeholder' => 'Nhập G+'
          )
    ),
     array(
      'id'      => 'link_tw',
      'type'    => 'text',
      'title'   => 'Link Twitter',
      'desc'    => 'Nhập link Twitter',
      'attributes'    => array(
            'placeholder' => 'Nhập Twitter'
          )
    ),
     array(
      'id'      => 'link_yt',
      'type'    => 'text',
      'title'   => 'Link Youtube',
      'desc'    => 'Nhập link Youtube',
      'attributes'    => array(
            'placeholder' => 'Nhập Youtube'
          )
    ),
  ), // end: fields
);


//----------------------------------------

                                            //Chon Banner

//----------------------------------------
$options[] = array(
   'name' => 'banner',
   'title' =>'Chọn Ảnh Banner',
   'icon' => 'fa fa-image',
   'fields' => array(

    array(
        'id' =>'box_banner',
        'type' =>'fieldset',
        'title' => 'Box Banner',

        'fields' => array(
          array(
            'id' =>'img_banner',
            'type' =>'image',
            'title' => 'chọn ảnh',
            ),
       

            
          ),
        ),

    ),//end-field
  );





//----------------------------------------

//hotline

//----------------------------------------
$options[] = array(
   'name' => 'hotline',
   'title' =>'Nhập Hotline',
   'icon' => 'fa fa-phone',
   'fields' => array(

    array(
        'id' =>'box_hotline',
        'type' =>'fieldset',
        'title' => 'Box Hotline',

        'fields' => array(
          array(
            'id' =>'box_sdt',
            'type' =>'text',
            'title' => 'Nhập Hotline',
            ),
       

            
          ),
        ),

    ),//end-field
  );

//----------------------------------------

                                            //Video 

//----------------------------------------
$options[] = array(
   'name' => 'videoindex',
   'title' =>'Nhập Video Index',
   'icon' => 'fa fa-youtube',
   'fields' => array(

    array(
        'id' =>'box_video1',
        'type' =>'fieldset',
        'title' => 'Box video 1',

        'fields' => array(
          array(
            'id' =>'tieu_de',
            'type' =>'text',
            'title' => 'Nhập tiêu đề',
            ),
           array(
            'id' =>'noi_dung',
            'type' =>'wysiwyg',
            'title' => 'Nhập nội dung',
            ),
           array(
            'id' =>'video',
            'type' =>'text',
            'title' => 'Link Youtube',
            'desc'    => 'Nhập Iframe Youtube',
           
            ),
          ),
        ),

     array(
        'id' =>'box_video2',
        'type' =>'fieldset',
        'title' => 'Box video 2',

        'fields' => array(
          array(
            'id' =>'tieu_de2',
            'type' =>'text',
            'title' => 'Nhập tiêu đề 2',
            ),
           array(
            'id' =>'noi_dung2',
            'type' =>'wysiwyg',
            'title' => 'Nhập nội dung 2',
            ),
           array(
            'id' =>'video2',
            'type' =>'text',
            'title' => 'Link Youtube 2',
            'desc'    => 'Nhập Iframe Youtube',
           
            ),
          ),
        ),

      array(
        'id' =>'box_video3',
        'type' =>'fieldset',
        'title' => 'Box video 3',

        'fields' => array(
          array(
            'id' =>'tieu_de3',
            'type' =>'text',
            'title' => 'Nhập tiêu đề 3',
            ),
           array(
            'id' =>'noi_dung3',
            'type' =>'wysiwyg',
            'title' => 'Nhập nội dung 3',
            ),
           array(
            'id' =>'video3',
            'type' =>'text',
            'title' => 'Link Youtube 3',
            'desc'    => 'Nhập Iframe Youtube',
           
            ),
          ),
        ),

       array(
        'id' =>'box_video4',
        'type' =>'fieldset',
        'title' => 'Box video 4',

        'fields' => array(
          array(
            'id' =>'tieu_de4',
            'type' =>'text',
            'title' => 'Nhập tiêu đề 4',
            ),
           array(
            'id' =>'noi_dung4',
            'type' =>'wysiwyg',
            'title' => 'Nhập nội dung 4',
            ),
           array(
            'id' =>'video4',
            'type' =>'text',
            'title' => 'Link Youtube 4',
            'desc'    => 'Nhập Iframe Youtube',
          
            ),
          ),
        ),


    ),//end-field
  );



// ------------------------------
// a option section with tabs   -
// ------------------------------


CSFramework::instance( $settings, $options );
