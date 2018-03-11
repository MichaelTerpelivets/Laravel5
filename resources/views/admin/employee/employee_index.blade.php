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
                    <h5>Таблица работников</h5>
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
                                <td>{{$empl->company->name}}</td>
                                <td>{{$empl->email}}</td>
                                <td>{{$empl->phone}}</td>
                                <td>
                                    <a class="btn btn-default" href="{{route('employee.edit',$empl->id)}}">Редактировать</a>
                                    <form action="{{route('employee.destroy',$empl->id)}}" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Удалить</button>
                                    </form>
                                </td>
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
                    <div class="text-center">{{$employee->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection