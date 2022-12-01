@extends('layouts.admin')

@section('content')
    <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-nav-item">
                    <div class="col-6 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 class="h3 mb-0 ls-tight">Student List</h1>
                    </div>
                    <!-- Actions -->
                    <div class="col-6 text-end">
                        <div class="mx-n1">
                            <a href="{{ route('students.create') }}" class="btn d-inline-flex btn-sm btn-dark mx-1">
                                <span class=" pe-2">
                                    <i class="bi bi-plus"></i>
                                </span>
                                <span>Create</span>
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs mt-4 overflow-x border-0"></ul>
            </div>
        </div>
    </header>

    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <div class="row card bg-white">
                <div class="row align-items-center pt-4">
                    <div class="col-md-6 col-12 mb-3 mb-md-0"></div>
                    <div class="col-md-6 col-12 text-end">
                        <div class="mx-n5">
                            <input type="text" placeholder="Search" class="btn d-inline-flex btn-sm btn-neutral border-base"/>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap table-spaced">
                            <thead class="table-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Company</th>
                                <th scope="col">Offer</th>
                                <th scope="col">Meeting</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Robert Fox
                                    </a>
                                </td>
                                <td>
                                    Feb 15, 2021
                                </td>
                                <td>
                                    <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-1.png" class="avatar avatar-xs rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Dribbble
                                    </a>
                                </td>
                                <td>
                                    $3.500
                                </td>
                                <td>
          <span class="badge badge-lg badge-dot">
            <i class="bg-success"></i>Scheduled
          </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
