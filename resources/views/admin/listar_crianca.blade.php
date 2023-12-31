@extends('admin.template')

@section('conteudo')
<a href="/crianca/registar_crianca"><button class="btn btn-info btn-lg">  <i class="bi bi-person-plus-fill"></i></button></a>


    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome da Criança</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>Encarregado</th>
                <th>Acção</th>
            </tr>
        </thead>

        @foreach ($criancas as $crianca)
            <tr>
                <th><p>{{$crianca->nome_crianca}}</p></th>
                <th><p>{{$crianca->sobrenome_crianca}}</p></th>
                <th><p>{{$crianca->data_nascimento}}</p></th>
                <th>
                    <p>{{$crianca->nome_encarregado}}</p>
                </th>
                
                <th>
                    <a href="/cadastro/editar_cadastro/{{$crianca->id}}"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                    <a href="/crianca/visualizar_crianca/{{$crianca->id}}"><button class="btn btn-warning btn-sm"><i class="bi bi-eye-fill"></i></button></a>
                    <a href="/eliminar_crianca/{{$crianca->id}}"><button class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i></button></a>
                </th>
            </tr>
            @endforeach
    </table>
    {{ $criancas->links()}}
    
            
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    

    <!-- Template Javascript -->
   @endsection