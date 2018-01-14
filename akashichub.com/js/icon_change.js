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
    a.src = '/GFX/home_icon2.png';
    b.src = '/GFX/file_icon2.png';
    c.src = '/GFX/hammer_icon2.png';
    d.src = '/GFX/gallery_icon2.png';
    e.src = '/GFX/earth_icon2.png';
  }
  function mouseOut() {
    a.src = '/GFX/home_icon.png';
    b.src = '/GFX/file_icon.png';
    c.src = '/GFX/hammer_icon.png';
    d.src = '/GFX/gallery_icon.png';
    e.src = '/GFX/earth_icon.png';
  }
