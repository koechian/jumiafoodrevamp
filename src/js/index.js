$(".register").hide();

$("#register-button").click(function () {
  $(".login").hide();
  $(".register").show();
});
$("#sign-in-button").click(function () {
  $(".register").hide();
  $(".login").show();
});
$("#done").click(function () {
  $(".register").hide();
  $(".login").show();
});

$("#landing").click(function () {
  window.location.href = "/src/landing.html";
});
