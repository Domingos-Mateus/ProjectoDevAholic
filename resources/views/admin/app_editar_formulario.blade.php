@extends('admin.template')

<style>
    .mx-auto{
        margin: 10px;
    }
</style>

@section('conteudo')

    <div class="pt-3" style="display: flex; justify-content: center">
        <div class="col-9 col-md-5 col-lg-7">
        <h5>Preencher os dados do Encarregado.</h5>

    <form action="/admin/actualizar_formulario/{{$formulario->id}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="dados_encarregado">


        <div class="row g-3">
            <div class="col">
              <input type="text" name="nome" value="{{$formulario->nome_encarregado}}" class="form-control" placeholder="Nome do Encarregado" required>
            </div>
            <div class="col">
              <input type="text" name="sobrenome" value="{{$formulario->sobrenome_encarregado}}" class="form-control" placeholder="Sobrenome" required>
            </div>


          </div>

          <br>
          <div class="row g-3">
            <div class="col">
                <input type="text" name="email" value="{{$formulario->email}}" class="form-control" placeholder="E-mail" required>
              </div>

              <div class="col">
                <input type="text" name="telefone" value="{{$formulario->telefone}}" class="form-control" placeholder="Telefone" required>
              </div>
          </div>
          <br>

          <div class="row g-3">

          <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect"
                    aria-label="Floating label select example" name="tipo_documento">
                    <option {{$formulario->tipo_documento == 'CPF'}}>CPF</option>
                    <option {{$formulario->tipo_documento == 'RG'}}>RG</option>
                    <option {{$formulario->tipo_documento == 'Passaporte'}}>Passaporte</option>
                </select>
                <label for="floatingSelect">Selecione o tipo de documento</label>
            </div>

            <!-- <div class="col">
              <input type="number" name="numero_documento" value="{{$formulario->numero_documento}}" class="form-control" placeholder="Número do Documento" required>
            </div> -->
          </div>
            <br>
          <div class="row g-3">

          <label for="">Selecione uma foto</label>
            <input type="file" value="{{$formulario->caminho_anexo}}" name="anexo" class="form-control" placeholder="anexo">
          </div><br>
          </div>
          <hr>
          <br>

          @if($formulario->nome_crianca)

          <div class="dados_criancas">
                <h5>Preencher os dados da criança</h5>

                <div id="criancas-container">
                    <!-- Campos de dados da primeira criança -->
                    <div class="crianca">
                        <div class="row g-3">
                            <div class="col">
                                <input type="text" name="nome_crianca" value="{{$formulario->nome_crianca}}" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="col">
                                <input type="text" name="sobrenome_crianca" value="{{$formulario->sobrenome_crianca}}" class="form-control" placeholder="Sobrenome" required>
                            </div>
                            <div class="col">
                                <input type="date" name="data_nascimento_crianca" value="{{$formulario->data_nascimento_crianca}}" class="form-control" placeholder="Data de Nascimento" required><br>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

            </div>
            @endif


          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Atualizar Formulário</button>
          </div>

    </form>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Adicionar campo de criança quando o botão for clicado
        document.getElementById("adicionar-crianca").addEventListener("click", function () {
            const container = document.getElementById("criancas-container");
            const novaCrianca = document.createElement("div");
            novaCrianca.classList.add("crianca");

            novaCrianca.innerHTML = `
                <div class="row g-3">
                    <div class="col">
                        <input type="text" name="nome_crianca[]" class="form-control" placeholder="Nome" required>
                    </div>
                    <div class="col">
                        <input type="text" name="sobrenome_crianca[]" class="form-control" placeholder="Sobrenome" required>
                    </div>
                    <div class="col">
                        <input type="date" name="data_nascimento[]" class="form-control" placeholder="Data de Nascimento" required><br>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger remover-crianca">Remover</button>
                    </div>
                </div>
                <hr>
            `;

            container.appendChild(novaCrianca);
        });

        // Remover campo de criança quando o botão "Remover" for clicado
        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("remover-crianca")) {
                const crianca = e.target.closest(".crianca");
                crianca.remove();
            }
        });

        // Submeter o formulário
        document.querySelector("form").addEventListener("submit", function (e) {
            const nomeCriancas = document.querySelectorAll("input[name='nome_crianca[]']");
            const sobrenomeCriancas = document.querySelectorAll("input[name='sobrenome_crianca[]']");
            const dataNascimentoCriancas = document.querySelectorAll("input[name='data_nascimento[]']");
            const dadosCriancas = [];

            for (let i = 0; i < nomeCriancas.length; i++) {
                const nome = nomeCriancas[i].value;
                const sobrenome = sobrenomeCriancas[i].value;
                const dataNascimento = dataNascimentoCriancas[i].value;

                const crianca = {
                    nome_crianca: nome,
                    sobrenome_crianca: sobrenome,
                    data_nascimento: dataNascimento,
                };

                dadosCriancas.push(crianca);
            }

            // Converte o array de objetos em JSON e atribui ao campo do formulário
            document.querySelector("input[name='criancas']").value = JSON.stringify(dadosCriancas);
        });
    });
</script>

@endsection
