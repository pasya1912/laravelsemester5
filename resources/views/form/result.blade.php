@extends('form.master')
@section('body')
<div>
    <div>
        Form Submited
    </div>
    <div>
        <form  style="display: flex; flex-direction:column; gap: 10px;">
            @csrf
            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="{{$nama}}"disabled>
            </div>
            <div>
                <label for="npm">NPM</label>
                <input type="text" name="npm" value="{{$npm}}" disabled>
            </div>
            <div>
                <label for="nama">nilai</label>
                <input type="number" step="0.1" name="number" value="{{$nilai}}"disabled>
            </div>
            <div>

            </div>
        </form>
    </div>
</div>

@endsection