@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Selecione um arquivo CSV</div>

                <div class="card-body">
                    <form action="/file" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="input-group-text" type="submit">Upload</button>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="fileInput01" name="csvFile"
                                    onchange="window.displayFileName()" />
                                <label class="custom-file-label" for="fileInput01">Choose file</label>
                            </div>

                        </div>
                        <div>oi{{ $errors->first('csvFile') }}</div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection