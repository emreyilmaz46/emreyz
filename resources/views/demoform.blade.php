@extends('layouts.app')
@section('title') Demografik Bilgiler @endsection
@section('content')
    <form class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">İsim</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="name" placeholder="İsminizi Giriniz" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="surname">Soyisim</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="surname" placeholder="Soyisminizi Giriniz" name="surname">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="student_id">Öğrenci No</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="student_id" placeholder="Öğrenci Numaranızı Giriniz" name="student_id">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="gender">Cinsiyet</label>
            <div class="col-sm-2">
            <select class="form-control" id="gender" name="gender">
                <option>Kız</option>
                <option>Erkek</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="gender">Sınıf Düzeyi</label>
            <div class="col-sm-2">
            <select class="form-control" id="grade_level" name="grade_level">
                <option>9.Sınıf</option>
                <option>10.Sınıf</option>
                <option>11.Sınıf</option>
                <option>12.Sınıf</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="maternal_education_level">Annenizin Eğitim Düzeyi</label>
            <div class="col-sm-2">
            <select class="form-control" id="maternal_education_level" name="maternal_education_level">
                <option>İlköğretim</option>
                <option>Lise</option>
                <option>Üniversite</option>
                <option>Master veya Doktora</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="paternal_education_level">Babanızın Eğitim Düzeyi</label>
            <div class="col-sm-2">
            <select class="form-control" id="paternal_education_level" name="paternal_education_level">
                <option>İlköğretim</option>
                <option>Lise</option>
                <option>Üniversite</option>
                <option>Master veya Doktora</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="sibling_count">Kaç Kardeşsiniz</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="sibling_count" placeholder="Lütfen kendinizi de dahil ediniz" name="sibling_count">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-2">
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
        </div>
    </form>
@endsection