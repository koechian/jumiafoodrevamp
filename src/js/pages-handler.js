$(document).ready(function () {
  jQuery(".card").click(function () {
    this.children[5].click();
  });

  $(".add-to-cart").on("click", function (e) {
    var data = {
      user: $("#user-id").val(),
      item: $(this).attr("data-id"),
    };
    $.ajax({
      type: "GET",
      url: "update-cart.php",
      data: data,
      success: function (response) {
        alert("Item has been added to cart");
      },
    });
  });
});
