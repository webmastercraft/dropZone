
<!DOCTYPE html>
<html lang="fr-fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Send quick videos when calendars won’t line up and you don’t have time to type a wall of text.">
        <title>Streamwo - Simple video hosting & sharing</title>
        <link rel="shortcut icon" href="favicon.png"/>
        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Fonts + Icons -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
        <link rel="stylesheet" href="https://unpkg.com/@tabler/core@latest/dist/css/tabler.min.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
        <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
        <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
        <link rel="stylesheet" href="./public/css/style.css">
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!--Cookie-->
        <!--MIXTURE SCRIPTS-->
        <script src="./public/js/nav.js"></script>
        <script src="./public/js/general.js"></script>
        <style>
    .lfzGCe {
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    background: rgb(26, 46, 59);
    color: rgb(255, 255, 255);
    list-style: none;
    margin: 0px;
    padding-top:3px;
    padding-bottom:3px;
}

@media  only screen and (max-width:4000px){.videoplay{width:1000px}}@media  only screen and (max-width:1100px){.first{margin:0}.ad1{margin:0}.videoplay{width:100%}.second{display:block}}body{-webkit-overflow-x:hidden;overflow-x:hidden}
.videoplayer {
    margin: 0 auto; /* Added */
    float: none; /* Added */
}

.eHMcZk {
    text-align:center;
    -webkit-box-align: center;
    color: rgb(255, 255, 255);
    font-size: 0.875rem;
    line-height: 1.5rem;
}
.gUCyqu {
    margin-left: auto;
    margin-right: auto;
    padding: 0.5rem 0px;
}

.bottom-color {
    display: block;
    width: 100%;
    height: .1875rem;
    background-image: -webkit-linear-gradient(left,#73D2F6,#08C 22%,#7FC400 36%,#FFD583 48%,#FFB21E 63%,#FF4D4D 76%,#503873);
    background-image: linear-gradient(to right,#73D2F6,#08C 22%,#7FC400 36%,#FFD583 48%,#FFB21E 63%,#FF4D4D 76%,#503873);
    content: '';
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink
}

@media only screen and (max-width: 600px) {
  .mobiles {
    max-width:300px;
  }
  .titles {
      font-size: 1.575rem;
  }
}

.center-screen {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    min-height: 80vh;
}
.btn-primary {
    color: #fff;
  background-color: #00adef;
  border-color: rgb(51, 179, 242);
}
.btn-primary:hover {
  color: #fff;
  background-color: rgb(51, 179, 242);
  border-color: rgb(51, 179, 242);
}
.btn-check:focus + .btn-primary, .btn-primary:focus {
  color: #fff;
  background-color: rgb(51, 179, 242);
  border-color: rgb(51, 179, 242);
  box-shadow: 0 0 0 0.25rem rgba(49, 132, 253, 0.5);
}
.btn-check:checked + .btn-primary-wo, .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: rgb(51, 179, 242);
  border-color: #0a53be;
}
.btn-check:checked + .btn-primary:focus, .btn-check:active + .btn-primary:focus, .btn-primaryactive:focus, .btn-primary.active:focus, .show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(49, 132, 253, 0.5);
}
.btn-primary:disabled, .btn-primary.disabled {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}
@media only screen and (max-width: 600px) {
  .card {
    min-width:300px;
    margin-left:0px;
  }
  .mt-5 {
    margin-top:1rem;
  }
}

.titles {
    word-wrap: break-word;
    text-align: left;
    font-size: 14px;
    font-weight: bold;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    color: #444;
    margin-right: auto;
    padding-right: 10px;
    margin-left: 2px;
    width: calc(100% - 110px);
    -webkit-font-smoothing: antialiased;
}

</style>
<style>

@media all and (min-device-width: 700px) and (max-device-width: 728px) {#leaderboard-pixfuture {transform: scale(0.9);}} @media all and (min-device-width: 671px) and (max-device-width: 699px) {#leaderboard-pixfuture {transform: scale(0.9);transform-origin: 0 0;}} @media all and (min-device-width: 651px) and (max-device-width: 670px) {#leaderboard-pixfuture {transform: scale(0.88);transform-origin: 0 0;}} @media all and (min-device-width: 631px) and (max-device-width: 650px) {#leaderboard-pixfuture {transform: scale(0.85);transform-origin: 0 0;}} @media all and (min-device-width: 601px) and (max-device-width: 630px) {#leaderboard-pixfuture {transform: scale(0.8);transform-origin: 0 0;}} @media all and (min-device-width: 601px) and (max-device-width: 630px) {#leaderboard-pixfuture {transform: scale(0.8);transform-origin: 0 0;}} @media all and (min-device-width: 560px) and (max-device-width: 600px) {#leaderboard-pixfuture {transform: scale(0.75);transform-origin: 0 0;}} @media all and (min-device-width: 520px) and (max-device-width: 559px) {#leaderboard-pixfuture {transform: scale(0.7);transform-origin: 0 0;}} @media all and (min-device-width: 491px) and (max-device-width: 519px) {#leaderboard-pixfuture {transform: scale(0.65);transform-origin: 0 0;}} @media all and (min-device-width: 451px) and (max-device-width: 490px) {#leaderboard-pixfuture {transform: scale(0.6);transform-origin: 0 0;}} @media all and (min-device-width: 401px) and (max-device-width: 450px) {#leaderboard-pixfuture {transform: scale(0.55);transform-origin: 0 0;}} @media all and (min-device-width: 371px) and (max-device-width: 400px) {#leaderboard-pixfuture {transform: scale(0.5);transform-origin: 0 0;}} @media all and (min-device-width: 341px) and (max-device-width: 370px) {#leaderboard-pixfuture {transform: scale(0.46);transform-origin: 0 0;}} @media all and (min-device-width: 301px) and (max-device-width: 340px) {#leaderboard-pixfuture {transform: scale(0.42);transform-origin: 0 0;}} @media all and (max-device-width: 300px) {#leaderboard-pixfuture {transform: scale(0.4);transform-origin: 0 0;}}

</style>

 

        <script>var root = "<?=$GLOBALS['root']?>"</script>
        
    </head>
    
    <body>
    <div class="bottom-color"></div>
    <nav class="navbar navbar-light" style="border-bottom:1p solid #fff">
        <div class="container">
          <a href="/" class="brand text-decoration-none" style="color:inherit; font-size:23px;">Streamwo</a>
          <div class="d-flex">
            <a type="button" href="/" style="margin-left:10px;" class="btn btn-primary">Home</a>&nbsp;&nbsp;
            <a type="button" href="mailto:abuse@streamwo.com" class="btn btn-danger">Report</a>
          </div>
        </div>
      </nav>
    </div>
        <?=$content?>

    </body>
</html>