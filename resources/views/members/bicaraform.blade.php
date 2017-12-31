@extends('layouts.menu')
@section('content')
<html>
<body>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<form action="{{ url ('/addbicara') }}" method="post">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>B. Perbicaraan</strong></div>
                	<div class="panel-body">
                        <div class="col-md-3">
                            <div class="form-group">                                
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <table width="900" border="0">

                                    <tr>
                                    	<td><strong>Carian Jilid Warta</strong></td>
										<td><input style="width:300px" type="text" class="form-control" name="jilid" id="jilid" placeholder="No.Jilid Warta"/></td>
										<td><button type="button" class="btn btn-success">Cari</button></td>
                                    </tr>
                                    <tr>
                                    <td style="height: 50px">
                                    </td>
                                    </tr>

										<tr>
											<td width="140"><strong>Blok</strong></td>
											<td width="318"><div class="controls">

											  <select style="width:200px" name="blok" id="blok" data-rel="chosen">
											  
											    <option value="0" >Sila Pilih</option>
											    <option value="1" >ARBD 3</option>
											    <option value="2" >SCRBD 1-2 (Paya Kerchut)</option>
											    <option value="3" >SCRBD 1-2 (Paya Nedam)</option>
											    <option value="4" >SCRBD 1-3</option>

											    </select>
											</div></td>
										    <td width="199"><strong>Status Perbicaraan</strong></td>
										    <td width="264"><div class="controls">
										    
										      <select style="width:200px" name="status_bicara" id="status_bicara" data-rel="chosen">
										     
										        <option value="0" >Sila Pilih</option>
										        <option value="1" >Selesai</option>
										        <option value="2" >Semak Jajaran</option>
										        <option value="3" >Batal</option>
										        <option value="4" >Tidak Hadir</option>
										     
										        </select>
										      </div></td>
										  </tr>
										  
										  <!-- Fasa & Status Tanah-->
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
										  </tr>
  
										  <!-- Negeri & Pemilik -->
										  <tr>
										    <td><strong>Negeri</strong></td>
										    <td><div class="controls">
										      <select style="width:200px" name="negeri" id="negeri" data-rel="chosen">
										        <option value="0" >Sila Pilih</option>
										        <option value="1" >Kedah</option>
										        <option value="2" >Perlis</option>
										      </select>
										    </div></td>
										    <td><strong>Bilangan Pemilik</strong></td>
										    <td><input style="width:250px" type="text" class="form-control" name="pemilik" placeholder="Bilangan Pemilik"/></td>
										  </tr>

										  <!-- Daerah & Luas -->
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
										    <td><strong>Luas Pengambilan (ha)</strong></td>
										    <td><input style="width:250px" type="text" class="form-control" name="luas_ambil" id="luas_ambil" placeholder="Luas Pengambilan"/></td>
										  </tr>

										  <!-- Mukim & Nilai Tanah -->
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
										    <td><strong>Nilai Tanah (RM/ha)</strong></td>
										    <td><input style="width:250px" type="text" class="form-control" name="nilai_tanah" id="nilai_tanah" placeholder="Nilai Tanah"/></td>
										  </tr>

										  <!-- Pakej & Pampasan Tanah -->
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
										    <td><strong>Pampasan Tanah (RM)</strong></td>
										    	<td colspan="2"><input style="width:250px" type="text" class="form-control" name="pampasan" id="pampasan" placeholder="Pampasan Tanah"/></td>
										  </tr>

										  <!-- Lot & Lain2 pampasan -->
										  <tr>
										    <td><strong>No. Lot</strong></td>
										    <td><input style="width:250px" type="text" class="form-control" name="no_lot" id="no_lot" placeholder="No.Lot" /></td>
										    <td><strong>Lain-lain Pampasan (RM)</strong></td>
										   	<td><input style="width:250px" type="text" class="form-control" name="l_pampasan" placeholder="Lain-lain Pampasan"/></td>
										  </tr>

										  <!-- Hakmilik & Jumlah Pampasan -->
										  <tr>
										    <td><strong>No. Hak Milik</strong></td>
										    <td><input style="width:250px" type="text" class="form-control" name="hak_milik" id="hak_milik" placeholder="No. Hak Milik"/></td>
										    <td><strong>Jumlah Pampasan (RM)</strong></td>
										    <td><input style="width:250px" type="text" class="form-control" name="jum_pampasan" id="jum_pampasan" placeholder="Jumlah Pampasan"/></td>
										  </tr>

										<!-- Jajaran & Catatan -->
										<tr>
											<td><strong>Jajaran</strong></td>
											<td><input style="width:250px" type="text" class="form-control" name="jajaran" id="jajaran" placeholder="Jajaran"/></td>
											<td><strong>Catatan</strong></td>
											<td><input style="width:250px" type="text" class="form-control" name="catatan" id="catatan" placeholder="Catatan"/></td>
										</tr>

										<!-- Tarikh Perbicaraan -->
									   <tr>
									    <td><strong>Tarikh Perbicaraan</strong></td>
									    <td>{!!Form::Date('t_bicara',\Carbon\Carbon::now())!!}</td>
									    <td>&nbsp;</td>
									    	<td colspan="2">&nbsp;</td>
									  </tr>
									  <tr>
									  <td style="height: 20px">
									  </td>
									  </tr>
									<tr>
										<td>{{Form::Submit('Simpan',['class'=>'btn btn-primary'])}}</td>
										<td><a class="btn btn-primary" href="{{ url ('/bicara') }}">Kembali</a></td>
			                            {{Form::close()}}
			                        <tr>
                            	</table>
							</form>
                		</div>
        			</div>
    			</div>
			</div>
    	</div>
	</div>
</body>
</html>
@endsection