@extends('layouts.app')

@section('content')
    <form action="{{ route('applicant.store') }}" method="post">
        {{ csrf_field() }}
        <div>
            <label for="name">姓名：</label>
            <input id="name" type="text" name="name" @auth value="{{ Auth::user()->name }}" @endauth>
        </div>
        <div>
            <label for="gender">性别：</label>
            <input id="gender" type="text" name="gender" @auth value="{{ Auth::user()->gender }}" @endauth>
        </div>
        <div>
            <label for="birthday">出生日期：</label>
            <input id="birthday" type="text" name="birthday" @auth value="{{ Auth::user()->birthday->toDateString() }}" @endauth>
        </div>
        <div>
            <label for="cellphone">手机号码：</label>
            <input id="cellphone" type="text" name="cellphone" placeholder="用于接收面试通知">
        </div>
        <div>
            <label for="college">书院名称：</label>
            <input id="college" type="text" name="college" value="{{ old('college') }}">
        </div>
        <div>
            <label for="class">专业班级：</label>
            <input id="class" type="text" name="class" value="{{ old('class') }}">
        </div>
        <div>
            <label for="qq">QQ：</label>
            <input id="qq" type="text" name="qq" value="{{ old('qq') }}">
        </div>
        <div>
            <label for="first">第一志愿：</label>
            <select name="first" id="first">
                @foreach($departments as $department)
                    <option value="{{ $department->name }}">{{ $department->name }}</option>
                @endforeach
            </select>
            {{--<input id="first" type="text" name="first" value="{{ old('first') }}">--}}
        </div>
        <div>
            <label for="second">第二志愿：</label>
            <select name="second" id="second">
                @foreach($departments as $department)
                    <option value="{{ $department->name }}">{{ $department->name }}</option>
                @endforeach
            </select>
            {{--<input id="second" type="text" name="second" value="{{ old('second') }}">--}}
        </div>
        <div>
            <label for="third">第三志愿：</label>
            <select name="third" id="third">
                @foreach($departments as $department)
                    <option value="{{ $department->name }}">{{ $department->name }}</option>
                @endforeach
            </select>
            {{--<input id="third" type="text" name="third" value="{{ old('third') }}">--}}
        </div>
        <div>
            <label for="method">了解途径：</label>
            <select name="method" id="method">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </div>
        <div>
            <label for="wanna_say">个人陈述：</label>
            <input id="wanna_say" type="text" name="wanna_say" placeholder="(选填)你有什么话要对我们说...(咱就别用emoji卖萌了，小瞳的服务器会受不了的[害羞])" value="{{ old('wanna_say') }}">
        </div>
        <button type="submit">提交</button>
    </form>
@endsection