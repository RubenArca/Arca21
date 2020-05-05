jQuery(document).ready(function($) {
  if (Cookies.get('hide-cookies')) {
    $("#cookies-advice").remove();
  }

  $(".close-cookies-button").click(function() {
    $("#cookies-advice").remove();
    Cookies.set('hide-cookies', true);
  });
});
