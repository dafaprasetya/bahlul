@extends('core.admin')


@section('content')
<div class="container">
@if (Route::is('buatkategori'))
    <form method="POST" action="{{ route('buatkategorip') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama category</label>
            <input type="text" class="form-control" placeholder="Nama kategori" name="nama">
        </div>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>
@elseif (Route::is('buatfaq'))
    <form method="POST" action="{{ route('buatfaqp') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanya</label>
            <input type="text" class="form-control" placeholder="Masukan Pertanyaan" name="tanya">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jawab</label>
            <input type="text" class="form-control" placeholder="Masukan Jawaban" name="jawab">
        </div>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>
@elseif (Route::is('editfaq'))
    <form id="faq">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanya</label>
            <input type="text" class="form-control" placeholder="Masukan Pertanyaan" value="{{ $faq->tanya }}" id="tanya" name="tanya">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jawab</label>
            <input type="text" class="form-control" placeholder="Masukan Jawaban" value="{{ $faq->jawab }}" id="jawab" name="jawab">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-danger" href="" data-toggle="modal" data-target="#deleteModal" role="button">Delete</a>
    </form>
    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapusnya?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                    </div>
                    <div class="modal-body">Item ini akan terhapus secara permanen.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger" href="{{ route('deletefaq',$faq->id) }}" onclick="event.preventDefault(); document.getElementById('delete_form').submit();">Hapus</a>
                            <form id="delete_form" action="{{ route('deletefaq', $faq->id) }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    </div>
                </div>
        </div>
    </div>
    <div class="modal fade" id="berhasil">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-primary">
                    <div class="success-checkmark">
                        <div class="check-icon">
                          <span class="icon-line line-tip"></span>
                          <span class="icon-line line-long"></span>
                          <div class="icon-circle"></div>
                          <div class="icon-fix"></div>
                        </div>
                      </div>
                    <h1>FAQ Berhasil Diedit!</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="gagal">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-danger">
                    <h1>Ups Ada Kesalahan</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>

        $(document).ready(function () {

            $('#faq').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    type: "post",
                    url: "{{ route('editfaqp', $faq->id) }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        tanya : $('#tanya').val(),
                        jawab : $('#jawab').val(),


                    },
                    success: function (response) {
                        console.log('berhasil');
                        $('#berhasil').modal('show');
                    },
                    error: function(){

                        $('#gagal').modal('show');
                    },



                });

            });

        });
    </script>
@elseif (Route::is('buattesti'))
    <form method="POST" action="{{ route('buattestip') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" class="form-control" placeholder="Nama Testimonier" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Profesi</label>
            <input type="text" class="form-control" placeholder="Profesi Testimonier" name="profesi" id="profesi">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Komentar</label>
            <textarea class="form-control" id="cke" rows="3" cols="50" name="komentar" placeholder="Apa komentar mereka?.."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>


@elseif (Route::is('edittesti'))
    <form id="testi">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" class="form-control" placeholder="Nama Testimonier" value="{{ $testimoni->nama }}" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Profesi</label>
            <input type="text" class="form-control" placeholder="Nama Testimonier" value="{{ $testimoni->profesi }}" name="profesi" id="profesi">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Komentar</label>
            <textarea class="form-control" id="cke" rows="3" cols="50" name="komentar">{{ $testimoni->komentar }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-danger" href="" data-toggle="modal" data-target="#deleteModal" role="button">Delete</a>
    </form>
    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapusnya?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                    </div>
                    <div class="modal-body">Item ini akan terhapus secara permanen.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger" href="{{ route('deletetesti',$testimoni->id) }}" onclick="event.preventDefault(); document.getElementById('delete_form').submit();">Hapus</a>
                            <form id="delete_form" action="{{ route('deletetesti', $testimoni->id) }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    </div>
                </div>
        </div>
    </div>
    <div class="modal fade" id="berhasil">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-primary">
                    <div class="success-checkmark">
                        <div class="check-icon">
                          <span class="icon-line line-tip"></span>
                          <span class="icon-line line-long"></span>
                          <div class="icon-circle"></div>
                          <div class="icon-fix"></div>
                        </div>
                      </div>
                    <h1>Testimoni berhasil diedit</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="gagal">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-danger">
                    <h1>Ups Ada Kesalahan</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>

        $(document).ready(function () {

            $('#testi').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    type: "post",
                    url: "{{ route('edittestip', $testimoni->id) }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        nama : $('#nama').val(),
                        profesi : $('#profesi').val(),
                        komentar : $('#cke').val(),

                    },
                    success: function (response) {
                        console.log('berhasil');
                        $('#berhasil').modal('show');
                    },
                    error: function(){

                        $('#gagal').modal('show');
                    },



                });

            });

        });
    </script>


@elseif ((Route::is('edit')))
    <form id="updatemateri">
        @csrf
        <div class="form-group">
            <label for="Nama">Nama Produk</label>
            <input type="text" class="form-control" value="{{ $produk->nama }}" placeholder="Masukan Nama Produk" name="nama" id="nama">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select class="form-control" name="category" id="category">
                <option selected="selected" value="{{ $produk->category->id }}" hidden>{{ $produk->category->nama }}</option>
                @foreach ($cat as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->nama }}</option>

                @endforeach

            </select>
        </div>
        <div class="form-group">
            <label for="Nama">Gambar</label>
            <input type="text" class="form-control" value="{{ $produk->gambar }}" placeholder="Masukan Link Gambar Produk" name="gambar" id="gambar">
        </div>
        <div class="form-group">
            <label for="bintang">Bintang</label>
            <input type="number" class="form-control" value="{{ $produk->bintang }}" placeholder="Masukan Bintang Untuk Produk Ini" name="bintang" id="bintang">
        </div>
        <div class="form-group">
            <label for="hargac">Harga coret</label>
            <input type="number" class="form-control" value="{{ $produk->harga_coret }}" placeholder="Masukan Harga Produk yang dicoret untuk promo" name="hargac" id="hargac">
        </div>
        <div class="form-group">
            <label for="Nama">Harga</label>
            <input type="text" class="form-control" value="{{ $produk->harga }}" placeholder="Masukan Harga Produk" name="harga" id="harga">
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea  class="form-control" id="cke" rows="3" cols="50">{{ $produk->deskripsi }}</textarea>
        </div>
        <button type="submit" id='submitupdate' class="btn btn-primary">Save</button>
        <a class="btn btn-danger" href="" data-toggle="modal" data-target="#deleteModal" role="button">Delete</a>
    </form>
    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapusnya?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                    </div>
                    <div class="modal-body">Item ini akan terhapus secara permanen.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger" href="{{ route('deletetesti',$produk->id) }}" onclick="event.preventDefault(); document.getElementById('delete_form').submit();">Hapus</a>
                            <form id="delete_form" action="{{ route('delete', $produk->id) }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    </div>
                </div>
        </div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-primary">
                    <div class="success-checkmark">
                        <div class="check-icon">
                          <span class="icon-line line-tip"></span>
                          <span class="icon-line line-long"></span>
                          <div class="icon-circle"></div>
                          <div class="icon-fix"></div>
                        </div>
                      </div>
                    <h1>Produk Berhasil Diedit!</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script>

        $(document).ready(function () {

            $('#updatemateri').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{{ route('editpost', $produk->id) }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        nama : $('#nama').val(),
                        kategori : $('#category').val(),
                        gambar : $('#gambar').val(),
                        bintang : $('#bintang').val(),
                        hargac : $('#hargac').val(),
                        harga : $('#harga').val(),
                        deskripsi : $('#cke').val(),
                    },
                    success: function (response) {
                        console.log('berhasil');
                        $('#myModal').modal('show');
                    },
                });
            });
        });
    </script>

@else


    <form method="POST" action="{{ route('buatpost') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Nama">Nama Produk</label>
            <input type="text" class="form-control" placeholder="Masukan Nama Produk" name="nama" id="nama">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select class="form-control" name="category" id="category">
                <option selected="selected" hidden></option>
                @foreach ($kategori as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->nama }}</option>

                @endforeach

            </select>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="text" class="form-control"  placeholder="Masukan Link Gambar Produk" name="gambar" id="gambar">
        </div>
        <div class="form-group">
            <label for="bintang">Bintang</label>
            <input type="number" class="form-control" placeholder="Masukan Bintang Untuk Produk Ini" name="bintang" id="bintang">
        </div>
        <div class="form-group">
            <label for="hargac">Harga coret</label>
            <input type="number" class="form-control" placeholder="Masukan Harga Produk yang dicoret untuk promo" name="hargac" id="hargac">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" placeholder="Masukan Harga Produk" name="harga" id="harga">
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea  class="form-control" id="cke" rows="3" cols="50" name="deskripsi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
@endif
</div>

@endsection
@section('jscr')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>hljs.initHighlightingOnLoad();</script>

<script>

    var konten = document.getElementById("cke");
    CKEDITOR.replace(konten,{
        language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
</script>
@endsection
