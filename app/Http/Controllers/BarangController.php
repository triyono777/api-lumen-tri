<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BarangController extends Controller
{
    public function index()
    {
        $getBarang = Barang::OrderBy("id", "DESC")->paginate(10);

        $out = [
            "message" => "Get Barang",
            "results" => $getBarang
        ];

        return response()->json($out, 200);
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'nama' => 'required',
            ]);

            $nama = $request->input('nama');
            $detail = $request->input('detail');
            $qr_code = $request->input('qr_code');

            $data = [
                'nama' => $nama,
                'detail' => $detail,
                'qr_code' => $qr_code,
            ];

            $insert = Barang::create($data);

            if ($insert) {
                $out  = [
                    "message" => "success_insert_data",
                    "results" => $data,
                    "code"  => 200
                ];
            } else {
                $out  = [
                    "message" => "vailed_insert_data",
                    "results" => $data,
                    "code"   => 404,
                ];
            }

            return response()->json($out, $out['code']);
        }
    }

}
