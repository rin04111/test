<!DOCTYPE html>
<?php if(isset($_GET['lang'])) { $lang = $_GET['lang']; } ?>
<html lang="ja">
<head>
<?php if(is_single(36253)): ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PGD89HZ');</script>
<!-- End Google Tag Manager -->
<?php endif; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<title>
<?php if( $lang === "en" ): ?>
  <?php if(is_front_page()): ?>
  Japan Sun Oil Company, Ltd.
  <?php elseif(is_home()): ?>
  Release | Japan Sun Oil Company, Ltd.
  <?php elseif(is_page()): ?>
    <?php $pageTitleEn = get_post_meta($post->ID, 'title_en', true);?>
    <?php if(empty($pageTitleEn)):?>
      <?php wp_title(''); ?> | Japan Sun Oil Company, Ltd.
    <?php else:?>
      <?php echo CFS()->get('title_en', $post->ID); ?> | Japan Sun Oil Company, Ltd.
   <?php endif;?>
  <?php elseif(is_single()): ?>
    <?php $pageTitleEn = get_post_meta($post->ID, 'title_en', true);?>
    <?php if(empty($pageTitleEn)):?>
      <?php wp_title(''); ?> | Japan Sun Oil Company, Ltd.
    <?php else:?>
      <?php echo CFS()->get('title_en', $post->ID); ?> | Japan Sun Oil Company, Ltd.
   <?php endif;?>
  <?php else: ?>
  Japan Sun Oil Company, Ltd.
  <?php endif; ?>
<?php elseif( $lang === "cn"): ?>
  <?php if(is_front_page()): ?>
  日本太阳石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(is_home()): ?>
  发布 | 日本太阳石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(is_page()): ?>
    <?php $pageTitleEn = get_post_meta($post->ID, 'title_cn', true);?>
    <?php if(empty($pageTitleEn)):?>
      <?php wp_title(''); ?> | 日本太阳石油株式会社 JAPAN SUN OIL COMPANY,LTD.
    <?php else:?>
      <?php echo CFS()->get('title_cn', $post->ID); ?> | 日本太阳石油株式会社 JAPAN SUN OIL COMPANY,LTD.
   <?php endif;?>
  <?php elseif(is_single()): ?>
    <?php $pageTitleEn = get_post_meta($post->ID, 'title_cn', true);?>
    <?php if(empty($pageTitleEn)):?>
      <?php wp_title(''); ?> | 日本太阳石油株式会社 JAPAN SUN OIL COMPANY,LTD.
    <?php else:?>
      <?php echo CFS()->get('title_cn', $post->ID); ?> | 日本太阳石油株式会社 JAPAN SUN OIL COMPANY,LTD.
   <?php endif;?>
  <?php else: ?>
  日本太阳石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php endif; ?>
<?php else: ?>
  <?php if(is_front_page()): ?>
  日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(is_home()): ?>
  リリース | 日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(is_page()): ?>
  <?php wp_title(''); ?> | 日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(is_single()): ?>
  <?php wp_title(''); ?> | 日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(is_post_type_archive('shop_brill')): ?>
  BRILLシリーズ 取扱店一覧 | 日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(is_post_type_archive('shop_redfox')): ?>
  REDFOXシリーズ 取扱店一覧 | 日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(is_post_type_archive('ms_gallery')): ?>
  モータースポーツギャラリー | 日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(is_post_type_archive('whats_oil')): ?>
  What's Oil? | 日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php elseif(get_post_type() === 'whats_oil'): ?>
  <?php wp_title(''); ?> | 日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php else: ?>
  日本サン石油株式会社 JAPAN SUN OIL COMPANY,LTD.
  <?php endif; ?>
<?php endif; ?>
</title>

<?php wp_enqueue_style('init', get_template_directory_uri(). '/css/init.css'); ?>
<?php if( $lang === "cn"): ?>
<?php wp_enqueue_style('init_cn', get_template_directory_uri(). '/css/init_cn.css'); ?>
<?php endif; ?>
<?php wp_enqueue_style('font-awesome', get_template_directory_uri(). '/font-awesome-4.7.0/css/font-awesome.min.css'); ?>
<?php wp_enqueue_style('drawer', get_template_directory_uri(). '/css/drawer.min.css'); ?>
<?php wp_enqueue_style('style', get_stylesheet_uri() . '?20230824'); ?>
<?php wp_head(); ?>
<?php wp_enqueue_script('jquery-1.11.1', get_template_directory_uri(). '/js/jquery-1.11.1.min.js'); ?>
<?php wp_enqueue_script('iscroll-lite', get_template_directory_uri(). '/js/iscroll-lite.js'); ?>
<?php wp_enqueue_script('drawer', get_template_directory_uri(). '/js/drawer.min.js'); ?>
<?php wp_enqueue_script('pagejs', get_template_directory_uri(). '/js/page.js'); ?>

<?php if(is_page() && get_field('page_mv')): ?>
<style>
.mv {
background-image: url(<?php the_field('page_mv'); ?>) !important;
background-position: center !important;
}
</style>
<?php endif; ?>
<?php if(is_page(31) && ( get_field('ppimg_ind') || get_field('ppimg_auto') ) ): ?>
<style>
<?php if(get_field('ppimg_ind')): ?>
.p01 {background-image: url(<?php the_field('ppimg_ind'); ?>) !important;}
<?php endif; ?>
<?php if(get_field('ppimg_auto')): ?>
.p02 {background-image: url(<?php the_field('ppimg_auto'); ?>) !important;}
<?php endif; ?>
</style>
<?php endif; ?>

<?php if (is_page('inquiry')) : ?>
  <script>
    if (window.location.hostname !== 'www.sunoco.co.jp') {
      window.location.href = 'https://www.sunoco.co.jp/inquiry/?lang=en';
    }
  </script>
<?php endif; ?>
<?php if (is_page('dl')) : ?>
<script>
  console.log('スクリプトが実行されました。');

  const currentUrl = window.location.href;
  console.log(`現在のURL: ${currentUrl}`);

  const redirectMap = {
    'https://www.sunoco.co.jp/dl/?fileid=474': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2237',
    'https://www.sunoco.co.jp/dl/?fileid=621': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2241',
    'https://www.sunoco.co.jp/dl/?fileid=624': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2244',
    'https://www.sunoco.co.jp/dl/?fileid=628': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2247',
    'https://www.sunoco.co.jp/dl/?fileid=640': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2259',
    'https://www.sunoco.co.jp/dl/?fileid=643': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2262',
    'https://www.sunoco.co.jp/dl/?fileid=646': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2265',
    'https://www.sunoco.co.jp/dl/?fileid=637': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2256',
    'https://www.sunoco.co.jp/dl/?fileid=2811': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2814',
    'https://www.sunoco.co.jp/dl/?fileid=4798': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2372',
    'https://www.sunoco.co.jp/dl/?fileid=8725': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=3601',
    'https://www.sunoco.co.jp/dl/?fileid=7860': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8112',
    'https://www.sunoco.co.jp/dl/?fileid=7863': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8115',
    'https://www.sunoco.co.jp/dl/?fileid=38430': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=38439',
    'https://www.sunoco.co.jp/dl/?fileid=38433': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=38442',
    'https://www.sunoco.co.jp/dl/?fileid=38436': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=38445',
    'https://www.sunoco.co.jp/dl/?fileid=7847': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8118',
    'https://www.sunoco.co.jp/dl/?fileid=7851': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8121',
    'https://www.sunoco.co.jp/dl/?fileid=7854': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8124',
    'https://www.sunoco.co.jp/dl/?fileid=7857': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8127',
    'https://www.sunoco.co.jp/dl/?fileid=18489': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=18532',
    'https://www.sunoco.co.jp/dl/?fileid=18495': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=18546',
    'https://www.sunoco.co.jp/dl/?fileid=18504': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=18540',
    'https://www.sunoco.co.jp/dl/?fileid=18512': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=18552',
    'https://www.sunoco.co.jp/dl/?fileid=7840': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8103',
    'https://www.sunoco.co.jp/dl/?fileid=8239': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8106',
    'https://www.sunoco.co.jp/dl/?fileid=7844': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8109',
    'https://www.sunoco.co.jp/dl/?fileid=46282': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8217',
    'https://www.sunoco.co.jp/dl/?fileid=46278': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8220',
    'https://www.sunoco.co.jp/dl/?fileid=46285': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8223',
    'https://www.sunoco.co.jp/dl/?fileid=8085': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8154',
    'https://www.sunoco.co.jp/dl/?fileid=8088': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8160',
    'https://www.sunoco.co.jp/dl/?fileid=8082': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8157',
    'https://www.sunoco.co.jp/dl/?fileid=8100': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8151',
    'https://www.sunoco.co.jp/dl/?fileid=7869': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8130',
    'https://www.sunoco.co.jp/dl/?fileid=7866': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8133',
    'https://www.sunoco.co.jp/dl/?fileid=7872': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8136',
    'https://www.sunoco.co.jp/dl/?fileid=7875': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=8139',
    'https://www.sunoco.co.jp/dl/?fileid=1134': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2374',
    'https://www.sunoco.co.jp/dl/?fileid=2739': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2742',
    'https://www.sunoco.co.jp/dl/?fileid=2751': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2754',
    'https://www.sunoco.co.jp/dl/?fileid=2745': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2748',
    'https://www.sunoco.co.jp/dl/?fileid=2733': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2736',
    'https://www.sunoco.co.jp/dl/?fileid=2727': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2730',
    'https://www.sunoco.co.jp/dl/?fileid=44449': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=44452',
    'https://www.sunoco.co.jp/dl/?fileid=44455': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=44458',
    'https://www.sunoco.co.jp/dl/?fileid=508': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2537',
    'https://www.sunoco.co.jp/dl/?fileid=511': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2539',
    'https://www.sunoco.co.jp/dl/?fileid=514': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2541',
    'https://www.sunoco.co.jp/dl/?fileid=517': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2545',
    'https://www.sunoco.co.jp/dl/?fileid=520': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2547',
    'https://www.sunoco.co.jp/dl/?fileid=523': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=20151',
    'https://www.sunoco.co.jp/dl/?fileid=20151': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=20131',
    'https://www.sunoco.co.jp/dl/?fileid=20131': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=20136',
    'https://www.sunoco.co.jp/dl/?fileid=526': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2549',
    'https://www.sunoco.co.jp/dl/?fileid=529': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2551',
    'https://www.sunoco.co.jp/dl/?fileid=532': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2553',
    'https://www.sunoco.co.jp/dl/?fileid=535': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=535',
    'https://www.sunoco.co.jp/dl/?fileid=538': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=538',
    'https://www.sunoco.co.jp/dl/?fileid=44446': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=44446',
    'https://www.sunoco.co.jp/dl/?fileid=541': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=20163',
    'https://www.sunoco.co.jp/dl/?fileid=20163': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=20163',
    'https://www.sunoco.co.jp/dl/?fileid=20166': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=20166',
    'https://www.sunoco.co.jp/dl/?fileid=44461': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=44461',
    'https://www.sunoco.co.jp/dl/?fileid=844': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2461',
    'https://www.sunoco.co.jp/dl/?fileid=16374': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2463',
    'https://www.sunoco.co.jp/dl/?fileid=851': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2465',
    'https://www.sunoco.co.jp/dl/?fileid=854': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2467',
    'https://www.sunoco.co.jp/dl/?fileid=857': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2469',
    'https://www.sunoco.co.jp/dl/?fileid=868': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2449',
    'https://www.sunoco.co.jp/dl/?fileid=870': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2451',
    'https://www.sunoco.co.jp/dl/?fileid=872': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2453',
    'https://www.sunoco.co.jp/dl/?fileid=874': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2455',
    'https://www.sunoco.co.jp/dl/?fileid=876': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2457',
    'https://www.sunoco.co.jp/dl/?fileid=878': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2459',
    'https://www.sunoco.co.jp/dl/?fileid=888': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2471',
    'https://www.sunoco.co.jp/dl/?fileid=890': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2485',
    'https://www.sunoco.co.jp/dl/?fileid=892': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2477',
    'https://www.sunoco.co.jp/dl/?fileid=894': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2479',
    'https://www.sunoco.co.jp/dl/?fileid=896': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2483',
    'https://www.sunoco.co.jp/dl/?fileid=898': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2473',
    'https://www.sunoco.co.jp/dl/?fileid=900': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2475',
    'https://www.sunoco.co.jp/dl/?fileid=2824': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2827',
    'https://www.sunoco.co.jp/dl/?fileid=910': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2487',
    'https://www.sunoco.co.jp/dl/?fileid=32095': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2491',
    'https://www.sunoco.co.jp/dl/?fileid=32107': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2493',
    'https://www.sunoco.co.jp/dl/?fileid=32110': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2489',
    'https://www.sunoco.co.jp/dl/?fileid=938': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2525',
    'https://www.sunoco.co.jp/dl/?fileid=942': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2527',
    'https://www.sunoco.co.jp/dl/?fileid=944': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2529',
    'https://www.sunoco.co.jp/dl/?fileid=946': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2531',
    'https://www.sunoco.co.jp/dl/?fileid=948': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2533',
    'https://www.sunoco.co.jp/dl/?fileid=950': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2535',
    'https://www.sunoco.co.jp/dl/?fileid=956': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2509',
    'https://www.sunoco.co.jp/dl/?fileid=959': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2511',
    'https://www.sunoco.co.jp/dl/?fileid=961': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2513',
    'https://www.sunoco.co.jp/dl/?fileid=963': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2515',
    'https://www.sunoco.co.jp/dl/?fileid=969': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2517',
    'https://www.sunoco.co.jp/dl/?fileid=971': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2521',
    'https://www.sunoco.co.jp/dl/?fileid=973': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2523',
    'https://www.sunoco.co.jp/dl/?fileid=979': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2495',
    'https://www.sunoco.co.jp/dl/?fileid=981': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2497',
    'https://www.sunoco.co.jp/dl/?fileid=983': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2499',
    'https://www.sunoco.co.jp/dl/?fileid=988': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2445',
    'https://www.sunoco.co.jp/dl/?fileid=990': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2447',
    'https://www.sunoco.co.jp/dl/?fileid=995': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2501',
    'https://www.sunoco.co.jp/dl/?fileid=997': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2503',
    'https://www.sunoco.co.jp/dl/?fileid=1002': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2505',
    'https://www.sunoco.co.jp/dl/?fileid=1004': 'https://www.sunoco.co.jp/dl/?lang=en&fileid=2507'
  };

  const newUrl = redirectMap[currentUrl];
  if (newUrl) {
    console.log(`リダイレクト先のURL: ${newUrl}`);
    window.location.href = newUrl;
  } else {
    console.log('対応するURLが見つかりませんでした。');
  }
</script>
<?php endif; ?>



<script>
  jQuery(function(){
    if (window.location.hostname !== 'www.sunoco.co.jp') {
      $('body').addClass('polylingual');
    }
  });
</script>
</head>
<body class="drawer drawer--right <?php echo $lang; ?>">
<?php if(is_single(36253)): ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGD89HZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>
<?php if ( is_user_logged_in() ) {global $template; $temp_name = basename($template); echo '<p style="position:fixed;font-size:12px;">template : '.$temp_name.'<br>lang : '.$lang.'</p>';} ?>
<header>
<div class="wrapper">
	<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/img_logo_sunoco_tmp.svg" alt="sunoco"><?php if( $lang === "en" ): ?><img src="<?php echo get_template_directory_uri(); ?>/images/img_name01-en.svg" alt="Japan Sun Oil Company, Ltd."><?php elseif( $lang === "cn"): ?><img src="<?php echo get_template_directory_uri(); ?>/images/img_name01-cn.svg" alt="日本太阳石油株式会社"><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/img_name01.svg" alt="日本サン石油株式会社"><?php endif; ?></a></h1>
	<div class="contact">
    <a href="<?php echo get_permalink(308); ?>">
    <?php if( $lang === "en" ): ?>
      <?php echo CFS()->get('title_en', 308); ?>
    <?php elseif( $lang === "cn"): ?>
      <?php echo CFS()->get('title_cn', 308); ?>
    <?php else: ?>
      <?php echo get_the_title(308); ?>
    <?php endif; ?>
    </a>
  </div>
	<div class="sns">
    <a href="https://www.facebook.com/pages/Sunoco-Japan/961335300556761?sk=timeline" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sns-icons/facebook.png"></a>
    <a href="https://twitter.com/Sunoco_Japan" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sns-icons/x.png"></a>
    <a href="https://www.instagram.com/sunoco_japan/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sns-icons/instagram.png"></a>
    <a href="https://www.youtube.com/user/sunocoracing" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sns-icons/youtube.png"></a>
  </div>
  <select onChange="location.href=value;" id="langselect"<?php if(is_page( 'dl' )): ?> disabled<?php endif; ?>>
  <?php
    $url=strtok($_SERVER["REQUEST_URI"],'?');
  ?>
  <?php if( $lang === "en" ): ?>
    <option value="" selected>ENG</option>
    <option value="<?php echo $url; ?>">日本語</option>
    <option value="<?php echo $url.'?lang=cn'; ?>">中文</option>
  <?php elseif( $lang === "cn"): ?>
    <option value="" selected>中文</option>
    <option value="<?php echo $url; ?>">日本語</option>
    <option value="<?php echo $url.'?lang=en'; ?>">ENG</option>
  <?php else: ?>
    <option value="" selected>日本語</option>
    <option value="<?php echo $url.'?lang=en'; ?>">ENG</option>
    <option value="<?php echo $url.'?lang=cn'; ?>">中文</option>
  <?php endif; ?>
  </select>

	<nav class="gnav-wrapper">
		<ul class="gnav main-wrapper">
			<li>
			<a href="<?php echo get_permalink(15); ?>"><span><?php if($lang==="en"):?><?php echo CFS()->get('title_en',15);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',15);?><?php else:?><?php echo get_the_title(15);?><?php endif;?></span></a>
				<div class="megamenu">
					<ul class="megamenu-inner megamenu-inner5 main-wrapper">
						<li>
							<a href="<?php echo get_permalink(17); ?>">
								<div class="megamenu-inner-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(17) ); ?>)"></div>
								<div class="megamenu-inner-text"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',17);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',17);?><?php else:?><?php echo get_the_title(17);?><?php endif;?></div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(19); ?>">
								<div class="megamenu-inner-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(19) ); ?>)"></div>
								<div class="megamenu-inner-text"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',19);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',19);?><?php else:?><?php echo get_the_title(19);?><?php endif;?></div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(21); ?>">
								<div class="megamenu-inner-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(21) ); ?>)"></div>
								<div class="megamenu-inner-text"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',21);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',21);?><?php else:?><?php echo get_the_title(21);?><?php endif;?></div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(23); ?>">
								<div class="megamenu-inner-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(23) ); ?>)"></div>
								<div class="megamenu-inner-text"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',23);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',23);?><?php else:?><?php echo get_the_title(23);?><?php endif;?></div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(25); ?>">
								<div class="megamenu-inner-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(25) ); ?>)"></div>
								<div class="megamenu-inner-text"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',25);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',25);?><?php else:?><?php echo get_the_title(25);?><?php endif;?></div>
							</a>
						</li>
					</ul><!-- .megamenu-inner -->
				</div><!-- .megamenu -->
			</li>
			<li>
				<a href="<?php echo get_permalink(31); ?>"><span><?php if($lang==="en"):?><?php echo CFS()->get('title_en',31);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',31);?><?php else:?><?php echo get_the_title(31);?><?php endif;?></span></a>
				<div class="megamenu">
					<ul class="megamenu-inner megamenu-inner2 main-wrapper megamenu-inner2add">
						<li>
							<a href="<?php echo get_permalink(35); ?>">
								<div class="megamenu-inner-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(35) ); ?>);background-position: 60% 50%;"></div>
								<div class="megamenu-inner-text megamenu-inner-text_add202107"><?php if($lang==="en"):?><span>SUNISO<sup>®</sup> &amp; Sunice<sup>®</sup></span> <span>REFRIGERATION OILS</span><?php elseif($lang==="cn"):?><span>SUNISO<sup>®</sup> &amp; Sunice<sup>®</sup></span> <span>冷冻机油</span><?php else:?><span>SUNISO<sup>®</sup> &amp; Sunice<sup>®</sup></span> <span>冷凍機油</span><?php endif;?></div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(33); ?>">
								<div class="megamenu-inner-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(33) ); ?>);background-position: 30% 50%;"></div>
								<div class="megamenu-inner-text"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',33);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',33);?><?php else:?><?php echo get_the_title(33);?><?php endif;?></div>
							</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(49); ?>">
								<div class="megamenu-inner-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(49) ); ?>);"></div>
								<div class="megamenu-inner-text"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',49);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',49);?><?php else:?><?php echo get_the_title(49);?><?php endif;?></div>
							</a>
						</li>
					</ul><!-- .megamenu-inner -->
				</div><!-- .megamenu -->
			</li>
			<li><a href="<?php echo get_permalink(27); ?>"><span><?php if($lang==="en"):?><?php echo CFS()->get('title_en',27);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',27);?><?php else:?><?php echo get_the_title(27);?><?php endif;?></span></a></li>
			<li><a href="<?php echo get_permalink(29); ?>"><span><?php if($lang==="en"):?><?php echo CFS()->get('title_en',29);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',29);?><?php else:?><?php echo get_the_title(29);?><?php endif;?></span></a></li>
			<?php if( ($lang !== "en") and ($lang !== "cn") ): ?>
			<li><a href="<?php echo get_permalink(236); ?>"><span><?php if($lang==="en"):?><?php echo CFS()->get('title_en',236);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',236);?><?php else:?><?php echo get_the_title(236);?><?php endif;?></span></a></li>
			<li><a href="<?php echo get_permalink(240); ?>"><span><?php if($lang==="en"):?><?php echo CFS()->get('title_en',240);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',240);?><?php else:?><?php echo get_the_title(240);?><?php endif;?></span></a></li>
			<?php endif; ?>
      <li><a href="<?php echo get_permalink(19959); ?>"><span><?php if($lang==="en"):?><?php echo CFS()->get('title_en',19959);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',19959);?><?php else:?><?php echo get_the_title(19959);?><?php endif;?></span></a></li>
		</ul>
	</nav><!-- .gnav-wrapper -->
</div>
</header>
<button type="button" class="drawer-toggle drawer-hamburger">
	<span class="sr-only">toggle navigation</span>
	<span class="drawer-hamburger-icon"></span>
</button>
<nav class="drawer-nav">
  <ul class="drawer-menu">
 		<li><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/img_logo_sunoco_tmp.svg" alt="sunoco"><?php if( $lang === "en" ): ?><img src="<?php echo get_template_directory_uri(); ?>/images/img_name01-en.svg" alt="Japan Sun Oil Company, Ltd."><?php elseif( $lang === "cn"): ?><img src="<?php echo get_template_directory_uri(); ?>/images/img_name01-cn.svg" alt="日本太阳石油株式会社"><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/img_name01.svg" alt="日本サン石油株式会社"><?php endif; ?></a></li>
 		<li class="contact"><a href="<?php echo get_permalink(308);?>"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',308);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',308);?><?php else:?><?php echo get_the_title(308);?><?php endif;?></a></li>
 		<li>
    	<div><a href="<?php echo get_permalink(15); ?>"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',15);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',15);?><?php else:?><?php echo get_the_title(15);?><?php endif;?></a></div>
    	<ul>
				<li><a href="<?php echo get_permalink(17); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php if($lang==="en"):?><?php echo CFS()->get('title_en',17);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',17);?><?php else:?><?php echo get_the_title(17);?><?php endif;?></a></li>
				<li><a href="<?php echo get_permalink(19); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php if($lang==="en"):?><?php echo CFS()->get('title_en',19);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',19);?><?php else:?><?php echo get_the_title(19);?><?php endif;?></a></li>
				<li><a href="<?php echo get_permalink(21); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php if($lang==="en"):?><?php echo CFS()->get('title_en',21);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',21);?><?php else:?><?php echo get_the_title(21);?><?php endif;?></a></li>
				<li><a href="<?php echo get_permalink(23); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php if($lang==="en"):?><?php echo CFS()->get('title_en',23);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',23);?><?php else:?><?php echo get_the_title(23);?><?php endif;?></a></li>
				<li><a href="<?php echo get_permalink(25); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php if($lang==="en"):?><?php echo CFS()->get('title_en',25);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',25);?><?php else:?><?php echo get_the_title(25);?><?php endif;?></a></li>
			</ul>
		</li>
    <li>
			<div><a href="<?php echo get_permalink(31); ?>"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',31);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',31);?><?php else:?><?php echo get_the_title(31);?><?php endif;?></a></div>
			<ul>
				<li>
          <a href="<?php echo get_permalink(33); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php if($lang==="en"):?><?php echo CFS()->get('title_en',33);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',33);?><?php else:?><?php echo get_the_title(33);?><?php endif;?></a>
          <ul>
            <li><a href="<?php echo get_permalink(35); ?>">- <?php if($lang==="en"):?><?php echo CFS()->get('title_en',35);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',35);?><?php else:?><?php echo get_the_title(35);?><?php endif;?></a></li>
            <li><a href="<?php echo get_permalink(37); ?>">- <?php if($lang==="en"):?><?php echo CFS()->get('title_en',37);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',37);?><?php else:?>プロセスオイル<?php endif;?></a></li>
            <li><a href="<?php echo get_permalink(39); ?>">- <?php if($lang==="en"):?><?php echo CFS()->get('title_en',39);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',39);?><?php else:?><?php echo get_the_title(39);?><?php endif;?></a></li>
            <li><a href="<?php echo get_permalink(41); ?>">- <?php if($lang==="en"):?><?php echo CFS()->get('title_en',41);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',41);?><?php else:?><?php echo get_the_title(41);?><?php endif;?></a></li>
            <li><a href="<?php echo get_permalink(43); ?>">- <?php if($lang==="en"):?><?php echo CFS()->get('title_en',43);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',43);?><?php else:?><?php echo get_the_title(43);?><?php endif;?></a></li>
            <li><a href="<?php echo get_permalink(45); ?>">- <?php if($lang==="en"):?><?php echo CFS()->get('title_en',45);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',45);?><?php else:?><?php echo get_the_title(45);?><?php endif;?></a></li>
            <li><a href="<?php echo get_permalink(47); ?>">- <?php if($lang==="en"):?><?php echo CFS()->get('title_en',47);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',47);?><?php else:?><?php echo get_the_title(47);?><?php endif;?></a></li>
          </ul>
        </li>
				<li>
          <a href="<?php echo get_permalink(49); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php if($lang==="en"):?><?php echo CFS()->get('title_en',49);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',49);?><?php else:?><?php echo get_the_title(49);?><?php endif;?></a>
          <ul>
            <li><a href="<?php echo get_permalink(51); ?>">- <?php if($lang==="en"):?>Lineup<?php elseif($lang==="cn"):?>产品列表<?php else:?>製品一覧<?php endif;?></a></li>
            <?php if( ($lang !== "en") and ($lang !== "cn") ): ?>
            <li><a href="<?php echo get_permalink(355); ?>">- <?php echo get_the_title(355);?></a></li>
            <li><a href="<?php echo get_permalink(368); ?>">- <?php echo get_the_title(368);?></a></li>
            <li><a href="<?php echo home_url('/'); ?>product/automotive_lube/whats_oil">- What's Oil?</a></li>
            <li><a href="<?php echo home_url('/'); ?>product/automotive_lube/shop_list">- 取扱店一覧</a></li>
            <li><a href="<?php echo get_permalink(5522); ?>">- <?php echo get_the_title(5522);?></a></li>
            <li><a href="https://sunocoshop.thebase.in" target="_blank">- オフィシャルウェブショップ</a></li>
            <?php endif; ?>
          </ul>
        </li>
			</ul>
    </li>
		<li><a href="<?php echo get_permalink(27); ?>"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',27);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',27);?><?php else:?><?php echo get_the_title(27);?><?php endif;?></a></li>
		<li><a href="<?php echo get_permalink(29); ?>"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',29);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',29);?><?php else:?><?php echo get_the_title(29);?><?php endif;?></a></li>
		<?php if( ($lang !== "en") and ($lang !== "cn") ): ?>
		<li><a href="<?php echo get_permalink(236); ?>"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',236);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',236);?><?php else:?><?php echo get_the_title(236);?><?php endif;?></a></li>
		<li><a href="<?php echo get_permalink(240); ?>"><?php if($lang==="en"):?><?php echo CFS()->get('title_en',240);?><?php elseif($lang==="cn"):?><?php echo CFS()->get('title_cn',240);?><?php else:?><?php echo get_the_title(240);?><?php endif;?></a></li>
		<?php endif; ?>
    <li><a href="<?php the_permalink(19959); ?>"><span><?php echo get_the_title(19959); ?></span></a></li>
    <?php if( $lang === "en" || $lang === "cn"): ?>
    <a class="smbnr_202106" href="<?php echo get_permalink(35); ?>">
      <div class="smbnr_202106_img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(35) ); ?>)"></div>
      <div class="smbnr_202106_txt">
        <?php if($lang==="en"):?>
        <p><span>SUNISO<sup>®</sup> &amp; Sunice<sup>®</sup></span> <span>REFRIGERATION OILS</span></p>
        <?php elseif($lang==="cn"):?>
        <p><span>SUNISO<sup>®</sup> &amp; Sunice<sup>®</sup></span> <span>冷冻机油</span></p>
        <?php endif;?>
      </div>
    </a>
    <?php endif;?>

 		<li class="sns">
      <a href="https://www.facebook.com/pages/Sunoco-Japan/961335300556761?sk=timeline" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="https://twitter.com/Sunoco_Japan" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://www.youtube.com/user/sunocoracing" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
      <a href="http://minkara.carview.co.jp/userid/851455/blog/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-minkara.svg"></a>
    </li>
  </ul>
</nav>
