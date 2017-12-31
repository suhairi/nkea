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
                <div class="panel-heading"><strong>TETAPAN SISTEM.</strong></div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="form-group">
                                <table width="900" border="0">
                                    <tr>
                                        <td style="width: 100px"><a class="btn btn-primary" href="{{ url ('/register') }}">TAMBAH PENGGUNA BARU</a></td>   
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px"><a class="btn btn-primary" href="{{ url ('/addblok') }}">TAMBAH BLOK BARU</a></td>
                                        <td><a class="btn btn-primary" href="{{ url ('/negeri') }}">TAMBAH NEGERI BARU</a></td>
                                    </tr>
                                    
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