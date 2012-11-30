<!DOCTYPE html>
<html lang="en">
  <head>
	  <script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
    <meta charset="utf-8">
    <title>Rodolfo Novak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.lightbox-0.5.css"/>
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/nvk.css">
	<link rel="shortcut icon" href="img/favicon.png">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <body>


    <div class="container">
		<div class="row content">
			<div class="span2" style="position:fixed;top:44px;">
				<?php include 'includes/left-nav.include.php'; ?>
			</div>

			
			<div class="span10 offset2">
				<?php include 'includes/content.include.php'; ?>

				<?php include 'includes/footer.include.php'; ?>

			</div>
		</div>
    </div> <!-- /container -->

    <!-- Le javascript ================================================== -->

	<script type="text/javascript" src="js/bootstrap.mini.js" ></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/lightbox.js"></script>
<script type="text/javascript">
// =========================================================   Google Analytics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1817255-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  // ============================================  Smoth Scrolling
  
  $(document).ready(function() {
    function filterPath(string) {
    return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
    }
    var locationPath = filterPath(location.pathname);
    var scrollElem = scrollableElement('html', 'body');

    $('a[href*=#]').each(function() {
      var thisPath = filterPath(this.pathname) || locationPath;
      if (  locationPath == thisPath
      && (location.hostname == this.hostname || !this.hostname)
      && this.hash.replace(/#/,'') ) {
        var $target = $(this.hash), target = this.hash;
        if (target) {
          var targetOffset = $target.offset().top;
          $(this).click(function(event) {
            event.preventDefault();
            $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
              location.hash = target;
            });
          });
        }
      }
    });

    // use the first element that is "scrollable"
    function scrollableElement(els) {
      for (var i = 0, argLength = arguments.length; i <argLength; i++) {
        var el = arguments[i],
            $scrollElement = $(el);
        if ($scrollElement.scrollTop()> 0) {
          return el;
        } else {
          $scrollElement.scrollTop(1);
          var isScrollable = $scrollElement.scrollTop()> 0;
          $scrollElement.scrollTop(0);
          if (isScrollable) {
            return el;
          }
        }
      }
      return [];
    }

  });

</script>

 <!-- ================================================== Twitter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  </body>
</html>
