$(document).ready(function () {
  fetchCart($("#user-id").val());
  jQuery(".card").click(function () {
    this.children[5].click();
  });
  $(".add-to-cart").on("click", function (e) {
    var data = {
      id: $("#user-id").val(),
      item: $(this).attr("data-id"),
      action: "insert",
    };
    $.ajax({
      type: "GET",
      url: "../components/cart-handler.php",
      data: data,
      success: function (response) {
        iziToast.success({
          title: "OK",
          message: "Item has been Added to Cart",
        });
        fetchCart(data["id"]);
      },
    });
  });

  function fetchCart(id) {
    var data = {
      id: id,
      action: "fetch",
    };
    $.ajax({
      type: "GET",
      url: "../components/cart-handler.php",
      data: data,
      success: function (response) {
        var cart = JSON.parse(response);
        $("#cart").attr("data-after", cart.length);
      },
    });
  }
});
