$(document) .on('ready',main){
  "use strict"; // Start of use strict
  function main () {
    $('#login').submit(function (event) {
       event.preventDefault();
       $.ajax({
        url:$(this).attr('action'),
        type:$(this).attr('method'),
        data:$(this).serialize(),
        success:function  (resp) {
          alert(resp);
        }
       });
    })
  }
}