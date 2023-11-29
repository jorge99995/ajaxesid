@extends('layouts.master')
@section('content')
{{-- message --}}

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">List Users</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List Users</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by ID ...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Name ...">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Phone ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
                <div class="col-lg-12 text-end float-end ms-auto download-grp">
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#con-close-modal">
                        <i class="fas fa-plus"></i>Agregar usuario </button>
                </div>

            </div>
            <br>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-stripped table table-hover table-center mb-0" id="UsersList">
                                <thead class="student-thread">
                                    <tr>
                                        <th>User ID</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Date Join</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- model elete --}}
<div class="modal custom-modal fade" id="con-close-modal" role="dialog">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>CREACIÓN DE USUARIOS</h3>

                </div>
                <hr>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="name">
                                        <input type="hidden" class="form-control" name="user_id">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-4">

                                    <div class="form-group local-forms">
                                        <label>Email <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone Number <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-4">

                                    <div class="form-group local-forms">
                                        <label>Date Of Birth <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control datetimepicker" name="date_of_birth" placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Status <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="status">
                                            <option disabled>Select Status</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-4">

                                    <div class="form-group local-forms">
                                        <label>Role Name <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="role_name">
                                            <option disabled>Select Role Name</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-4">

                                    <div class="form-group local-forms">
                                        <label>Profile <span class="login-danger">*</span></label>
                                        <input type="file" class="form-control" name="avatar">
                                        <div class="user-img" style="margin-top: -25px;">
                                            <img class="rounded-circle">
                                        </div>
                                    </div>
                                    <input type="hidden" name="hidden_avatar" </div>

                                </div>
                                <div class="form-group   local-forms">

                                    <label>Position <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="position" </div>
                                </div>
                                <div class="col-lg-12 col-sm-4">

                                    <div class="form-group local-forms">
                                        <label>Department <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="department" </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-4">

                                        <div class="form-group local-forms">
                                            <label>Updated Date <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="updated_at" readonly>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                            Cancelar
                                        </button>
                                        <button type="button" class="btn btn-info waves-effect waves-light">
                                            Guardar Usuario
                                        </button>
                                    </div>

                                </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')



<script>
    $(document).on('click', '.delete', function() {
        var _this = $(this).parents('tr');
        $('.e_user_id').val(_this.find('.user_id').data('user_id'));
        $('.e_avatar').val(_this.find('.avatar').data('avatar'));
    });

</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#UsersList').DataTable({
            processing: true
            , serverSide: true
            , ordering: true
            , searching: true
            , ajax: {
                url: ""
            , }
            , columns: [{
                    data: 'user_id'
                    , name: 'user_id'
                , }
                , {
                    data: 'avatar'
                    , name: 'avatar'
                }
                , {
                    data: 'name'
                    , name: 'name'
                }
                , {
                    data: 'email'
                    , name: 'email'
                }
                , {
                    data: 'phone_number'
                    , name: 'phone_number'
                }
                , {
                    data: 'join_date'
                    , name: 'join_date'
                }
                , {
                    data: 'position'
                    , name: 'position'
                },

                {
                    data: 'status'
                    , name: 'status'
                , }
                , {
                    data: 'modify'
                    , name: 'modify'
                , }
            , ]
        });
    });

</script>

@endsection

@endsection
