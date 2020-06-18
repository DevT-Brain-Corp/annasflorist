@extends('layouts.admin-master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Add Content Article</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <h4>Article : A</h4>
                        </div>
                        <div class="col-12">
                            <p>Deskripsi :</p>
                        </div>
                        <div class="col-12">
                            <textarea name="description" id="description"
                                      class="summernote" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
    <script !src="">
        $(document).ready(function() {
            $('#technig').summernote({
                height:300,
            });
        });
    </script>

@endsection

@section('script')

@endsection
