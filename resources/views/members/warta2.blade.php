@extends('layouts.menu')
<html>
<body>
<form action="/warta" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>A. MAKLUMAT WARTA</strong></div>

                <div class="panel-body">
                        <div class="col-md-3">
                            <div class="form-group">
                                <table class="table table-hover">
                        <tr>
                            <th colspan="7">Senarai Peserta </th>
                            <th colspan="3"><div align="right">(Jumlah : Peserta)</div></th>
                        </tr>
                        </table>
                                
                                {!!Form::Label('Blok Pengairan')!!}
                                {!! Form::Select('blok',array('Sila Pilih','ACLBD','ACLBD2')) !!}

                                {!!Form::Label('Fasa')!!}
                                {!!Form::Select('fasa',array('Sila Pilih','Fasa 1','Fasa 2'))!!}
                                <br>

                                {!!Form::Label('Negeri')!!}
                                {!!Form::Select('negeri',array('Sila Pilih','Kedah','Perlis'))!!}
                                <br>

                                {{Form::Label('Daerah')}}
                                {{Form::Select('daerah',array('Sila Pilih','Kota Setar','Jitra','Pendang'))}}
                                <br>

                                {{Form::Label('Mukim')}}
                                {{Form::Select('mukim',array('Sila Pilih','Mukim 1','Mukim 2'))}}
                                <br>

                                {!!Form::Label('Pakej')!!}
                                {!!Form::Select('pakej',array('Sila Pilih','Pakej 1','Pakej 2','Pakej 3', 'Pakej 4', 'Tambahan 1', 'Tambahan 2', 'Tambahan 3'))!!}
                                <br>

                                {!!Form::Label('No. Lot')!!}
                                {!!Form::Text('no_lot')!!}

                                {!!Form::Label('No. Hak Milik')!!}
                                {!!Form::Text('hakmilik')!!}

                                {!!Form::Label('Tarikh Warta')!!}
                                {!!Form::Date('t_warta',\Carbon\Carbon::now())!!}

                                {!!Form::Label('Tarikh Luput Warta')!!}
                                {!!Form::Date('t_luputwarta',\Carbon\Carbon::now())!!}

                                {!!Form::Label('Jilid Warta')!!}
                                {!!Form::Text('jilid')!!}

                                {!!Form::Label('No. Warta')!!}
                                {!!Form::Text('no_warta')!!}

                                {!!Form::Label('Rujukan Fail')!!}
                                {!!Form::Text('rujukan')!!}

                                {!!Form::Label('Catatan')!!}
                                {!!Form::Text('catatan')!!}


                                <br>
                                <br>

                                {{Form::Submit('Simpan',['class'=>'btn btn-primary'])}}
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