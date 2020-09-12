const formLogin = document.getElementById('form-login');

formLogin.onsubmit = function(e) {
  // e.preventDefault();
  fetch(formLogin.action, { 
    method:'post', body: new FormData(formLogin)
  });
};

$('#login-btn').click(function() {
  $.post($('#form-login').action, function(data, status) {

  });
});
