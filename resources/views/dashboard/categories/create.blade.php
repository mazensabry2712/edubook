@extends('dashboard.layouts.master')

@section('title', 'Create Category')

@section('content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <div class="page-heading d-flex justify-content-between align-items-center mb-4">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-folder-plus"></i>
                </span>
                <div>
                    <p class="eyebrow mb-1">Categories</p>
                    <h1 class="h3 mb-1">Create New Category</h1>
                    <p class="text-muted mb-0">Add a new category to your system.</p>
                </div>
            </div>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>

        <section class="panel">
            <div class="panel-header">
                <h2 class="h5 mb-0">
                    <i class="bi bi-plus-circle"></i>
                    Add Category
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

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category Name</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}"
                                placeholder="Enter category name">

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Description</label>

                            <textarea
                                name="description"
                                rows="5"
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="Enter category description">{{ old('description') }}</textarea>

                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i>
                            Save Category
                        </button>

                        <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">
                            Cancel
                        </a>
                    </div>

                </form>

            </div>
        </section>

    </div>
</main>
@endsection
