@extends('ADMIN._layouts.index')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>User</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <strong class="card-title">Data User</strong>
                    <button type="button" id="createData" class="btn btn-info btn-sm float-right" data-toggle="modal"
                        data-target="#basicModal">Tambah Data</button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Hari/Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    @include('ADMIN.users.modal')
                </div>
            </div>
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
            var table = $('.data-table').DataTable({
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
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],


            });

            $('#createData').click(function() {
                $('#btnSave').html('Simpan');
                $('#data_id').val('');
                $('#dataForm').trigger("reset");
                $('#modalHeading').html("Tambah Data User");
                $('#modalID').modal('show');
            });

            $('#dataForm').on('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                var id = $('#data_id').val();
                var url = "{{ route('user.store') }}";
                if (id != '') {
                    formData.append('data_id', id);
                }
                $.ajax({
                    url: url,
                    method: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        if (data.status == 'success') {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Berhasil',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                table.draw();
                            })
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Gagal',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                table.draw();

                            })
                        }
                        $('#dataForm').trigger("reset");
                        $('#modalID').modal('hide');
                        $('.modal-backdrop').remove();
                    }
                })
            });


            $('body').on('click', '.editUser', function() {
                var id = $(this).data('id');
                $.get("{{ route('user.index') }}" + '/' + id + '/edit', function(data) {
                    // console.log(data);
                    $('#modalHeading').html("Edit Data Wisata");
                    $('#btnSave').html('Update');
                    $('#modalID').modal('show');
                    $('#data_id').val(data.id);
                    $('#name').val(data.name);
                    $('#username').val(data.username);
                    // $('#password').val(data.password);
                    $('#role').val(data.role);
                })
            });



            $('body').on('click', '.deleteUser', function() {
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang d dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus data!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            type: "DELETE",
                            url: "{{ route('user.store') }}" + '/' + id,
                            dataType: 'json',

                            success: function(data) {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Data berhasil dihapus',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    table.draw();
                                })
                            },
                            error: function(data) {
                                console.log('Error:', data);
                                Swal.fire({
                                    position: 'center',
                                    icon: 'error',
                                    title: 'Data gagal dihapus',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        })

                    }
                })
            });
        });
    </script>
@endsection
