@extends('layouts.app')

@section('content')
    <div class="col-md-10 col-lg-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>当前报名用户</h5>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">姓名</th>
                        <th scope="col">性别</th>
                        <th scope="col">生日</th>
                        <th scope="col">手机号</th>
                        <th scope="col">书院</th>
                        <th scope="col">专业班级</th>
                        <th scope="col">qq</th>
                        <th scope="col">第一志愿</th>
                        <th scope="col">想说的</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($applicants as $applicant)
                        <tr>
                            <th scope="row">{{ $applicant->id }}</th>
                            <td>{{ $applicant->name }}</td>
                            <td>{{ $applicant->gender }}</td>
                            <td>{{ $applicant->birthday->toDateString() }}</td>
                            <td>{{ $applicant->cellphone }}</td>
                            <td>{{ $applicant->college }}</td>
                            <td>{{ $applicant->class }}</td>
                            <td>{{ $applicant->qq }}</td>
                            <td>{{ $applicant->first->name }}</td>
                            <td>{!! $applicant->wanna_say !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! $applicants->render() !!}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>当前各部门报名情况</h5>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">名称</th>
                        <th scope="col">报名人数</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($departments as $department)
                        <tr>
                            <th scope="row">{{ $department->id }}</th>
                            <td>{{ $department->name }}</td>
                            <td>{{ $department->applicants_count }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection