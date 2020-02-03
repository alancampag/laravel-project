@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Relacione os colunas</div>
                    <form action="{{ route('import') }}" method="POST">
                        @csrf
                        <table class="table">
                            <tr>
                                <th class="text-center"><span>Coluna do banco de dados</span></th>
                                <th class="text-center"><span>Coluna do arquivo {{ $name }}</span></th>
                            </tr>
                            @foreach ($dbHeaders as $dbIndex => $dbHeader) 
                            <tr>
                                <td>{{ $dbHeader }}</td>
                                <td>                                   
                                    <div class="form=group">
                                        <select class="form-control" name="{{ $dbIndex }}">
                                            @foreach ($headers as $index => $header)
                                            <option value="{{ $index }}">{{ $header }}</option>
                                            @endforeach
                                        </select> 
                                    </div>                               
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary m-2 px-5">Importar dados</button>
                    </div>    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection