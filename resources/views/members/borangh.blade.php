@extends('layouts.menu')
@section('content')
<html>
<body>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<form action="{{ url ('/addborangh') }}" method="post">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>C. Borang H</strong></div>
                  <div class="panel-body">
                    <div class="col-md-3">
                      <div class="form-group">
                        
                          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <table width="943" border="0">
                              <tr>
                                  <td width="140"><strong>Blok Pengairan</strong></td>
                                  <td width="318"><div class="controls">

                                    <select style="width:200px" name="blok" id="blok" data-rel="chosen">
                                              
                                      <option value="0" >Sila Pilih</option>
                                      <option value="1" >ARBD 3</option>
                                      <option value="2" >SCRBD 1-2 (Paya Kerchut)</option>
                                      <option value="3" >SCRBD 1-2 (Paya Nedam)</option>
                                      <option value="4" >SCRBD 1-3</option>

                                      </select>
                                     </div></td>
                                  <td width="199"><strong>Mukim</strong></td>
                                  <td width="264"><div class="controls">
                                    <select style="width:200px" name="mukim" id="mukim" data-rel="chosen">
                                      <option value="0" >Sila Pilih</option>
                                      <option value="1" >Mukim 1</option>
                                      <option value="2" >Mukim 2</option>
                                      <option value="3" >Mukim 3</option>
                                      <option value="4" >Mukim 4</option>
                                    </select>
                                  </div></td>
                                </tr>
                                <tr>
                                  <td><strong>Fasa</strong></td>
                                  <td><div class="controls">
                                    <select style="width:200px" name="fasa" id="fasa" data-rel="chosen">
                                      <option value="0" selected="selected">Sila Pilih</option>
                                      <option value="1" >Fasa I</option>
                                      <option value="2" >Fasa I A</option>
                                      <option value="3" >Fasa II</option>
                                      <option value="4" >Fasa III</option>
                                      <option value="5" >Fasa IV</option>
                                      <option value="6" >Fasa V</option>
                                    </select>
                                  </div></td>
                                  <td><strong>Pakej</strong></td>
                                  <td><div class="controls">
                                     <select style="width:200px" name="pakej" id="pakej" data-rel="chosen">
                                        <option value="0" >Sila Pilih</option>
                                        <option value="1" >Pakej 1</option>
                                        <option value="2" >Pakej 2</option>
                                        <option value="3" >Pakej 3</option>
                                        <option value="4" >Pakej 4</option>
                                        <option value="5" >Tambahan 1</option>
                                        <option value="6" >Tambahan 2</option>
                                        <option value="7" >Tambahan 3</option>
                                      </select>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><strong>Negeri</strong></td>
                                    <td><div class="controls">
                                      <select style="width:200px" name="negeri" id="negeri" data-rel="chosen">
                                        <option value="0" >Sila Pilih</option>
                                        <option value="1" >Kedah</option>
                                        <option value="2" >Perlis</option>
                                      </select>
                                    </div></td>
                                    <td><strong>No. Lot</strong></td>
                                    <td><input style="width:200px" type="text" class="form-control" name="no_lot" id="no_lot" placeholder="No.Lot" /></td>
                                  </tr>
                                              <tr>
                                                <td><strong>Daerah</strong></td>
                                                <td><div class="controls">
                                                  <select style="width:200px" name="daerah" id="daerah" data-rel="chosen">
                                                    <option value="0" >Sila Pilih</option>
                                                    <option value="1" >Daerah 1</option>
                                                    <option value="2" >Daerah 2</option>
                                                    <option value="3" >Daerah 3</option>
                                                  </select>
                                                </div></td>
                                                <td><strong>No. Hak Milik</strong></td>
                                                <td><input style="width:200px" type="text" class="form-control" name="hak_milik" id="hak_milik" placeholder="No. Hak Milik"/></td>
                                              </tr>
                                              <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td><strong><u>Penerima</u></strong></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                    <td colspan="2">&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td><strong>Nama</strong></td>
                                                <td><input style="width:200px" type="text" class="form-control" name="nama" id="nama" placeholder="Nama Penerima" /></td>
                                                <td><strong>Nama Bank</strong></td>
                                                    <td><div class="controls">
                                                  <select style="width:200px" name="bank" id="bank" data-rel="chosen">
                                                    <option value="0" >Sila Pilih</option>
                                                    <option value="1" >Maybank</option>
                                                    <option value="2" >CIMB</option>
                                                    <option value="3" >Bank Islam</option>
                                                    <option value="4" >RHB</option>
                                                  </select>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                <td><strong>No. K/Pengenalan</strong></td>
                                                <td><input style="width:200px" type="text" class="form-control" name="no_kp" id="no_kp" placeholder="888888888888" /></td>
                                                <td><strong>No. Akaun Bank</strong></td>
                                                 <td colspan="2"><input style="width:200px" type="text" class="form-control" name="akaun_bank" id="akaun_bank" placeholder="No. Akaun Bank" /></td>
                                              </tr>
                                             <tr>
                                                <td><strong>Status Penerima</strong></td>
                                                <td><div class="controls">
                                                  <select style="width:200px" name="status_penerima" id="status_penerima" data-rel="chosen">
                                                    <option value="0" >Sila Pilih</option>
                                                    <option value="1" >Pemilik</option>
                                                    <option value="2" >Penyewa</option>
                                                  </select>
                                                </div></td>
                                                <td><strong>Kaedah Bayaran</strong></td>
                                                    <td colspan="2"><div class="controls">
                                                      <select style="width:200px" name="kaedah_bayar" id="kaedah_bayar" data-rel="chosen">
                                                        <option value="0" >Sila Pilih</option>
                                                        <option value="1" >Cek</option>
                                                        <option value="2" >EFT</option>
                                                    </select>
                                                  </div></td>
                                              </tr>
                                               <tr>
                                                <td><strong>Pecahan Bahagian</strong></td>
                                                <td><input style="width:200px" type="text" class="form-control" name="pecah_bah" id="pecah_bah" placeholder="Pecahan Bahagian" /></td>
                                                <td><strong>No. Baucer Bayaran</strong></td>
                                                    <td><input style="width:200px" type="text" class="form-control" name="no_baucer" id="no_baucer" placeholder="No. Baucer Bayaran" /></td>
                                              </tr>
                                                 <tr>
                                                <td><strong>Nilai Tanah (RM/ha)</strong></td>
                                                <td><input style="width:200px" type="text" class="form-control" name="nilai_tanah" id="nilai_tanah" placeholder="Nilai Tanah" /></td>
                                                <td><strong>Tarikh Baucar Bayaran</strong></td>
                                                <td>{!!Form::Date('t_baucer',\Carbon\Carbon::now())!!}</td>
                                              </tr>
                                                 <tr>
                                                <td><strong>Status Tanah</strong></td>
                                                <td><div class="controls">
                                                  <select style="width:200px" name="status" id="status" data-rel="chosen">
                                                  
                                                    <option value="0" >Sila Pilih</option>
                                                    <option value="1" >Teknologi</option>
                                                    <option value="2" >Pertanian</option>
                                                    <option value="3" >Perumahan/Pembangunan</option>
                                                    <option value="4" >Industri</option>
                                                    <option value="5" >Institusi</option>
                                                    <option value="6" >Lain-lain</option>
                                                    
                                                  </select>
                                                </div></td>
                                                <td><strong>No. Cek / EFT</strong></td>
                                                    <td><input style="width:200px" type="text" class="form-control" name="no_cek" id="no_cek" placeholder="No. Cek / EFT" /></td>
                                              </tr>
                                                 <tr>
                                                <td><strong>Luas Pengambilan (ha)</strong></td>
                                                <td><input style="width:200px" type="text" class="form-control" name="luas_ambil" id="luas_ambil" placeholder="Luas Pengambilan" /></td>
                                                <td><strong>Tarikh Cek / EFT</strong></td>
                                                    <td>{{Form::Date('t_cek',\Carbon\Carbon::now())}}</td>
                                              </tr>
                                                 <tr>
                                                <td><strong>Kategori Pampasan</strong></td>
                                                <td><div class="controls">
                                                  <select style="width:200px" name="kategori" id="kategori" data-rel="chosen">
                                                    <option value="0" >Sila Pilih</option>
                                                    <option value="1" >Kategori 1</option>
                                                    <option value="2" >Kategori 2</option>
                                                  </select>
                                                  </div></td>
                                                <td><strong>Status</strong></td>
                                                    <td colspan="2"><div class="controls">
                                                      <select style="width:200px" name="status" id="status" data-rel="chosen">
                                                        <option value="0" >Sila Pilih</option>
                                                        <option value="1" >Selesai</option>
                                                        <option value="2" >Belum Selesai</option>
                                                    </select>
                                                  </div></td>
                                              </tr>
                                                 <tr>
                                                <td><strong>Amaun Pampasan</strong></td>
                                                <td><input style="width:200px" type="text" class="form-control" name="amaun_pampasan" id="amaun_pampasan" placeholder="Amaun Pempasan" /></td>
                                                <td><strong>Catatan</strong></td>
                                                    <td colspan="2"><input style="width:200px" type="text" class="form-control" name="catatan" id="catatan" placeholder="Catatan" /></td>
                                              </tr>
                                                 <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td><strong>Reference / Rujukan</strong></td>
                                                    <td colspan="2"><input style="width:200px" type="text" class="form-control" name="ref" id="ref" placeholder="Reference" /></td>
                                              </tr>
                                                 <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td><strong>Attachment</strong></td>
                                                    <td colspan="2">&nbsp;</td>
                                              </tr>

                                        </table>
                                </form>
                                {{Form::Submit('Simpan',['class'=>'btn btn-primary'])}}
                                <a class="btn btn-danger" href="{{ url ('/boranghmenu') }}">Kembali</a>
                                {{Form::close()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
@endsection