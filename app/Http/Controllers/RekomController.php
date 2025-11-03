<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glowgenius;
use App\Models\Product;
use App\Models\TipeKulit;
use App\Models\KondisiKulit;

class RekomController extends Controller
{
    public function index()
    {
        // Ambil semua opsi unik dari dataset glowgenius
        $produk = Glowgenius::select('Jenis Produk')->distinct()->get();
        $tipeKulit = Glowgenius::select('Untuk Kulit')->distinct()->get();
        $masalahKulit = Glowgenius::select('Masalah Kulit')->distinct()->get();

        return view('rekom', compact('produk', 'tipeKulit', 'masalahKulit'));
    }

    // public function submit(Request $request)
    // {
    //     $request->validate([
    //         'jenis_produk' => 'required',
    //         'tipe_kulit' => 'required',
    //         'masalah_kulit' => 'required',
    //     ]);

    //     $produk = Glowgenius::select('Jenis Produk')->distinct()->get();
    //     $tipeKulit = Glowgenius::select('Untuk Kulit')->distinct()->get();
    //     $masalahKulit = Glowgenius::select('Masalah Kulit')->distinct()->get();

    //     // Ambil input pengguna
    //     $jenisProduk = $request->input('jenis_produk');
    //     $tipeKulitInput = $request->input('tipe_kulit');
    //     $masalahKulitInput = $request->input('masalah_kulit');

    //     // Filter dataset
    //     $hasil = Glowgenius::where('Jenis Produk', $jenisProduk)
    //         ->where('Untuk Kulit', $tipeKulitInput)
    //         ->where('Masalah Kulit', $masalahKulitInput)
    //         ->get();

    //     return view('rekom', compact('produk', 'tipeKulit', 'masalahKulit', 'hasil'));
    // }

    public function submit(Request $request)
    {
        $request->validate([
            'jenis_produk' => 'required',
            'tipe_kulit' => 'required',
            // 'masalah_kulit' => 'required',
        ]);

        $produk = Glowgenius::select('Jenis Produk')->distinct()->get();
        $tipeKulit = Glowgenius::select('Untuk Kulit')->distinct()->get();
        $masalahKulit = Glowgenius::select('Masalah Kulit')->distinct()->get();

        // Ambil input pengguna
        $jenisProduk = $request->input('jenis_produk');
        $tipeKulitInput = $request->input('tipe_kulit');
        $masalahKulitInput = $request->input('masalah_kulit');

        // Filter dataset
        $hasil = Glowgenius::where('Jenis Produk', $jenisProduk)
            ->where('Untuk Kulit', $tipeKulitInput)
            // ->where('Masalah Kulit', $masalahKulitInput)
            ->when(!empty($masalahKulitInput), function ($query) use ($masalahKulitInput) {
                // Kalau user pilih masalah kulit tertentu → filter berdasarkan itu
                $query->where('Masalah Kulit', $masalahKulitInput);
            })
            ->get();

        // Kirim variabel selected ke view
        return view('rekom', compact(
            'produk',
            'tipeKulit',
            'masalahKulit',
            'hasil',
            'jenisProduk',
            'tipeKulitInput',
            'masalahKulitInput'
        ));
    }
}
