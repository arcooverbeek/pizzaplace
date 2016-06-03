$(document).ready(function() {

  $('#toggle-description').click(function(){
    console.log('sda');
    console.log($(this));
    console.log($(this).next());

    $(this).next().toggle();
  });






  console.log($('form#add-to-cart'));


  $('form#add-to-cart').submit(function(e) {
    e.preventDefault();

    $.post( 'add-to-cart.php', function(data) {
      $('#total-number-of-items').text(data);
    });

  });

});
