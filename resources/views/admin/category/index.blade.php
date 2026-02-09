@extends('layout.admin')
@section('content')

    <body>
        <button class="btn btn-primary" style="margin-bottom: 15px">
            <a href="{{ route('category.create') }}" style="color: white; text-decoration: none;">Add New Category</a>
        </button>
        <br>
        
        <table class="table table-bordered" border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent Category</th>
                    <th>Description</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            @if($category->parent_id)
                                {{ $category->parent->name ?? 'N/A' }}
                            @else
                                <span class="text-muted"></span>
                            @endif
                        </td>
                        <td>{{ $category->description ?? 'N/A' }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            @if($category->is_active)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
@endsection