<table class="table" style="margin-top: 10px">
    <tr>
        <th>
            {{trans('etudiant.nom')}}
        </th>
        <th>
            {{trans('etudiant.prenom')}}
        </th>
        <th>Action</th>
    </tr>
    @foreach ($etudiants as $etudiant)
    <tr>
        <th>
            {{$etudiant->nom}}
        </th>
        <th>
            {{$etudiant->prenom}}
        </th>
        <th>
            <a href="{{route('showEtudiant',$etudiant->id) }}" class="btn btn-primary btn-sm"  > {{trans('commun.details')}}</a>

            <a href="{{route('editEtudiant',$etudiant->id) }}" class="btn btn-warning btn-sm" > {{trans('commun.modifier')}}</a>

            <a href="{{route('deleteEtudiant',$etudiant->id) }}" class="btn btn-danger btn-sm"> {{trans('commun.supprimer')}}</a>
        </th>
    </tr>
    @endforeach
</table>