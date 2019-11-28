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
                        <form class="form form-control" method="post">
                            @csrf
                            <input type="hidden" name="category_id" value="{{ $book->id }}">
                            <input type="hidden" name="book_id" value="{{ $book->category_id }}">

                            <div class="form-group">
                               <select class="form-control" name="user_id">
                                   @foreach($users as $user)
                                   <option value="{{$user->id}}">{{ $user->name }}</option>
                                     @endforeach
                               </select>
                            </div>

                            <div class="form-group">
                                <input type="date" name="borrow_date" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="date" name="expired_date" class="form-control">
                            </div>

                            <button class="btn btn-success">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}

@stop
