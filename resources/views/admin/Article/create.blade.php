@extends('layouts.admin-master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Add Content Article</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">

                    <form action="{{ route('article.store') }}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <input type="hidden" name="dat" value="{{ $dat }}">
                                @if($dat==1)
                                    <h4>Article : workshop</h4>
                                @elseif($dat==2)
                                    <h4>Article : dekorasi</h4>
                                @else
                                    <h4>Article : daily</h4>
                                @endif
                            </div>

                            <div class="col-12">
                                Title : <br>
                                <input type="text" placeholder="Add title here" name="title"
                                       class="card-input col-md-12" required>
                            </div>

                            <div class="col-12">
                                Background photo : <br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="photo" type="file" class="custom-file-input"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                        <label class="custom-file-label" for="inputGroupFile01" >Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <p>Deskripsi :</p>
                                </div>
                                {{--                            <div class="col-12">--}}
                                <textarea name="deskripsi" id="description"
                                          class="summernote form-control col-md-12" style="width: 100%"
                                          required></textarea>
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

