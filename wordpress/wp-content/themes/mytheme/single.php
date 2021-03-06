<?php get_header();?>

    <!-- 投稿画面bg -->
    <div class="mainpost">
      <h1 class="posttitle">LIFE IS A JOURNEY</h1>
    </div>
    <!-- 投稿画面bgここまで -->

    <div class="content">
      <!-- main -->
      <div id="main" class="post-container">
        <div id="posts">
               <?php if (have_posts()) :
                while (have_posts()) :
                  the_post(); ?>

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
                  <p><?php the_content();?></p>
                </div>
              </div>
            </div>
          </div>
              <?php endwhile;
              else:
              ?>
              <p>記事はありません。</p>
              <?php
              endif;
              ;?>

        </div>
      </div>

      <div id="side-bar">
        <!-- サイドバー -->
        <div class="widget">
          <?php $args = [
                  'orderby' => 'date', //並べ替えの方法
                  'cat'=>'category', //カテゴリーを出力
                  'order' => 'DESC', //降順(昇順 ASC)
                  'post_status' => 'publish', //記事の公開ステータス
                  'post_type' => 'post', //記事のタイプ
                  'posts_per_page' => 5, //出力する数。全出力したい場合は-1
                ];;?>

          <h3>記事一覧</h3>
          <?php //クエリをセット
            $the_query = new WP_Query($args);?>
            <?php if ($the_query->have_posts()):
              while ($the_query->have_posts()):
                  $the_query->the_post();?>
          <li><a href="<?php the_permalink()?>"><h1><?php the_title()?><h1></a></li>
          <p><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></p>
             <?php endwhile;?>
              <?php else:?>
                <p>まだ記事はありません。</p>
              <?php
              endif;
              wp_reset_postdata();//ループをリセット
              ?>
          <div class="btn">
            <a href="<?php echo home_url()?>" class="btn-sticky">HOME</a>
            <a href="<?php the_permalink(); ?>" style="display: inline-block; margin-left: 20px;" class="btn-sticky">PAGE TOP</a>
          </div>
        </div>
      </div>
    <!--/ main -->

<?php get_footer();?>
