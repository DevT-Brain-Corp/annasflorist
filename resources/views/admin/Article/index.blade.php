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
                                <td>Category</td>
                                <td>Pubish at</td>
                                <td>action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $i=>$datas)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $datas->title }}</td>
                                    <td>
                                        @if($datas->jenis==1)
                                            workshop
                                        @elseif($datas->jenis==2)
                                            dekorasi
                                        @else
                                            daily
                                        @endif
                                    </td>
                                    <td>{{ date('d-m-Y', strtotime($datas->created_at)) }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('article.edit', $datas->id) }}">
                                                <div class=" mr-2 ml-2 col-md-4">

                                                    <input type="submit" value="Edit"
                                                           class="btn btn-rounded btn-primary  mr-2">
                                                </div>
                                            </a>
                                            <form action="{{ route('article.destroy', $datas->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <div class=" mr-2 ml-2 col-md-4">
                                                    <input type="submit" value="Delete"
                                                           class="btn btn-rounded btn-danger ">
                                                </div>
                                            </form>
                                        </div>


                                    </td>
                                </tr>
                            @endforeach
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
                        <form action="{{ route('article.create') }}" method="get">
                            <input type="hidden" name="dat" value="1">
                            <button type="submit" class="btn btn-primary col-12 mt-2">workshop</button>
                        </form>
                        <form action="{{ route('article.create')  }}" method="get">
                            <input type="hidden" name="dat" value="2">
                            <button type="submit" class="btn btn-primary col-12 mt-2">dekorasi</button>
                        </form>
                        <form action="{{ route('article.create')  }}" method="get">
                            <input type="hidden" name="dat" value="3">
                            <button type="submit" class="btn btn-primary col-12 mt-2">daily</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
