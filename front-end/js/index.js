setInterval(
  function() {
    $.get("../back-end/time.php", function(hour) {
      const realtimeClock = document.getElementById('realtime-clock');
      realtimeClock.innerHTML = hour;
    });
  }, 1000);

$('#hello-btn').on('click', function() {
  window.location.assign("login.html");
});