@extends('voyager::master')
@section('page_header')

@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                   <th>Name</th>
                                   <th>Borrow</th>

                                </thead>
                                <tbody>
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{ $book->name }}</td>
                                        <td><a class="btn btn-sm btn-primary" href="{{ url('admin/books/borrow/'.$book->id)}}">Borrow</a> </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}

@stop
