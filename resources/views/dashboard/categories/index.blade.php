@extends('dashboard.layouts.master')
@section('title', 'Categories ')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Categories</p>
                        <h1 class="h3 mb-1">Categories List</h1>
                        <p class="text-muted mb-0">Use responsive, searchable tables for operational records.</p>


                    </div>

                </div>
                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Add Category
                </a>
            </div>
            <section class="panel">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Categories
                                Table</span></h2>
                        <p class="text-muted mb-0">Searchable responsive table for orders and customer data.</p>
                    </div><input class="form-control form-control-sm table-search" type="search"
                        placeholder="Search orders" data-table-search="ordersTable" aria-label="Search orders">
                </div>

                <div class="table-responsive">

                    @if ($categories->isNotEmpty())
                        <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-first">Action</th>
                                    <th>Name</th>
                                    <th>Description</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($categories as $i => $category) --}}
                                @foreach ($categories as $i => $category)
                                    <tr>
                                        {{-- <td>{{ $i + 1 }}</td> --}}
                                        <td>{{ $i + 1 }}</td>
                                        <td class="text-first">
                                            <div class="d-flex gap-2">

                                                {{-- View --}}
                                                <a href="{{ route('categories.show', $category->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="bi bi-eye"></i>
                                                </a>

                                                {{-- Edit --}}
                                                <a href="{{ route('categories.edit', $category->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                {{-- Delete --}}
                                                <form action="{{ route('categories.destroy', $category->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this category?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="fw-semibold">{{ $category->name }}</td>

                                        <td class="fw-semibold">{{ $category->description }}</td>


                                    </tr>
                                    {{-- <td>
                                        <div class="table-media"><img class="product-thumb"
                                                src="../assets/images/ecommerce/product-1.jpg"
                                                alt="Wireless Headset"><span>Wireless Headset</span></div>
                                    </td> --}}
                                @endforeach

                                {{-- @endforeach --}}

                            </tbody>
                        </table>
                    @else
                        <div class="text-center py-5">
                            <h3 class="h5 mb-2">No categories found</h3>
                            <p class="text-muted mb-4">There are no categories available at the moment. Please check back
                                later.</p>
                            <a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"
                                    aria-hidden="true"></i> Add New Category</a>
                        </div>
                    @endif

                </div>
            </section>
        </div>
    </main>
@endsection
