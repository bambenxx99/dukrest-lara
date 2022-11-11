@extends('layouts.main')
@section('container')

<div class="container-fluid">


    <form method="post" action="./self_reg_pendamping_view" id="form1">

        <link href="css/sb-admin-21.css" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="css/timeline.css" rel="stylesheet">
        <div id="ContentPlaceHolder1_UpdatePanel1">

            <input type="hidden" name="ctl00$ContentPlaceHolder1$HiddenField1" id="ContentPlaceHolder1_HiddenField1"
                value="ee8a0343-c3f1-4522-99ed-3e56cf305b36">



            <div class="mb-2">
                <input name="ctl00$ContentPlaceHolder1$btnAjukan" type="button" id="ContentPlaceHolder1_btnAjukan"
                    onclick="bukaModal();" class="btn btn-primary btn-sm" value=" Kirim ">


                <input type="hidden" name="ctl00$ContentPlaceHolder1$setuju" id="setuju">
                &nbsp;
                <span>
                    <span id="ContentPlaceHolder1_lblPesan" class="text-danger"></span></span>
            </div>
            <div class="row">
                <div class="col-xl-8 col-md-8 mb-4">
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tenaga Pendamping</h6>
                        </div>
                        <fieldset id="ContentPlaceHolder1_fData" disabled="disabled">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-3 col-xl-3 font-weight-bold col-form-label">NIK</div>
                                    <div class="col-md-6 col-xl-6 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblNIK" type="text"
                                            id="ContentPlaceHolder1_lblNIK" class="form-control form-control-sm ">
                                    </div>

                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-xl-3 font-weight-bold col-form-label ">Nama</div>
                                    <div class="col-md-6 col-xl-6 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblNama" type="text"
                                            value="Riza Ardiyanti" id="ContentPlaceHolder1_lblNama"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Alamat</div>
                                    <div class="col-md-12 col-xl-9  ">
                                        <input name="ctl00$ContentPlaceHolder1$lblAlamat" type="text"
                                            id="ContentPlaceHolder1_lblAlamat" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Provinsi</div>
                                    <div class="col-md-12 col-xl-9 ">
                                        <select name="ctl00$ContentPlaceHolder1$ddlProvinsi"
                                            onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlProvinsi\',\'\')', 0)"
                                            id="ContentPlaceHolder1_ddlProvinsi" class="form-control form-control-sm">
                                            <option selected="selected" value="">-- PILIH PROVINSI --</option>
                                            <option value="51">Bali</option>
                                            <option value="36">Banten</option>
                                            <option value="34">DI Yogyakarta</option>
                                            <option value="31">DKI Jakarta</option>
                                            <option value="32">Jawa Barat</option>
                                            <option value="33">Jawa Tengah</option>
                                            <option value="35">Jawa Timur</option>
                                            <option value="64">Kalimantan Timur</option>
                                            <option value="19">Kepulauan Bangka Belitung</option>
                                            <option value="14">Riau</option>
                                            <option value="72">Sulawesi Tengah</option>
                                            <option value="16">Sumatera Selatan</option>
                                            <option value="12">Sumatera Utara</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Kab/Kota</div>
                                    <div class="col-md-12 col-xl-9 ">
                                        <select name="ctl00$ContentPlaceHolder1$ddlKabupaten"
                                            onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlKabupaten\',\'\')', 0)"
                                            id="ContentPlaceHolder1_ddlKabupaten" class="form-control form-control-sm">
                                            <option selected="selected" value="">-- PILIH KABUPATEN --</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Kecamatan</div>
                                    <div class="col-md-12 col-xl-9 ">
                                        <select name="ctl00$ContentPlaceHolder1$ddlKecamatan"
                                            id="ContentPlaceHolder1_ddlKecamatan" class="form-control form-control-sm">

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label  ">Kode Pos</div>
                                    <div class="col-md-12 col-xl-3 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblKodePos" type="text"
                                            id="ContentPlaceHolder1_lblKodePos" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Tempat Lahir</div>
                                    <div class="col-md-12 col-xl-4 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblTempatLahir" type="text"
                                            id="ContentPlaceHolder1_lblTempatLahir"
                                            class="form-control form-control-sm">

                                    </div>
                                    <div class="col-md-12 col-xl-2 font-weight-bold col-form-label ">Tanggal Lahir</div>
                                    <div class="col-md-12 col-xl-3 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblTglLahir" type="text"
                                            id="ContentPlaceHolder1_lblTglLahir" class="form-control form-control-sm">
                                        <input type="hidden"
                                            name="ctl00$ContentPlaceHolder1$MaskedEditExtender4_ClientState"
                                            id="ContentPlaceHolder1_MaskedEditExtender4_ClientState">

                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label  ">Email</div>
                                    <div class="col-md-12 col-xl-4 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblEmail" type="text"
                                            id="ContentPlaceHolder1_lblEmail" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-12 col-xl-2 font-weight-bold col-form-label ">Telp/HP</div>
                                    <div class="col-md-12 col-xl-3 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblTelpon" type="text"
                                            id="ContentPlaceHolder1_lblTelpon" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <h6 class="mt-4 mb-3"><span class="headline">Data Pendidikan</span></h6>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Pendidikan Terakhir
                                    </div>
                                    <div class="col-md-12 col-xl-2 ">
                                        <select name="ctl00$ContentPlaceHolder1$ddlPendidikan"
                                            onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlPendidikan\',\'\')', 0)"
                                            id="ContentPlaceHolder1_ddlPendidikan" class="form-control form-control-sm">
                                            <option value="SD/MI">SD/MI</option>
                                            <option value="SMP/MTS">SMP/MTS</option>
                                            <option value="SMA/MA">SMA/MA</option>
                                            <option value="D1/D2/D3">D1/D2/D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>

                                        </select>
                                    </div>
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Nama Universitas
                                    </div>
                                    <div class="col-md-12 col-xl-4 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblUniversitas" type="text"
                                            id="ContentPlaceHolder1_lblUniversitas"
                                            class="form-control  form-control-sm">
                                    </div>
                                </div>
                                <h6 class="mt-4 mb-3"><span class="headline">Data Bank</span></h6>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Bank</div>
                                    <div class="col-md-12 col-xl-9 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblKodeBank" type="text"
                                            id="ContentPlaceHolder1_lblKodeBank" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Nama Rekening</div>
                                    <div class="col-md-12 col-xl-4 ">
                                        <input name="ctl00$ContentPlaceHolder1$tbNamaKer" type="text"
                                            id="ContentPlaceHolder1_tbNamaKer" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-12 col-xl-2 font-weight-bold col-form-label ">No. Rekening</div>
                                    <div class="col-md-12 col-xl-3 ">
                                        <input name="ctl00$ContentPlaceHolder1$lblNoRekening" type="text"
                                            id="ContentPlaceHolder1_lblNoRekening" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <h6 class="mt-4 mb-3"><span class="headline">Lembaga Pendamping PPH</span></h6>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Nama Lembaga Yang
                                        Dipilih</div>
                                    <div class="col-md-12 col-xl-9 ">
                                        <select name="ctl00$ContentPlaceHolder1$ddlLembagaPendamping"
                                            id="ContentPlaceHolder1_ddlLembagaPendamping"
                                            class="form-control form-control-sm">

                                        </select>
                                    </div>
                                </div>

                                <h6 class="mt-4 mb-3"><span class="headline">Dokumen Persyaratan</span></h6>
                                <table class="table table-responsive " width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <th width="30%">Dokumen</th>
                                            <th width="5%"></th>
                                            <th width="5%"></th>
                                            <th width="60%">File</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span id="ContentPlaceHolder1_lblIJasah">Ijazah</span>
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span id="ContentPlaceHolder1_lblKTP">KTP</span>
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <div class="card-footer text-right">
                            <input type="submit" name="ctl00$ContentPlaceHolder1$btnEdit" value="  Edit  "
                                id="ContentPlaceHolder1_btnEdit" class="btn btn-primary btn-sm ">


                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-md-4 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-xl-12 ">
                            <div class="card shadow mb-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Status Registrasi</h6>
                                </div>
                                <div class="card-body">
                                    <fieldset id="ContentPlaceHolder1_fData2" disabled="disabled">
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Status</div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="ctl00$ContentPlaceHolder1$tbStatus" type="text"
                                                    value="DRAFT" id="ContentPlaceHolder1_tbStatus"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">No.
                                                Registrasi</div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="ctl00$ContentPlaceHolder1$lblNoRegistrasi" type="text"
                                                    value="-" id="ContentPlaceHolder1_lblNoRegistrasi"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Tgl. Berlaku
                                            </div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="ctl00$ContentPlaceHolder1$lblTglBerlaku" type="text"
                                                    value="-" id="ContentPlaceHolder1_lblTglBerlaku"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </fieldset>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xl-12 ">
                            <div class="card shadow mb-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pelatihan Pendamping</h6>
                                </div>
                                <div class="card-body">
                                    <fieldset id="ContentPlaceHolder1_Fieldset1" disabled="disabled">
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Tanggal
                                                Pelatihan</div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="ctl00$ContentPlaceHolder1$tbTglPelatihan" type="text"
                                                    id="ContentPlaceHolder1_tbTglPelatihan"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Tanggal
                                                Berakhir</div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="ctl00$ContentPlaceHolder1$tbTglBerakhir" type="text"
                                                    id="ContentPlaceHolder1_tbTglBerakhir"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Nomor
                                                Sertifikat</div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="ctl00$ContentPlaceHolder1$tbNoSertifikat" type="text"
                                                    id="ContentPlaceHolder1_tbNoSertifikat"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </fieldset>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tracking</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <ul id="ContentPlaceHolder1_tabs" class="timeline">
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="modal fade" id="myModalTidakLengkap" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalHead">Persyaratan Tidak Lengkap</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label id="label2" class="pb-4">Dokumen persyaratan belum lengkap</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class=" btn-secondary " data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModalSuccess" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Success</h5>
                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="pb-4">Simpan Sukses </label>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnSukses" value="OK"
                            id="ContentPlaceHolder1_btnSukses" class="btn-secondary btn-sm">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalConfirm" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">HAPUS</h5>
                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="pb-4">Yakin ingin menghapus? </label>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnYa" value="Ya"
                            id="ContentPlaceHolder1_btnYa">
                        <button type="button" class="btn-secondary btn-sm"
                            onclick="window.location.href='/main'">Tidak</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="Ajukan" tabindex="-1" role="dialog" aria-labelledby="UpdateData" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UpdateData1">Pengajuan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Ajukan
                        <span id="ContentPlaceHolder1_lblNamaPendamping">Riza Ardiyanti</span>
                        sebagai Pendamping?
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btbYa" value="Ya"
                            id="ContentPlaceHolder1_btbYa" class="btn btn-primary btn-sm">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnBatal2" value="Tidak"
                            id="ContentPlaceHolder1_btnBatal2" class="btn btn-secondary btn-sm" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Page Heading -->

</div>













@endsection