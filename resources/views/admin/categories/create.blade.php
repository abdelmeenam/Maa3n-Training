@extends('layouts.admin')

@section('content')

    <h2 class="my-4">Create category</h2>
 
    <form action="/admin/categories" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name:</label>
            <input type="name" class="form-control" placeholder="Enter Category" name="name">
        </div>

        <div class="form-group">
            <label for="">Parent ID:</label>
            <select name="cat_id"  class="form-control">
                <option value="">No cat</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" > {{ $category->name }} </option>
                @endforeach
             
            </select>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
