/**
 * Copy to clipboard
 * @param {STRING} id ID HTML
 */
function copy_val(id){
    var input = document.getElementById(id);

    input.setSelectionRange(0, 99999); /* For mobile devices */
    /* Select the text field */
    input.select();
    

    document.execCommand("copy");
}

/**
 * Function generates an unique ID
 * 
 * @return {INT} id ID uniques
 */
function id_gen() {
    let id = Math.random().toString(36).substring(2, 6) + Math.random().toString(36).substring(2, 6);
          
    return id;
}

function last_video_recover(){
    var id = Cookies.get('last_upload');

    if(id != undefined){
        $("#last_video_up").fadeIn();
        $("#last_video_up a").attr('href',root+id);
    }
    else{
        $("#last_video_up").fadeOut();
    }
}