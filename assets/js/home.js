window.onload = function()
{
  setTimeout(function () { id('loader').style.display = 'none' }, 400);
  slide_home = new slider('slide-home', 2000);
  slide_home.initSlide();
  slide_home.playSlide();
}
