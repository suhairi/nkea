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
                <div class="panel-heading"><strong>WARTA KERAJAAN (MENU)</strong></div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="form-group">
                                <table width="900" border="0">
                                    <tr>
                                        <td style="width: 120px"><strong>Carian Jilid Warta</strong></td>
                                        <td style="width: 350px"><input style="width:400px" type="text" class="form-control" name="jilid" id="jilid" placeholder="No.Jilid Warta"/></td>
                                        <td style="width: 220px"><button type="button" class="btn btn-default">Cari</button></td>
                                        <td style="width: 100px"><a class="btn btn-success" href="{{ url ('/form') }}"> Tambah</a></td>
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
                                                    <th width="23"><center>Tarikh Warta</th>
                                                    <th width="19"><center>Jilid Warta</th>
                                                    <th width="13"><center>No. Warta</th>
                                                    <th width="16"><center>Lain-lain</th>
                                                </tr>
                                              
                                                @foreach ($users as $user)

                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->no_blok }}</td>
                                                    <td>{{ $user->t_warta }}</td>
                                                    <td>{{ $user->jilid }}</td>
                                                    <td>{{ $user->no_warta }}</td>
                                                    <td><center>
                                                        <a class="btn btn-info" href="wartaupd/{{$user->id}}">Lihat</a>
                                                        <a class="btn btn-danger btn-small" href="wartadelete/{{$user->id}}"> Hapus</a>
                                                    </td>
                                                            
                                                </tr>
                                                @endforeach                                                                                                
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