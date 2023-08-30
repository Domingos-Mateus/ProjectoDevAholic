@extends('layouts2.app2')
    
    
    @section('conteudo')
    <div class="pt-3" style="display: flex; justify-content: center">
        <div class="col-9 col-md-5 col-lg-6">
        <h5>Preencher os dados do Encarregado</h5>

    <form action="/salvar_encarregado" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row g-3">
            <div class="col">
              <input type="text" name="nome" class="form-control" placeholder="Nome do Encarregado" required>
            </div>
            <div class="col">
              <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required>
            </div>
            
            
          </div>

          <br>



          <div class="row g-3">
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="E-mail" required>
              </div>

              <div class="col">
                <input type="text" name="telefone" class="form-control" placeholder="Telefone" required>
              </div>
          </div>
          <br>

          <div class="row g-3">
            
            <div class="col">
              <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
            </div>
            
            <div class="col">
                <input type="text" name="rg" class="form-control" placeholder="RG" required>
              </div>

              <div class="col">
                <input type="text" name="passaporte" class="form-control" placeholder="Passaporte" >
              </div>
          </div>
            <br>
          <div class="row g-3">
            
            <input type="file" name="anexo" class="form-control" placeholder="anexo" required>
          </div><br>


          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Salvar</button>
          </div>
        
    </form>
        </div>
    </div>
@endsection