<?php
ob_start();
$id = $result['video_id'];
$date = $result['video_up_date'];
$views = $result['video_view'];
$name = $result['video_name'];
?>
<div class="videoplay pos videoplayer">
<div class='container mb-5'>
    <div class='card w-100'>
        <video class='card-img-top' src="<?='./uploads/'.$id.'.mp4';?>" controls></video>
        <div class='card-header justify-content-between'>
            <div class="titles" style="text-overflow: ellipsis;"><?=$name?>juyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy</div>
            <p id='view' class='text-muted m-0'>Views : <?=$views?></p>
        </div>
    </div>
</div>
</div>
<?php
$content = ob_get_clean();
require_once 'template.php';