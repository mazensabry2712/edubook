@extends('dashboard.layouts.master')

@section('title', 'Courses List')

@section('content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <div class="page-heading d-flex justify-content-between align-items-center mb-4">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-book" aria-hidden="true"></i>
                </span>
                <div>
                    <p class="eyebrow mb-1">Courses</p>
                    <h1 class="h3 mb-1">Courses List</h1>
                    <p class="text-muted mb-0">
                        Manage all available courses.
                    </p>
                </div>
            </div>

            <a href="{{ route('courses.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i>
                Add Course
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close">
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

                <input
                    class="form-control form-control-sm table-search"
                    type="search"
                    placeholder="Search courses..."
                    data-table-search="coursesTable"
                    aria-label="Search courses">
            </div>

            <div class="table-responsive">

                @if($courses->count())

                    <table class="table align-middle mb-0" id="coursesTable" data-searchable-table>

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Actions</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Instructor</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Category</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($courses as $index => $course)

                                <tr>

                                    <td>{{ $index + 1 }}</td>

                                    <td>

                                                <a href="{{ route('courses.show', $course->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="bi bi-eye"></i>
                                                </a>

                                        <a href="{{ route('courses.edit', $course->id) }}"
                                           class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <form action="{{ route('courses.destroy', $course->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this course?')">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>

                                    </td>

                                    <td class="fw-semibold">
                                        {{ $course->title }}
                                    </td>

                                    <td>
                                        {{ \Illuminate\Support\Str::limit($course->description, 60) }}
                                    </td>

                                    <td>
                                        {{ $course->instructor }}
                                    </td>

                                    <td>
                                        ${{ number_format($course->price, 2) }}
                                    </td>

                                    <td>
                                        @if($course->status)
                                            <span class="badge bg-success">
                                                Active
                                            </span>
                                        @else
                                            <span class="badge bg-danger">
                                                Inactive
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        {{ $course->category?->name ?? '-' }}
                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                @else

                    <div class="text-center py-5">

                        <h3 class="mb-3">
                            No Courses Found
                        </h3>

                        <p class="text-muted">
                            There are no courses available yet.
                        </p>

                        <a href="{{ route('courses.create') }}"
                           class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i>
                            Add First Course
                        </a>

                    </div>

                @endif

            </div>

        </section>

    </div>
</main>
@endsection
