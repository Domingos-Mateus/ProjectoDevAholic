@extends('admin.template')

@section('conteudo')




    <div class="container-xxl position-relative bg-white d-flex p-0">

           <!-- Sale & Revenue Start -->
           <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-users fa-5x text-danger"></i>
                        <div class="ms-3">
                            <p class="mb-2">Usuários</p>
                            <h6 class="mb-0">{{$usuario}}</h6>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-child fa-5x text-danger"></i>
                        <div class="ms-3">
                            <p class="mb-2">Crianças</p>
                            <h6 class="mb-0">{{$crianca}}</h6>
                        </div>
                    </div>
                </div> -->
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-user fa-5x text-danger"></i>
                        <div class="ms-3">
                            <p class="mb-2">Formulários</p>
                            <h6 class="mb-0">{{$encarregado}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-pie fa-5x text-danger"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total de Formulários</p>
                            <h6 class="mb-0">{{$totalPessoas}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->

            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->

            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @endsection

