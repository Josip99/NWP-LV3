@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="/new-project">Kreiraj novi projekt</a>
        <br>
        <a href="/myprojects">Moj projekt</a>
        <br>
        <div class="col-md-8">
            <h1>Novi projekt</h1>

            <form method="POST" action="{{ route('create-project') }}" style="display: flex; flex-direction: column;">

                @csrf
                <label for="naziv_projekta"><b>Naziv</b></label>
                <input type="text" name="naziv_projekta" required>

                <label for="opis_projekta"><b>Opis</b></label>
                <input type="text" name="opis_projekta" required>

                <label for="cijena_projekta"><b>Cijena</b></label>
                <input type="number" name="cijena_projekta" required>

                <label for="obavljeni_poslovi"><b>Obavljeni</b></label>
                <input type="text" name="obavljeni_poslovi" required>

                <label for="selectedUsers"><b>Sudionici</b></label>
                <ul>
                    @foreach ($users as $user)
                        <li>
                            <label>
                                <input type="checkbox" name="selectedUsers[]" value="{{ $user->id }}">
                                {{ $user->name }}
                            </label>
                        </li>
                    @endforeach
                </ul>

                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>

            </form>
        </div>
    </div>
</div>
@endsection