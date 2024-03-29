@extends('layouts.app')

@section('content')
    @php /** @var \App\Models\BlogPost $item */ @endphp

    <div class="container">

        @include('blog.admin.posts.includes.result_message')

        @if($item->exists)
            <form action="{{route('blog.admin.posts.update', $item->id)}}" method="POST">
            @method('PATCH')
        @else
            <form action="{{route('blog.admin.posts.store')}}" method="POST">
        @endif
                @csrf
                    {{--@if($errors->any())--}}
                        {{--<div class="row justify-content-center">--}}
                            {{--<div class="col-md-11">--}}
                                {{--<div class="alert alert-danger" role="alert">--}}
                                    {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                                        {{--<span aria-hidden="true">x</span>--}}
                                    {{--</button>--}}
                                    {{--{{$errors->first()}}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    {{--@if(session('success'))--}}
                        {{--<div class="row justify-content-center">--}}
                            {{--<div class="col-md-11">--}}
                                {{--<div class="alert alert-success" role="alert">--}}
                                    {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                                        {{--<span aria-hidden="true">x</span>--}}
                                    {{--</button>--}}
                                    {{--{{session()->get('success')}}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @include('blog.admin.posts.includes.post_edit_main_col')
                        </div>
                        <div class="col-md-3">
                            @include('blog.admin.posts.includes.post_edit_add_col')
                        </div>
                    </div>
            </form>
            @if($item->exists)
            <br>
            <form action="{{route('blog.admin.posts.destroy', $item->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-block">
                            <div class="card-body ml-auto">
                                <button type="submit" class="btn btn-link">Удалить</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
            @endif
    </div>
@endsection
