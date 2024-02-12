<?php get_header(); ?>

<body class="container">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id=&quot;post-<?php the_ID(); ?>&quot; <?php post_class(); ?>>
    <div class=&quot;post-header&quot;>
       <div class=&quot;date&quot;><?php the_time( 'M j y' ); ?></div>
       <h2><a href=&quot;<?php the_permalink(); ?>&quot; rel=&quot;bookmark&quot; title=&quot;Permanent Link to <?php the_title_attribute(); ?>&quot;><?php the_title(); ?></a></h2>
       <div class=&quot;author&quot;><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class=&quot;entry clear&quot;>
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class=&quot;post-footer&quot;>
       <div class=&quot;comments&quot;><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class=&quot;navigation index&quot;>
       <div class=&quot;alignleft&quot;><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class=&quot;alignright&quot;><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
    <h1> PROM? </h1>
    <div class="night"></div>
    <div class="flowers">
      <div class="flower flower--1">
        <div class="flower__leafs flower__leafs--1">
          <div class="flower__leaf flower__leaf--1"></div>
          <div class="flower__leaf flower__leaf--2"></div>
          <div class="flower__leaf flower__leaf--3"></div>
          <div class="flower__leaf flower__leaf--4"></div>
          <div class="flower__white-circle"></div>
  
          <div class="flower__light flower__light--1"></div>
          <div class="flower__light flower__light--2"></div>
          <div class="flower__light flower__light--3"></div>
          <div class="flower__light flower__light--4"></div>
          <div class="flower__light flower__light--5"></div>
          <div class="flower__light flower__light--6"></div>
          <div class="flower__light flower__light--7"></div>
          <div class="flower__light flower__light--8"></div>
  
        </div>
        <div class="flower__line">
          <div class="flower__line__leaf flower__line__leaf--1"></div>
          <div class="flower__line__leaf flower__line__leaf--2"></div>
          <div class="flower__line__leaf flower__line__leaf--3"></div>
          <div class="flower__line__leaf flower__line__leaf--4"></div>
          <div class="flower__line__leaf flower__line__leaf--5"></div>
          <div class="flower__line__leaf flower__line__leaf--6"></div>
        </div>
      </div>
  
      <div class="flower flower--2">
        <div class="flower__leafs flower__leafs--2">
          <div class="flower__leaf flower__leaf--1"></div>
          <div class="flower__leaf flower__leaf--2"></div>
          <div class="flower__leaf flower__leaf--3"></div>
          <div class="flower__leaf flower__leaf--4"></div>
          <div class="flower__white-circle"></div>
  
          <div class="flower__light flower__light--1"></div>
          <div class="flower__light flower__light--2"></div>
          <div class="flower__light flower__light--3"></div>
          <div class="flower__light flower__light--4"></div>
          <div class="flower__light flower__light--5"></div>
          <div class="flower__light flower__light--6"></div>
          <div class="flower__light flower__light--7"></div>
          <div class="flower__light flower__light--8"></div>
  
        </div>
        <div class="flower__line">
          <div class="flower__line__leaf flower__line__leaf--1"></div>
          <div class="flower__line__leaf flower__line__leaf--2"></div>
          <div class="flower__line__leaf flower__line__leaf--3"></div>
          <div class="flower__line__leaf flower__line__leaf--4"></div>
        </div>
      </div>
  
      <div class="flower flower--3">
        <div class="flower__leafs flower__leafs--3">
          <div class="flower__leaf flower__leaf--1"></div>
          <div class="flower__leaf flower__leaf--2"></div>
          <div class="flower__leaf flower__leaf--3"></div>
          <div class="flower__leaf flower__leaf--4"></div>
          <div class="flower__white-circle"></div>
  
          <div class="flower__light flower__light--1"></div>
          <div class="flower__light flower__light--2"></div>
          <div class="flower__light flower__light--3"></div>
          <div class="flower__light flower__light--4"></div>
          <div class="flower__light flower__light--5"></div>
          <div class="flower__light flower__light--6"></div>
          <div class="flower__light flower__light--7"></div>
          <div class="flower__light flower__light--8"></div>
  
        </div>
        <div class="flower__line">
          <div class="flower__line__leaf flower__line__leaf--1"></div>
          <div class="flower__line__leaf flower__line__leaf--2"></div>
          <div class="flower__line__leaf flower__line__leaf--3"></div>
          <div class="flower__line__leaf flower__line__leaf--4"></div>
        </div>
      </div>
  
      <div class="grow-ans" style="--d:1.2s">
        <div class="flower__g-long">
          <div class="flower__g-long__top"></div>
          <div class="flower__g-long__bottom"></div>
        </div>
      </div>
  
      <div class="growing-grass">
        <div class="flower__grass flower__grass--1">
          <div class="flower__grass--top"></div>
          <div class="flower__grass--bottom"></div>
          <div class="flower__grass__leaf flower__grass__leaf--1"></div>
          <div class="flower__grass__leaf flower__grass__leaf--2"></div>
          <div class="flower__grass__leaf flower__grass__leaf--3"></div>
          <div class="flower__grass__leaf flower__grass__leaf--4"></div>
          <div class="flower__grass__leaf flower__grass__leaf--5"></div>
          <div class="flower__grass__leaf flower__grass__leaf--6"></div>
          <div class="flower__grass__leaf flower__grass__leaf--7"></div>
          <div class="flower__grass__leaf flower__grass__leaf--8"></div>
          <div class="flower__grass__overlay"></div>
        </div>
      </div>
  
      <div class="growing-grass">
        <div class="flower__grass flower__grass--2">
          <div class="flower__grass--top"></div>
          <div class="flower__grass--bottom"></div>
          <div class="flower__grass__leaf flower__grass__leaf--1"></div>
          <div class="flower__grass__leaf flower__grass__leaf--2"></div>
          <div class="flower__grass__leaf flower__grass__leaf--3"></div>
          <div class="flower__grass__leaf flower__grass__leaf--4"></div>
          <div class="flower__grass__leaf flower__grass__leaf--5"></div>
          <div class="flower__grass__leaf flower__grass__leaf--6"></div>
          <div class="flower__grass__leaf flower__grass__leaf--7"></div>
          <div class="flower__grass__leaf flower__grass__leaf--8"></div>
          <div class="flower__grass__overlay"></div>
        </div>
      </div>
  
      <div class="grow-ans" style="--d:2.4s">
        <div class="flower__g-right flower__g-right--1">
          <div class="leaf"></div>
        </div>
      </div>
  
      <div class="grow-ans" style="--d:2.8s">
        <div class="flower__g-right flower__g-right--2">
          <div class="leaf"></div>
        </div>
      </div>
  
      <div class="grow-ans" style="--d:2.8s">
        <div class="flower__g-front">
          <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--1">
            <div class="flower__g-front__leaf"></div>
          </div>
          <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--2">
            <div class="flower__g-front__leaf"></div>
          </div>
          <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--3">
            <div class="flower__g-front__leaf"></div>
          </div>
          <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--4">
            <div class="flower__g-front__leaf"></div>
          </div>
          <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--5">
            <div class="flower__g-front__leaf"></div>
          </div>
          <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--6">
            <div class="flower__g-front__leaf"></div>
          </div>
          <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--7">
            <div class="flower__g-front__leaf"></div>
          </div>
          <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--8">
            <div class="flower__g-front__leaf"></div>
          </div>
          <div class="flower__g-front__line"></div>
        </div>
      </div>
  
      <div class="grow-ans" style="--d:3.2s">
        <div class="flower__g-fr">
          <div class="leaf"></div>
          <div class="flower__g-fr__leaf flower__g-fr__leaf--1"></div>
          <div class="flower__g-fr__leaf flower__g-fr__leaf--2"></div>
          <div class="flower__g-fr__leaf flower__g-fr__leaf--3"></div>
          <div class="flower__g-fr__leaf flower__g-fr__leaf--4"></div>
          <div class="flower__g-fr__leaf flower__g-fr__leaf--5"></div>
          <div class="flower__g-fr__leaf flower__g-fr__leaf--6"></div>
          <div class="flower__g-fr__leaf flower__g-fr__leaf--7"></div>
          <div class="flower__g-fr__leaf flower__g-fr__leaf--8"></div>
        </div>
      </div>
  
      <div class="long-g long-g--0">
        <div class="grow-ans" style="--d:3s">
          <div class="leaf leaf--0"></div>
        </div>
        <div class="grow-ans" style="--d:2.2s">
          <div class="leaf leaf--1"></div>
        </div>
        <div class="grow-ans" style="--d:3.4s">
          <div class="leaf leaf--2"></div>
        </div>
        <div class="grow-ans" style="--d:3.6s">
          <div class="leaf leaf--3"></div>
        </div>
      </div>
  
      <div class="long-g long-g--1">
        <div class="grow-ans" style="--d:3.6s">
          <div class="leaf leaf--0"></div>
        </div>
        <div class="grow-ans" style="--d:3.8s">
          <div class="leaf leaf--1"></div>
        </div>
        <div class="grow-ans" style="--d:4s">
          <div class="leaf leaf--2"></div>
        </div>
        <div class="grow-ans" style="--d:4.2s">
          <div class="leaf leaf--3"></div>
        </div>
      </div>
  
      <div class="long-g long-g--2">
        <div class="grow-ans" style="--d:4s">
          <div class="leaf leaf--0"></div>
        </div>
        <div class="grow-ans" style="--d:4.2s">
          <div class="leaf leaf--1"></div>
        </div>
        <div class="grow-ans" style="--d:4.4s">
          <div class="leaf leaf--2"></div>
        </div>
        <div class="grow-ans" style="--d:4.6s">
          <div class="leaf leaf--3"></div>
        </div>
      </div>
  
      <div class="long-g long-g--3">
        <div class="grow-ans" style="--d:4s">
          <div class="leaf leaf--0"></div>
        </div>
        <div class="grow-ans" style="--d:4.2s">
          <div class="leaf leaf--1"></div>
        </div>
        <div class="grow-ans" style="--d:3s">
          <div class="leaf leaf--2"></div>
        </div>
        <div class="grow-ans" style="--d:3.6s">
          <div class="leaf leaf--3"></div>
        </div>
      </div>
  
      <div class="long-g long-g--4">
        <div class="grow-ans" style="--d:4s">
          <div class="leaf leaf--0"></div>
        </div>
        <div class="grow-ans" style="--d:4.2s">
          <div class="leaf leaf--1"></div>
        </div>
        <div class="grow-ans" style="--d:3s">
          <div class="leaf leaf--2"></div>
        </div>
        <div class="grow-ans" style="--d:3.6s">
          <div class="leaf leaf--3"></div>
        </div>
      </div>
  
      <div class="long-g long-g--5">
        <div class="grow-ans" style="--d:4s">
          <div class="leaf leaf--0"></div>
        </div>
        <div class="grow-ans" style="--d:4.2s">
          <div class="leaf leaf--1"></div>
        </div>
        <div class="grow-ans" style="--d:3s">
          <div class="leaf leaf--2"></div>
        </div>
        <div class="grow-ans" style="--d:3.6s">
          <div class="leaf leaf--3"></div>
        </div>
      </div>
  
      <div class="long-g long-g--6">
        <div class="grow-ans" style="--d:4.2s">
          <div class="leaf leaf--0"></div>
        </div>
        <div class="grow-ans" style="--d:4.4s">
          <div class="leaf leaf--1"></div>
        </div>
        <div class="grow-ans" style="--d:4.6s">
          <div class="leaf leaf--2"></div>
        </div>
        <div class="grow-ans" style="--d:4.8s">
          <div class="leaf leaf--3"></div>
        </div>
      </div>
  
      <div class="long-g long-g--7">
        <div class="grow-ans" style="--d:3s">
          <div class="leaf leaf--0"></div>
        </div>
        <div class="grow-ans" style="--d:3.2s">
          <div class="leaf leaf--1"></div>
        </div>
        <div class="grow-ans" style="--d:3.5s">
          <div class="leaf leaf--2"></div>
        </div>
        <div class="grow-ans" style="--d:3.6s">
          <div class="leaf leaf--3"></div>
        </div>
      </div>
      <script src="main.js"></script>
    </div>
    
  </body>