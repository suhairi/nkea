@extends('layouts.menu')

@section('content')
<html>
<head>
<title>Test</title>
</head>
<body>
<form action = "/create" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<table>
	<tr>
		<td>Name</td>
		<td><input type='text' name='stud_name' /></td><br>
		<td>No.Kp</td>
		<td><input type="text" name="no_kp" /></td>
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
		        <td valign="top"><span class="form-group"><strong>Tarikh Luput Warta</strong></span></td>
		        <td width="396" valign="top"><span class="form-group">
		          {!!Form::Date('t_luputwarta',\Carbon\Carbon::now())!!}
		        </span>
		                                                
		        </td>
	</tr>
	<tr>
		<td colspan='2'><input type='submit' value="Add" /></td>
	</tr>
</table>
</form>
</body>
</html>
@endsection
