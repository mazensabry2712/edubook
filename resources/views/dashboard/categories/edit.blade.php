@extends('dashboard.layouts.master')

@section('title', 'Edit Category')

@section('content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <div class="page-heading d-flex justify-content-between align-items-center">

            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-pencil-square"></i>
                </span>

                <div>
                    <p class="eyebrow mb-1">Categories</p>
                    <h1 class="h3 mb-1">Edit Category</h1>
                    <p class="text-muted mb-0">
                        Update category information.
                    </p>
                </div>
            </div>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i>
                Back
            </a>

        </div>

        <section class="panel mt-4">

            <div class="panel-header">
                <h2 class="h5 mb-0">
                    <i class="bi bi-pencil"></i>
                    Update Category
                </h2>
            </div>

            <div class="panel-body p-4">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('categories.update',$category->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">
                            Category Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="{{ old('name',$category->name) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Description
                        </label>

                        <textarea
                            name="description"
                            rows="5"
                            class="form-control">{{ old('description',$category->description) }}</textarea>
                    </div>

                    <button class="btn btn-warning">
                        <i class="bi bi-check-circle"></i>
                        Update Category
                    </button>

                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                        Cancel
                    </a>

                </form>

            </div>

        </section>

    </div>
</main>
@endsection
