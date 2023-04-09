@extends('layouts.app')

@section('title', 'Data Consulting')

@section('content')

  <div class="cotainer">
    {{-- <a href="/headers/create" class="a btn btn-primary mb-3">Tambah Data</a>
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
      <strong>Berhasil</strong>
      <p>{{ $message }}</p>
    </div>
    @endif --}}
    <div class="table_responsive">
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          @php
              $i = 1
          @endphp
          @foreach ($consultings as $consulting)
          <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $consulting->name }}</td>
              <td>{{ $consulting->email }}</td>
              <td>{{ $consulting->message }}</td>
              {{-- <td>
                <form action="{{ route('consulting.destroy', $consulting->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                  <button class="btn btn-danger">Hapus</button>
                </form>
              </td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection