document.addEventListener("DOMContentLoaded", function() {
    //document.getElementById("ctrl_hotspot_links").innerHTML += 
             // "<h3 id='update_helper'>Helper Image Goes Here</h3>";


});

var intervalId = window.setInterval(function(){
    
    var picture = document.getElementsByClassName("gimage");
    var toAppend = document.getElementById("pal_slide_legend");
    var title = picture[0].title;
    var src = title.substr(0,title.indexOf(' ')); 
    
    if(src != '') {
        console.log("image Source: " + src);
        
         var theTable = document.getElementsByClassName("tl_modulewizard");
    
        for (var i = 0, row; row = theTable.rows[i]; i++) {
            row.insertAdjacentHTML("afterend", "<img style='margin-top:5px; padding:10px;' src='" + src + "' width='100%'>");
        }
        
        
       // toAppend.insertAdjacentHTML("afterend", "<img style='margin-top:5px; padding:10px;' src='" + src + "' width='100%'>");
        
        //stop running once we have found our image
        clearInterval(intervalId) 
    }
}, 1000);

