@extends('layout.app')

@section('content')

    <div class="container">

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">kode Buku</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
   <h3 align="center" class="mt-5">Gramedia</h3>

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">

    <div class="form-area">
        <form method="POST" action="{{ route('buku.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Nama Buku</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="col-md-6">
                    <label>Code Buku</label>
                    <input type="text" class="form-control" name="kode_buku">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="harga_buku">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <input type="submit" class="btn btn-success" value="Register">
                </div>

            </div>
        </form>
    </div>

                    <tbody>

                        @foreach ( $Buku as $key => $buku )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $buku->nama }}</td>
                            <td scope="col">{{ $buku->kode_buku }}</td>
                            <td scope="col">{{ $buku->harga_buku }}</td>
                            <td scope="col">

                            <a href="{{  route('buku.edit', $buku->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>

                            <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#ffffff;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
        
    </style>
@endpush
