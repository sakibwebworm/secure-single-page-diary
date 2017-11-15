@extends('layouts.mainapp')
@section('css')
    <link href="/css/allentry.css" rel="stylesheet">
@endsection
@section('content')

    <!-- New Entry -->

@endsection
@section('js')
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection