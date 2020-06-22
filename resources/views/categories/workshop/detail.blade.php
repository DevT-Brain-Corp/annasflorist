@extends('base.materialize')
@section('title', 'detail Worksop | Annas Florist')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/daily/index.css') }}">
    <script src="{{ asset('js/daily/index.js') }}"></script>
@endsection

@section('content')
    <!-- navbar -->
    @include('base.navbarhomepage')
    <!-- endnavbar -->

    <!-- feed -->
    <div class="container row feed">
        <div class="col-12">
            <div class="title">
                <p>{{ $detail->title }}</p>
            </div>
            <div class="feed1">
                <div class="row news">
                    {!! $detail->deskripsi !!}
                </div>
            </div>
        </div>
    </div>
    <!-- end feed -->

    <!-- footer -->
    @include('base.footer')
    <!-- end footer -->
@endsection
