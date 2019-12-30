@extends('layouts.based')

@section('title', 'category page')

@section('content')
   <div class="table-responsive">
    <h1>categories</h1>
    <a href="/category/create" class="btn btn-info mb-2">Create new category</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pomade</td>
                <td>New hair cute</td>
            </tr>
        </tbody>
    </table>
   </div>
@endsection