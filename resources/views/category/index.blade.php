@extends('layouts.based')

@section('title', 'category index')

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
                <th>Create AT</th>
                <th>Update AT</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
                //buat nomor urutan
                $num =0;
            @endphp
                @foreach($categories as $item)
            @php
                $num++;
            @endphp

            <tr>
                <td>{{ $num }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description}}</td>
                <td>{{ $item->created_at}}</td>
                <td>{{ $item->updated_at}}</td>
                <td>
						<a class="btn btn-success" href="/category/{{ $item->id }}/edit">Edit</a>
						<form action="/category/{{ $item->id }}" method="POST">
							@csrf
							@method("DELETE")
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
				</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </div>
@endsection