@extends('layouts.menu')
@section('content')
<html>
<body>
<form action="{{ url('/add') }}" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>MAKLUMAT WARTA KERAJAAN</strong></div>

                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="form-group">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <table width="943" border="0">
                                            <tr>
                                                <td valign="top"><strong>Blok</strong></td>
                                                <td width="346" valign="top"><div class="controls">
                                                    <select style="width:200px" name="blok" id="blok" data-rel="chosen">
                                                        <option value="0" selected="selected">Sila Pilih</option>
                                                        <option value="1" >ACLBD</option>
                                                        <option value="2" >CCLBD</option>
                                                        <option value="3" >LNLBD</option>
                                                        <option value="4" >Fasa III</option>
                                                        <option value="5" >Fasa IV</option>
                                                        <option value="6" >Fasa V</option>
                                                    </select>

                                                <td width="139" valign="top"><span class="form-group"><strong>No. Hak Milik</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                <input style="width:250px" type="text" class="form-control" name="hak_milik" placeholder="No. Hak Milik"/>
                                            </tr>

                                            <!-- FASA & Tarikh Warta-->
                                            <tr>
                                                <td valign="top"><strong>Fasa</strong></td>
                                                <td width="346" valign="top"><div class="controls">
                                                    <select style="width:200px" name="fasa" id="fasa" data-rel="chosen">
                                                        <option value="0" selected="selected">Sila Pilih</option>
                                                        <option value="1" >Fasa I</option>
                                                        <option value="2" >Fasa I A</option>
                                                        <option value="3" >Fasa II</option>
                                                        <option value="4" >Fasa III</option>
                                                        <option value="5" >Fasa IV</option>
                                                        <option value="6" >Fasa V</option>
                                                    </select>
                                                <td valign="top"><span class="form-group"><strong>Tarikh  Warta</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                {{Form::Date('t_warta',\Carbon\Carbon::now())}}
                                                </span></td>
                                            </tr>
  
                                                <!-- Negeri & Tarikh Luput -->
                                            <tr>
                                                <td valign="top"><span class="form-group"><strong>Negeri</strong></span></td>
                                                <td width="346" valign="top"><div class="controls">
                                                  <select style="width:200px" name="negeri" id="negeri" data-rel="chosen" >
                                                    <option value="0" selected="selected">Sila Pilih</option>
                                                    <option value="1" >Kedah</option>
                                                    <option value="2" >Perlis</option>
                                                  </select>
                                                </div></td>
                                                <td valign="top"><span class="form-group"><strong>Tarikh Luput Warta</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                  {!!Form::Date('t_luputwarta',\Carbon\Carbon::now())!!}
                                                </span>
                                                
                                                </td>
                                                </td>
                                            </tr>

                                            <!-- Daerah & Jilid -->
                                            <tr>
                                                <td valign="top"><span class="form-group"><strong>Daerah</strong></span></td>
                                                <td width="346" valign="top"><div class="controls">
                                                  <select style="width:200px" name="mukim" id="daerah" data-rel="chosen" >
                                                    <option value="0" selected="selected">Sila Pilih</option>
                                                    <option value="1" >Jabi</option>
                                                    <option value="2" >Padang Hang</option>
                                                    <option value="3" >Padang Lalang</option>
                                                  </select>
                                                </div></td>
                                                <td valign="top"><span class="form-group"><strong>Jilid Warta</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                  <input style="width:250px" type="text" class="form-control" name="jilid" placeholder="Jilid Warta"/>
                                                </span></td></td>
                                            </tr>

                                            <!-- Mukim & No. Warta -->
                                            <tr>
                                                <td valign="top"><span class="form-group"><strong>Mukim</strong></span></td>
                                                <td width="346" valign="top"><div class="controls">
                                                  <select style="width:200px" name="daerah" id="mukim" data-rel="chosen" >
                                                    <option value="0" selected="selected">Sila Pilih</option>
                                                    <option value="1" >Kota Setar</option>
                                                    <option value="2" >Jitra</option>
                                                    <option value="3" >Pokok Sena</option>
                                                  </select>
                                                </div></td>
                                                <td valign="top"><span class="form-group"><strong>No. Warta</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                  <input style="width:250px" type="text" class="form-control" name="no_warta" placeholder="No. Warta"/>
                                                </span></td></td>
                                            </tr>

                                            <!-- Pakej & Rujukan Fail -->
                                            <tr>
                                                <td valign="top"><span class="form-group"><strong>Pakej</strong></span></td>
                                                <td width="346" valign="top"><div class="controls">
                                                  <select style="width:200px" name="pakej" id="pakej" data-rel="chosen" >
                                                    <option value="0" selected="selected">Sila Pilih</option>
                                                    <option value="1" >Pakej 1</option>
                                                    <option value="2" >Pakej 2</option>
                                                    <option value="3" >Pakej 3</option>
                                                  </select>
                                                </div></td>
                                                <td valign="top"><span class="form-group"><strong>Rujukan Fail</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                  <input style="width:250px" type="text" class="form-control" name="rujukan" placeholder="Rujukan Fail"/>
                                                </span></td></td>

                                            </tr>
  

                                            <!-- Bil. Lot & Catatan -->
                                            <tr>
                                                <td valign="top"><span class="form-group"><strong>Bil. Lot</strong></span></td>
                                                <td width="346" valign="top"><span class="form-group">
                                                  <input style="width:250px" type="text" class="form-control" name="no_lot" placeholder="No. Lot"/>
                                                </span></td>
                                                <td valign="top"><strong>Catatan</strong></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                  <input style="width:250px" type="text" class="form-control" name="catatan" placeholder="Catatan"/>
                                                </span></td></td>
                                                <td></td>
                                            </tr>
                                        
                                        <tr>
                                <td>{{Form::Submit('Simpan',['class'=>'btn btn-primary'])}}</td>
                                <td><a class="btn btn-primary" href="{{ url ('/warta') }}">Kembali</a></td>
                                {{Form::close()}}
                                </tr>
</table>
                            </div>
                        </div>
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