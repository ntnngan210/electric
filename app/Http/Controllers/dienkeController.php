<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dienkeController extends Controller
{


        public function calculateElectric(Request $request)
        {
            $madk = $request->input('madk');
            $socuoi =  $request->input('sodien');
            $ky =  $request->input('ky');
            if($socuoi != null && $ky != null  ){
                $data = DB::table('cthoadon')
                    ->join('hoadon', 'cthoadon.mahd', '=', 'hoadon.mahd')
                    ->join('dienke', 'cthoadon.madk', '=', 'cthoadon.madk')
                    ->join('khachhang', 'dienke.makh', '=', 'khachhang.makh')
                    ->select('*')
                    ->where('dienke.madk', '=', $madk)
                    ->orderBy('ky', 'desc')
                    ->limit(1)
                    ->get();
                $sodien = $socuoi - $data->chisocuoi;


                echo json_encode($sodien);

            }elseif ($madk) {
                $user = DB::table('cthoadon')
                    ->join('hoadon', 'cthoadon.mahd', '=', 'hoadon.mahd')
                    ->join('dienke', 'cthoadon.madk', '=', 'cthoadon.madk')
                    ->join('khachhang', 'dienke.makh', '=', 'khachhang.makh')
                    ->select('*')
                    ->where('dienke.madk', '=', $madk)
                    ->get();
                echo json_encode($user);
            }

        }

}
