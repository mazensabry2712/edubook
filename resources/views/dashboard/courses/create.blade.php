@extends('dashboard.layouts.master')
@section('title', 'Add New Course')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-plus-circle" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Courses</p>
                        <h1 class="h3 mb-1">Add New Course</h1>
                        <p class="text-muted mb-0">Fill in the details below to create a new course.</p>
                    </div>
                </div>

                <div class="page-heading-actions">
                    <a href="{{ route('courses.index') }}" class="btn btn-light">
                        <i class="bi bi-arrow-left" aria-hidden="true"></i> Back to Courses
                    </a>
                </div>
            </div>

            {{-- Validation errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <section class="panel">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-journal-plus" aria-hidden="true"></i>
                            <span>Course Details</span>
                        </h2>
                        <p class="text-muted mb-0">All fields marked with * are required.</p>
                    </div>
                </div>

                <div class="panel-body p-3 p-lg-4">
                    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">

                            {{-- Name --}}
                            <div class="col-12 col-md-6">
                                <label for="name" class="form-label">Course Name *</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    placeholder="e.g. Introduction to Laravel" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Instructor --}}
                            <div class="col-12 col-md-6">
                                <label for="instructor" class="form-label">Instructor *</label>
                                <input type="text" name="instructor" id="instructor"
                                    class="form-control @error('instructor') is-invalid @enderror"
                                    value="{{ old('instructor') }}" placeholder="e.g. John Doe" required>
                                @error('instructor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Price --}}
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="price" class="form-label">Price ($) *</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" name="price" id="price" step="0.01" min="0"
                                        class="form-control @error('price') is-invalid @enderror"
                                        value="{{ old('price') }}" placeholder="0.00" required>
                                    @error('price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Category --}}
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="category_id" class="form-label">Category *</label>
                                <select name="category_id" id="category_id"
                                    class="form-select @error('category_id') is-invalid @enderror" required>
                                    <option value="" disabled selected>Choose a category</option>
                                    @isset($categories)
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    @endisset
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Status --}}
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="status" class="form-label">Status *</label>
                                <select name="status" id="status"
                                    class="form-select @error('status') is-invalid @enderror" required>
                                    <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="0" {{ old('status') === '0' ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Image (optional, remove if not needed) --}}
                            <div class="col-12 col-md-6">
                                <label for="image" class="form-label">Course Image</label>
                                <input type="file" name="image" id="image" accept="image/*"
                                    class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Description --}}
                            <div class="col-12">
                                <label for="description" class="form-label">Description *</label>
                                <textarea name="description" id="description" rows="5"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Write a short description of the course..." required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="d-flex flex-column flex-sm-row gap-2 justify-content-sm-end mt-4">
                            <a href="{{ route('courses.index') }}" class="btn btn-light order-2 order-sm-1">
                                Cancel
                            </a>
                            <button type="submit" class="btn btn-primary order-1 order-sm-2">
                                <i class="bi bi-check-circle" aria-hidden="true"></i> Save Course
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
