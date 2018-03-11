@extends('admin.layouts.admin-app')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <a class="btn btn-success" href="{{route('companies.create')}}">Создать +</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Таблица Компаний</h5>
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
                            <th> Логотип</th>
                            <th> Сайт</th>
                            <th> Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{$company->id}}</td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->logo}}</td>
                                <td>{{$company->website}}</td>
                                <td>
                                        <a class="btn btn-default" href="{{route('companies.edit',$company->id)}}">Редактировать</a>
                                        <form method="post" action="{{route('companies.destroy',$company->id)}}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <button class="btn btn-danger" type="submit">Удалить</button>
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
                    <div class="text-center">{{$companies->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection