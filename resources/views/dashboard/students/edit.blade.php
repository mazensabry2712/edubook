
@extends('dashboard.layouts.master')

@section('title', 'Edit Student')

@section('content')

    <main class="dashboard-content">

        <div class="container-fluid px-3 px-lg-4 py-4">


            <div
                class="page-heading d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">


                <div class="page-heading-copy d-flex align-items-center">

                    <span class="page-icon">
                        <i class="bi bi-pencil-square"></i>
                    </span>

                    <div class="ms-3">
                        <p class="eyebrow mb-1">Students</p>

                        <h1 class="h3 mb-1">
                            Edit Student
                        </h1>

                        <p class="text-muted mb-0">
                            Update student information.
                        </p>
                    </div>

                </div>



                <a href="{{ route('students.index') }}" class="btn btn-light">

                    <i class="bi bi-arrow-left"></i>
                    Back to Students

                </a>


            </div>





            @if ($errors->any())

                <div class="alert alert-danger mt-4">

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

                        <i class="bi bi-person-lines-fill"></i>

                        <span>
                            Student Information
                        </span>

                    </h2>


                </div>





                <div class="panel-body p-3 p-lg-4">


                    <form action="{{ route('students.update', $student->id) }}" method="POST">


                        @csrf
                        @method('PUT')



                        <div class="row g-3">





                            <div class="col-12 col-md-6">

                                <label class="form-label">
                                    Name *
                                </label>

                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $student->name) }}" required>

                            </div>






                            <div class="col-12 col-md-6">

                                <label class="form-label">
                                    Email *
                                </label>

                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $student->email) }}" required>

                            </div>






                            <div class="col-12 col-md-6">

                                <label class="form-label">
                                    Phone
                                </label>

                                <input type="text" name="phone" class="form-control"
                                    value="{{ old('phone', $student->phone) }}">

                            </div>






                            <div class="col-12 col-md-6">

                                <label class="form-label">
                                    City
                                </label>

                                <input type="text" name="city" class="form-control"
                                    value="{{ old('city', $student->city) }}">

                            </div>






                            <div class="col-12 col-md-6">

                                <label class="form-label">
                                    State
                                </label>

                                <input type="text" name="state" class="form-control"
                                    value="{{ old('state', $student->state) }}">

                            </div>






                            <div class="col-12 col-md-6">

                                <label class="form-label">
                                    Country
                                </label>

                                <input type="text" name="country" class="form-control"
                                    value="{{ old('country', $student->country) }}">

                            </div>






                            <div class="col-12">

                                <label class="form-label">
                                    Address
                                </label>


                                <textarea name="address" rows="4" class="form-control">{{ old('address', $student->address) }}</textarea>


                            </div>



                        </div>






                        <div class="mt-4 d-flex flex-column flex-sm-row justify-content-end gap-2">


                            <a href="{{ route('students.index') }}" class="btn btn-light">

                                Cancel

                            </a>



                            <button class="btn btn-primary">

                                <i class="bi bi-check-circle"></i>

                                Update Student

                            </button>


                        </div>



                    </form>


                </div>



            </section>


        </div>

    </main>


@endsection
