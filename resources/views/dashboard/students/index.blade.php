@extends('dashboard.layouts.master')

@section('title', 'Students List')

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">

            <div class="page-heading d-flex justify-content-between align-items-center mb-4">
                <div class="page-heading-copy">
                    <span class="page-icon">
                        <i class="bi bi-person" aria-hidden="true"></i>
                    </span>
                    <div>
                        <p class="eyebrow mb-1">Students</p>
                        <h1 class="h3 mb-1">Students List</h1>
                        <p class="text-muted mb-0">
                            Manage all available students.
                        </p>
                    </div>
                </div>

                <a href="{{ route('students.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Add Student
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif

            <section class="panel">

                <div class="panel-header d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-table"></i>
                            <span>Courses Table</span>
                        </h2>

                        <p class="text-muted mb-0">
                            List of all available courses.
                        </p>
                    </div>

                    <input class="form-control form-control-sm table-search" type="search" placeholder="Search courses..."
                        data-table-search="coursesTable" aria-label="Search courses">
                </div>

                <div class="table-responsive">

                    @if ($students->count())

                        <table class="table align-middle mb-0" id="coursesTable" data-searchable-table>

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Actions</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($students as $index => $student)
                                    <tr>

                                        <td>{{ $index + 1 }}</td>

                                        <td>

                                            <a href="{{ route('students.show', $student->id) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="bi bi-eye"></i>
                                            </a>

                                            <a href="{{ route('students.edit', $student->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                                class="d-inline">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this student?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>

                                            </form>

                                        </td>

                                        <td class="fw-semibold">
                                            {{ $student->name }}
                                        </td>

                                        <td>
                                            {{ \Illuminate\Support\Str::limit($student->email, 60) }}
                                        </td>

                                        <td>
                                            {{ $student->phone }}
                                        </td>
                                        <td>
                                            {{ $student->address }}
                                        </td>
                                        <td>
                                            {{ $student->city }}
                                        </td>


                                        <td>
                                            {{ $student->state }}
                                        </td>
                                        <td>
                                            {{ $student->country }}
                                        </td>


                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    @else
                        <div class="text-center py-5">

                            <h3 class="mb-3">
                                No Students Found
                            </h3>

                            <p class="text-muted">
                                There are no students available yet.
                            </p>

                            <a href="{{ route('students.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i>
                                Add First Student
                            </a>

                        </div>

                    @endif

                </div>

            </section>

        </div>
    </main>
@endsection
