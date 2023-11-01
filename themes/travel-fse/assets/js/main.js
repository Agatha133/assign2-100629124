"use strict";

jQuery(document).ready(function ($) {
  /*------------------------------------------------
            LOADER
  ------------------------------------------------*/
  $(window).on('load', function () {
    $("#loader-wrapper").fadeOut();
    $("#loaded").delay(1000).fadeOut("slow");
  });
});
