@extends('dashboard.layouts.master')

@section('title', 'Edit Course')

@section('content')

    <main class="dashboard-content">

        <div class="container-fluid px-3 px-lg-4 py-4">


            <div class="page-heading d-flex justify-content-between align-items-center">


                <div class="page-heading-copy">

                    <span class="page-icon">
                        <i class="bi bi-pencil-square"></i>
                    </span>

                    <div>

                        <p class="eyebrow mb-1">Courses</p>

                        <h1 class="h3 mb-1">
                            Edit Course
                        </h1>

                        <p class="text-muted mb-0">
                            Update course information.
                        </p>

                    </div>

                </div>



                <a href="{{ route('courses.index') }}" class="btn btn-light">

                    <i class="bi bi-arrow-left"></i>

                    Back to Courses

                </a>


            </div>




            @if ($errors->any())

                <div class="alert alert-danger mt-3">

                    <ul class="mb-0 ps-3">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif




            <section class="panel mt-4">


                <div class="panel-header">

                    <h2 class="h5 mb-1 section-title">

                        <i class="bi bi-journal-text"></i>

                        <span>
                            Course Details
                        </span>

                    </h2>


                    <p class="text-muted mb-0">
                        Edit the course information below.
                    </p>


                </div>





                <div class="panel-body p-3 p-lg-4">


                    <form action="{{ route('courses.update', $course->id) }}" method="POST">


                        @csrf

                        @method('PUT')



                        <div class="row g-3">



                            {{-- Title --}}
                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Course Title *
                                </label>


                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title', $course->title) }}" required>


                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>






                            {{-- Instructor --}}
                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Instructor *
                                </label>


                                <input type="text" name="instructor"
                                    class="form-control @error('instructor') is-invalid @enderror"
                                    value="{{ old('instructor', $course->instructor) }}" required>



                                @error('instructor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>






                            {{-- Category --}}
                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Category *
                                </label>


                                <select name="category_id" class="form-select @error('category_id') is-invalid @enderror"
                                    required>



                                    <option value="">
                                        Choose category
                                    </option>



                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>


                                            {{ $category->name }}


                                        </option>
                                    @endforeach



                                </select>




                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror



                            </div>







                            {{-- Price --}}
                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Price *
                                </label>



                                <div class="input-group">


                                    <span class="input-group-text">
                                        $
                                    </span>



                                    <input type="number" step="0.01" min="0" name="price"
                                        class="form-control @error('price') is-invalid @enderror"
                                        value="{{ old('price', $course->price) }}" required>



                                </div>




                                @error('price')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror



                            </div>







                            {{-- Status --}}
                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Status *
                                </label>




                                <select name="status" class="form-select">



                                    <option value="1" {{ old('status', $course->status) == 1 ? 'selected' : '' }}>

                                        Active

                                    </option>



                                    <option value="0" {{ old('status', $course->status) == 0 ? 'selected' : '' }}>

                                        Inactive

                                    </option>



                                </select>


                            </div>







                            {{-- Description --}}
                            <div class="col-12">


                                <label class="form-label">
                                    Description *
                                </label>




                                <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $course->description) }}</textarea>




                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror



                            </div>



                        </div>







                        <div class="mt-4 d-flex justify-content-end gap-2">


                            <a href="{{ route('courses.index') }}" class="btn btn-light">

                                Cancel

                            </a>




                            <button type="submit" class="btn btn-primary">


                                <i class="bi bi-check-circle"></i>

                                Update Course


                            </button>



                        </div>





                    </form>



                </div>


            </section>



        </div>


    </main>


@endsection
