<?php
    include "./layout/cabecalho.php";
?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-header">
Lista de Disciplinas
<div class="button">
<a class="btn btn-success" href="#" role="button" aria-expanded="false">
NOVA DISCIPLINA
</a>
<form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">PESQUISAR</button>
  </form>
</div>
<table class="table">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">Nome</th>
  <th scope="col">Apelido</th>
  <th scope="col">Sigla</th>
</tr>
</thead>
<tbody>
<table class="table table-striped">
<tr>
  <th scope="row">1</th>
  <td>Administração Geral</td>
  <td></td>
  <td>ADM
  <td><a class="btn btn-warning">Editar</a></td>

  <td><a class="btn btn-danger">Excluir</a></td>
  </td>
</tr>
    
<tr>
  <th scope="row">2</th>
  <td>Produção Industrial</td>
  <td></td>
  <td>PI
  <td><a class="btn btn-warning">Editar</a></td>

  <td><a class="btn btn-danger">Excluir</a></td>
  </td>
</tr>
<tr>
  <th scope="row">3</th>
  <td >Sistema Operacional</td>
  <td></td>
  <td>SO
  <td><a class="btn btn-warning">Editar</a></td>

  <td><a class="btn btn-danger">Excluir</a></td>
  </td>
</tr>
<tr>
  <th scope="row">4</th>
  <td >calculo</td>
  <td></td>
  <td>CL
  <td><a class="btn btn-warning">Editar</a></td>

  <td><a class="btn btn-danger">Excluir</a></td>
  </td>
</tr>
<tr>
  <th scope="row">5</th>
  <td >Português</td>
  <td></td>
  <td>POR
  <td><a class="btn btn-warning">Editar</a></td>

  <td><a class="btn btn-danger">Excluir</a></td>
  </td>
</tr>
<tr>
  <th scope="row">6</th>
  <td >Programação Web</td>
  <td></td>
  <td>PW
  <td><a class="btn btn-warning">Editar</a></td>

  <td><a class="btn btn-danger">Excluir</a></td>
  </td>
</tr>
<tr>
  <th scope="row">7</th>
  <td > Hadware</td>
  <td></td>
  <td>HW
  <td><a class="btn btn-warning">Editar</a></td>

  <td><a class="btn btn-danger">Excluir</a></td>
  </td>
</tr>
</tbody>
</table>

</div>
</div>

</div>

<?php

    include "./layout/rodape.php";
?>