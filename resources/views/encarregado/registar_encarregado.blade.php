@extends('layouts2.app2')
    
    
    @section('conteudo')
    <div class="pt-3" style="display: flex; justify-content: center">
        <div class="col-9 col-md-5 col-lg-4">
        <h5>Preencher os dados do Encarregado</h5>

    <form action="/salvar_encarregado" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating">
        <p>NOME: </p><input type="text" name="nome" class="form-control" id="rotulo-flutuante" placeholder="Nome do Encarregado" required><br>
        <p>SOBRENOME </p><input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required><br>
        <p>E-mail: </p><input type="email" name="email" class="form-control" placeholder="E-mail" required><br>
        <p>TELEFONE </p><input type="text" name="telefone" class="form-control" placeholder="telefone" required><br>
        <p>CPF</p><input type="text" name="cpf" class="form-control" placeholder="cpf" required><br>
        <p>RG</p><input type="text" name="rg" class="form-control" placeholder="rg"required><br>
        <p>PASSAPORTE </p><input type="text" name="passaporte" class="form-control" placeholder="passaporte" required><br>
        <p>ANEXO </p><input type="file" name="anexo" class="form-control" placeholder="anexo" required><br>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        
    </form>
        </div>
    </div>
@endsection