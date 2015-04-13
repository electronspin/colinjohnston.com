<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>

<title>Colin Johnston | Visual / UX / Product Designer | San Francisco, CA</title>
</head>

<body>
  
<!--   <div id="pagetop" class="row" >
    <div id="topbar" class="twelve columns">
      <p></p>
    </div>
  </div> -->
  
<div id="page" class="row">
    
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar-home.php') ?>
    
  <div id="content" class="eight columns">
      
    <div id="loader"><img class="loading" src="../images/ajax-loader.gif"></div>
      
      <div class="row rowpad">
        <div class="six columns">
          <a href="/projects/moovweb-control-center">
            <!-- <div class="imagebox">
              <figure>
                <img src="images/moovweb-control-center-main_lg.jpg" alt="Moovweb Control Center">
                <figcaption>Moovweb Control Center</figcaption>
              </figure>
            </div> -->
            <div class="imagebox">
              <figure>
                <img
                srcset="images/moovweb-control-center-main_small.jpg 400w,
                        images/moovweb-control-center-main_medium.jpg 800w,
                        images/moovweb-control-center-main_large.jpg 1200w"
                sizes="(min-width: 48em) 33.3vw, 100vw"
                src="images/moovweb-control-center-main_small.jpg"
                alt="Moovweb Control Center">
                <figcaption>Moovweb Control Center</figcaption>
              </figure>
            </div>
          </a>
        </div>
        <div class="six columns">
          <a href="/projects/moovweb-dev-center">
            <div class="imagebox">
              <figure>
                <img
                srcset="images/moovweb-dev-center-home_small.jpg 400w,
                        images/moovweb-dev-center-home_medium.jpg 800w,
                        images/moovweb-dev-center-home_large.jpg 1200w"
                sizes="(min-width: 48em) 33.3vw, 100vw"
                src="images/moovweb-dev-center-home_small.jpg"
                alt="Moovweb Developer Center">
                <figcaption>Moovweb Developer Center</figcaption>
              </figure>
            </div>
          </a>
        </div>
      </div>

      <div class="row rowpad">
        <div class="six columns">
          <a href="/projects/libsass-com">
            <div class="imagebox">
              <figure>
                <img
                srcset="images/libsass-com_small.jpg 400w,
                        images/libsass-com_medium.jpg 800w,
                        images/libsass-com_large.jpg 1200w"
                sizes="(min-width: 48em) 33.3vw, 100vw"
                src="images/libsass-com_small.jpg"
                alt="Libsass Website &amp; Logo">
                <figcaption>Libsass Website &amp; Logo</figcaption>
              </figure>
            </div>
          </a>
        </div>        
        <div class="six columns">
          <a href="/projects/get-what-he-said-website">
          <div class="imagebox" ><figure>
            <img src="images/getwhathesaid-home.jpg" alt="" />
            <figcaption>Get What He Said Website</figcaption>
          </figure></div>
          </a>
        </div>
      </div>

      <div class="row rowpad">
        <div class="six columns">
          <a href="/projects/the-real-sf-tour-website">
          <div class="imagebox"><figure>
            <img src="images/therealsftour-home.jpg" alt="" />
            <figcaption>The Real SF Tour Website</figcaption>
          </figure></div>
          </a>
        </div>       
        <div class="six columns">
          <a href="/projects/paul-saffo-website">
          <div class="imagebox"><figure>
            <img src="images/saffo-journal-598.jpg" alt="" />
            <figcaption>Paul Saffo's Website</figcaption>
          </figure></div>
          </a>
        </div>
      </div>
      
      <div class="row rowpad">
        <div class="six columns">
          <a href="/projects/orphic-gallery-website">
          <div class="imagebox"><figure>
            <img src="images/orphic-exhibitions-598.png" alt="" />
            <figcaption>Orphic Gallery Website</figcaption>
          </figure></div>
          </a>
        </div>
        <div class="six columns">
          <a href="/projects/sensible-sitters-blog">
            <div class="imagebox"><figure>
          <img src="images/sensible-post-598.jpg" alt="" />
            <figcaption>Sensible Sitters Blog</figcaption>
          </figure></div>
          </a>
        </div>
      </div>
          
  </div> <!--end eight column content area-->

</div> <!--end main row-->

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>

</body>
</html>
