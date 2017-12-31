@extends('layouts.menu')
@section('content')
<html>
<body>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<form action="{{ url ('/create')}}" method="post">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>Borang K (Menu)</strong></div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="form-group">
                                <table width="900" border="0">
                                    <tr>
                                        <td style="width: 120px"><strong>Carian No. Lot</strong></td>
                                        <td style="width: 350px"><input style="width:400px" type="text" class="form-control" name="jilid" id="jilid" placeholder="No.Jilid Warta"/></td>
                                        <td style="width: 220px"><button type="button" class="btn btn-default">Cari</button></td>
                                        <td style="width: 100px"><a class="btn btn-success" href="{{ url ('/borangk') }}">
                                        <span class="glyphicon glyphicon-plus"></span>Baru</a></td>
                                        </a></td>
                                    </tr>
                                    <!--table class="table table-striped table-bordered bootstrap-datatable datatable responsive"-->
                                        <table width="880" class="table-bordered">
                                        <tbody>
                                            <thead>
                                                <br>
                                                <tr>
                                                    <th width="10"><center>Bil.</th>
                                                    <th width="23"><center>Blok</th>
                                                    <th width="23"><center>No. Lot</th>
                                                    <th width="30"><center>No. Hak Milik</th>
                                                    <th width="10"><center>Rujukan Borang K</th>
                                                    <th width="16"><center>Lain-lain</th>
                                                </tr>
                                              
                                                @foreach ($users as $user)

                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->blok }}</td>
                                                    <td>{{ $user->no_lot }}</td>
                                                    <td style="width: 150px">{{ $user->hak_milik }}</td>
                                                    <td style="width: 50px">{{ $user->rujukan_k }}</td>
                                                    <td style="width: 50px"><center>
                                                        <a class="btn btn-info" href="">Lihat</a>
                                                        <a class="btn btn-danger" href="#"><i class="glyphicon glyphicon-trash"></i> Buang</a>
                                                    </td>                                                            
                                                </tr>
                                                @endforeach                                                                                                
                                                <!--button type="submit" class="btn btn-default" value="Tambah">Tambah</button-->
                                                <!--input  type="submit" name="button" class="style13" value="Tambah "/-->
                                                <!--a class="btn btn-success" href="borangH.php"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                                                <a class="btn btn-success" href="borangK.php"><i class="glyphicon glyphicon-share-alt"></i> Seterusnya</a><br-->
                                                <!--input  type="submit" name="button" class="style13" value="Seterusnya"/-->
                                                <!--input type="hidden" name="but" value="but" /-->
                                            
                                                <!--/tr-->
                                                 </thead>
                                                </tbody>

                                        </table>
                                </form>
                                <!--a class="btn btn-primary" href="{{ url ('/borangh') }}">Tambah</a>
                                <a class="btn btn-danger" href="{{ url ('/borangk') }}">Borang K</a-->
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