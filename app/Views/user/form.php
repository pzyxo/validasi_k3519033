<div class="modal fade" id="anggotamodal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tambah User</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="form" action="user/insertAjax" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="row mb-4">
                        <div class="col">
                            <label class="form-label" for="nd">Nama depan</label>
                            <input type="text" id="nd" name="namadepan" class="form-control" />
                            <div class="invalid-feedback" id="errornd"></div>
                        </div>
                        <div class="col">
                            <label class="form-label" for="nb">Nama belakang</label>
                            <input type="text" id="nb" name="namabelakang" class="form-control" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="al">Alamat Rumah</label>
                        <textarea class="form-control" name="alamat" id="al" rows="4"></textarea>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label class="form-label" for="tempatlahir">Tempat Lahir</label>
                            <input type="text" id="tempatlahir" name="tempatlahir" class="form-control" />
                        </div>
                        <div class="col">
                            <label class="form-label" for="tanggallahir">Tanggal Lahir</label>
                            <input type="date" id="tanggallahir" name="tanggallahir" class="form-control" />
                        </div>
                    </div>
                    Jenis Kelamin : <div class="form-check form-check-inline mb-4 mx-3">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault1" value="laki-laki" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> Laki-laki </label>
                    </div>

                    <div class="form-check form-check-inline mb-4 mx-3">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault2" value="perempuan" />
                        <label class="form-check-label" for="flexRadioDefault2"> Perempuan </label>
                    </div>
                    <div class=" mb-4">
                        <label class="form-label" for="tel">Telepon</label>
                        <input type="text" id="tp" name="telepon" class="form-control" />
                        <div class="invalid-feedback" id="errortp"></div>
                    </div>
                    <div class=" mb-4">
                        <label class="form-label" for="em">Email</label>
                        <input type="email" id="em" name="email" class="form-control" />
                        <div class="invalid-feedback" id="errorem"></div>
                    </div>
                    <div class=" mb-4">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" />
                        <div class="invalid-feedback" id="errorun"></div>
                    </div>
                    <div class=" mb-4">
                        <label class="form-label" for="pass">Password</label>
                        <input type="password" id="pw" name="password" class="form-control" />
                        <div class="invalid-feedback" id="errorpw"></div>
                    </div>
                    <div class=" mb-4">
                        <label class="form-label" for="pass">Re-Type Password</label>
                        <input type="password" id="pw2" name="password2" class="form-control" />
                        <div class="invalid-feedback" id="errorpw2"></div>
                    </div>
                    Photo Profile <div class="form-outline mb-4">
                        <input type="file" id="pp" name="avatar" class="form-control" />
                        <div class="invalid-feedback" id="errorpp"></div>
                    </div>

                    <button type="submit" id="submit" class="btn btn-primary mb-4">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#form').submit(function(e){
            e.preventDefault();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: new FormData(this),
                processData: false,
                contentType: false,
            success: function(response){
                if (response.error){
                    if (response.error.namadepan){
                        $('#nd').addClass('is-invalid');
                        $('#errornd').html(response.error.namadepan);
                    } else {
                        $('#nd').removeClass('is-invalid');
                        $('#errornd').html('');
                    }
                }
                if (response.error){
                    if (response.error.telepon){
                        $('#tp').addClass('is-invalid');
                        $('#errortp').html(response.error.telepon);
                    } else {
                        $('#tp').removeClass('is-invalid');
                        $('#errortp').html('');
                    }
                }
                if (response.error){
                    if (response.error.email){
                        $('#em').addClass('is-invalid');
                        $('#errorem').html(response.error.email);
                    } else {
                        $('#nd').removeClass('is-invalid');
                        $('#errorem').html('');
                    }
                }
                if (response.error){
                    if (response.error.username){
                        $('#username').addClass('is-invalid');
                        $('#errorun').html(response.error.username);
                    } else {
                        $('#username').removeClass('is-invalid');
                        $('#errorun').html('');
                    }
                }
                if (response.error){
                    if (response.error.password){
                        $('#pw').addClass('is-invalid');
                        $('#errorpw').html(response.error.password);
                    } else {
                        $('#pw').removeClass('is-invalid');
                        $('#errorpw').html('');
                    }
                }
                if (response.error){
                    if (response.error.password2){
                        $('#pw2').addClass('is-invalid');
                        $('#errorpw2').html(response.error.password2);
                    } else {
                        $('#pw2').removeClass('is-invalid');
                        $('#errorpw2').html('');
                    }
                }
                if (response.error){
                    if (response.error.avatar){
                        $('#pp').addClass('is-invalid');
                        $('#errorpp').html(response.error.avatar);
                    } else {
                        $('#pp').removeClass('is-invalid');
                        $('#errorpp').html('');
                    }
                } 
                 else {
                    alert(response.sukses);
                    $('#anggotamodal').modal('hide');
                    tampilkan();
                }
            },
            });
        });
    });
</script>