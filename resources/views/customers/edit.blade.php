@extends('customers.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('customers.update',$customer->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS:</strong>
                    <input type="text" name="nis" value="{{ $customer->nis }}" class="form-control" placeholder="NIS">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $customer->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <input type="text" name="jns_kelamin" value="{{ $customer->jns_kelamin }}" class="form-control" placeholder="Jenis Kelamin">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tempat Lahir:</strong>
                    <input type="text" name="temp_lahir" value="{{ $customer->temp_lahir }}" class="form-control" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Lahir:</strong>
                    <input type="date" name="tgl_lahir" value="{{ $customer->tgl_lahir }}" class="form-control" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat">{{ $customer->alamat }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Asal Sekolah:</strong>
                    <input type="text" name="asal_sekolah" value="{{ $customer->asal_sekolah }}" class="form-control" placeholder="asal_sekolah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas:</strong>
                    <input type="text" name="kelas" value="{{ $customer->kelas }}" class="form-control" placeholder="Kelas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jurusan:</strong>
                    <input type="text" name="jurusan" value="{{ $customer->jurusan }}" class="form-control" placeholder="Jurusan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection