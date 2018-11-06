window.onload = function()
{
  setTimeout(function () { id('loader').remove() }, 400);
  slide_home = new slider('slide', 2000);
  slide_home.initSlide();
  slide_home.playSlide();

  id('tel').onkeyup = function()
  {
    mascara(this, mtel);
  }
  id('cpf').onkeyup = function()
  {
    mascara(this, mcpf);
  }
  id('cep').onkeyup = function()
  {
    mascara(this, mcep);
  }
  id('numero').onkeyup = function()
  {
    mascara(this, mnum);
  }
}
