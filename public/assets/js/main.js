var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: false,
  touch:false
});

// Example starter JavaScript for disabling form submissions if there are invalid fields

var loadFile = function(event) {
  var output = document.getElementById('img_perfil_user');
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function() {
    URL.revokeObjectURL(output.src) // free memory
  }
};