/* Helpful*/
function hasClass(o, c) {
  if (o.classList.contains(c)) {
    return true
  } else {
    return false
  }
}

function toggleClass(o, c) {
  hasClass(o, c) ? removeClass(o, c) : addClass(o, c)
}

function addClass(o, c) {
  o.classList.add(c)
}

function removeClass(o, c) {
  o.classList.remove(c)
}
/* Máscaras ER */
function mascara(o, f) {
  v_obj = o
  v_fun = f
  setTimeout("execmascara()", 1)
}

function execmascara() {
  v_obj.value = v_fun(v_obj.value)
}

function mnum(v) {
  v = v.replace(/\D/g, "");
  return v;
}

function mtel(v) {
  v = v.replace(/\D/g, "");
  v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
  v = v.replace(/(\d)(\d{4})$/, "$1-$2");
  return v;
}

function mcpf(v) {
  v = v.replace(/\D/g, "");
  v = v.replace(/(\d{3})(\d)/, "$1.$2");
  v = v.replace(/(\d{3})(\d)/, "$1.$2");
  v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
  return v;
}

function mcnpj(v) {
  v = v.replace(/\D/g, "");
  v = v.replace(/^(\d{2})(\d)/, "$1.$2");
  v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
  v = v.replace(/\.(\d{3})(\d)/, ".$1/$2");
  v = v.replace(/(\d{4})(\d)/, "$1-$2");
  return v;
}

function mcep(v) {
  v = v.replace(/\D/g, "");
  v = v.replace(/^(\d{5})(\d)/, "$1-$2");
  return v;
}

function $(el)
{
  selector = document.querySelectorAll(el);
  return selector
}

function stopDefAction(event)
{
  event.preventDefault();
}

function id(o) {
  return document.getElementById(o);
}

function tag(id, o) {
  return id.getElementsByTagName(o);
}
window.onload = function() {
  id('tel').onkeyup = function() {
    mascara(this, mtel);
  }
  id('cpf').onkeyup = function() {
    mascara(this, mcpf);
  }
  id('cep').onkeyup = function() {
    mascara(this, mcep);
  }
  id('numero').onkeyup = function() {
    mascara(this, mnum);
  }
}

function inputs(input, select, textarea) {
  o_input = input
  o_select = select
  o_textarea = textarea
  disableInputs()
}

function disableInputs() {
  for (i = 0; i < o_select.length; i++) {
    o_select[i].disabled = true
  }
  for (i = 0; i < o_textarea.length; i++) {
    o_textarea[i].disabled = true
  }
  for (i = 0; i < o_input.length; i++) {
    if (o_input[i].type == 'radio' || o_input[i].type == 'checkbox') {
      o_input[i].disabled = true;
    } else {
      o_input[i].readOnly = true;
    }
  }
}
id('form').onsubmit = function() {
  var input = tag(this, 'input'),
  select = tag(this, 'select'),
  textarea = tag(this, 'textarea');
  inputs(input, select, textarea);
  return false
}
focusinput = document.querySelectorAll('input, textarea, select');
for (i = 0; i < focusinput.length; i++) {
  focusinput[i].onfocus = function() {
    this.nextElementSibling.classList.add('focusIn')
  }
  focusinput[i].onblur = function() {
    var pattern = this.getAttribute('pattern'),
    pattern = pattern ? new RegExp(pattern) : new RegExp('[^\s]', 'i');
    if (!pattern.test(this.value)) {
      this.nextElementSibling.classList.remove('focusIn')
    }
  }
}

Object.defineProperty( Element.prototype, 'documentOffsetTop', {
  get: function () {
    return this.offsetTop + ( this.offsetParent ? this.offsetParent.documentOffsetTop : 0 );
  }
})

Object.defineProperty( Element.prototype, 'documentOffsetLeft', {
  get: function () {
    return this.offsetLeft + ( this.offsetParent ? this.offsetParent.documentOffsetLeft : 0 );
  }
})

function toScroll(el)
{
  el.addEventListener("click", stopDefAction, false);
  el.addEventListener("click", function(){ scrollPage(el) });
}

function scrollPage(el)
{
  t_g = $(el.getAttribute('href'))[0];
  s_x = t_g.documentOffsetLeft? t_g.documentOffsetLeft : 0;
  s_y = t_g.documentOffsetTop? t_g.documentOffsetTop: 0;
  window.scroll({
    left: s_x,
    top: s_y,
    behavior: 'smooth'
  })
}

/* Modal */
function init_Modal(m) {
  o_modal = m
  setTimeout('toggle_Modal()', 300)
}

function toggle_Modal() {
  o_modal = id(o_modal)
  o_body = tag(document, 'body')[0]
  toggleClass(o_modal, 'opened');
  toggleClass(o_body, 'no-scroll');
  addEventListener('keyup', function(e){
    if (e.keyCode == 27) {
      removeClass(o_modal, 'opened');
      removeClass(o_body, 'no-scroll');
    }
  })
}

var trigger_Modal = document.querySelectorAll('[data-toggle="modal"]');
for (i = 0; i < trigger_Modal.length; i++) {
  trigger_Modal[i].onclick = function(e) {
    if (hasClass(this, 'modal-content')) {
      e.stopPropagation()
    } else {
      init_Modal(this.getAttribute('aria-label'));
    }
    return false
  }
}
