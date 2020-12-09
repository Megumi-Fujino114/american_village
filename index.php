<?php get_header(); ?>

<main>
    <div class="photo">
      <!-- スライダー -->
      <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item  active">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-800" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> -->
      <!-- スライダー終了 -->
        <img class="head_img" src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="">
        <!-- スマホの時だけ -->
        <div id="hd_img"></div>
        <div id="af_img"></div>
        <!-- スマホの時だけ -->
    </div>

    <p class="amebire_text"><span>進化し続ける「街」</span><span class="br">アメリカンビレッジマガジン</span></p>
</main>

   
<!--------------------- ここから ariticle-------------------->

<div class="nav_text">Latest Articles</div>
    
    <div class="album py-5 bg-white">
      <div class="container">
  
        <div class="row">
<?php if(have_posts()): ?>
<?php query_posts("cat=''&showposts=6"); ?>
<?php while (have_posts()): the_post();?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm border border-0 shadow-none shadow">
          <!-- ここから サムネイル-->      
              <!-- <img class="card-img-top"  Thumbnail [100%x225] style="height: 225px; width: 100%; display: block;" data-holder-rendered="true" src=" " > -->
              <?php the_post_thumbnail( array(300,200)); ?>
              <div class="card-body">
        　<!-- ここから 日付-->     
                <p class="card-text"><?php the_time('Y年m月d日'); ?></p>
        　<!-- ここから 記事--> 
                <p class="card-text">
                <?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
                </p>    
                    <div class="d-flex justify-content-between align-items-center">                
        　<!-- ここから 続きを見る--> 
                    <small class="text-muted">
                    <a href="<?php the_permalink(); //詳細へのリンク　?>">READ MORE</a>
                    <p class="line_bt"></p>
                    </small>
                </div>
              </div>
            </div>
          </div>
<?php endwhile;?>
<?php else: ?>
    　
  <h2 class="subtitle">投稿はありません</h2>

<?php endif;?>

  <!--  -->
  
        </div>
      </div>
    </div>
<!--------------------- ここまでがarticle-------------------->

<?php get_footer(); ?>