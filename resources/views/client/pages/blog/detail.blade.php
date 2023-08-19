@extends('client.layout.master')

@section('content')
    Blog Detail
@endsection

@section('title')
    Blog
@endsection

@section('js-custom')
    <script>
        console.log(123)
    </script>
@endsection

@section('side-bar')
    @parent
    Side bar of Blog Detail
@endsection
