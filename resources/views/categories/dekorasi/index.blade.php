@extends('base.materialize')
@section('title', 'Worksop | Annas Florist')

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
                <p>terbaru</p>
            </div>
            <div class="feed1">
                <div class="row news">
                    @foreach($dekorasi as $wks)
                        <a href="/dekorasi/{{ $wks->slug_title }}">
                            <div class="col s12">
                                <div class="row">
                                    <div class="col xl4">
                                        <div class="imgcrop">
                                            @if(empty($wks->foto_bg))
                                                <img class="responsive-img" src="{{ asset('img/workshop/1.jpg') }}"
                                                     alt="">
                                            @else
                                                <img class="responsive-img" src="{{ asset('/article/'.$wks->foto_bg) }}"
                                                     alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col xl8">
                                        <p>{{ $wks->title }}</p>
                                        <p>Worksop | {{ date('d-m-Y', strtotime($wks->created_at)) }}</p>
                                    </div>
                                </div>
                                <div class="divider"></div>
                            </div>
                        </a>
                    @endforeach


                    <div class="col s12 page">
                        <div>
                            <ul class="pagination" style="padding: 20px; margin: 10px">
                                {{ $dekorasi->links() }}
                                {{--                                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>--}}
                                {{--                                <li class="active"> </li>--}}
                                {{--                                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end feed -->

    <!-- footer -->
    @include('base.footer')
    <!-- end footer -->
@endsection
