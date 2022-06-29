<div class="col-md-15">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul; ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="POST" action="<?= base_url() ?>buku/simpan" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Id Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_buku" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul_buku" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Pengarang</label>
                    <div class="col-sm-10">
                        <select name="id_pengarang" class="form-control">
                            <option value=""> - Pilih Pengarang - </option>
                            <?php
                            foreach ($pengarang as $row) { ?>
                                <option value="<?= $row->id_pengarang; ?>"><?= $row->nama_pengarang; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
                    <div class="col-sm-10">
                        <select name="id_penerbit" class=" form-control">
                            <option value=""> - Pilih Penerbit - </option>
                            <?php
                            foreach ($penerbit as $row) { ?>
                                <option value="<?= $row->id_penerbit; ?>"><?= $row->nama_penerbit; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <a href="<?= base_url() ?>penerbit" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>