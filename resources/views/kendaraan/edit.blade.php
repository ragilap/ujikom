@extends('layouts.template')

@section('header','Membuat data kendaraan')

@section('content')
<link href="{{ asset('build/dist/css/tailwind.min.css') }}" rel="stylesheet">
<link href="{{ asset('build/dist/css/adminlte.css') }}" rel="stylesheet">

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg ">
            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100" >
                    {{ __('Profile Information') }}
                </h2>

                <p class="mt-1 text-sm text-gray-400 dark:text-gray-400" style="margin-bottom: 15px">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </header>
            <div class="max-w-xl">
                <div class="row">
                    <div class="col-md-6">
                        {{-- @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif --}} 
                        <form action="{{ route('kendaraan.crud', ['id' => $kendaraan->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label"  style="margin-right:25px">Seri Kendaraan </label><label class="col-form-label">:</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="seri" value={{ $kendaraan->no_kendaraan }}  style="width: 600%; margin-left:30px;" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label"  style="margin-right:25px">Merek</label><label class="col-form-label">:</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" value= {{ $kendaraan->merek }} name="merek" style="width: 600%; margin-left:30px;" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label"  style="margin-right:25px">Kapasitas</label><label class="col-form-label">:</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" value= {{ $kendaraan->kapasitas }} name="kapasitas" style="width: 600%; margin-left:30px;" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label"  style="margin-right:25px">Warna</label><label class="col-form-label">:</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="warna" value= {{ $kendaraan->warna }} style="width: 600%; margin-left:30px;" />
                                </div>
                            </div>

                            <div class="form-group d-flex row">
                                <label class="col-md-4 col-form-label" for="harga"  style="margin-right:25px">Harga Sewa</label> <label class="col-form-label">:</label>
                               <div class="col-md-6">
                                <input type="text" class="form-control"  name="harga" value= {{ $kendaraan->harga_sewa }} style="width: 600%; margin-left:30px;" />
                            </div>
                            </div>
                            {{-- <div class="form-group row" >
                                <label class="col-md-4 col-form-label" style="margin-right:25px" >Level</label><label class="col-form-label">:</label>
                                <div class="col-md-6">
                                    <select name="roles[]" multiple>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}" {{ $row->hasRole($role->name) ? 'selected' : '' }}>
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="form-group text-right" style="margin-top: 20px; width:340%;">
                                <button class="btn btn-primary">Simpan</button>
                                <a class="btn btn-danger ml-2" href="{{ route('kendaraan.crud') }}">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div></div>
@endsection
