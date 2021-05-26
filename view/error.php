<?php
ob_start();?>
    <meta http-equiv="refresh" content="5;url=<?php echo $_SERVER['REQUEST_URI']; ?>" />
<style>
    @media only screen and (max-width: 600px) {
  .mobiletext {
    max-width:320px;
    margin-left:22px;
  }
}
</style>
<div class="page">
    <div class="page-content">
    <div class="container text-center" style="margin-top:5rem;">
        <div class="spinner-border text-dark mb-3" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        <h1 class="h2 mobileh2">Video in processing</h1>
        <p class="text-muted font-weight-normal mb-7 mobiletext" style="font-size:18px;">Please wait a few seconds. We'll refresh this page when it's ready.&hellip;</p>
    </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'template.php';