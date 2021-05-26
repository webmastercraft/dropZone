<?php
ob_start();
$id = $result['video_id'];
$date = $result['video_up_date'];
$views = $result['video_view'];
$name = $result['video_name'];
?>
    <style>
      @media (max-width: 575.98px){
.container {
    margin-top: 0; 
} 
.ad-mobile {
    margin-bottom:20px;
    text-align:center;
}
.container {
    padding-right: 0; 
    padding-left: 0;
    margin:0;
}
}
@media (max-width: 660px) {
    .rowgrid{
      display: flex;
      flex-flow: column-reverse;
      margin-top:-20px;
     }
     .navbar{
     display:none;
    }
    .bottom-color{
     display:none;
    }
    .main {
      min-height: 0vh;
    }
    }
</style>
<div class="container rowgrid">
<div class="ad-mobile mb-2 mt-2 text-center">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MobileTop2 -->
<div id="leaderboard-pixfuture">    
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3217150269412558"
     data-ad-slot="5306617988"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<div class="videoplay pos videoplayer">
<div class='container mb-2' style="margin-bottom:10px;">
      <video id="my-video" class="video-js vjs-big-play-centered vjs-16-9" controls playsinline data-setup='{"fluid": true}' preload="metadata">
      <source id="change-src" style="border-radius:2px;" src="<?='https://cdn.streamwo.com/'.$id.'.mp4';?>" type="video/mp4">
      </video>
        <div class='card w-100'>
        <div class='card-header justify-content-between'>
            <div class="titles" style="text-overflow: ellipsis;"><?=$name?></div>
            <p id='view' class='text-muted m-0'><?=$views?> views</p>
        </div>
    </div>
</div>
</div><br>
<?php
$content = ob_get_clean();
require_once 'template_video.php';