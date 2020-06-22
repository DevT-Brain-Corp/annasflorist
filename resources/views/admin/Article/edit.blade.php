@extends('layouts.admin-master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Content Article</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">

                    <form action="{{ route('article.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <input type="hidden" name="dat" value="{{ $data->jenis }}">
                                @if($data->jenis==1)
                                    <h4>Article : workshop</h4>
                                @elseif($data->jenis==2)
                                    <h4>Article : dekorasi</h4>
                                @else
                                    <h4>Article : daily</h4>
                                @endif
                            </div>

                            <div class="col-12">
                                Title : <br>
                                <input type="text" placeholder="Add title here" name="title"
                                       class="card-input col-md-12" value="{{ $data->title }}" required>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <p>Deskripsi :</p>
                                </div>
                                {{--                            <div class="col-12">--}}
                                <textarea name="deskripsi" id="description"
                                          class="summernote form-control col-md-12" style="width: 100%"
                                          required> {{ $data->deskripsi }}</textarea>
                                {{--                            </div>--}}
                            </div>
                            <div class="col-12">
                                <button type="submit" class="col-md-12 mt-2 btn btn-rounded btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </section>


    <script>
        $(document).ready(function () {
            $('#technig').summernote({
                height: 300,
            });
        });
    </script>

@endsection

