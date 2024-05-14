@extends('admin.layout.layout')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Centered card -->

    <div class="w-100 m-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ADD JOB
        </button>
        <div class="card my-3">
        <div class="col-12">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Company</th>
                            <th scope="col">Location</th>
                            <th class="col-md-2">Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->company_name }}</td>
                        <td>{{ $job->location }}</td>
                        <td>{{ $job->deadline }}</td>
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
                        <h5 class="mb-0">Taaluma Job</h5>
                    </div>
                    <div class="card-body border-top">
                        <form action="{{ route('save_job') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Title:</label>
                                <div class="col-lg-8">
                                    <input name="tittle" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Company:</label>
                                <div class="col-lg-8">
                                    <input name="company" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Location:</label>
                                <div class="col-lg-8">
                                    <input name="location" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Category:</label>
                                <div class="col-lg-8">
                                    <input name="category" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Nature:</label>
                                <div class="col-lg-8">
                                    <input name="nature" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Deadline:</label>
                                <div class="col-lg-8">
                                    <input name="deadline" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Salary:</label>
                                <div class="col-lg-8">
                                    <input name="salary" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Vacancy:</label>
                                <div class="col-lg-8">
                                    <input name="vacancy" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Salary:</label>
                                <div class="col-lg-8">
                                    <input name="salary" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Description:</label>
                                <div class="col-lg-8">
                                    <input name="description" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Responsibility:</label>
                                <div class="col-lg-8">
                                    <input name="responsibility" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Qualification:</label>
                                <div class="col-lg-8">
                                    <input name="qualification" type="text" class="form-control">
                                </div>
                            </div>

                             <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Apply Link:</label>
                                <div class="col-lg-8">
                                    <input name="apply_link" type="text" class="form-control">
                                </div>
                            </div>

                             <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Apply Instructions:</label>
                                <div class="col-lg-8">
                                    <input name="apply_instructions" type="text" class="form-control">
                                </div>
                            </div>
                        
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Save Job Post <i class="ph-paper-plane-tilt ms-2"></i></button>
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
