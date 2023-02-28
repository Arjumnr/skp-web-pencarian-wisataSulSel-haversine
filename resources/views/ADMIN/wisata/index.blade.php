@extends('ADMIN._layouts.index')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Wisata</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Wisata</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            

            <div class="col-12 ">
                <div class="card">
                    
                        

                        <div class="table-responsive">
                            <table id="user_datatables" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tourguide</th>
                                        <th>Nama Wisata</th>
                                        <th>Kategori</th>
                                        <th>Nama</th>
                                        <th>Foto</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <br>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Pak tourgide</td>
                                        <td>Pulau Samalona</td>
                                        <td>Spot Foto</td>
                                        <td>Batu</td>
                                        <td><img width="100"
                                                src="data:image/jpeg;base64,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"
                                                alt="">
                                        </td>
                                        <td>Sangan Keren</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>Pak tourgide</td>
                                        <td>Pulau Samalona</td>
                                        <td>Spot Foto</td>
                                        <td>Batu</td>
                                        <td><img width="100"
                                                src="data:image/jpeg;base64,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"
                                                alt="">
                                        </td>
                                        <td>Sangan Keren</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

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
{{-- 
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
                columns: [
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
@endsection --}}
