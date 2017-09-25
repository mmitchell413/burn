<html>
  <head>
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
  </head>
  <body>
    <header>
      <div class="container">
        <nav class="main">
          <ul>
            <li><a href='#listen'>Listen</a></li>
            <li><a href='#tour'>Tour</a></li>
            <li><a href='#about'>About</a></li>
            <li><a href='#blog'>Blog</a></li>
          </ul>
        </nav>
      </div>
      <div>
        <h1>The Sunshine Serenade</h1>
        <hr />
        <h2>Burn</h2>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        	 viewBox="0 0 1000 100" style="background-color:#f8faff; height:auto; width:100%;">
        <style type="text/css">
        	.st0{fill:#26393F; height:100px; width:100%;}
        </style>
        <polygon class="st0" points="0,0 500,100 1000,0 "/>
        </svg>
      </div>
    </header>
    <main>
      <section>
        <div class="container">
          <div class="row">
            <div class="col col-1">
              <h3>Welcome</h3>
            </div>
            <div class="col col-1 center">
              <p>The Sunshine Serenade is a project led by artist Matt Mitchell. Based in Dallas, Texas, The Sunshine Serenade is set to debut their first album &#8212; Burn &#8212; in Summer 2018. Mixing elements of blues, rock and roll, folk, and jazz, The Sunshine Serenade developed a unique soundscape through years of experimentation. </p>
              <p>Stay tuned in to the band here and on <a href="https://soundcloud.com/thesunshineserenade" target="_blank">Soundcloud</a> for exclusive sneak peaks of the upcoming album as well as insight into the writing and recording process. </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- listen section -->
    <a id='listen' />
    <section>
      <div class="container">
        <div class="row">
          <div class="col col-1">
            <h3>Listen</h3>
          </div>
        </div>
        <div class="row">
          <div class="col col-3">
            <audio id="player" preload="true">
              <source src="audio/lever-pulled.wav" type="audio/wav" title="Lever Pulled (John Frusciante Cover)"/>
            </audio>

            <div class="player">
              <ul id='playlist'>
                <li class='active'>
                  <a href="audio/lever-pulled.wav" title="Lever Pulled (John Frusciante Cover)">Lever Pulled (John Frusciante Cover)</a>
                </li>
                <li>
                  <a href="audio/replica.wav" title="Replica">Replica</a>
                </li>
              </ul>
              <div class="player-art">
                <p class="player-title">
                  You Won't Go Far - Matt Mitchell
                </p>
                <img src="img/alb-art.jpg" />
              </div>
              <div class="player-bar">
                <div class="handle"></div>
                <div class="tooltip">
                  <span class="time-pointer">0:00</span> / <span class="time-total">0:00</span>
                </div>
                <div class="player-bar-complete"></div>
                <div class="player-bar-left"></div>
              </div>
              <div class="player-controls">
                <!-- TODO player volume control -->
                <div class="player-volume">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="-237 239 24 24" style="enable-background:new 0 0 50 50;" xml:space="preserve">

                  <path d="M-234,248v6h4l5,5v-16l-5,5H-234z M-220.5,251c0-1.8-1-3.3-2.5-4v8.1C-221.5,254.3-220.5,252.8-220.5,251z M-223,242.2v2.1
                    c2.9,0.9,5,3.5,5,6.7s-2.1,5.9-5,6.7v2.1c4-0.9,7-4.5,7-8.8S-219,243.1-223,242.2z"/>
                  <path class="st0" d="M-237,239h24v24h-24V239z"/>
                  </svg>
                  <div class="player-volume-slider">
                    <div class="player-volume-slider-highlight"></div>
                  </div>
                </div>
                <div class="player-buttons">
                  <div class="center">
                    <div class="player-rw player-button">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      	 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                      <polygon id="XMLID_2_" points="50,12.5 25,25 50,37.5 "/>
                      <polygon id="XMLID_1_" points="25,12.5 0,25 25,37.5 "/>
                      </svg>
                      </div>
                    <div class="player-play-pause player-button">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      	 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                      <polygon id="XMLID_2_" points="11.3,7.2 47,25 11.3,42.8 "/>
                      </svg>
                    </div>
                    <div class="player-ff player-button">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      	 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                      <polygon id="XMLID_2_" points="0,12.5 25,25 0,37.5 "/>
                      <polygon id="XMLID_1_" points="25,12.5 50,25 25,37.5 "/>
                      </svg>
                    </div>
                  </div>
                </div>
                <!-- TODO song information pop-up -->
              </div>
            </div>
          </div>
          <div class="col col-2-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consequat, tellus nec tincidunt laoreet, libero quam finibus elit, consectetur malesuada quam sapien nec turpis. Aenean aliquam nisl et tincidunt venenatis. In molestie massa sed massa mollis, iaculis finibus erat pulvinar. Aliquam laoreet gravida neque sed vehicula. Nunc elementum, tellus eu euismod ultricies, orci odio mollis nibh, non posuere nunc nunc a mauris. Nullam at gravida libero. Nam neque lacus, sodales et ultrices quis, malesuada eu enim. Quisque nec urna vitae eros dapibus rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus sapien at orci volutpat maximus. Etiam vel dolor mauris. Etiam lacinia facilisis tortor eget feugiat. Praesent condimentum suscipit tellus sed pretium. Ut ac sodales neque. Morbi sit amet semper nisl.</p>

<p>Ut vestibulum ac diam ut interdum. Etiam hendrerit metus et eleifend pretium. Nam molestie facilisis neque, quis rhoncus urna vulputate in. Vestibulum quis diam at turpis sodales posuere eget et augue. Integer justo magna, faucibus ut ex eget, aliquet maximus ipsum. Praesent viverra lacus in fermentum porttitor. Curabitur et luctus massa. Morbi pellentesque eros quam, tempus auctor mauris egestas et. Nullam vel tincidunt augue, vulputate condimentum lectus. Morbi aliquam diam leo, et efficitur tortor blandit ut. Vestibulum luctus nibh et elit elementum, eget posuere leo porta.</p>
          </div>
        </div>
        <div class="row">
          <div class="col col-1 center">
            <a class="btn btn-primary" href="#">Download Full Album</a>
            <a class="btn btn-secondary" href="#">Listen on Soundcloud</a>
          </div>
        </div>
      </div>
    </section>

    <!-- tour section -->
    <a id='tour' />
    <section>
      <div class="container">
        <div class="row">
          <div class="col col-1 center">
            <h3>Tour</h3>
            <p>The Sunshine Serenade currently has no tour dates. Check back later for updated information or sign up for our newsletter to receive the latest news.</p>
            <a class="btn btn-primary" href="#">Sign Up for Newsletter</a>
          </div>
        </div>
      </div>
    </section>

    <!-- about section -->
    <a id='about'></a>
    <section>
      <div class="container">
        <div class="row">
          <div class="col col-1">
            <h3>About</h3>
          </div>
          <div class="col col-2">
            <p>The Sunshine Serenade is the brainchild of artist Matt Mitchell, based in Dallas, TX. He is currently writing and recording his first studio album - <i>Burn</i> - due out in the Summer of 2018.</p>
            <p>Combining elements of blues, rock and roll, jazz, and folk, The Sunshine Serenade tapped into a unique sound. He is heavily influenced by artists such as Jimi Hendrix, Modest Mouse, The Red Hot Chili Peppers, and Pink Floyd.</p>
            <p>Matt has been writing and creating music for nearly thirteen years, starting guitar at the age of 12 after his grandfather gave him a Johnson acoustic guitar as a gift.</p>
          </div>
        </div>
      </div>
    </section>
    </main>
    <footer>
      <div class="footer-upper">
        <div class="container">
          <div class="sitemap">
            <ul>
              <li><a href='#'>Home</a></li>
              <li><a href='#'>Listen</a></li>
              <li><a href='#'>Tour</a></li>
              <li><a href='#'>About</a></li>
              <li><a href='#'>Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="social">

        </div>
      </div>
      <div class="footer-lower">

      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="js/production.js"></script>
  </body>
</html>
