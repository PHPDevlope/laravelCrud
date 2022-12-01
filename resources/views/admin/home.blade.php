@extends('layouts.admin')

@section('content')
    <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-nav-item">
                    <div class="col-6 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 class="h3 mb-0 ls-tight">Dashboard</h1>
                    </div>
                    <!-- Actions -->
                    <div class="col-6 text-end">
                        <div class="mx-n1">
                            <a data-bs-toggle="offcanvas" href="#offcanvasMain" class="btn d-inline-flex btn-sm btn-dark mx-1">
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
    <!-- Main content -->
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <div class="position-relative z-index-100">
                <div class="bg-card rounded shadow-sm">
                    <div class="p-5">
                        <div class="border border-4 border-dashed rounded d-flex flex-column justify-content-center align-items-center" style="min-height: 400px;">
                            <div class="h4 font-semibold text-muted opacity-8">
                                Your content goes here ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
