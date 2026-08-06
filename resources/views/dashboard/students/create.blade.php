@extends('dashboard.layouts.master')

@section('title', 'Add New Student')

@section('content')

    <main class="dashboard-content">

        <div class="container-fluid px-3 px-lg-4 py-4">


            <div
                class="page-heading d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">


                <div class="page-heading-copy d-flex align-items-center">

                    <span class="page-icon">
                        <i class="bi bi-person-plus"></i>
                    </span>


                    <div class="ms-3">

                        <p class="eyebrow mb-1">
                            Students
                        </p>

                        <h1 class="h3 mb-1">
                            Add New Student
                        </h1>

                        <p class="text-muted mb-0">
                            Fill in the details below to create a new student.
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
                            <li>
                                {{ $error }}
                            </li>
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


                    <p class="text-muted mb-0">
                        All fields marked with * are required.
                    </p>


                </div>





                <div class="panel-body p-3 p-lg-4">


                    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            {{-- Name --}}
                            <div class="col-12 col-md-6">



                                <label class="form-label">
                                    Profile Picture *
                                </label>

                                <input type="file" name="images[]" multiple
                                    class="form-control @error('images') is-invalid @enderror" value="{{ old('images') }}">

                                @error('images')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <label class="form-label">
                                    Full Name *
                                </label>

                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    placeholder="Enter student name" required>

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            {{-- Email --}}
                            <div class="col-12 col-md-6">

                                <label class="form-label">
                                    Email *
                                </label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    placeholder="example@email.com" required>



                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>







                            {{-- Phone --}}
                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Phone
                                </label>


                                <input type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                                    placeholder="+20 000 000 0000">



                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>








                            {{-- City --}}
                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    City
                                </label>


                                <input type="text" name="city"
                                    class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}"
                                    placeholder="City">



                                @error('city')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>








                            {{-- State --}}
                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    State
                                </label>


                                <input type="text" name="state"
                                    class="form-control @error('state') is-invalid @enderror" value="{{ old('state') }}"
                                    placeholder="State">



                                @error('state')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>







                            {{-- Country --}}
                            <div class="col-12 col-md-6">


                                <label class="form-label">
                                    Country
                                </label>


                                <input type="text" name="country"
                                    class="form-control @error('country') is-invalid @enderror"
                                    value="{{ old('country') }}" placeholder="Country">



                                @error('country')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>







                            {{-- Address --}}
                            <div class="col-12">


                                <label class="form-label">
                                    Address
                                </label>


                                <textarea name="address" rows="4" class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Enter full address">{{ old('address') }}</textarea>



                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>




                        </div>








                        <div class="mt-4 d-flex flex-column flex-sm-row justify-content-end gap-2">


                            <a href="{{ route('students.index') }}" class="btn btn-light order-2 order-sm-1">

                                Cancel

                            </a>



                            <button type="submit" class="btn btn-primary order-1 order-sm-2">


                                <i class="bi bi-check-circle"></i>

                                Save Student


                            </button>



                        </div>




                    </form>


                </div>



            </section>




        </div>


    </main>


@endsection
``
