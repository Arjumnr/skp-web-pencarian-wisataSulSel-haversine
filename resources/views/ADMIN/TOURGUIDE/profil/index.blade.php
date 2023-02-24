@extends('ADMIN.TOURGUIDE._layouts.index')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Profil</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4 class="card-title">Profil Tourguide</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('postProfil') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" disabled name="username" value="{{ $tourguide->username }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" value="{{ $tourguide->password }}"/>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Nama Wisata</label>
                                    <input type="text" class="form-control" name="nama_wisata" value="{{ $tourguide->nama_wisata }} ">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>No. Telpon/WhatsApp</label>
                                    <input type="number" class="form-control" name="no_telp" value="{{ $tourguide->no_telp }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $tourguide->email }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Alamat</label>
                                    <input type="tetx" class="form-control" name="alamat" value="{{ $tourguide->alamat }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Latitude</label>
                                    <input type="text" class="form-control" name="latitude" value="{{ $tourguide->latitude }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Longitude</label>
                                    <input type="text" class="form-control" name="longitude" value="{{ $tourguide->longitude }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Jam Buka</label>
                                    <input type="time" class="form-control" name="jam_buka" value="{{ $tourguide->jam_buka  }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Jam Tutup</label>
                                    <input type="time" class="form-control" name="jam_tutup" value="{{ $tourguide->jam_tutup }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" rows="4" name="deskripsi" value=" {{  $tourguide->deskripsi }} "></textarea>
                                </div>

                                <div class="col-md-6 d-flex flex-column  justify-content-center align-items-center">
                                        {{-- button edit  --}}
                                        <button type="button" class="btn btn-warning" id="btnEdit">Edit</button>
                                        {{-- button hapus --}}
                                        {{-- button simpan --}}
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){

            //set format input time
            $('input[type="time"]').attr('type', 'text');
            $('input[type="time"]').timepicker({
                timeFormat: 'HH:mm',
                interval: 30,
                minTime: '00',
                maxTime: '23:30',
                defaultTime: '00',
                startTime: '00:00',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            }); 

             //show hidden passsword
            $('.input-group-append').click(function(){
                if($(this).find('i').hasClass('fa-eye-slash')){
                    $(this).find('i').removeClass('fa-eye-slash');
                    $(this).find('i').addClass('fa-eye');
                    $(this).parent().find('input').attr('type', 'text');
                }else{
                    $(this).find('i').removeClass('fa-eye');
                    $(this).find('i').addClass('fa-eye-slash');
                    $(this).parent().find('input').attr('type', 'password');
                }
            });

            //disable input
            $('input').attr('disabled', true);
            $('textarea').attr('disabled', true);

            //hidden button simpan
            $('button[type="submit"]').hide();
            
            //button edit
            $('#btnEdit').click(function(){
                $('input').attr('disabled', false);
                $('textarea').attr('disabled', false);
                $('button[type="submit"]').show();
                $(this).hide();

            });

            //submit form
            // $('form').submit(function(e){
            //     e.preventDefault();
            //     var data = $(this).serialize();
               
            //     $.ajax({
            //         url: "{{ url('/update-profil') }}",
            //         type: "POST",
            //         data: data,
            //         dataType: "JSON",
            //         success: function(data){
            //             console.log(data);
            //             // if(data == 'success'){
            //             //     swal({
            //             //         title: "Berhasil",
            //             //         text: "Data berhasil diubah",
            //             //         icon: "success",
            //             //         button: "OK",
            //             //     }).then(function(){
            //             //         location.reload();
            //             //     });
            //             // }else{
            //             //     swal({
            //             //         title: "Gagal",
            //             //         text: "Data gagal diubah",
            //             //         icon: "error",
            //             //         button: "OK",
            //             //     }).then(function(){
            //             //         location.reload();
            //             //     });
            //             // }
            //         }
                
            //     });
            // });
           
        });
    </script>
@endsection
