    @extends('layouts2.app2')
        
        
        @section('conteudo')
        <div class="pt-3" style="display: flex; justify-content: center">
            <div class="col-9 col-md-5 col-lg-8">
            <h5>Preencher os dados do encarregado</h5>

        <form action="/editar_cadastro/update/{{$crianca->id}}" method="POST">
            @csrf
            <div class="form-floating">
            @method('PUT')

            <div class="row g-3">
                <div class="col">
                <input type="text" name="nome_encarregado" class="form-control" value="{{ $encarregado->nome_encarregado }}" required>
                </div>
                <div class="col">
                <input type="text" name="sobrenome_encarregado" class="form-control" value="{{$encarregado->sobrenome_encarregado}}" required>
                </div>
            </div>

            <br>
            <div class="row g-3">
                <div class="col">
                    <input type="text" name="email" class="form-control" value="{{ $encarregado->email }}" required>
                </div>

                <div class="col">
                    <input type="text" name="telefone" class="form-control" value="{{ $encarregado->telefone }}" required>
                </div>
            </div>
            <br>

            <div class="row g-3">
                
                <div class="col">
                <input type="text" name="cpf" class="form-control" value="{{ $encarregado->cpf }}"  required>
                </div>
                
                <div class="col">
                    <input type="text" name="rg" class="form-control" value="{{ $encarregado->rg }}" required>
                </div>

                <div class="col">
                    <input type="text" name="passaporte" class="form-control" value="{{ $encarregado->passaporte }}" >
                </div>
            </div>
                <br>
            <div class="row g-3">
                
                <input type="file" name="anexo" class="form-control" value="{{ $encarregado->anexo }}">
            </div><br>

            <div class="row g-3">
                <div class="col">
                  <input type="text" name="nome_crianca" class="form-control" value="{{ $crianca->nome_crianca }}" required>
                </div>
                <div class="col">
                  <input type="text" name="sobrenome_crianca" class="form-control" value="{{$crianca->sobrenome_crianca}}" required>
                </div>
                
              </div>
              <br><br>

              <div class="row g-3">
                <div class="col">
                    <input type="date" name="data_nascimento" class="form-control" value="{{ $crianca->data_nascimento }}" required><br>
                </div>
                <div class="col">
                 

                    
                </div>
                
              </div>
            <!-- Campos do formulário para edição -->

            <!-- Mais campos do formulário -->
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Editar</button>
              </div>
        </form>
    @endsection