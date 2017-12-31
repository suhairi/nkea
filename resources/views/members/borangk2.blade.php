@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>D. BORANG K.</strong></div>

                <div class="panel-body">
                    <!-- dropdown carian Blok -->
                    <strong>Blok</strong>
                    <div class="controls">
                        <select style="width:200px" name="blok" id="blok" data-rel="chosen">     
                            <option value="0" >Sila Pilih</option>
                        </select>
                    </div>
                    <!-- end carian blok -->

                    <!-- dropdown carian fasa -->
                    <strong>Fasa</strong>
                    <div class="controls">
                        <select style="width:200px" name="fasa" id="fasa" data-rel="chosen">     
                            <option value="0" >Sila Pilih</option>
                        </select>
                    </div>
                    <!-- end carian fasa -->

                    <!-- dropdown carian Negeri -->
                    <strong>Negeri</strong>
                    <div class="controls">
                        <select style="width:200px" name="negeri" id="negeri" data-rel="chosen">     
                            <option value="0" >Sila Pilih</option>
                        </select>
                    </div>
                    <!-- end carian negeri -->

                    <!-- dropdown carian daerah -->
                    <strong>Daerah</strong>
                    <div class="controls">
                        <select style="width:200px" name="daerah" id="daerah" data-rel="chosen">     
                            <option value="0" >Sila Pilih</option>
                        </select>
                    </div>
                    <!-- end carian daerah -->

                    <!-- dropdown carian mukim -->
                    <strong>Mukim</strong>
                    <div class="controls">
                        <select style="width:200px" name="mukim" id="mukim" data-rel="chosen">     
                            <option value="0" >Sila Pilih</option>
                        </select>
                    </div>
                    <!-- end carian mukim -->

                    <!-- dropdown carian pakej -->
                    <strong>Pakej</strong>
                    <div class="controls">
                        <select style="width:200px" name="pakej" id="pakej" data-rel="chosen">     
                            <option value="0" >Sila Pilih</option>
                        </select>
                    </div>
                    <!-- end carian pakej -->

                    <!-- dropdown carian no_lot -->
                    <strong>No. Lot</strong>
                    <div class="controls">
                        <select style="width:200px" name="no_lot" id="no_lot" data-rel="chosen">     
                            <option value="0" >Sila Pilih</option>
                        </select>
                    </div>
                    <!-- end carian no_lot -->

                    <!-- dropdown carian no_hakmilik -->
                    <strong>No. Hak Milik</strong>
                    <div class="controls">
                        <select style="width:200px" name="no_hakmilik" id="no_hakmilik" data-rel="chosen">     
                            <option value="0" >Sila Pilih</option>
                        </select>
                    </div>
                    <!-- end carian no_hakmilik -->

                    <br><br>
                    <button type="submit">Simpan</button>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection