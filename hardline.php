<?php include('php/isup.php') ?>
<!-- Hi! Fight me 1v1, Fox Only, No Items! -->
<!-- Also, why are you here> -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>About | BattleLauncher</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59667323-2', 'auto');
  ga('send', 'pageview');

</script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="shortcut icon" href="http://launch.plygnd.me/favicon.ico" type="image/icon"> <link rel="icon" href="http://launch.plygnd.me/favicon.ico" type="image/icon">
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<video loop poster="images/bf3-campaign.jpg" preload autoplay id="backgroundMovie" src="bf4trailer.webm"></video>
<p id="pattern"></p>

<div id="logoBL">
<p id="randomPls" class=".logostyle"><a href="/"></a></p>
</div>
<a href="https://github.com/plygnd"><img style="position: absolute; top: 0; right: 0; border: 0; width: 74.5px; height: 74.5px;" src="https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png"></a>
<div id="ping">
<?php echo $status.'<hr />';
echo $status2; ?>
</div>

<div id="about-container">
<div class="about-text"><h2>Dude! Relax! The game isn't even out yet!</h2><hr />
Just like many others, it looks like you're too excited to play this new instalment in the Battlefield franchise.<br />If you want to pre-order the game you can do so via <a class="about-ref" href="http://www.battlefield.com/hardline/buy?intcmp=HARDLINE_GLOBAL_all_pages_Main_Navigation_top-right_Pre-Order-Now">Origin (PC and Consoles)</a> or via <a class="about-ref" href="http://www.g2play.net/category/7363/battlefield-hardline-pre-order-origin-key/?___store=g2play_net_english&acc=dafbo">G2Play[Kinguin] (PC)</a>
</div>
</div>

<div id="credits">©2014-2015 <a href="http://plygnd.me">Plygnd</a> | <a href="/about">What is this?</a> | Battlefield is owned by Electronic Arts</div>

<!-- ChangeTip Widget -->
<div class="changetip_tipme_button" data-bid="ErPGtXfPseXYp7vsgWbBxT" data-uid="FS97mxERHAMPZmCehn3wnA"></div><script>(function(document,script,id){var js,r=document.getElementsByTagName(script)[0],protocol=/^http:/.test(document.location)?'http':'https';if(!document.getElementById(id)){js=document.createElement(script);js.id=id;js.src=protocol+'://widgets.changetip.com/public/js/widgets.js';r.parentNode.insertBefore(js,r)}}(document,'script','changetip_w_0'));</script>

<!-- Logo Randomiser -->
<script>
      var randomPls = {
        paths: [
          "http://launch.plygnd.me/logos/logo-hl-optimised.png",
          "http://launch.plygnd.me/logos/logo-bf4-optimised.png",
          "http://launch.plygnd.me/logos/logo-optimised.png",
		  "http://launch.plygnd.me/logos/logo-frankenstein-optimised.png"
        ],
        
        generate: function(){
          var path = randomPls.paths[Math.floor(Math.random()*randomPls.paths.length)];
          var img = new Image();
          img.src = path;
          $("#randomPls a").html(img);
          $("#randomPls a").attr("href", "/");
        }
      }
      
      randomPls.generate();
</script>
</body>
</html>