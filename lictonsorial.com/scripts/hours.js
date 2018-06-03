$(function() {

  var d = new Date();
  var dow = d.getDay();
  var hod = d.getHours();
  var a, b, c;

  if (dow == 1) {
    a = document.getElementById("monday");
    b = document.getElementById("mHours");
    c = document.getElementById("mStatus");
    a.style.fontSize="25pt";
    a.style.textShadow="-1px 1px 10px #fff";
    b.style.textShadow="-1px 1px 10px #fff";
    if (hod < 10 || hod > 22) {
      c.innerHTML="Closed";
      c.style.color="red";
    } else {
        c.innerHTML="open";
        c.style.color="green";
      }
  } else if (dow == 2) {
      a = document.getElementById("tuesday");
      b = document.getElementById("tuHours");
      c = document.getElementById("tuStatus");
      a.style.fontSize="25pt";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 22) {
        c.innerHTML="Closed";
        c.style.color="red";
      } else {
          c.innerHTML="open";
          c.style.color="green";
        }
  } else if (dow == 3) {
      a = document.getElementById("wednesday");
      b = document.getElementById("wHours");
      c = document.getElementById("wStatus");
      a.style.fontSize="25pt";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 22) {
        c.innerHTML="Closed";
        c.style.color="red";
      } else {
          c.innerHTML="open";
          c.style.color="green";
        }
  } else if (dow == 4) {
      a = document.getElementById("thursday");
      b = document.getElementById("thHours");
      c = document.getElementById("thStatus");
      a.style.fontSize="25pt";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 22) {
        c.innerHTML="Closed";
        c.style.color="red";
      } else {
          c.innerHTML="open";
          c.style.color="green";
        }
  } else if (dow == 5) {
      a = document.getElementById("friday");
      b = document.getElementById("fHours");
      c = document.getElementById("fStatus");
      a.style.fontSize="25pt";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 22) {
        c.innerHTML="Closed";
        c.style.color="red";
      } else {
          c.innerHTML="open";
          c.style.color="green";
        }
  } else if (dow == 6) {
      a = document.getElementById("saturday");
      b = document.getElementById("saHours");
      c = document.getElementById("saStatus");
      a.style.fontSize="25pt";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 10 || hod > 22) {
        c.innerHTML="Closed";
        c.style.color="red";
      } else {
          c.innerHTML="open";
          c.style.color="green";
        }
  } else if (dow == 0) {
      a = document.getElementById("sunday");
      b = document.getElementById("suHours");
      c = document.getElementById("suStatus");
      a.style.fontSize="25pt";
      a.style.textShadow="-1px 1px 10px #fff";
      b.style.textShadow="-1px 1px 10px #fff";
      if (hod < 12 || hod > 17) {
        c.innerHTML="Closed";
        c.style.color="red";
      } else {
          c.innerHTML="open";
          c.style.color="green";
        }
    } else {}
});
