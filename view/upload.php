<?php
ob_start();?>
<!--Upload button-->


<!--Sharing box-->


<div class="container">
    <div id="uplo">
<div id="landingrow">
    <div class=" d-flex ml-auto mr-auto justify-content-center">
    <div class="container center-screen" style="max-width:500px;">
        <div class="justify-content-center d-flex">
        <svg style="color:#1c303c;" xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="currentColor" class="bi mb-3 bi-cloud-upload-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/> </svg>
    </div>
        <div class="titles" style="color:#1b2f3b; line-height: 1.1; font-weight:600; font-size: 1.975rem;">Drag and drop <div></div>anywhere to upload</div>
        <div class="d-grid gap-2">
        <button id="clickable" class="btn btn-primary mt-4" name="but_upload" style="font-weight:600; font-size:18px;"><div style="margin-top:6px; margin-bottom:6px;"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16"> <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/> </svg>  Or choose videos</div></button>

      </div>
        <div style="float:left;" class="mt-4">
        <div style="float:left; color:#1b2f3b; font-weight:600;">Privacy</div>
        <select class="form-select" aria-label="Default select example" disabled>
            <option style="color:#1b2f3b;" selected>Anyone can see this video</option>
            <option style="color:#1b2f3b;" value="1">Password</option>
          </select>
          <div class='container mt-4' id='last_video_up' style='display:none;'>
    <a class="btn d-block btn-primary-outline ml-auto mr-auto"><i data-feather="skip-back"></i>Watch your last video uploaded</a>
</div>
    </div>
</div>
</div>
</div>
</div>
  
</div>
<!--Files-->
<div class='container mt-4 mb-5 responsive' style="display:none !important;" id='sharing-box'>
    <div class="card w-75 ml-auto mr-auto">
        <div class="card-header">
            <h3 class="card-title"> <div id='alert_upload' style="display:inline-block;"><span style='display:none;' id="up_success"><span style="color:green;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"> <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/> </svg>&nbsp;&nbsp;Upload success</span></span></div></h3> </div>
        <div class='card-body'>
            <input type="text" id='link' class="d-block form-control w-75 ml-auto mr-auto text-center mb-2" readonly>
            <div id='sharing-actions' class='d-flex justify-content-center'>
                <button class="btn btn-outline-primary" id='share_link' onclick="copy_val('link');"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16"> <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/> <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/> </svg>&nbsp;Copy Link</button>
                <a class="btn btn-outline-secondary ml-2" id='watch' style='display:none'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"> <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/> <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/> </svg>&nbsp;Watch</a>
            </div>
            
        </div>
    </div>
</div>
</div>
<div class="preview" style="display: flex; flex-direction: column; justify-content: center; margin-top:4rem;">
<div class="container d-flex justify-content-center responsive" id='previews'>

    <div id='template' class='card w-50 pr-3 pl-3 pb-1 pr-3 responsive'>
        <img class='card-img-top w-25 d-block ml-auto mr-auto' data-dz-thumbnail />
        <h4 class='name text-center mt-1' data-dz-name></h4>
        <!--Progress bar-->
        <div>
            <div class='progress active' role='progressbar' aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                <div class="progress-bar progress-bar-success bg-green" syle='width:0%;' data-dz-uploadprogress></div>
            </div>
            <p class='text-muted text-center font-weight-light' id='percent'></p>

        </div>
        <p class="text-muted" data-dz-size></p>
        <div id="alert_upload"><span style='display:none;' id="up_failed"><i data-feather="check" class='mr-1'></i><div class="alert alert-primary" role="alert"><strong>Upload failed</strong> (File too big (Limit: 30MB) or not allowed extension)</div></span></div>

    </div>
</div>

<!--Error & Sucess messages-->
<!--Last video-->
  
<script>last_video_recover();</script>
<script>active('upload');</script>
<script>var id = id_gen();
    $('#link').val(root + id);
    $('#watch').attr("href",root+ id);
</script>
<script src='./public/js/dropzone_config.js'></script><!--VERY IMPORTANT IMPORTANT : Dropzone-->
<script>$("input").change(function () {
   $("#landingrow").hide(); 
});

</script>
<?php
$content = ob_get_clean();
require_once 'template.php';