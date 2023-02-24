@extends('ADMIN._layouts.index')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Users</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data User</h4>
                    </div>
                    <div class="card-body">
                        {{-- <div class="row"> --}}

                        <div class="table-responsive">
                            <table id="user_datatables" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>

                            </table>
                        </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>

            {{-- Modal --}}
            @include('ADMIN.users.modal')

        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#user_datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('user.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    }, 
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'username',
                        name: 'username'
                    },
                    {
                        data: 'role',
                        name: 'role'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],


            });

            if ($.fn.dataTable.isDataTable('#user_datatables')) {
                table = $('#user_datatables').DataTable();
            } else {
                table = $('#user_datatables').DataTable({
                    "ajax": "{{ route('user.index') }}",
                    "columns": [{
                            "data": "name"
                        },
                        {
                            "data": "username"
                        },
                        {
                            "data": "role"
                        },
                        {
                            "data": "action"
                        },
                    ]
                });
            }

            $(document).on('click', '.edit', function() {
                var id = $(this).attr('id');
                $('#formModal').modal('show');
                $.get("{{ route('user.index') }}" + '/' + id + '/edit', function(data) {
                    $('.modal-title').text('Edit User');
                    $('#action_button').val('Update');
                    $('#formModal').modal('show');
                    $('#id').val(data.id);
                    $('#name').val(data.name);
                    $('#username').val(data.username);
                    $('#role').val(data.role);
                    $('#password').val(data.password);
                })

                //ketika tombol update di klik
                $('#action_button').click(function(e) {
                    e.preventDefault();
                    $(this).html('Sending..');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "user/" + id,
                        method: "PUT",
                        data: $('#formUser').serialize(),
                        dataType: "json",

                    }).then(function(data) {
                        console.log(data);
                        if (data.status == 'success') {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data berhasil diubah',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#formModal').modal('hide');
                            $('#formUser')[0].reset();
                            table.draw();
                        }
                        if (data.status == 'errors') {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Data gagal diubah',
                                showConfirmButton: false,
                                timer: 1500,
                                text: data.errors
                            })
                            $('#formModal').modal('hide');
                            $('#formUser')[0].reset();
                            table.draw();
                        }
                    })
                })




            });


            $(document).on('click', '.delete', function() {
                var id = $(this).attr('id');
                //swetalert
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus data!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('user.store') }}" + '/' + id,
                            method: "DELETE",
                            success: function(data) {
                                table.draw();
                            }
                        })
                        Swal.fire(
                            'Terhapus!',
                            'Data berhasil dihapus.',
                            'success'
                        )
                    }
                })

            });
        });
    </script>
@endsection
