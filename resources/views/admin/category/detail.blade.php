@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID:</th>
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td>{{ $category->name }}</td>
                        </tr>
                        <tr>
                            <th>Parent Category:</th>
                            <td>
                                @if($category->parent_id)
                                    {{ $category->parent->name ?? 'N/A' }}
                                @else
                                    <span class="text-muted">Root Category</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td>{{ $category->description ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Slug:</th>
                            <td>{{ $category->slug }}</td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td>
                                @if($category->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Created At:</th>
                            <td>{{ $category->created_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At:</th>
                            <td>{{ $category->updated_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="mt-3">
                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('category.index') }}" class="btn btn-secondary">Back to List</a>
                <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" 
                        onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection