$("#button").click(function () {
  $.ajax({
    url: "load.php",
    type: "GET",

    success: function (response) {
      //console.log(response);
      $("#tid").html(response);
    },
    error: function (xhr, status, error) {
      console.log(error);
    },
  });
});
