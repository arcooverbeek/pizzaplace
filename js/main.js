// Plan van aanpak

// alleen nummers toestaan op input

// min en max toekennen aan de input?

// button in mand inactief maken

var qi = $('input#quantity-input');
$('input#quantity-input').on('keyup', function(event) {
  if ($('input#quantity-input').val() != '') {
     $('input#add-to-cart').removeAttr('disabled');
  } else {
    $('input#add-to-cart').attr('disabled', 'disabled');
  }
});


if ($('input#quantity-input').val() == '') {
  $('input#add-to-cart').attr('disabled', 'disabled');
}
