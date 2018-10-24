/* Máscaras ER */
function mascara(o,f){
  v_obj=o
  v_fun=f
  setTimeout("execmascara()",1)
}
function execmascara(){
  v_obj.value=v_fun(v_obj.value)
}
function mnum(v){
  v=v.replace(/\D/g,"");
  return v;
}
function mtel(v){
  v=v.replace(/\D/g,"");
  v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
  v=v.replace(/(\d)(\d{4})$/,"$1-$2");
  return v;
}
function mcpf(v){
  v=v.replace(/\D/g,"");
  v=v.replace(/(\d{3})(\d)/,"$1.$2");
  v=v.replace(/(\d{3})(\d)/,"$1.$2");
  v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
  return v;
}
function mcnpj(v){
  v=v.replace(/\D/g,"");
  v=v.replace(/^(\d{2})(\d)/,"$1.$2");
  v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3");
  v=v.replace(/\.(\d{3})(\d)/,".$1/$2");
  v=v.replace(/(\d{4})(\d)/,"$1-$2");
  return v;
}
function mcep(v){
  v=v.replace(/\D/g,"");
  v=v.replace(/^(\d{5})(\d)/,"$1-$2");
  return v;
}
function id(o){
  return document.getElementById(o);
}
function tag(id, o){
  return id.getElementsByTagName(o);
}
window.onload = function(){
  id('tel').onkeyup = function(){
    mascara(this, mtel);
  }
  id('cpf').onkeyup = function(){
    mascara(this, mcpf);
  }
  id('cep').onkeyup = function(){
    mascara(this, mcep);
  }
  id('numero').onkeyup = function(){
    mascara(this, mnum);
  }
}
function inputs(input, select, textarea){
  o_input=input
  o_select=select
  o_textarea=textarea
  disableInputs()
}
function disableInputs(){
  for(i = 0; i < o_select.length; i++){ o_select[i].disabled = true }
  for(i = 0; i < o_textarea.length; i++){ o_textarea[i].disabled = true }
  for(i = 0; i < o_input.length; i++){
    if(o_input[i].type == 'radio' || o_input[i].type == 'checkbox'){
      o_input[i].disabled = true;
    } else {
      o_input[i].readOnly = true;
    }
  }
}
id('form').onsubmit = function(){
  var input = tag(this, 'input'), select = tag(this, 'select'), textarea = tag(this, 'textarea');
  inputs(input, select, textarea);
  return false
}
focusinput = document.querySelectorAll('input, textarea, select');
for(i=0; i < focusinput.length; i++){
  focusinput[i].onfocus = function(){
    this.nextElementSibling.classList.add('focusIn')
  }
  focusinput[i].onblur = function(){
    var pattern = this.getAttribute('pattern'),
    pattern = pattern? new RegExp(pattern) : new RegExp('[^\s]', 'i');
    if(!pattern.test(this.value)) {
      this.nextElementSibling.classList.remove('focusIn')
    }
  }
}

function triggerModal(m){
  o_modal = m
  toggleModal()
}
function toggleModal(){
  o_modal=id(o_modal)
  o_body=tag(document, 'body')[0]
  toggleClass(o_modal, 'opened');
  toggleClass(o_body, 'no-scroll')
}
function toggleClass(o, c) { o.classList.contains(c)? removeClass(o, c) : addClass(o, c) }
function addClass(o, c) { o.classList.add(c) }
function removeClass(o, c) { o.classList.remove(c) }

var buttonModal = document.querySelectorAll('[data-toggle="modal"]');
for(i=0; i < buttonModal.length; i++){
  buttonModal[i].onclick = function(){
    triggerModal(this.getAttribute('aria-label'));
    return false
  }
}
window.onkeyup = function(e) {
  if(e.keyCode == 27){
    var body = tag(document, 'body')[0];
    var modal = document.querySelectorAll('.modal.opened')[0];
      toggleClass(modal, 'opened');
      toggleClass(body, 'no-scroll')
  }
}
