document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("ctrl_hotspot_links").innerHTML += 
              "<h3 id='update_helper'>Helper Image Goes Here</h3>";
});



var intervalId = window.setInterval(function(){
    
    var picture = document.getElementsByClassName("gimage");
    var src = picture[0].src;
    
    if(src != '') {
        console.log("image Source: " + src);
    }
    
    console.log("Anyway: " + src);
    
    
}, 5000);

