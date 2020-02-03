@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Selecione um arquivo CSV</div>
                <div class="card-body">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            {{-- <div class="input-group-prepend">
                                <button class="input-group-text" type="submit">Upload</button>
                            </div> --}}
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="fileInput01" name="csvFile"
                                    onchange="window.displayFileName()" />
                                <label class="custom-file-label" for="fileInput01">Selecione um arquivo</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary px-5 mt-3" type="submit">Upload</button>
                        </div>
                        @if($errors->first('csvFile'))
                        <div class="alert-danger p-2 my-2 rounded">{{ $errors->first('csvFile') }}</div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection