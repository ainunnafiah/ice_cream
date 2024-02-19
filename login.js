$(document).ready(function() {
  $("#loginForm").submit(function(event) {
    event.preventDefault(); 

    var username = $("#username").val();
    var password = $("#password").val();

    if (verifyLogin(username, password)) {
      alert("Selamat datang!");
      window.location.href = 'ice.html';
    } else {
      alert("Username atau password salah, Silakan Coba lagi!");
    }
  });
});

function verifyLogin(username, password) {
  
  var storedUsername = "ainun";
  var storedPassword = "2892";

  return username === storedUsername && password === storedPassword;
}
