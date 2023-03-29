$(document).ready(function () {
  $("#convert").on("click", function () {
    var lang_one = $("#lang_one").val();
    var lang_two = $("#lang_two").val();
    var text = $("#text").val();

    $.ajax({
      url: "process.php",
      type: "post",
      data: { lang_onee: lang_one, lang_twoo: lang_two, textt: text },
      success: function (status) {
        console.log(status);
      },
    });
  });
});
