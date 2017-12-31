@extends('layouts.menu')
@section('content')
<html>
<body>
<form action="{{ url('/tambah') }}" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>TAMBAH MAKLUMAT BLOK</strong></div>

                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="form-group">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <table width="943" border="0">
                                            <tr>
                                                <td width="139" valign="top"><span class="form-group"><strong>Nama Blok</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                <input style="width:250px" type="text" class="form-control" name="nama_blok" placeholder="Nama Blok"/>

                                                <td width="139" valign="top"><span class="form-group"><strong>Jumlah Lot Total</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                <input style="width:250px" type="text" class="form-control" name="total" placeholder="Jumlah Lot Total"/>
                                            </tr>

                                            <!-- FASA & Tarikh Warta-->
                                            <tr>
                                                <td width="139" valign="top"><span class="form-group"><strong>Anggaran Kos</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                <input style="width:250px" type="text" class="form-control" name="anggaran_kos" placeholder="Anggaran Kos"/>

                                                <td width="139" valign="top"><span class="form-group"><strong>Bil. Lot Batal</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                <input style="width:250px" type="text" class="form-control" name="lot_batal" placeholder="Bil. Lot Batal"/>
                                            </tr>
  
                                                <!-- Negeri & Tarikh Luput -->
                                            <tr>
                                                <td width="139" valign="top"><span class="form-group"><strong>Lokaliti</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                <input style="width:250px" type="text" class="form-control" name="lokaliti" placeholder="Lokaliti"/>

                                                <td width="139" valign="top"><span class="form-group"><strong>Bil. Lot Bayar</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                <input style="width:250px" type="text" class="form-control" name="lot_bayar" placeholder="Bil. Lot Bayar"/>
                                            </tr>

                                            <!-- Daerah & Jilid -->
                                            <tr>
                                                <td width="139" valign="top"><span class="form-group"><strong>Fasa</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                <input style="width:250px" type="text" class="form-control" name="fasa" placeholder="Fasa"/>

                                                <td width="139" valign="top"><span class="form-group"><strong>Baki Lot</strong></span></td>
                                                <td width="396" valign="top"><span class="form-group">
                                                <input style="width:250px" type="text" class="form-control" name="baki_lot" placeholder="Baki Lot"/>
                                            </tr>

                                        </table>
                                {{Form::Submit('Tambah',['class'=>'btn btn-primary'])}}
                                <td style="width: 100px"><a class="btn btn-primary" href="{{ url ('/settings') }}">Kembali</a></td>
                                {{Form::close()}}
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