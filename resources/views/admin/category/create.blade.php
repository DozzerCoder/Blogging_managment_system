@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('category.store')}}" method ='post'>
                {{csrf_field()}}
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="name">Category Name </label>
                        <input type="text" name = "name"  class="form-control" placeholder="Create a new Category">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type = "submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop