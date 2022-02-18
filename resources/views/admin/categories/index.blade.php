@extends('layouts.admin')

@section('content')
    <h2 class="mb-6">All Categories</h2>
    <div class="">
        <a href="/admin/categories/create" class="btn btn-sm btn-outline-primary ">Add new category!</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <td>Slug</td>
                <th>Cat id</th>
                <th>Created At</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->cat_id }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td> <a href="/admin/categories/{{ $category->id }}" class="btn btn-sm btn-outline-success"> Edit</a>  </td>
                    <td> <a href="/admin/categories/{{ $category->id }}" class="btn btn-sm btn-outline-danger"> Delete</a>  </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" > NO Categories</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
