<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Pertanyaan;
use App\Models\Produk;
use App\Models\Testimoni;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////Dashboard
    public function indek()
    {
        $produk = Produk::all();
        $testi = Testimoni::all();
        $faq = Faq::all();
        return view('admin.dashboard',['produk' => $produk,'testimoni' => $testi, 'faq'=>$faq]);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////ProdukCRUD

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);;
        $cate = Category::all();
        return view('admin.buat', ['produk' => $produk, 'cat' => $cate]);
    }
    public function editpost($id, Request $request)
    {
        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama' => $request['nama'],
            'category_id' => $request['kategori'],
            'bintang' => $request['bintang'],
            'harga_coret' => $request['hargac'],
            'harga' => $request['harga'],
            'gambar' => $request['gambar'],
            'deskripsi' => $request['deskripsi'],
        ]);
    }
    public function buat()
    {
        $kategori = Category::all();
        return view('admin.buat', ['kategori' => $kategori]);
    }
    public function buatpost(Request $request)
    {
        $np = new Produk();
        $np->user_id = Auth::user()->id;
        $np->nama = $request['nama'];
        $np->slug = Str::slug($request['nama']).Carbon::today()->format('d').Str::random(rand(1,2));;
        $np->category_id = $request['category'];
        $np->bintang = $request['bintang'];
        $np->harga_coret = $request['hargac'];
        $np->harga = $request['harga'];
        $np->gambar = $request['gambar'];
        $np->deskripsi = $request['deskripsi'];
        $request->validate([
            'nama' => 'required',
            'category' => 'required',
            'gambar' => 'required',
            'bintang' => 'required|integer',
            'hargac' => 'required|integer',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
        ]);
        $np->save();
        return redirect('admin')->with('buatproduk', 'produk berhasil dibuat');
    }
    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect('admin')->with('deleteproduk', 'produk terhapus');
    }
    public function produk()
    {
        $produk = Produk::all();
        return view('admin.dashboard',['produk' => $produk]);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////KategoriCRUD

    public function buatkategori()
    {
        return view('admin.buat');
    }
    public function buatkategorip(Request $request)
    {
        $kategori = new Category();
        $kategori->nama = $request['nama'];
        $request->validate([
            'nama' => 'required',
        ]);
        $kategori->save();
        return redirect('admin')->with('kategoriberhasil', 'Kategori Berhasil dibuat');
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////TestimoniCRUD

    public function buattesti()
    {
        return view('admin.buat');
    }
    public function buattestip(Request $request)
    {
        $testi = new Testimoni();
        $testi->nama =$request['nama'];
        $testi->komentar =$request['komentar'];
        $testi->profesi =$request['profesi'];
        $request->validate([
            'nama' => 'required',
            'komentar' => 'required',
            'profesi' => 'required',
        ]);
        $testi->save();
        return redirect()->route('testimoni')->with('newtesti', 'Testimoni berhasil dibuat');
    }
    public function testimoni()
    {
        $testi = Testimoni::all();
        return view('admin.dashboard',['testimoni' => $testi]);
    }
    public function edittesti($id)
    {
        $testi = Testimoni::findOrFail($id);
        return view('admin.buat',['testimoni' => $testi]);
    }
    public function edittestip($id, Request $request)
    {
        $testi = Testimoni::findOrFail($id);
        $testi->update([
            'nama' => $request['nama'],
            'profesi' => $request['profesi'],
            'komentar' => $request['komentar'],

        ]);
    }
    public function deletetesti($id)
    {
        $testi = Testimoni::findOrFail($id);
        $testi->delete();
        return redirect()->route('testimoni')->with('deletetesti', 'testimoni berhasil dihapus');
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////FaqCRUD
    public function faq()
    {
        $faq = Faq::all();
        return view('admin.dashboard',['faq'=>$faq]);
    }
    public function buatfaq()
    {
        return view('admin.buat');
    }
    public function editfaq($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.buat',['faq'=>$faq]);
    }
    public function buatfaqp(Request $request)
    {
        $faq = new Faq();
        $faq->tanya = $request['tanya'];
        $faq->jawab = $request['jawab'];
        $request->validate([
            'tanya' => 'required',
            'jawab' => 'required',
        ]);
        $faq->save();
        return redirect()->route('faq')->with('buatfaq', 'faq berhasil dibuat');
    }
    public function editfaqp($id, Request $request)
    {
        $faq = Faq::findOrFail($id);
        $faq->update([
            'tanya' => $request['tanya'],
            'jawab' => $request['jawab'],
        ]);

    }
    public function deletefaq($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('admin')->with('deletefaq', 'berhasil hapus faq');

    }



}
