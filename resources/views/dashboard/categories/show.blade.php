@extends('dashboard.layouts.master')

@section('title', 'Category Details')

@section('content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <div class="page-heading d-flex justify-content-between align-items-center">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-eye"></i>
                </span>

                <div>
                    <p class="eyebrow mb-1">Categories</p>
                    <h1 class="h3 mb-1">Category Details</h1>
                    <p class="text-muted mb-0">
                        View category information.
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
                    <i class="bi bi-folder"></i>
                    Category Information
                </h2>
            </div>

            <div class="panel-body p-4">

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>ID</strong>
                    </div>

                    <div class="col-md-9">
                        {{ $category->id }}
                    </div>
                </div>

                <hr>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Name</strong>
                    </div>

                    <div class="col-md-9">
                        {{ $category->name }}
                    </div>
                </div>

                <hr>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Description</strong>
                    </div>

                    <div class="col-md-9">
                        {{ $category->description ?? '-' }}
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <strong>Created At</strong>
                    </div>

                    <div class="col-md-9">
                        {{ $category->created_at->format('d M Y h:i A') }}
                    </div>
                </div>

            </div>
        </section>

    </div>
</main>
@endsection
