@extends('layouts.app')

@section('title', 'Data Technologie')

@section('content')

  <div class="cotainer">
    <a href="/technologies" class="a btn btn-primary mb-3">Kembali</a>
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('technologies.update', $technologie->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $technologie->title }}">
          </div>
          @error('title')
          <small style="color:red">{{ $message }}</small>
          @enderror
          <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="description"  cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $technologie->description }}</textarea>
          </div>
          @error('description')
          <small style="color:red">{{ $message }}</small>
          @enderror
          <img src="/image/{{ $technologie->image }}" alt="" class="img-fluid">
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" class="form-control" name="image">
          </div>
          @error('image')
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