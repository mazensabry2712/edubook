@extends('dashboard.layouts.master')

@section('title', 'Student Details')

@section('content')

    <main class="dashboard-content">

        <div class="container-fluid px-3 px-lg-4 py-4">



            <div
                class="page-heading d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">


                <div class="page-heading-copy d-flex align-items-center">

                    <span class="page-icon">

                        <i class="bi bi-person"></i>

                    </span>


                    <div class="ms-3">

                        <p class="eyebrow mb-1">
                            Students
                        </p>


                        <h1 class="h3 mb-1">
                            Student Details
                        </h1>


                        <p class="text-muted mb-0">
                            View complete student information.
                        </p>


                    </div>


                </div>





                <div>


                    <a href="{{ route('students.index') }}" class="btn btn-light">

                        <i class="bi bi-arrow-left"></i>

                        Back

                    </a>



                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">

                        <i class="bi bi-pencil-square"></i>

                        Edit

                    </a>


                </div>


            </div>






            <section class="panel mt-4">


                <div class="panel-body p-3 p-lg-4">



                    <div class="row g-4">





                        <div class="col-12 col-md-6">

                            <h6 class="text-muted">
                                Name
                            </h6>

                            <p class="fw-semibold">
                                {{ $student->name }}
                            </p>

                        </div>







                        <div class="col-12 col-md-6">

                            <h6 class="text-muted">
                                Email
                            </h6>

                            <p class="fw-semibold">
                                {{ $student->email }}
                            </p>

                        </div>







                        <div class="col-12 col-md-6">

                            <h6 class="text-muted">
                                Phone
                            </h6>

                            <p class="fw-semibold">
                                {{ $student->phone ?? '-' }}
                            </p>

                        </div>







                        <div class="col-12 col-md-6">

                            <h6 class="text-muted">
                                City
                            </h6>

                            <p class="fw-semibold">
                                {{ $student->city ?? '-' }}
                            </p>

                        </div>







                        <div class="col-12 col-md-6">

                            <h6 class="text-muted">
                                State
                            </h6>

                            <p class="fw-semibold">
                                {{ $student->state ?? '-' }}
                            </p>

                        </div>







                        <div class="col-12 col-md-6">

                            <h6 class="text-muted">
                                Country
                            </h6>

                            <p class="fw-semibold">
                                {{ $student->country ?? '-' }}
                            </p>

                        </div>







                        <div class="col-12">

                            <h6 class="text-muted">
                                Address
                            </h6>


                            <p>
                                {{ $student->address ?? '-' }}
                            </p>


                        </div>




                    </div>



                </div>


            </section>




        </div>


    </main>


@endsection
