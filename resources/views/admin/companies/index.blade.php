@extends('admin.layout.layout')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Centered card -->

    <div class="w-100 m-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ADD COMPANY
        </button>
        <div class="card my-3">
        <div class="col-12">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Logo</th>
                            <th class="col-md-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->comapny_name }}</td>
                        <td>{{ $company->company_location }}</td>
                        <td>{{ $company->company_contact }}</td>
                        <td>{{ $company->company_logo }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Taaluma Company</h5>
                    </div>
                    <div class="card-body border-top">
                        <form action="{{ route('save_company') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Company Name:</label>
                                <div class="col-lg-8">
                                    <input name="tittle" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Comoany Location:</label>
                                <div class="col-lg-8">
                                    <input name="company" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Company Contact:</label>
                                <div class="col-lg-8">
                                    <input name="location" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Company Detail:</label>
                                <div class="col-lg-8">
                                    <textarea name="location" type="text" class="form-control">
                                        
                                    </textarea> 
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Company Logo:</label>
                                <div class="col-lg-8">
                                    <input name="company_logo" id="company_logo" type="file" class="form-control">
                                    <div class="form-text text-muted">Accepted formats: jpg, png, webpg Max file size 2Mb</div>
                                </div>
                            </div>
                        
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Save Company<i class="ph-paper-plane-tilt ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

              </div>
            </div>
        </div>

    <script type="text/javascript">

    </script>
    <!-- /centered card -->
@endsection
