function numberInput(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
  return true;
}

function numberInput2(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 53))

    return false;
  return true;
}

function hitungEvm() {
var ev = $(".ev").val();
var pv = $(".pv").val();
var ac = $(".ac").val();
var bac = $(".bac").val();



a = ev - pv ; 
b = ev - ac ;
c = ev/pv;
d = ev/ac;
$(".sv").val(a);
$(".pv").val(b);
$(".spi").val(d);
$(".cpi").val(c);
}