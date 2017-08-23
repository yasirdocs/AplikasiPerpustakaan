<div class="container-fluid">
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-6">
                <h2>Selamat Datang</h2>
                <p>Aplikasi <?= $title ?> </p>
                <a href="#wow" class="btn btn-primary"> Start</a>
            </div>        
            <div class="col-lg-6">
                <div class="image-responsive" style="text-align:center">            
                    <img class="img img-circle" width="80%" height="30%" src="https://sasangps.files.wordpress.com/2011/06/perpustakaan-sumber-kompas_com.jpg">
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <h2 style="text-align:center">DAFTAR BUKU</h2>
        </div>
    </div>
</div>
<div class="container">
    <a onclick="tambah_data()" class="btn btn-default" style="margin:5px;"><i class="fa fa-plus"></i> Tambah</a>

    <table id="wow" class="table table-hover">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="listdata">
        </tbody>
    </table>
</div>

<!-- modal tambah -->
    <div class="modal fade" id="sama" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Buku</h4>
                </div>
                <div class="modal-body">
                    <form id="form_modal" class="form-horizontal">
                    <input type="hidden" name="kd_buku">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="judul">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Buku" name="judul" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="penerbit">Penerbit</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit" name="penerbit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pengarang">Pengarang</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" id="pengarang" placeholder="Masukkan Pengarang" name="pengarang" required>
                            </div>
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" onclick="save()"> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="footer" style="background-color:#e8eaf6;margin-top:120px;">
    <div class="container">
        <div class="col-md-12">
            <p style="text-align: center;color:#546e7a;">Aplikasi <?= $title ?></p> 
        </div>
    </div>
   
</div>