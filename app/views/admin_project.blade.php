@extends('master')
@section ('navigation')
    <li class=""><a href="main">Главная</a></li>
    <li class="active"><a href="projects">Проекты</a></li>
    <li><a href="team">Команда</a></li>
    <li><a href="prices">Ценик</a></li>
    <li><a href="orders">Входящие заявки</a></li>
    <li class=""><a href="http://localhost/laravel/public/index.php/logout">Выход</a></li>
@stop
@section ('content')




    <div class="text-content">
        <div class="span7 offset1">
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h2>{{ Session::get('success') }}</h2>
                </div>
            @endif
            <div class="secure">Upload form</div>
            {{ Form::open(array('url'=>'projects','method'=>'POST', 'files'=>true)) }}
            <div class="control-group">
                {{Form::label('name', 'Название проекта')}}
                {{Form::text('name')}} <br/>

                {{Form::label('description', 'Описание проекта')}}
                {{Form::textarea('description')}} <br/>

                {{Form::label('seo_description', 'Сео дескрипшн')}}
                {{Form::textarea('seo_description')}} <br/>

                {{Form::label('keywords', 'Ключевые слова')}}
                {{Form::text('keywords')}} <br/>

                <div class="controls">
                    {{ Form::file('images[]', array('multiple'=>true)) }}
                    <p class="errors">{{$errors->first('images')}}</p>
                    @if(Session::has('error'))
                        <p class="errors">{{ Session::get('error') }}</p>
                    @endif
                </div>
            </div>
            {{ Form::submit('Submit', array('class'=>'send-btn')) }}
            {{ Form::close() }}
        </div>
    </div>

@stop