document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("ctrl_hotspot_links").innerHTML += 
              "<h3 id='update_helper'>Helper Image Goes Here</h3>";
});






var $input = document.getElementById("ctrl_slide_image");

var event = new Event('input');
$input.addEventListener('input', function () { 
  console.log('ding');
});

$input.value = 'something';
$input.dispatchEvent(input);
