@extends('layouts.admin')

@section('content')
    <header class="bg-surface-primary border-bottom pt-6 pb-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-nav-item">
                    <div class="col-6 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h4 class="h4 mb-0 ls-tight">
                            Student Create
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <div class="row">
                <div class="card bg-blueGray-100 col-xl-6 col-lg-6 col-md-12">
                    <div class="card-body">
                        <form wire:submit.prevent="submit" class="pt-3">
                            <div class="form-group mt-2">
                                <div class="">
                                    <label class="form-label" for="first_name">First name</label>
                                    <input type="text" class="form-control" id="first_name">
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="">
                                    <label class="form-label" for="last_name">Last name</label>
                                    <input type="text" class="form-control" id="last_name">
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="">
                                    <label class="form-label" for="formInputExample">Bio</label>
                                    <textarea class="form-control" id="formInputExample" placeholder="Your email" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="">
                                    <div class="input-group position-relative">
                                        <span class="input-group-text" id="">clever.com/</span>
                                        <input type="email" class="form-control" placeholder="username" aria-label="username" aria-describedby="">
                                        <span class="input-group-text" id="">.com</span>
                                    </div>
                                    <span class="mt-2 valid-feedback">Looks good!</span>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="">
                                    <label class="form-label" for="formInputExample">Photo</label>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white">
                                            <img alt="..." src="https://images.unsplash.com/photo-1579463148228-138296ac3b98?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80">
                                        </a>
                                        <div class="ms-5">
                                            <label for="file_upload" class="btn btn-sm btn-neutral">
                                                <span>Upload</span>
                                                <input type="file" name="file_upload" id="file_upload" class="visually-hidden">
                                            </label>
                                            <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger">
                    <span class=" pe-2">
                      <i class="bi bi-trash"></i>
                    </span>
                                                <span>Remove</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="">
                                    <label class="form-label" for="formInputExample">Cover</label>
                                    <div class="card shadow-none border-2 border-dashed border-primary-hover position-relative">
                                        <div class="d-flex justify-content-center px-5 py-5">
                                            <label for="file_upload" class="position-absolute w-full h-full top-0 start-0 cursor-pointer">
                                                <input id="file_upload" name="file_upload" type="file" class="visually-hidden">
                                            </label>
                                            <div class="text-center">
                                                <div class="text-2xl text-muted">
                                                    <i class="bi bi-upload"></i>
                                                </div>
                                                <div class="d-flex text-sm mt-3">
                                                    <p class="font-semibold">Upload a file or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    PNG, JPG, GIF up to 3MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="">
                                    <label class="form-label" for="formInputExample">Website</label>
                                    <input type="text" class="form-control" id="formInputExample">
                                </div>
                            </div>
                            <div class="form-group mt-4 text-end">
                                <button class="btn d-inline-flex btn-sm btn-dark" type="submit">
                                    Save
                                </button>
                                <a href="{{ route('students.index') }}" class="btn d-inline-flex btn-sm btn-secondary mx-1">
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
