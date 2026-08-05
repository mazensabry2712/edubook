
@extends('dashboard.layouts.master')

@section('title', 'Bookings List')

@section('content')

    <main class="dashboard-content">

        <div class="container-fluid px-3 px-lg-4 py-4">


            <div class="page-heading d-flex justify-content-between align-items-center mb-4">


                <div class="page-heading-copy">

                    <span class="page-icon">
                        <i class="bi bi-calendar-check"></i>
                    </span>


                    <div>

                        <p class="eyebrow mb-1">
                            Bookings
                        </p>


                        <h1 class="h3 mb-1">
                            Bookings List
                        </h1>


                        <p class="text-muted mb-0">
                            Manage all course bookings.
                        </p>


                    </div>


                </div>




                <a href="{{ route('bookings.create') }}" class="btn btn-primary">

                    <i class="bi bi-plus-circle"></i>

                    Add Booking

                </a>



            </div>





            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">

                    {{ session('success') }}


                    <button type="button" class="btn-close" data-bs-dismiss="alert">

                    </button>


                </div>
            @endif






            <section class="panel">



                <div class="panel-header d-flex justify-content-between align-items-center">


                    <div>

                        <h2 class="h5 mb-1 section-title">

                            <i class="bi bi-table"></i>

                            <span>
                                Bookings Table
                            </span>

                        </h2>


                        <p class="text-muted mb-0">
                            List of all bookings.
                        </p>


                    </div>




                    <input class="form-control form-control-sm table-search" type="search" placeholder="Search bookings..."
                        data-table-search="bookingsTable" aria-label="Search bookings">


                </div>







                <div class="table-responsive">


                    @if ($bookings->count())


                        <table class="table align-middle mb-0" id="bookingsTable" data-searchable-table>



                            <thead>

                                <tr>

                                    <th>#</th>

                                    <th>Actions</th>

                                    <th>Student</th>

                                    <th>Course</th>

                                    <th>Booking Time</th>

                                    <th>Created At</th>

                                </tr>


                            </thead>





                            <tbody>



                                @foreach ($bookings as $index => $booking)
                                    <tr>


                                        <td>
                                            {{ $index + 1 }}
                                        </td>





                                        <td>


                                            <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-info btn-sm">

                                                <i class="bi bi-eye"></i>

                                            </a>





                                            <a href="{{ route('bookings.edit', $booking->id) }}"
                                                class="btn btn-warning btn-sm">

                                                <i class="bi bi-pencil-square"></i>

                                            </a>







                                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST"
                                                class="d-inline">


                                                @csrf

                                                @method('DELETE')



                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this booking?')">


                                                    <i class="bi bi-trash"></i>


                                                </button>



                                            </form>


                                        </td>








                                        <td class="fw-semibold">

                                            {{ $booking->student?->name ?? '-' }}

                                        </td>






                                        <td>

                                            {{ $booking->course?->title ?? '-' }}

                                        </td>






                                        <td>

                                            @if ($booking->booking_time)
                                                {{ \Carbon\Carbon::parse($booking->booking_time)->format('h:i A') }}
                                            @else
                                                -
                                            @endif

                                        </td>







                                        <td>

                                            {{ $booking->created_at?->format('Y-m-d') }}

                                        </td>





                                    </tr>
                                @endforeach



                            </tbody>


                        </table>
                    @else
                        <div class="text-center py-5">


                            <h3 class="mb-3">
                                No Bookings Found
                            </h3>



                            <p class="text-muted">
                                There are no bookings available yet.
                            </p>




                            <a href="{{ route('bookings.create') }}" class="btn btn-primary">


                                <i class="bi bi-plus-circle"></i>

                                Add First Booking


                            </a>



                        </div>




                    @endif



                </div>



            </section>




        </div>


    </main>


@endsection
