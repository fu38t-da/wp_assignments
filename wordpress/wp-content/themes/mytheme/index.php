<?php get_header();?>

    <!-- about -->
    <div class="parallax bg-01" id="parallax-01">
      <h1 class="maintitle">Life is what you enjoy</h1>
    </div>
    <div class="content about" id="about">
      <h2>ABOUT</h2>
      <p>私たちのミッションは、<span>『当たり前』</span>を創造致します。
      </p>
      <div class='about-container'>
        <ul>
          <li class="aboutcontent">
            <p><i class="fas fa-bezier-curve"></i></p>
            <h3>世界中のネットワーク</h3>
            <p>ニーズにあったあらゆる人をコネクトします。</p>
          </li>

          <li class="aboutcontent">
            <p><i class="fas fa-calendar-alt"></i></p>
            <h3>適切な人生設計</h3>
            <p>まずは人生設計についてヒアリングします。カウンセラーの元、オーダーメイドで作成いたします。</p>
          </li>

          <li class="aboutcontent">
            <p><i class="far fas fa-hand-peace"></i></p>
            <h3>LPH精神</h3>
            <p>L = LOVE<br>P = PEACE<br>H = HAPPINESS<br>をモットーに皆様に機会を提供します。</p>
          </li>
        </ul>
      </div>
    </div>
    <!--/ about -->

    <!-- posts -->
    <div class="parallax bg-02" id="parallax-02">
      <h2 class="maintitle">The world is interesting</h2>
    </div>

    <?php  $args = [
    'orderby' => 'date', //並べ替えの方法
    'cat'=>'category', //カテゴリーを出力
    'order' => 'DESC', //降順(昇順 ASC)
    'post_status' => 'publish', //記事の公開ステータス
    'post_type' => 'post', //記事のタイプ
    'posts_per_page' => 3, //出力する数。全出力したい場合は-1
    ];;?>
    <div class="content">
      <h2 class="content-title">BLOG</h2>
      <!-- main -->
      <?php //クエリをセット
      $the_query = new WP_Query($args);?>
      <?php if ($the_query->have_posts()):
          while ($the_query->have_posts()):
              $the_query->the_post();?>
      <div id="main" class="post-container">
        <div id="posts">
          <!-- 記事一覧 -->
          <div id="post">
            <div class="post-header">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="post-meta">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time><?php the_category(' , ');?>
              </div>
              <div class="post-content">
                <div class="post-image">
                  <?php if (has_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail('thumbnail'); ?>">
                  <?php else: ?>
                    <img src="https://placehold.jp/300x300.png" alt="" height="300" width="300">
                  <?php endif; ?>
                </div>
                <div class="post-body">
                  <?php the_excerpt(); ?>
                </div>
                <div class="btn">
                  <a href="<?php the_permalink(); ?>" class="btn-sticky">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile;?>
      <?php else:?>
        <p>まだ記事はありません。</p>
      <?php
      endif;
      wp_reset_postdata();//ループをリセット
      ?>
    </div>
    <!--/ postsここまで -->

    <!-- form -->
    <div class="parallax bg-03" id="parallax-03">
      <h2 class="maintitle">Sometimes you need a break</h2>
    </div>
    <div class="formwrapper" id="form">
      <h2 class="form-title">CONTACT</h2>
      <div class="inputWithIcon inputIconBg">
        <input type="text" placeholder="Your name">
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="inputWithIcon inputIconBg">
        <input type="text" placeholder="Email">
        <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="inputWithIcon inputIconBg">
        <input type="text" placeholder="Phone Number">
        <i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <input type="text" placeholder="Age">

      <a href="#" class="cp_btn">送信</a>
    </div>
    <!-- formここまで -->

<?php get_footer();?>
