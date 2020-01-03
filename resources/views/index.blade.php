@extends('layout')

@section('sadrzaj')
        <h1 class="title m-b-md">
            Knjige
        </h1>

        <div class="panel-body">
            <form method="POST" action="/index" class="form-horizontal">
            <h1>Nova knjiga</h1>
                @csrf
                <div class="field">
                    <label class="label" for="naslov">Naslov</label>
                    <input class="input" type="text" name="naslov" id="naslov" required>
                </div>

                <div class="field">
                    <label class="label" for="autor">Autor</label>
                    <input class="input" type="text" name="autor" id="autor" required>
                </div>

                <div class="field">
                    <label class="label" for="opis">Opis</label>
                    <textarea class="textarea" name="opis" id="opis" required></textarea>
                </div>

                <div class="control">
                    <button class="float-left submit-button" type="submit">Spremi</button>
                </div>
            </form>
    </div>

        <div>
                <h1>Popis knjiga</h1>
                <table style="width=100%">
                    <tr>
                        <th>Naslov</th>
                        <th>Autor</th>
                        <th>Opis</th>
                    </tr>
                        @foreach ($knjige as $knjiga)
                    <tr>
                        <td>{{$knjiga->naslov}}</td>
                        <td>{{$knjiga->autor}}</td>
                        <td>{{$knjiga->opis}}</td>
                        <td>
                            <form action="/{{ $knjiga->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button>Izbriši</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
@endsection
