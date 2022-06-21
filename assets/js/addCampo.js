var adicionarFormacao = 1;
var adicionarHabilidade = 1;
var adicionarExperiencia = 1;

// -----------------add e remover formacao--------------------------

function controleFormacao(){

  adicionarFormacao++;

  document.getElementById('caixatexto').insertAdjacentHTML('beforeend','<div class="form-grupo-formacao" id="formacao' + adicionarFormacao +'"><div class="margin-right margin-top font-h4 width-left"><h4>Instituição</h4><input type="text" id="inst'+adicionarFormacao+'" name="inst'+adicionarFormacao+'" placeholder="Digite o nome da Instituição"><h4>Curso</h4><input type="text" id="curso'+adicionarFormacao+'" name="curso'+adicionarFormacao+'" placeholder="Digite o nome do curso realizado"><h4>Cidade</h4><input type="text" id="cidade'+adicionarFormacao+'" name="cidade'+adicionarFormacao+'" placeholder="Digite o nome da cidade em que estudou este curso"><div class="date-input"><div class="date"><h4>Data de inicio</h4><input type="date" id="date'+adicionarFormacao+'" name="date'+adicionarFormacao+'"></div><div class="date"><h4>Data de termino</h4><input type="date" id="datetermino' + adicionarFormacao + '" name="datetermino' + adicionarFormacao  + '"></div></div><button type="button" id="'+adicionarFormacao+'" onclick="removerFormacao('+adicionarFormacao+')">Remover Formação</button></div></div>');
}
function removerFormacao(idFormacao){
  document.getElementById('formacao' + idFormacao).remove();
}
// --------------------add e remover habilidades-----------------------

function controleHabilidade(){
  adicionarHabilidade++;
  document.getElementById('habilidade').insertAdjacentHTML('beforeend','<div class="form-grupo-formacao" id="habilidade'+adicionarHabilidade+'"><input type="text" id="habilidade'+adicionarHabilidade+'" name="habilidade'+adicionarHabilidade+'" placeholder="Digite suas habilidades"><button type="button" id="'+adicionarHabilidade+'" onclick="removerHabilidade('+adicionarHabilidade+')">Remover Habilidade</button></div>');
}
function removerHabilidade(idHabilidade){
  document.getElementById('habilidade' + idHabilidade).remove();
}
// --------------------add e remover experiencia-----------------------

function controleExperiencia(){
  adicionarExperiencia++;
  document.getElementById('experiencia').insertAdjacentHTML('beforeend','<div class="form-grupo-formacao" id="experiencia'+adicionarExperiencia+'"><h3>Experiencia</h3><div class="margin-right margin-top font-h4 width-left"><h4>Empresa</h4><input type="text" id="empresa'+adicionarExperiencia+'" name="empresa'+adicionarExperiencia+'" placeholder="Digite o nome da Empresa"><h4>Cargo</h4><input type="text" id="cargo'+adicionarExperiencia+'" name="cargo'+adicionarExperiencia+'" placeholder="Digite o nome do cargo que exerceu"><h4>Cidade:</h4><input type="text" id="cidade'+adicionarExperiencia+'" name="cidade'+adicionarExperiencia+'" placeholder="Digite o nome da cidade que exerceu nesta empresa"><div class="date-input"><div class="date"><h4>Data de inicio</h4><input type="date" id="datainicio'+adicionarExperiencia+'" name="datainicio'+adicionarExperiencia+'"></div><div class="date"><h4>Data de termino</h4><input type="date" id="datatermino'+adicionarExperiencia+'" name="datatermino'+adicionarExperiencia+'"></div></div><button type="button" id="'+adicionarExperiencia+'" onclick="removerExperiencia('+adicionarExperiencia+')">Remover Experiencia</button></div></div>');
}
function removerExperiencia(idExperiencia){
  document.getElementById('experiencia' + idExperiencia).remove();
}