<?php
include"cabecalho.php";
?>

<style>
h1 {
  margin-bottom: 1rem;
}

* {
  margin: 0;
  padding: 0;
}

fieldset {
  border: 0;
}

body, input, select, textarea, button {
  font-family: sans-serif;
  font-size: 1em;
}

.grupo:before, .grupo:after {
  content: " ";
  display: table;
}

.grupo:after {
  clear: both;
}

.campo {
  margin-bottom: 1em;
}

.campo label {
  margin-bottom: 0.2em;
  color: #666;
  display: block;
}

fieldset.grupo .campo {
  float:  left;
  margin-right: 1em;
}

.campo input[type="text"],
.campo input[type="email"],
.campo input[type="url"],
.campo input[type="tel"],
.campo select,
.campo textarea {
  padding: 0.2em;
  border: 1px solid #CCC;
  box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
  display: block;
}

.campo select option {
  padding-right: 1em;
}

.campo input:focus, .campo select:focus, .campo textarea:focus {
  background: #FFC;
}

.campo label.checkbox {
  color: #000;
  display: inline-block;
  margin-right: 1em;
}

.botao {
  font-size: 1.5em;
  background: #F90;
  border: 0;
  margin-bottom: 1em;
  color: #FFF;
  padding: 0.2em 0.6em;
  box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
  text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
}

.botao:hover {
  background: #FB0;
  box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
  text-shadow: none;
}

.botao, select, label.checkbox {
  cursor: pointer;
}

.margemcadastro{
  margin-left: 15%; 
}

</style>



<h1 class="ui horizontal divider header" id="tamCadastro">Cadastro Usuário</h1>

<section class="margem">
  <br>
  <form action="gravaUsuario" method="post" class="ui form">
    <fieldset>
      <div class="margemcadastro">
        <fieldset class="grupo">
          <div class="campo">
            <label for="nome" class="nome">Nome Completo</label>
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" id="nome" name="nome" style="width: 20em" placeholder="Nome Completo"/>
            </div>
          </div>
          <div class="campo">
            <label for="snome">Usuário</label>
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" id="nome" name="nome" style="width: 20em" placeholder="Usuário"/>
            </div>
          </fieldset> 
          
          <fieldset class="grupo">
            <div class="campo">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" style="width: 41em" placeholder="E-mail"/>
            </div>
          </fieldset>

          <fieldset class="grupo">
            <div class="campo">
              <label for="cidade">Cidade</label>
              <input type="text" id="cidade" name="cidade" style="width: 20em" placeholder="Cidade"/>
            </div>
            <div class="campo">
              <label for="cidade">Estado</label>
              <input type="text" id="cidade" name="estado" style="width: 20em" placeholder="Estado" />
            </div>
          </fieldset>

          <fieldset class="grupo">
            <div class="campo">
              <label for="cidade">Senha</label>
              <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="password" name="password" style="width: 20em" placeholder="Password">
              </div>
            </div>
            <div class="campo">
              <label for="cidade">Confirmar Senha</label>
              <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="password" name="password" style="width: 20em" placeholder="Password">
              </div>
            </fieldset>

            
            <imput type="submit" class="ui button" tabindex="0">Cadastrar</div>
            </div>
          </fieldset>
        </section>
      </form>
