var previewNode = document.querySelector("#template");
previewNode.id = "";

var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

/**
 * dropzone variable
 */
var dropzone = new Dropzone(document.body,{
    url: root+"index.php?action=upload&id=" + id, // URL PHP
    previewsContainer: "#previews", // HTML, previews
    acceptedFiles:'video/mp4',
    addRemoveLinks:true,
    maxFiles:1,
    paralleluploads:1,
    previewTemplate:previewTemplate,
    clickable: "#clickable", // BUTTON
    maxFilesize: 99
});


//Events of dropzone
dropzone.on("uploadprogress", function(file){
    var progress = file.upload.progress;
    document.querySelector(".progress-bar").style.width = progress + "%";
    $('#percent').html(Math.trunc(progress) + '%');
}
);

dropzone.on("error",function(file,errorMessage){
    $("#err_msg").html(errorMessage)
    $("#up_failed").fadeIn();
    $("#sharing-box").fadeOut();

});

dropzone.on("addedfile",function(file){
    $("#indications").fadeOut();
    $('#last_video_up').fadeOut();
    $("#landingrow").hide();
    if(dropzone.files.length > 1){
        dropzone.removeFile(file);
    }
});

dropzone.on("removedfile",function(){
    if(dropzone.files.length <= 0){
        $("#indications").fadeIn();
        $('#last_video_up').fadeIn();
        last_video_recover();
        $("#up_failed").fadeOut();
        $("#up_success").fadeOut();
        $("#sharing-box").fadeOut();
    }
});

dropzone.on("sending",function(){
    $("#sharing-box").fadeIn();
})

dropzone.on("success",function(){
    $('#up_success').fadeIn();
    $('#watch').fadeIn();
})