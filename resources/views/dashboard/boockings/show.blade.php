@extends('dashboard.layouts.master')

@section('title', 'Booking Details')

@section('content')

    <main class="dashboard-content">

        <div class="container-fluid px-3 px-lg-4 py-4">


            <div class="page-heading d-flex justify-content-between align-items-center">


                <div>

                    <p class="eyebrow">
                        Bookings
                    </p>

                    <h1 class="h3">
                        Booking Details
                    </h1>

                </div>



                <a href="{{ route('bookings.index') }}" class="btn btn-light">

                    Back

                </a>


            </div>





            <section class="panel mt-4">


                <div class="panel-body p-4">


                    <div class="row g-4">



                        <div class="col-md-6">

                            <h6 class="text-muted">
                                Student
                            </h6>

                            <p class="fw-semibold">
                                {{ $booking->student?->name ?? '-' }}
                            </p>

                        </div>





                        <div class="col-md-6">

                            <h6 class="text-muted">
                                Course
                            </h6>

                            <p class="fw-semibold">
                                {{ $booking->course?->title ?? '-' }}
                            </p>

                        </div>





                        <div class="col-md-6">

                            <h6 class="text-muted">
                                Booking Time
                            </h6>

                            <p>
                                {{ $booking->booking_time ?? '-' }}
                            </p>

                        </div>





                        <div class="col-md-6">

                            <h6 class="text-muted">
                                Created At
                            </h6>

                            <p>
                                {{ $booking->created_at->format('Y-m-d') }}
                            </p>

                        </div>



                    </div>


                </div>


            </section>


        </div>


    </main>


@endsection
