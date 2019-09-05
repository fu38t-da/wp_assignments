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
                <?php echo get_the_date('Y.m.d');?> <?php the_category(' , ');?>
              </div>
              <div class="post-content">
                <div class="post-image">
                  <img src="images/art.jpg" alt="" width="100" height="100">
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
          <?php dynamic_sidebar(); ?>
        </div>
      </div>
    </div>
    <!--/ main -->

<?php get_footer();?>
