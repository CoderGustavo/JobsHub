// -------modal--info-pessoais-----------
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "flex";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
// -------modal--info-curriculo-----------
var curriculo = document.getElementById("modal-curriculo");

var btncurriculo = document.getElementById("btn-curriculo");

var spanCurriculo = document.getElementsByClassName("close-curriculo")[0];

btncurriculo.onclick = function() {
  curriculo.style.display = "block";
}

spanCurriculo.onclick = function() {
  curriculo.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == curriculo) {
    curriculo.style.display = "none";
  }
}
// -------modal--info-sobre-min----------
var texto = document.getElementById("modal-texto");

var btnTexto = document.getElementById("btn-texto");

var spanTexto = document.getElementsByClassName("close-texto")[0];

btnTexto.onclick = function() {
  texto.style.display = "flex";
}

spanTexto.onclick = function() {
  texto.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == texto) {
    texto.style.display = "none";
  }
}
