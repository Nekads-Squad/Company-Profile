@extends('layouts.app')

@section('title', 'Data Contact')

@section('content')

  <div class="cotainer">
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
      <strong>Berhasil</strong>
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
      <div class="col-md-12">
        <form action="/contact/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="">Email Place </label>
            <input type="text" class="form-control" name="email_place" placeholder="Email Place" value="{{ $contact->email_place }}">
          </div>
          @error('email_place')
          <small style="color:red">{{ $message }}</small>
          @enderror
          <div class="form-group">
            <label for="">Alamat Pertama</label>
            <textarea name="alamat1"  cols="30" rows="10" class="form-control" placeholder="Alamat Pertana">{{ $contact->alamat1 }}</textarea>
          </div>
          @error('alamat1')
          <small style="color:red">{{ $message }}</small>
          @enderror
          <div class="form-group">
            <label for="">Alamat Kedua</label>
            <textarea name="alamat2"  cols="30" rows="10" class="form-control" placeholder="Alamat Pertana">{{ $contact->alamat2 }}</textarea>
          </div>
          @error('alamat2')
          <small style="color:red">{{ $message }}</small>
          @enderror
          <div class="form-group">
            <label for="">Alamat Ketiga</label>
            <textarea name="alamat3"  cols="30" rows="10" class="form-control" placeholder="Alamat Pertana">{{ $contact->alamat3 }}</textarea>
          </div>
          @error('alamat3')
          <small style="color:red">{{ $message }}</small>
          @enderror
          <div class="form-group">
            <label for="">NO HandPhone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $contact->phone }}">
          </div>
          @error('phone')
          <small style="color:red">{{ $message }}</small>
          @enderror
          <div class="form-group">
            <label for="">Email Kantor</label>
            <input type="text" class="form-control" name="email" placeholder="Email Kantor" value="{{ $contact->email }}">
          </div>
          @error('email')
          <small style="color:red">{{ $message }}</small>
          @enderror
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection