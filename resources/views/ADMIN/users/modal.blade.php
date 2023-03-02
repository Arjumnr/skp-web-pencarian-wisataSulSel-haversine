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
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="role" name="role">
                                <option value="">--- Pilih Role ---</option>
                                <option value="1">Admin</option>
                                <option value="2">Tourguide</option>
                            </select>
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
