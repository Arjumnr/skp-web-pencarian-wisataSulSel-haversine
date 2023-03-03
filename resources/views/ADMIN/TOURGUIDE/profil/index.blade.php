@extends('ADMIN.TOURGUIDE._layouts.index')
@section('content')
    <?php $fp_wisata; ?>
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Profil</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card col-12">
                <br><br>
                <div class="row justify-content-center">
                    <div class="card " style="width: 18rem;">
                        <img src="{{ $fp_wisata }}" class="card-img-top" alt="...">
                    </div>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form id="formProfil" name="formProfil" enctype="multipart/form-data" method="POST">
                            {{-- <form method="POST"  enctype="multipart/form-data" action="{{ route('postProfil') }}"> --}}

                            {{ csrf_field() }}
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" disabled name="username"
                                        value="{{ $username }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" value="">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Nama Tourguide</label>
                                    <input required type="text" class="form-control" name="name"
                                        value="{{ $name }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Nama Wisata</label>
                                    <input required type="text" class="form-control" name="nama_wisata"
                                        value="{{ $nama_wisata }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Foto Profil Wisata</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="fp_wisata" id="myFile">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>No. Telpon/WhatsApp</label>
                                    <input required type="number" class="form-control" name="no_telp"
                                        value="{{ $no_telp }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input required type="email" class="form-control" name="email"
                                        value="{{ $email }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Alamat</label>
                                    <input required type="tetx" class="form-control" name="alamat"
                                        value="{{ $alamat }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Latitude</label>
                                    <input required type="text" class="form-control" name="latitude"
                                        value="{{ $latitude }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Longitude</label>
                                    <input required type="text" class="form-control" name="longitude"
                                        value="{{ $longitude }}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label>Jam Buka</label>
                                    <div class="input-group clockpicker">
                                        <input required type="text" class="form-control" value="{{ $jam_buka }}"
                                            name="jam_buka">
                                        <span class="input-group-append"> <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i></span></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Jam Tutup</label>
                                    <div class="input-group clockpicker">
                                        <input required type="text" class="form-control" value="{{ $jam_tutup }}"
                                            name="jam_tutup">
                                        <span class="input-group-append"> <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i></span></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Deskripsi</label>
                                    <textarea required class="form-control" rows="4" name="deskripsi">{{ $deskripsi }}</textarea>
                                </div>

                                <div class="col-md-6 d-flex flex-column  justify-content-center align-items-center">
                                    <button type="button" class="btn btn-warning" id="btnEdit">Edit</button>
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
        $(document).ready(function() {
            //show modal disable false to custom im=nput file
            console.log('ready');
            //undisebel input custom file
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
            //set format input time



            //disable input selain file
            // $('input[type="text"]').attr('disabled', true);
            // $('input[type="number"]').attr('disabled', true);
            // $('input[type="email"]').attr('disabled', true);
            // $('input[type="password"]').attr('disabled', true);
            $('input').attr('disabled', true);
            $('textarea').attr('disabled', true);

            //hidden button simpan
            $('button[type="submit"]').hide();

            //button edit
            $('#btnEdit').click(function() {
                $('input').attr('disabled', false);
                $('textarea').attr('disabled', false);


                $('button[type="submit"]').show();
                $(this).hide();

            });


        });

        $('#formProfil').on('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            var id = $('#data_id').val();
            var url = "{{ route('postProfil') }}";
            $.ajax({
                url: url,
                method: "POST",
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    if (data.status == 'success') {
                        Swal.fire({
                            title: "Berhasil",
                            text: "Data berhasil diubah",
                            icon: "success",
                            button: "OK",
                        }).then(function() {
                            // arahkan ke halaman lain
                            location.reload();

                        });
                    } else {
                        Swal.fire({
                            title: "Gagal",
                            text: "Data gagal diubah",
                            icon: "error",
                            button: "OK",
                        }).then(function() {
                            // arahkan ke halaman lain
                            location.reload();

                        });
                    }
                },


            });
        });
    </script>
@endsection
