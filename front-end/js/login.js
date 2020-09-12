const formLogin = document.getElementById('form-login');
const username = document.getElementById('username');
const password = document.getElementById('password');
const message = document.getElementById('message');

// formLogin.onsubmit = function(e) {
//   // e.preventDefault();
//   fetch(formLogin.action, { 
//     method:'post', body: new FormData(formLogin)
//   });
// };

$('#login-btn').click(function() {
  $.post(formLogin.action, { username, password },  function(data) {
    let response = $.parseJSON(data);
    message.innerHTML = response;
  });
});
