@extends('layouts.app')
@section('title','e瞳网2018招新报名表')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">
<style>
.title {
    text-align: center;
    color: #008aff;
}
.field label {
    margin: 20px 0 0;
}
.gender-btn-group {
    display: flex;
    flex-direction: row;
}
.gender-btn-group .btn {
    flex-grow: 1;
}
.custom-select {
    display: inline-block;
    width: 100%;
    height: 36px;
    padding: .375rem 1.75rem .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: #fff;
    background-size: 8px 10px;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.custom-select:focus {
    border-color: #80bdff;
    outline: 0;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.075), 0 0 5px rgba(128,189,255,.5);
}
.submit-container {
    margin: 30px auto;
    text-align: center;
}
.btn-active {
    background: #ccc;
}
</style>
@endsection

@section('content')
    @include('shared._error')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="title">e瞳网招新表</h1>
        </div>
        <div class="panel-body">
            <form action="{{ route('applicant.store') }}" method="post">
                {{ csrf_field() }}
                <div class="container form-group">
                    <div class="field">
                        <label for="name">姓名：</label>
                        <input class="form-control" id="name" type="text" name="name" @auth value="{{ Auth::user()->name }}" @endauth>
                    </div>
                    <div class="field">
                        <label for="gender">性别：</label>
                        <input class="form-control" id="gender" type="hidden" name="gender" @auth value="{{ Auth::user()->gender }}" @endauth>
                        <div>
                            <div class="btn-group gender-btn-group" role="group" aria-label="性别选择" id="gender-btn-group">
                                <button type="button" class="btn btn-secondary" value="男">男</button>
                                <button type="button" class="btn btn-secondary" value="女">女</button>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="birthday">出生日期：</label>
                        <div class="input-append date" id="datetimepicker" data-date="2000-01-01" data-date-format="yyyy-mm-dd">
                            <input class="form-control" size="16" type="text" name="birthday" value="2000-01-01">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        {{--<input class="form-control" id="birthday" type="text" name="birthday" @auth value="{{ Auth::user()->birthday->toDateString() }}" @endauth>--}}
                    </div>
                    <div class="field">
                        <label for="cellphone">手机号码：</label>
                        <input class="form-control" id="cellphone" type="text" name="cellphone" placeholder="用于接收面试通知">
                    </div>
                    <div class="field">
                        <label for="college">书院名称：</label>
                        <input class="form-control" id="college" type="text" name="college" value="{{ old('college') }}">
                    </div>
                    <div class="field">
                        <label for="class">专业班级：</label>
                        <input class="form-control" id="class" type="text" name="class" value="{{ old('class') }}">
                    </div>
                    <div class="field">
                        <label for="qq">QQ：</label>
                        <input class="form-control" id="qq" type="text" name="qq" value="{{ old('qq') }}">
                    </div>
                    <div class="field">
                        <label for="first">第一志愿：</label>
                        <select class="custom-select" name="first_id" id="first">
                            <option selected>请选择...</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        {{--<input class="form-control" id="first" type="text" name="first" value="{{ old('first') }}">--}}
                    </div>
                    <div class="field">
                        <label for="second">第二志愿：</label>
                        <select class="custom-select" name="second_id" id="second">
                            <option selected>请选择...</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        {{--<input class="form-control" id="second" type="text" name="second" value="{{ old('second') }}">--}}
                    </div>
                    <div class="field">
                        <label for="third">第三志愿：</label>
                        <select class="custom-select" name="third_id" id="third">
                            <option selected>请选择...</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        {{--<input class="form-control" id="third" type="text" name="third" value="{{ old('third') }}">--}}
                    </div>
                    <div class="field">
                        <label for="method">了解途径：</label>
                        <select class="custom-select" name="method" id="method">
                            <option selected>请选择...</option>
                            <option value="宣传单">宣传单</option>
                            <option value="刷楼">学长学姐刷楼</option>
                            <option value="他人介绍">他人介绍</option>
                            <option value="他人介绍"></option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="wanna_say">个人陈述：</label>
                        <textarea class="form-control" id="wanna_say" name="wanna_say" cols="30" rows="10" placeholder="(选填)你有什么话要对我们说...(咱就别用emoji卖萌了，小瞳的服务器会受不了的[害羞])">{{ old('wanna_say') }}</textarea>
                    </div>
                    <div class="submit-container">
                        <button class="btn btn-primary" type="submit">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.zh-CN.min.js"></script>
<script>
(function() {

function $(id) {
    return document.getElementById(id)
}

var genderDom = $('gender')
var genderBtnGroupDom = $('gender-btn-group')

function chooseGender(target) {
    for (let item of genderBtnGroupDom.children) {
        item.classList.remove('btn-active')
    }
    target.classList.add('btn-active')
    genderDom.value = target.value
}

genderBtnGroupDom.onclick = function log(e) {
    chooseGender(e.target)
}

function initData() {
    if (genderDom.value == '男') {
        chooseGender(genderBtnGroupDom.children[0])
    } else if (genderDom.value == '女') {
        chooseGender(genderBtnGroupDom.children[1])
    }
}


initData()

})()

$('#datetimepicker').datepicker({})

</script>
@endsection
