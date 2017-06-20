@extends('layouts.app')

@section('title') Anasayfa @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hoşgeldiniz</div>

                <div class="panel-body">

                    <table class="table table-striped">
                        <tr>
                            <td>Başarıyla Giriş Yaptınız!</td>
                        </tr>
                        <tr>
                            <td><form class="form-group">
                                    <a href="{{ url('/demoform') }}">
                                    <button type="button" class="btn btn-warning">Temel Bilgilerinizi Giriniz</button>
                                    </a>
                            </td>
                            <td>
                                    <button type="button" class="btn btn-success">Bilişsel Testler</button>

                            </td>
                            <td>
                                    <button type="button" class="btn btn-info">Fizyolojik Testler</button>

                            </td><td>
                                    <button type="button" class="btn btn-primary">Mesleki İlgi Envanteri</button>
                                </form>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
