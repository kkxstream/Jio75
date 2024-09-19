/* 

Copyright 2024-2025 kkxstream, Inc.
Created By: kkxstream

*/

document.getElementById("refreshButton").addEventListener("click", function () {
  window.location.href = "login/refreshLogin.php";
});

document.getElementById("homeButton").addEventListener("click", function () {
  window.location.href = "index.php";
});

document.getElementById("logoutButton").addEventListener("click", function () {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "login/logout.php", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      alert(xhr.responseText);
    }
  };
  xhr.send();
});
