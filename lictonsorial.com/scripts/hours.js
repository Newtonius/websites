$(function() {

  var d = new Date();
  var dow = d.getDay();
  var hod = d.getHours();
  var a, b;
  var status = document.getElementById("status");

  if (dow == 1) {
    a = document.getElementById("monday");
    b = document.getElementById("mHours");
    a.style.fontSize="18pt";
    a.style.color="#FFD700";
    a.style.textShadow="-1px 1px 10px #fff";
    b.style.textShadow="-1px 1px 10px #fff";
    if (hod < 10 || hod > 20) {
      status.innerHTML="Sorry, we're closed right now.";
      status.style.color="red";
    } else {
        status.innerHTML="Come in, we're open!";
        status.style.color="green";
      }
  } else if (dow == 2) {
      a = document.getElementById("tuesday");
      b = document.getElementById("tuHours");
      a.style.fontSize="18pt";
      a.style.color="#FFD700";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 20) {
        status.innerHTML="Sorry, we're closed right now.";
        status.style.color="red";
      } else {
          status.innerHTML="Come in, we're open!";
          status.style.color="green";
        }
  } else if (dow == 3) {
      a = document.getElementById("wednesday");
      b = document.getElementById("wHours");
      a.style.fontSize="18pt";
      a.style.color="#FFD700";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 20) {
        status.innerHTML="Sorry, we're closed right now.";
        status.style.color="red";
      } else {
          status.innerHTML="Come in, we're open!";
          status.style.color="green";
        }
  } else if (dow == 4) {
      a = document.getElementById("thursday");
      b = document.getElementById("thHours");
      a.style.fontSize="18pt";
      a.style.color="#FFD700";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 20) {
        status.innerHTML="Sorry, we're closed right now.";
        status.style.color="red";
      } else {
          status.innerHTML="Come in, we're open!";
          status.style.color="green";
        }
  } else if (dow == 5) {
      a = document.getElementById("friday");
      b = document.getElementById("fHours");
      a.style.fontSize="18pt";
      a.style.color="#FFD700";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 20) {
        status.innerHTML="Sorry, we're closed right now.";
        status.style.color="red";
      } else {
          status.innerHTML="Come in, we're open!";
          status.style.color="green";
        }
  } else if (dow == 6) {
      a = document.getElementById("saturday");
      b = document.getElementById("saHours");
      a.style.fontSize="18pt";
      a.style.color="#FFD700";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 20) {
        status.innerHTML="Sorry, we're closed right now.";
        status.style.color="red";
      } else {
          status.innerHTML="Come in, we're open!";
          status.style.color="green";
        }
  } else if (dow == 0) {
      a = document.getElementById("sunday");
      b = document.getElementById("suHours");
      a.style.fontSize="18pt";
      a.style.color="#FFD700";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 12 || hod > 17) {
        status.innerHTML="Sorry, we're closed right now.";
        status.style.color="red";
      } else {
          status.innerHTML="Come in, we're open!";
          status.style.color="green";
        }
    } else {}
});
