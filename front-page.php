<?php
  get_header();
  if(have_posts()) : while(have_posts()) : the_post();
?>

  <div class="section section--hero">
    <?php the_post_thumbnail('front-page-hero', array( 'class' => 'thumbnail--front-page' )); ?>
    <div class="gradient-pattern"></div>
  </div>

  <!-- *************** -->
  <!-- FAIR STATISTICS -->
  <!-- *************** -->

  <?php if( have_rows('stats_repeat_group') ): ?>
  <div class="section section--stats">
    <div class="section__wrapper">
      <?php  while ( have_rows('stats_repeat_group') ) : the_row();?>
          <div class="section--stats__group">
            <h3 class="stat__value"><?=the_sub_field('stat_value');?>+</h3>
            <h4 class="stat__description"><?=the_sub_field('stat_description');?></h4>
          </div>
        <?php endwhile; ?>
    </div>
  </div>
  <?php endif; ?>

  <!-- ****** -->
  <!-- FAIR -->
  <!-- ****** -->

  <div class="section__title__wrapper">
    <h2 class="section__title"><span>The Fair</span></h2>
  </div>
  <div class="section">
    <div class="section__wrapper section__wrapper--fair">
      <?= the_content(); ?>
      <?php
      $page = get_page_by_title( 'fair' );
      if (isset($page)) {?>
        <div class="section__link__wrapper">
          <a href="<?=get_permalink( $page )?>" class="button">Discover the fair <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      <?php }?>
    </div>
  </div>

  <!-- ********* -->
  <!-- COMPANIES -->
  <!-- ********* -->

  <?php
    $args = array( 'post_type' => 'company', 'posts_per_page' => 8, 'orderby' => 'rand' );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
  ?>
  <div class="section__title__wrapper">
    <h2 class="section__title"><span>The Companies</span></h2>
  </div>
  <div class="section">
    <div class="section__wrapper section__wrapper--companies">
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="company--small">
          <a href="<?= the_permalink();?>">
            <?= the_post_thumbnail('medium'); ?>
          </a>
        </div>
      <?php endwhile; ?>
      <div class="section__link__wrapper">
        <a href="<?php echo get_post_type_archive_link('company'); ?>" class="button">See all companies <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <?php
    }
    wp_reset_postdata();
  ?>

  <!-- ****** -->
  <!-- EVENTS -->
  <!-- ****** -->

  <?php
    $today = date('Ymd');
    $upcoming_loop = new WP_Query( array(
    'post_type' => 'event',
    'posts_per_page' => 3,
    'meta_query' => array(
    array(
      'key'     => 'start_datetime',
      'compare' => '>=',
      'value'   => $today,
      'type'    => 'DATE'
    ),
    ),
    'orderby' => 'start_datetime',
    'order' => 'ASC',
    ) );
    if ($upcoming_loop->have_posts()) :
  ?>

  <div class="section__title__wrapper">
    <h2 class="section__title"><span>Upcoming Events</span></h2>
  </div>
  <div class="section">
    <div class="section__wrapper section__wrapper--events">
      <?php
      while ( $upcoming_loop->have_posts() ) : $upcoming_loop->the_post(); ?>
        <div class="event--small">
          <a href="<?= the_permalink();?>">
            <?= the_post_thumbnail('medium'); ?>
          </a>
          <a href="<?= the_permalink();?>">
            <h3><?= the_title(); ?></h3>
          </a>
            <?php
      				$start = new DateTime(get_field('start_datetime'));
      				$start->setTimezone( new DateTimeZone('Europe/Amsterdam') );
      				$end = new DateTime(get_field('end_datetime'));
      				$end->setTimezone( new DateTimeZone('Europe/Amsterdam') );
      				$start_month = $start->format('F');
      				$start_day   = $start->format('jS');
      				$end_month = $end->format('F');
      				$end_day   = $end->format('jS');
      				$start_time = $start->format('H:i');
      				$end_time   = $end->format('H:i');
      				$location_name = get_field('location_name');
      			?>

            <?php
      					echo $start_month . ' ' . $start_day . ', '. $start_time . ' – ';
      					if ($start_day != $end_day){
      						echo $end_month . ' ' . $end_day . ', ' . $end_time;
      					} else {
      						echo $end_time;
      					}
      					echo ($location_name) ? ' @ ' . $location_name : '';
      				?>
        </div>
      <?php endwhile; ?>
      <div class="section__link__wrapper">
        <a href="<?php echo get_post_type_archive_link('event'); ?>" class="button">See all events <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <?php
    endif;
    wp_reset_postdata();
  ?>

<?php
  endwhile;
  endif;
  get_footer();
?>
