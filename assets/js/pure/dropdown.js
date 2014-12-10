ready(function () {

  // dropdown
  k('[am-dropdown-toggle]').click(function() {
    k(this).parent().toggleClass('dropdown-open');
  });
  
});