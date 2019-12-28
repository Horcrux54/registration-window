function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

$("#myButton").click(function() {
  let index = 0;

  if (isEmail($("#email").val()) == false) {
    $("#emailError").css("display", "block");
  } else {
    $("#emailError").css("display", "none");
    index++;
  }

  if ($.isNumeric($("#tel").val()) == false) {
    $("#telError").css("display", "block");
  } else {
    $("#telError").css("display", "none");
    index++;
  }

  if (
    $("#password").val() !== $("#confirmPassword").val() ||
    $("#password").val() == ""
  ) {
    $("#confirmError").css("display", "block");
  } else {
    $("#confirmError").css("display", "none");
    index++;
  }

  if (index === 3) {
    alert("Вы зарегистрировались");
  }
});
