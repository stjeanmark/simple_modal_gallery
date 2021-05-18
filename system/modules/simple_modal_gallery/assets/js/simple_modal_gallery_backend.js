document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("ctrl_hotspot_links").innerHTML += 
              "<h3 id='update_helper'>Helper Image Goes Here</h3>";
});





const input = document.getElementById('ctrl_slide_image');
const log = document.getElementById('update_helper');

input.addEventListener('change', updateValue);

function updateValue(e) {
  log.textContent = 'ding';
}
