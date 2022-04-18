<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dienkeController extends Controller
{
     public function greet()
        {
            $users = DB::table('khachhang')->get();
            return $users;
        }

        public function calculateElectric(Request $request)
        {
            $madk = $request->input('madk');
            $socuoi =  $request->input('sodien');
            $user = DB::table('cthoadon')
                ->join('hoadon', 'cthoadon.mahd', '=', 'hoadon.mahd')
                ->join('dienke', 'cthoadon.madk', '=', 'cthoadon.madk')
                ->join('khachhang', 'dienke.makh', '=', 'khachhang.makh')
                ->select('*')
                ->where('dienke.madk', '=', $madk)
                ->first();


        }

}
