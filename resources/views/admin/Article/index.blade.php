@extends('layouts.admin-master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Article</h1>
            <div class="section-header-button">
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal">Add Content</a>
            </div>
        </div>

        <div class="section-body">
            <div class="container">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>Title</td>
                                <td>Pubish at</td>
                                <td>action</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hayolo</td>
                                <td>11 nov 2020</td>
                                <td>
                                    <div class="row mr-2 ml-2">
                                        <input type="submit" value="Edit"
                                               class="btn btn-rounded btn-primary col-md-4 mr-2">
                                        <input type="submit" value="Delete" class="btn btn-rounded btn-danger col-md-4">
                                    </div>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Content</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    tambah artikel pada kategori :
                    <div class="row">
                        <a href="{{ route('article.create') }}">
                            <button type="submit" class="btn btn-primary col-12 mt-2">workshop</button>
                        </a>
                        <button type="submit" class="btn btn-primary col-12 mt-2">dekorasi</button>
                        <button type="submit" class="btn btn-primary col-12 mt-2">daily</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
