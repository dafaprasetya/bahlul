@extends('core.admin')

@section('content')

@if (Route::is('produk'))
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katalog Database</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Action</th>

                    </tr>
                </tfoot>

                <tbody>

                    @foreach ($produk as $produk)
                    <tr>
                        <td>{{ $produk->nama }}</td>
                        <td>{{ $produk->category->nama }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td>{{ Str::limit($produk->gambar), 10 }}</td>
                        <td>{{ Str::limit($produk->deskripsi, 10) }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('edit',$produk->id) }}" role="button">Update</a>

                        </td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@elseif (Route::is('testimoni'))
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katalog Database</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Profesi</th>
                        <th>Komentar</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Profesi</th>
                        <th>Komentar</th>
                        <th>Action</th>

                    </tr>
                </tfoot>

                <tbody>

                    @foreach ($testimoni as $testi)
                    <tr>
                        <td>{{ $testi->nama }}</td>
                        <td>{{ $testi->profesi }}</td>

                        <td>{{ Str::limit($testi->komentar, 20) }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('edittesti',$testi->id) }}" role="button">Update</a>


                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@elseif (Route::is('faq'))
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katalog Database</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tanya</th>
                        <th>Jawab</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tanya</th>
                        <th>Jawab</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($faq as $faq)
                    <tr>
                        <td>{{ $faq->tanya }}</td>
                        <td>{{ $faq->jawab }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('editfaq',$faq->id) }}" role="button">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@elseif (Route::is('qnalist'))
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katalog Database</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat Email</th>
                        <th>Nomor Telpon</th>
                        <th>Pesan</th>
                        <th>Dibaca</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat Email</th>
                        <th>Nomor Telpon</th>
                        <th>Pesan</th>
                        <th>Dibaca</th>
                    </tr>
                </tfoot>
                @foreach ($qna as $qna)
                <tbody class="@if ($qna->status == 'belum') table-warning @endif">
                    <tr>
                        <td>{{ $qna->nama }}</td>
                        <td>{{ $qna->email }}</td>
                        <td>{{ $qna->notelp }}</td>
                        <td>{{ $qna->pesan }}</td>
                        @if ($qna->status == 'belum')
                        <td>
                            <a class="btn btn-primary" href="{{ route('editfaq',$qna->id) }}" role="button">Tandai Telah Dibaca</a>
                        </td>

                        @else
                        <td class="text-muted">Dibaca</td>
                        @endif

                    </tr>

                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    </div>

@else
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katalog Database</h6>
    </div>
    <div class="card-body">
        <h4>Produk</h4>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($produk as $produk)
                    <tr>
                        <td>{{ $produk->nama }}</td>
                        <td>{{ $produk->category->nama }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td>{{ Str::limit($produk->gambar), 10 }}</td>
                        <td>{{ Str::limit($produk->deskripsi, 10) }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('edit',$produk->id) }}" role="button">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <h4>Testimoni</h4>
            <br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Profesi</th>
                        <th>Komentar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Profesi</th>
                        <th>Komentar</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($testimoni as $testi)
                    <tr>
                        <td>{{ $testi->nama }}</td>
                        <td>{{ $testi->profesi }}</td>
                        <td>{{ Str::limit($testi->komentar, 20) }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('edittesti',$testi->id) }}" role="button">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h4>Faq</h4>
            <br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tanya</th>
                        <th>Jawab</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tanya</th>
                        <th>Jawab</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($faq as $faq)
                    <tr>
                        <td>{{ $faq->tanya }}</td>
                        <td>{{ $faq->jawab }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('editfaq',$faq->id) }}" role="button">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif






<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
    $("#cari").keyup(function () {
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});
</script>



{{-- modal --}}
@include('snippet.modal')



@endsection


