@extends('layouts.menu')
@section('content')
<html>
<body>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<form action="{{ url ('/addborangk') }}" method="post">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>D. Borang K</strong></div>
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

                                <td width="199">
                                  <label for="InputIC">Tarikh Borang K</label></td>
                                <td>
                                {!!Form::Date('tarikh_k',\Carbon\Carbon::now())!!}
                                </td></tr>

                                <tr>
                                  <td><strong>Fasa</strong></td>
                                  <td><div class="controls">
                                    <select style="width:200px" name="fasa" id="fasa" data-rel="chosen">
                                      <option value="0" >Sila Pilih</option>
                                      <option value="1" >Fasa I</option>
                                      <option value="2" >Fasa II</option>
                                      <option value="3" >Fasa III</option>
                                      <option value="4" >Fasa IV</option>
                                      <option value="5" >Fasa V</option>
                                    </select>
                                  </div></td>
                                <td width="199" valign="top"><span class="form-group">
                                                  <label for="InputAdd3">Rujukan Borang K</label></span></td>
                                                <td width="264"><span class="form-group">
                                                  <input  style="width:200px" type="text" class="form-control" name="rujukan_k" placeholder="Rujukan Borang K">
                                                </span></td>
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
                                                <td width="199" valign="top"><strong>Rujukan Fail</strong></td>
                                                <td width="264"><span class="form-group">
                                                  <input  style="width:200px" type="text" class="form-control" name="rujukan_fail" id="rujukan_fail" placeholder="Rujukan Fail">
                                                </span></td>
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
                                                <td width="199" valign="top"><strong>Attachment</strong></td>
                                                <td width="264">&nbsp;</td>
                                              </tr>
                                               <tr>
                                                <td><strong>Mukim</strong></td>
                                                <td><div class="controls">
                                                  <select style="width:200px" name="mukim" id="mukim" data-rel="chosen">
                                                    <option value="0" >Sila Pilih</option>
                                                    <option value="1" >Mukim 1</option>
                                                    <option value="2" >Mukim 2</option>
                                                    <option value="3" >Mukim 3</option>
                                                    <option value="4" >Mukim 4</option>
                                                  </select>
                                                </div></td>
                                                <td width="199" valign="top">&nbsp;</td>
                                                <td width="264">&nbsp;</td>
                                              </tr>
                                              
                                                 <tr>
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
                                                <td width="199" valign="top">&nbsp;</td>
                                                <td width="264">&nbsp;</td>
                                              </tr>
                                              
                                                 <tr>
                                                   <td><strong>No. Lot</strong></td>
                                                   <td><input style="width:200px" type="text" class="form-control" name="no_lot" id="no_lot" placeholder="No.Lot" /></td>
                                                <td width="199" valign="top">&nbsp;</td>
                                                <td width="264">&nbsp;</td>
                                              </tr>
                                              
                                                 <tr>
                                                <td valign="top"><strong>No. Hak Milik</strong></td>
                                                <td width="279" valign="top"><input  style="width:200px" type="text" class="form-control" name="hak_milik" id="hak_milik" placeholder="No. Hak Milik"/></td>
                                                <td width="199" valign="top">&nbsp;</td>
                                                <td width="264">&nbsp;</td>
                                              </tr>
                                        </table>
                                </form>
                                {{Form::Submit('Simpan',['class'=>'btn btn-primary'])}}
                                <a class="btn btn-primary" href="{{ url ('/borangkmenu') }}">Kembali</a>
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