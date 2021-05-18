document.addEventListener("DOMContentLoaded", function() {
    //document.getElementById("ctrl_hotspot_links").innerHTML += 
             // "<h3 id='update_helper'>Helper Image Goes Here</h3>";
});



var intervalId = window.setInterval(function(){
    
    var picture = document.getElementsByClassName("gimage");
    var toAppend = document.getElementById("pal_slide_legend");
    var src = picture[0].src;
    
    if(src != '') {
        console.log("image Source: " + src);
        
        toAppend.append("<img src='" + src + "' width='100%'>");
        
        //stop running once we have found our image
        clearInterval(intervalId) 
    }
    
}, 2000);

