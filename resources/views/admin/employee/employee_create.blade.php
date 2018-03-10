@extends('admin.layouts.admin-app')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Форма добавления нового работника </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="{{route('employee.store')}}" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Имя</label>
                            <div class="col-sm-10">
                                <input type="text" name="first_name" required placeholder="Введите имя работника"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Фамилия</label>
                            <div class="col-sm-10">
                                <input type="text" name="last_name" required placeholder="Введите фамилию работника"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email"
                                       placeholder="Введите почту работника">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Телефон</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" required placeholder="Введите телефон работника" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Компания</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="company_id">
                                    <option value="1">option 1</option>
                                    <option value="2">option 2</option>
                                    <option value="3">option 3</option>
                                    <option value="4">option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">Сохранить</button>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                    <a class="btn btn-default" href="{{route('employee.index')}}">Назад</a>
                </div>
            </div>
        </div>
    </div>
@endsection