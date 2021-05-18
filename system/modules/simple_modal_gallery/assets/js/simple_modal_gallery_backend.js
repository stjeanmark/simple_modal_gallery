document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("ctrl_hotspot_links").innerHTML += 
              "<h3 id='update_helper'>Helper Image Goes Here</h3>";
});






var $input = document.getElementById("ctrl_slide_image");
var last$inputValue = $input.value;
setInterval(function() {
    var newValue = $input.value;
    if (last$inputValue != newValue) {
        last$inputValue = newValue;
        handleValueChange();
    }
}, 50); // 20 times/second
function handleValueChange() {
    console.log("$input's value changed: " + $input.value);
}
// Trigger a change
setTimeout(function() {
    $input.value = "new value";
}, 800);
