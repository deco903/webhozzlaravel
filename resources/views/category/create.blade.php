@extends('layouts.based')

@section('title', 'category new category')

@section('content')
    <h3>Create new category</h3><hr>
    <a href="/category/" class="btn btn-info mb-2">Back to Table</a>
   <form action="">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="nama" class="form-control" placeholder="please fill the name"></input>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" placeholder="input description" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">save</button>
        </div>
   </form>
@endsection