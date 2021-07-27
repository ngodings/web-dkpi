@extends('template.main')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="text-center pt-4">Tambah Mahasiswa</h2>
            <form class="form-horizontal" method="post" action="/mahasiswa/store">
                @csrf
                <div class="form-group">
                    <label for="nama_mhs">Nama</label>
                    <input type="text" class="form-control @error('nama_mhs') is-invalid @enderror" id="nama_mhs"  name="nama_mhs" value="{{old('nama_mhs')}}">
                    @error('nama_mhs')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_orang">Jumlah Orang</label>
                    <input type="text" class="form-control @error('jumlah_orang') is-invalid @enderror" id="jumlah_orang" name="jumlah_orang" value="{{old('jumlah_orang')}}">
                    @error('jumlah_orang')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="unit_kerja">Unit Kerja</label>
                    <input type="text" class="form-control @error('unit_kerja') is-invalid @enderror" id="unit_kerja" name="unit_kerja" value="{{old('unit_kerja')}}">
                    @error('unit_kerja')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="jangka_waktu">Jangka Waktu</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="jangka_waktu" placeholder=" " name="jangka_waktu">
                    @error('jangka_waktu')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <textarea class="form-control @error('tujuan') is-invalid @enderror" rows="3" id="tujuan" name="tujuan" value="{{old('tujuan')}}"></textarea>
                    @error('tujuan')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="negara">Negara</label>
                    <input type="text" class="form-control @error('negara') is-invalid @enderror" id="negara" name="negara" value="{{old('negara')}}">
                    @error('negara')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="surat_uns">Surat UNS</label>
                    <input type="text" class="form-control @error('surat_uns') is-invalid @enderror" id="surat_uns" name="surat_uns" value="{{old('surat_uns')}}">
                    @error('surat_uns')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="catatan_uns">Catatan UNS</label>
                    <textarea class="form-control @error('catatan_uns') is-invalid @enderror" rows="3" id="catatan_uns" name="catatan_uns" value="{{old('catatan_uns')}}"></textarea>
                    @error('catatan_uns')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="belmawa">Belmawa</label>
                    <input type="text" class="form-control @error('belmawa') is-invalid @enderror" id="belmawa" name="belmawa" value="{{old('belmawa')}}">
                    @error('belmawa')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="catatan_belmawa">Catatan Belmawa</label>
                    <textarea class="form-control @error('catatan_belmawa') is-invalid @enderror" rows="3" id="catatan_belmawa" name="catatan_belmawa" value="{{old('catatan_belmawa')}}"></textarea>
                    @error('catatan_belmawa')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ktln_kemensetneg">KTLN Kemensetneg</label>
                    <input type="text" class="form-control @error('ktln_kemensetneg') is-invalid @enderror" id="ktln_kemensetneg" name="ktln_kemensetneg" value="{{old('ktln_kemensetneg')}}">
                    @error('ktln_kemensetneg')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="catatan_setneg">Catatan Setneg</label>
                    <textarea class="form-control @error('catatan_setneg') is-invalid @enderror" rows="3" id="catatan_setneg" name="catatan_setneg" value="{{old('catatan_setneg')}}"></textarea>
                    @error('catatan_setneg')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label> <br>
                    <select class="form-control" name="status" id="status" aria-label="Default select example" value="{{old('status')}}">
                        <option disabled selected>-</option>
                        <option value="Proses TTD Pimpinan">Proses TTD Pimpinan</option>
                        <option value="Proses Dikti">Proses Dikti</option>
                        <option value="Proses Setneg">Proses Setneg</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Ditolak Dikti">Ditolak Dikti</option>
                        <option value="Ditolak Setneg">Ditolak Setneg</option>
                        <option value="Dikembalikan">Dikembalikan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection