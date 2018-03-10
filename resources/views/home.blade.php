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
    {{--<section class="popular">--}}
        {{--<div class="container">--}}
            {{--<header class="text-center">Companies</header>--}}
            {{--<div class="row">--}}
                    {{--@foreach($adverts as $advert)--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="item thumbnail">--}}
                            {{--<img src="{{asset('images/front/pexels-photo-442150.jpeg')}}" height="200" width="600"/>--}}
                            {{--<a href="{{route('adverts.show',$advert->id)}}"><h3>{{$advert->title}}</h3></a>--}}
                            {{--<div class="description">{{$advert->description}}</div>--}}
                            {{--<author>Автор: <a href="#">{{$advert->author->name}}</a></author>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<b> 40% Просмотров</b>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                {{--</div>--}}
                    {{--@endforeach--}}
            {{--</div>--}}
            {{--<div >{{ $adverts->links() }}</div>--}}
        {{--</div>--}}
    {{--</section>--}}
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
