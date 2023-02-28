<div class="modal" id="modalID" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalHeading"></h4>
            </div>

            <div class="modal-body modal-body">
                <form  id="dataForm" name="dataForm" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="data_id" id="data_id">

                    <div class="errMsgContainer mb-3"> </div>


                    

                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="">--- Pilih Kategori ---</option>
                                <option value="spot_foto">Spot Foto</option>
                                <option value="kuliner">Kuliner </option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10 custom-file">
                                <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="btnSave" class="btn btn-primary addData"
                            value="create">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
