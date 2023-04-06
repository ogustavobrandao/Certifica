@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="/css/acoes/list.css">
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            @if(session('mensagem'))
                <div class='alert alert-success'>
                    <p>{{session('mensagem')}}</p>
                </div>
            @endif
        </div>

        <div class='row'>
            @if(session('error_mensage'))
                <div class='alert alert-danger'>
                    <p>{{session('error_mensage')}}</p>
                </div>
            @endif
        </div>

        <div class='row'>
            @if($errors->any())
                <div class='alert alert-danger'>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
        </div>

        <section class="view-list-acoes">

            <div class="container">

                <div class="row d-flex align-items-center justify-content-end">
                    <a class="criar-acao-button" href={{ route('acao.create') }}>
                        <img src="/images/acoes/listView/criar.svg" alt=""> Criar ação
                    </a>
                </div>

                <div class="row head-table search-box d-flex align-items-center justify-content-center">
                    <div class="col-4 d-flex flex-column align-items-start justify-content-center">
                        <span>Buscar ação</span>
                        <input class="input-box w-75" type="text" name="" id="">
                    </div>
                    <div class="col-3 d-flex flex-column align-items-start justify-content-center">
                        <span>Status</span>
                        <select class="input-box w-75" name="" id="">
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="col-3 d-flex flex-column align-items-start justify-content-center">
                        <span>Natureza</span>
                        <select class="input-box w-75" name="" id="">
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="col-2 d-flex flex-column align-items-start justify-content-center">
                        <span>Data</span>
                        <input class="input-box w-75" type="date" name="" id="">
                    </div>
                </div>  
            </div>
            <div class="container">
                <div class="row head-table d-flex align-items-center justify-content-center">
                    <div class="col-3"><span class="spacing-col">Título</span></div>
                    <div class="col-3"><span class="spacing-col">Data</span> <span></span> </div>
                    <div class="col-2"><span>Status</span></div>
                    <div class="col-2 text-center"><span>Natureza</span></div>
                    <div class="col-2 text-center"><span>Atividades</span></div>
                </div>
            </div> 
            <div class="list container overflow-scroll">
                <div class="row linha-table d-flex align-items-center justify-content-center">
                    <div class="col-3"><span class="spacing-col">Integra BCC</span></div>
                    <div class="col-3"><span class="spacing-col">Jan 6, 2022</span></div>
                    <div class="col-2"><span>Aprovado</span></div>
                    <div class="col-2 text-center"><span>Projeto de ensino</span></div>
                    <div class="col-2 d-flex align-items-center justify-content-evenly">
                        <span><img src="/images/acoes/listView/ficha.svg" alt=""></span>
                        <span><img src="/images/acoes/listView/lixoIcon.svg" alt=""></span>
                        <span><img src="/images/acoes/listView/editar.svg" alt=""></span>
                    </div>
                </div>
                <div class="row linha-table d-flex align-items-center justify-content-center">
                    <div class="col-3" ><span class="spacing-col">Integra BCC</span></div>
                    <div class="col-3" ><span class="spacing-col">Out 2,2023 - Out 5,2022 </span></div>
                    <div class="col-2" ><span>Em análise</span></div>
                    <div class="col-2 text-center" ><span>Outros</span></div>
                    <div class="col-2 text-center" ><span><img src="/images/acoes/listView/ficha.svg" alt=""></span></div>
                </div>
                <div class="row linha-table d-flex align-items-center justify-content-center">
                    <div class="col-3" ><span class="spacing-col">Saúde Mental </span></div>
                    <div class="col-3" ><span class="spacing-col">Fev 8, 2022</span></div>
                    <div class="col-2" ><span>Devolvido</span></div>
                    <div class="col-2 text-center" ><span>Projeto de extensão</span></div>
                    <div class="col-2 text-center" ><span><img src="/images/acoes/listView/ficha.svg" alt=""></span></div>
                </div>

                <div class="row linha-table d-flex align-items-center justify-content-center">
                    <div class="col-3" ><span class="spacing-col">Saúde Mental </span></div>
                    <div class="col-3" ><span class="spacing-col">Fev 8, 2022</span></div>
                    <div class="col-2" ><span>Devolvido</span></div>
                    <div class="col-2 text-center" ><span>Projeto de extensão</span></div>
                    <div class="col-2 text-center" ><span><img src="/images/acoes/listView/ficha.svg" alt=""></span></div>
                </div>
          
            </div>

        </section>
@endsection
