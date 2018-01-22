var
      a =      document.getElementById('home'),
      b =      document.getElementById('resume'),
      c =      document.getElementById('projects'),
      d =      document.getElementById('gallery'),
      e =      document.getElementById('news'),
      n =      document.getElementById('nav');

  n.onmouseover = function () {
    mouseOver()
  };
  n.onmouseout = function () {
    mouseOut()
  };

  function mouseOver() {
    a.src = '/GFX/nav-icons/home_icon2.png';
    b.src = '/GFX/nav-icons/file_icon2.png';
    c.src = '/GFX/nav-icons/hammer_icon2.png';
    d.src = '/GFX/nav-icons/gallery_icon2.png';
    e.src = '/GFX/nav-icons/earth_icon2.png';
  }
  function mouseOut() {
    a.src = '/GFX/nav-icons/home_icon.png';
    b.src = '/GFX/nav-icons/file_icon.png';
    c.src = '/GFX/nav-icons/hammer_icon.png';
    d.src = '/GFX/nav-icons/gallery_icon.png';
    e.src = '/GFX/nav-icons/earth_icon.png';
  }
