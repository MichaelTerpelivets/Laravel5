@extends('layouts.app')
@section('content')
    <!-- БАННЕР НА ГЛАВНОЙ -->
    <section class="banner">
        <div class="container">
            <h1></h1>
            <p></p>
        </div>
    </section>
    <!-- ПОПУЛЯРНЫЕ ПРОЕКТЫ -->
    <section class="popular">
        <div class="container">
            <header class="text-center">Компании</header>
            <div class="row">
                    @foreach($companies as $company)
                    <div class="col-md-6">
                        <div class="item thumbnail">
                            <h3 class="text-center">{{$company->name}}</h3>
                            <img src="{{asset('storage/logo/'.$company->logo)}}" height="100" width="100"/>
                            <h3 class="text-center">Описание</h3>
                            <p><strong>Email: </strong>{{$company->email}}</p>
                            <p><strong>Сайт: </strong>{{$company->website}}</p>
                            <p><strong>Работников: </strong> {{$company->employeeCount()}}</p>
                        </div>
                </div>
                    @endforeach
            </div>
            <div class="text-center">{{ $companies->links() }}</div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <p class="text-center">Вы создаёте мир своими усилиями</p>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-circle" src="{{asset('images/front/drone-sky-camera-remote-465150.jpeg')}}"
                         height="200" width="200"/>
                    <h3>Название</h3>
                    <div class="description">Подробнее</div>
                </div>
                <div class="col-md-4">
                    <img class="img-circle" src="{{asset('images/front/drone-sky-camera-remote-465150.jpeg')}}"
                         height="200" width="200"/>
                    <h3>Название</h3>
                    <div class="description">Подробнее</div>
                </div>
                <div class="col-md-4">
                    <img class="img-circle" src="{{asset('images/front/drone-sky-camera-remote-465150.jpeg')}}"
                         height="200" width="200"/>
                    <h3>Название</h3>
                    <div class="description">Подробнее</div>
                </div>
            </div>
        </div>
    </section>
    <!-- БЛОК С КНОПКОЙ -->
    <section class="make-step">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <header class="text-center">TEST TEST TEST</header>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
