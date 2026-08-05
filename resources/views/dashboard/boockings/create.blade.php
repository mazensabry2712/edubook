@extends('dashboard.layouts.master')

@section('title', 'Add Booking')

@section('content')

    <main class="dashboard-content">

        <div class="container-fluid px-3 px-lg-4 py-4">


            <div
                class="page-heading d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">


                <div class="page-heading-copy d-flex align-items-center">

                    <span class="page-icon">
                        <i class="bi bi-calendar-plus"></i>
                    </span>


                    <div class="ms-3">

                        <p class="eyebrow mb-1">
                            Bookings
                        </p>

                        <h1 class="h3 mb-1">
                            Add New Booking
                        </h1>

                        <p class="text-muted mb-0">
                            Create a new course booking.
                        </p>

                    </div>

                </div>



                <a href="{{ route('bookings.index') }}" class="btn btn-light">

                    <i class="bi bi-arrow-left"></i>

                    Back

                </a>


            </div>





            @if ($errors->any())

                <div class="alert alert-danger mt-4">

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif





            <section class="panel mt-4">


                <div class="panel-body p-3 p-lg-4">


                    <form action="{{ route('bookings.store') }}" method="POST">

                        @csrf


                        <div class="row g-3">



                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Student *
                                </label>


                                <select name="student_id" class="form-select" required>


                                    <option value="">
                                        Choose Student
                                    </option>


                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}"
                                            {{ old('student_id') == $student->id ? 'selected' : '' }}>

                                            {{ $student->name }}

                                        </option>
                                    @endforeach


                                </select>


                            </div>





                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Course *
                                </label>


                                <select name="course_id" class="form-select" required>


                                    <option value="">
                                        Choose Course
                                    </option>


                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}"
                                            {{ old('course_id') == $course->id ? 'selected' : '' }}>

                                            {{ $course->title }}

                                        </option>
                                    @endforeach


                                </select>


                            </div>







                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Booking Time
                                </label>


                                <input type="time" name="booking_time" class="form-control"
                                    value="{{ old('booking_time') }}">


                            </div>




                        </div>




                        <div class="mt-4 d-flex justify-content-end gap-2">


                            <a href="{{ route('bookings.index') }}" class="btn btn-light">

                                Cancel

                            </a>



                            <button class="btn btn-primary">

                                <i class="bi bi-check-circle"></i>

                                Save Booking

                            </button>


                        </div>



                    </form>


                </div>


            </section>


        </div>


    </main>


@endsection
