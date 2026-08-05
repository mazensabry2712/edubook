@extends('dashboard.layouts.master')

@section('title', 'Edit Booking')

@section('content')

    <main class="dashboard-content">

        <div class="container-fluid px-3 px-lg-4 py-4">


            <div class="page-heading d-flex justify-content-between align-items-center">

                <div>

                    <p class="eyebrow">
                        Bookings
                    </p>

                    <h1 class="h3">
                        Edit Booking
                    </h1>

                </div>


                <a href="{{ route('bookings.index') }}" class="btn btn-light">

                    Back

                </a>


            </div>





            <section class="panel mt-4">


                <div class="panel-body p-4">


                    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">


                        @csrf

                        @method('PUT')



                        <div class="row g-3">



                            <div class="col-md-6">


                                <label class="form-label">
                                    Student
                                </label>


                                <select name="student_id" class="form-select">


                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}"
                                            {{ $booking->student_id == $student->id ? 'selected' : '' }}>

                                            {{ $student->name }}

                                        </option>
                                    @endforeach


                                </select>


                            </div>





                            <div class="col-md-6">


                                <label class="form-label">
                                    Course
                                </label>


                                <select name="course_id" class="form-select">


                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}"
                                            {{ $booking->course_id == $course->id ? 'selected' : '' }}>

                                            {{ $course->title }}

                                        </option>
                                    @endforeach


                                </select>


                            </div>





                            <div class="col-md-6">


                                <label class="form-label">
                                    Booking Time
                                </label>


                                <input type="time" name="booking_time" class="form-control"
                                    value="{{ $booking->booking_time }}">


                            </div>



                        </div>




                        <div class="mt-4 text-end">


                            <button class="btn btn-primary">

                                Update Booking

                            </button>


                        </div>



                    </form>


                </div>


            </section>



        </div>


    </main>


@endsection
