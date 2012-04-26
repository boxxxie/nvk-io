<div class="flick-stuff-v2">
<?php
// *********************************************************************************************************************************************
//
// ### License & Attribution 
// - Flickr Plugin Designed and built by [me @nvk](http://twitter.com/nvk).
// - I've made this personal site code available on [ GitHub feel free to fork it](), don't forget to attribute me [@nvk](http://github.com/nvk)
// - Code licensed under the [Apache License v2.0](http://www.apache.org/licenses/LICENSE-2.0). Documentation licensed under [CC BY 3.0](http://creativecommons.org/licenses/by/3.0/).
//
// *********************************************************************************************************************************************
	  $flickr_id = '29044926%40N00';
	  $feed_url = 'http://api.flickr.com/services/feeds/photos_public.gne?id='.$flickr_id.'&lang=en-us&format=rss_200';
	  $flickr = html_entity_decode(file_get_contents($feed_url));
	  $images = array();
	  preg_match_all('/http:\/\/farm8.+m\.jpg/',$flickr,$images);
	  foreach($images as $value){
	  	foreach($value as $image){
		$bigger = preg_replace("/m\.jpg/","b.jpg",$image);
		echo '<a href="'. $bigger .'" rel="lightbox[gallery]"><img src="'. $image .'" class="smaller-image"/></a>';
	};
	  };
?>
<br/>
</div>

