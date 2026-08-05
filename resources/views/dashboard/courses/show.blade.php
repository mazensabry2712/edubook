```blade
@extends('dashboard.layouts.master')

@section('title', 'Course Details')

@section('content')

    <main class="dashboard-content">

        <div class="container-fluid px-3 px-lg-4 py-4">


            <div class="page-heading d-flex justify-content-between align-items-center">


                <div class="page-heading-copy">

                    <span class="page-icon">
                        <i class="bi bi-book"></i>
                    </span>


                    <div>

                        <p class="eyebrow mb-1">
                            Courses
                        </p>

                        <h1 class="h3 mb-1">
                            Course Details
                        </h1>

                        <p class="text-muted mb-0">
                            View complete course information.
                        </p>

                    </div>


                </div>




                <div>

                    <a href="{{ route('courses.index') }}" class="btn btn-light">

                        <i class="bi bi-arrow-left"></i>

                        Back

                    </a>


                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">

                        <i class="bi bi-pencil-square"></i>

                        Edit

                    </a>

                </div>



            </div>





            <section class="panel mt-4">


                <div class="panel-body p-4">


                    <div class="row g-4">



                        <div class="col-md-6">


                            <h6 class="text-muted">
                                Course Title
                            </h6>


                            <p class="fw-semibold">
                                {{ $course->title }}
                            </p>


                        </div>






                        <div class="col-md-6">


                            <h6 class="text-muted">
                                Instructor
                            </h6>


                            <p class="fw-semibold">
                                {{ $course->instructor }}
                            </p>


                        </div>






                        <div class="col-md-6">


                            <h6 class="text-muted">
                                Category
                            </h6>


                            <p class="fw-semibold">
                                {{ $course->category?->name ?? '-' }}
                            </p>


                        </div>






                        <div class="col-md-6">


                            <h6 class="text-muted">
                                Price
                            </h6>


                            <p class="fw-semibold">
                                ${{ number_format($course->price, 2) }}
                            </p>


                        </div>






                        <div class="col-md-6">


                            <h6 class="text-muted">
                                Status
                            </h6>



                            @if ($course->status)
                                <span class="badge bg-success">
                                    Active
                                </span>
                            @else
                                <span class="badge bg-danger">
                                    Inactive
                                </span>
                            @endif
                        </div>
                        <div class="col-12">
                            <h6 class="text-muted">
                                Description
                            </h6>
                            <p>
                                {{ $course->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>
@endsection
```
