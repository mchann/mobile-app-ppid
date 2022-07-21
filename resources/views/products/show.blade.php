@extends('products.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Detail Pengaduan</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>

        </div>

    </div>

</div>



<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nomor Surat:</strong>

            {{ $product->id }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Tanggal:</strong>

            {{ $product->date }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nama:</strong>

            {{ $product->nama }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nomor KTP/SIM/Paspor:</strong>

            {{ $product->no_identitas }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Subjek:</strong>

            {{ $product->subjek }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Ormas/Perorangan:</strong>

            {{ $product->organisasi }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Alamat:</strong>

            {{ $product->alamat }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nomor Telp/Email:</strong>

            {{ $product->kontak }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Detail informasi yang diminta:</strong>

            {{ $product->detail_info_diminta }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Tujuan Penggunaan Informasi:</strong>

            {{ $product->tujuan_penggunaan }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Cara Memperoleh Informasi:</strong>

            {{ $product->cara_memperoleh_info }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Cara Mendapat Salinan Informasi:</strong>

            {{ $product->cara_mendapat_salinan }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Tujuan SKPD:</strong>

            {{ $product->tujuan_skpd}}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Foto KTP:</strong>
            <br>
            <img src="/image/{{ $product->image }}" width="250px">

        </div>

    </div>



</div>

@endsection