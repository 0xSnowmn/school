$("form.appForm div.input input:not(.no_float)")
  .on("focus", function() {
    $(this)
      .parent()
      .find("label")
      .addClass("focus");
  })
  .on("blur", function() {
    if ($(this).val() == "") {
      $(this)
        .parent()
        .find("label")
        .removeClass("focus");
    } else {
    }
  });
