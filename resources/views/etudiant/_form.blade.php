@if(isset($etudiant))
{!! Form::model($etudiant, ['route' => ['updateEtudiant', $etudiant->id], 'method' => 'put']) !!}
@else
{!! Form::open(['route' =>'addEtudiant']) !!}
@endif
<div class="form-inline">
    <div class="form-group" {!! $errors->has('nom') ? 'has-error' : '' !!}>
        {!! Form::label("{{ trans('etudiant.nom')}}", trans('etudiant.nom')) !!}
        {!! Form::text('nom',null,['class'=>'form-control']) !!}
        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    </div>
    <div class="form-group" {!! $errors->has('nom') ? 'has-error' : '' !!}>
        {!! Form::label("{{ trans('etudiant.prenom')}}", trans('etudiant.prenom')) !!}
        {!! Form::text('prenom',null,['class'=>'form-control']) !!}
        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
    </div>

    <button type="submit" class="btn btn-sm btn-primary m-t-n-xs">{{trans('commun.enregistrer')}}</button>
    {!! Form::close() !!}
</div>



