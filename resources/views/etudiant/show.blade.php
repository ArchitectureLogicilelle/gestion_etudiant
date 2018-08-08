@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">

        <a href="{{route('back') }}"> {{trans('commun.retour')}}</a>
        <div class="panel panel-info">
            <div class="panel-heading">{{trans('etudiant.infos')}}</div>
            <div class="panel-body">
                <table border="0" width="400">
                    <div class="form-group">

                        <tr><td>{{ trans('etudiant.nom')}}</td><td><input type="text" value="{{$etudiant->nom}}" class="form-control" disabled /></td></tr>
                    </div>
                    <div class="form-group">
                        <tr><td>{{ trans('etudiant.prenom')}}</td><td><input type="text" value="{{$etudiant->prenom}}" class="form-control" disabled /></td></tr>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection