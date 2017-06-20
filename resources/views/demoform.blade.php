@extends('layouts.app')
@section('title') Demografik Bilgiler @endsection
@section('content')
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">İsim:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="İsminizi Giriniz">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Soyisim</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="surname" placeholder="Soyisminizi Giriniz">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
        </div>
    </form>
@endsection