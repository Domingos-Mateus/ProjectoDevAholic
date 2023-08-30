@extends('layouts2.app2')
    
    
    @section('conteudo')

    <div class="pt-3" style="display: flex; justify-content: center">
        <div class="col-9 col-md-5 col-lg-7">
        <h5>Preencher os dados da criança</h5>
        <form action="/salvar_crianca" method="POST">
            @csrf

            <div class="row g-3">
                <div class="col">
                  <input type="text" name="nome_crianca" class="form-control" placeholder="Nome" required>
                </div>
                <div class="col">
                  <input type="text" name="sobrenome_crianca" class="form-control" placeholder="Sobrenome" required>
                </div>
                
              </div>
              <br><br>

              <div class="row g-3">
                <div class="col">
                    <input type="date" name="data_nascimento" class="form-control" placeholder="Data de Nascimento" required><br>
                </div>
                <div class="col">
                    <select name="id_encarregado" class="form-select">
                        <option selected>Selecciona o encarregado</option>
                        @foreach ($encarregados as $encarregado)
                        <option value="{{$encarregado->id}}">{{$encarregado->nome_encarregado}}</option><br>
                        @endforeach
                        
                    </select>

                    
                </div>
                
              </div>

              
              <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Salvar</button>
              </div>
            
            </div>

        </form>
        </div>
    </div>
@endsection