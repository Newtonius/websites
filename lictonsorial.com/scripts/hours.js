$(function() {

  var d = new Date();
  var dow = d.getDay();
  var hod = d.getHours();

  if (dow == 1) {
    var a = document.getElementById("monday");
    var b = document.getElementById("mHours");
    var c = document.getElementById("mStatus");
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
      var a = document.getElementById("tuesday");
      var b = document.getElementById("tuHours");
      var c = document.getElementById("tuStatus");
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
      var a = document.getElementById("wednesday");
      var b = document.getElementById("wHours");
      var c = document.getElementById("wStatus");
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
      var a = document.getElementById("thursday");
      var b = document.getElementById("thHours");
      var c = document.getElementById("thStatus");
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
      var a = document.getElementById("friday");
      var b = document.getElementById("fHours");
      var c = document.getElementById("fStatus");
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
      var a = document.getElementById("saturday");
      var b = document.getElementById("saHours");
      var c = document.getElementById("saStatus");
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
  } else if (dow == 7) {
      var a = document.getElementById("sunday");
      var b = document.getElementById("suHours");
      var c = document.getElementById("suStatus");
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
