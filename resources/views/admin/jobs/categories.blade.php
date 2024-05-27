@extends('admin.layout.layout')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Centered card -->

    <div class="w-100 m-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ADD CATEGORY
        </button>
        <div class="card my-3">
        <div class="col-12">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th class="col-md-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
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
                        <h5 class="mb-0">Taaluma Job Category</h5>
                    </div>
                    <div class="card-body border-top">
                        <form action="{{ route('save_category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-lg-4 col-form-label">Category Name:</label>
                                <div class="col-lg-8">
                                    <input name="name" type="text" class="form-control">
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
