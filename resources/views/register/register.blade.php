<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Registrasi</title>
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}">
</head>

<style>
    body{
        background-image: url('assets/images/bg-opacity.png');
    }

    .form-title h3{
        text-align: center;
    }
</style>

<body>

    <div class="container-xl mt-20" style="justify-content: center;
        display: flex;">
        <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="app-card-body">
                    <form class="settings-form px-5" action="{{route('student.store')}}" method="POST">
                        @csrf
                        <div class="form-title">
    <h3>Form Pendaftaran PPDB <br> SMK Wikrama Bogor TP. 2023-2024</h3> 
    </div>
                        <div class="mb-3 d-flex justify-content-around nisn-jk" style="gap: 10px">

                            <div>
                                <label for="setting-input-3"><b>NISN</b></label>
                                <input name="nisn" type="number" class="form-control  {{ $errors->has('nisn') ? ' is-invalid' : '' }}" style="width: 285px" id="setting-input-1"  placeholder="Masukan NISN">
                                @if ($errors->has('nisn'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('nisn') }}
                                </span>
                                 @endif 
                            </div>

                            <div>
                                <label for="setting-input-3"><b>Jenis Kelamin</b></label>
                                <select name="jk" class="form-select  {{ $errors->has('nisn') ? ' is-invalid' : '' }}" id="setting-input-3" style="width: 285px">
                                    <option selected disabled>--Jenis Kelamin --</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for=""><b>Nama Lengkap</b></label>
                            <input name="nama_lengkap" type="text" class="form-control {{ $errors->has('nama_lengkap') ? ' is-invalid' : '' }}" id="setting-input-1" placeholder="Masukan Nama Lengkap">
                            @if ($errors->has('nama_lengkap'))
                            <span class="invalid-feedback">
                                {{ $errors->first('nama_lengkap') }}
                            </span>
                            @endif 
                        </div>
                           

                       
                        <div class="mb-3">
                            <label for=""><b>Asal Sekolah</b></label>
                            <select class="form-select {{ $errors->has('asal_sekolah') ? ' is-invalid' : '' }}" id="sekolah" name="asal_sekolah"
                                onchange="tampilakanSekolahInput()">
                                <option disabled selected> -- pilih asal sekolah -- </option>
                                <option value="sekolah_lainnya">Lainnya</option>
                                <option value="SMPN 1 Bogor">SMPN 1 Bogor</option>
                                <option value="SMPN 2 Bogor">SMPN 2 Bogor</option>
                                <option value="SMPN 3 Bogor"> SMPN 3 Bogor</option>
                                <option value="SMPN 4 Bogor"> SMPN 4 Bogor</option>
                                <option value="SMPN 5 Bogor"> SMPN 5 Bogor</option>
                                <option value="SMPN 6 Bogor"> SMPN 6 Bogor</option>
                                <option value="SMPN 7 Bogor">SMPN 7 Bogor</option>
                                <option value="SMPN 8 Bogor">SMPN 8 Bogor</option>
                                <option value="SMPN 9 Bogor">SMPN 9 Bogor</option>
                                <option value="SMPN 10 Bogor">SMPN 10 Bogor</option>
                            </select>
                        </div>

                        <div class="mb-3" id="sekolah_lainnya" style="display: none;">
                            <label for="setting-input-2" class="form-label">Nama Sekolah Lainnya </label>
                            <input type="text" name="asal_sekolah_lainnya" class="form-control {{ $errors->has('asal_sekolah_lainnya') ? ' is-invalid' : '' }}" id="setting-input-2" placeholder="Nama Sekolah">
                        </div>

                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Email </label>
                            <input name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="setting-input-2" placeholder="Masukan Email Aktif">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </span>
                             @endif 
                        </div>

                        <div class="mb-3">
                            <label for="setting-input-3" class="form-label">Nomor Hp</label>
                            <input name="no_hp" type="number" class="form-control {{ $errors->has('no_hp') ? ' is-invalid' : '' }}" id="setting-input-3" placeholder="Contoh: 08---">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </span>
                             @endif 
                        </div>

                        <div class="mb-3 d-flex justify-content-around" style="gap:10px">
                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">NO Hp Ayah </label>
                                <input name="no_hp_ayah" type="number" class="form-control {{ $errors->has('no_hp_ayah') ? ' is-invalid' : '' }}" id="setting-input-2" style="width: 285px" placeholder="Contoh: 08---" >
                                @if ($errors->has('no_hp_ayah'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('no_hp_ayah') }}
                                </span>
                                 @endif 
                            </div>
                            <div class="mb-3">
                                <label for="setting-input-3" class="form-label">Nomor Hp Ibu</label>
                                <input name="no_hp_ibu" type="number" class="form-control {{ $errors->has('no_hp_ayah') ? ' is-invalid' : '' }}" style="width: 285px"  id="setting-input-3" placeholder="Contoh: 08-----">
                                @if ($errors->has('no_hp_ibu'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('no_hp_ibu') }}
                                </span>
                                 @endif 
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary" style="color: white">Registrasi</button>

                    </form>
                </div>


            </div>

        </div>


    </div>
    <!-- wajib jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
                $("#sekolah").select2({
                    theme: 'bootstrap4',
                    placeholder: "Please Select"
                });
    
            });
    </script>


    {{-- js untuk select lainnya  --}}
    <script>
        function tampilakanSekolahInput() {
            var sekolah = document.getElementById("sekolah").value;
            var sekolahLainnya = document.getElementById("sekolah_lainnya");
            if (sekolah == "sekolah_lainnya") {
                sekolahLainnya.style.display = "";
            }else {
                sekolahLainnya.style.display = "none";
            }
        } 
    </script>



</body>

</html>