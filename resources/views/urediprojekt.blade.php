@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="/new-project">Kreiraj novi projekt</a>
        <br>
        <a href="/myprojects">Moj projekt</a>
        <br>
        <div class="col-md-8">
            

            <form method="POST" action="{{ route('update-project', $stari_naziv) }}" style="display: flex; flex-direction: column;">

                @csrf
                @if($project->voditelj == $userId)
                <label for="naziv_projekta"><b>Naziv</b></label>
                <input type="text" name="naziv_projekta" value="{{ $project->naziv_projekta }}" required>

                <label for="opis_projekta"><b>Opis>/b></label>
                <input type="text" name="opis_projekta"value="{{ $project->opis_projekta }}"  required>

                <label for="cijena_projekta"><b>Cijena</b></label>
                <input type="number" name="cijena_projekta" value="{{ $project->cijena_projekta }}" required>
                @endif

                <label for="obavljeni_poslovi"><b>Obavljeni poslovi</b></label>
                <input type="text" name="obavljeni_poslovi" value="{{ $project->obavljeni_poslovi }}" required>

                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection