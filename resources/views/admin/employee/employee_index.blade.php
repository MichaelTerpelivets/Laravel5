@extends('admin.layouts.admin-app')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <a class="btn btn-success" href="{{route('employee.create')}}">Создать +</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Таблица Работников</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th> Имя</th>
                            <th> Фамилия</th>
                            <th> Компания</th>
                            <th> Email</th>
                            <th> Телефон</th>
                            <th> Действие</th>
                        </tr>
                        <tbody>
                        @foreach($employee as $empl)
                            <tr>
                                <td>{{$empl->id}}</td>
                                <td>{{$empl->first_name}}</td>
                                <td>{{$empl->last_name}}</td>
                                <td></td>
                                <td>{{$empl->email}}</td>
                                <td>{{$empl->phone}}</td>
                                <td>Action</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection