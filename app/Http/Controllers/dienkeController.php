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
                    ->first();
                $sodien = (int)$socuoi - (int)$data->chisocuoi;
                $result=[];
                $result['sodien'] = (int)$sodien ;
                $result['socu'] = (int)$data->chisocuoi ;
                if($sodien > 0 ){
                if($sodien < 100){
                    $result['tiendien'] = $sodien * 1242 ;
                    $result['output'] =  $sodien."x"."1242" ;
                }elseif ($sodien >= 100 && $sodien <= 150){
                    $result['tiendien'] = (($sodien -100)*1304) + 124200 ;
                    $result['output'] =  "((".$sodien."-100) x 1304) + (100 x 1242)" ;
                }elseif ($sodien >=151 && $sodien <= 200){
                    $result['tiendien'] = (($sodien-150)*1651) + 189400 ;
                    $result['output'] =  "((".$sodien."-150) x 1651) + (100 x 1242)+ (50 x 1304)" ;

                }elseif ($sodien >=201 && $sodien <= 300)
                {
                    $result['tiendien'] =(($sodien-200)*1788) + 271950 ;
                    $result['output'] =  "((".$sodien."-200) x 1788) + (100 x 1242)+ (50 x 1304) + ( 50 x 1651 )" ;
                }else{
                    $result['tiendien'] =(($sodien-300)*1912) + 450750 ;
                    $result['output'] =  "((".$sodien."-300) x 1912) + (100 x 1242)+ (50 x 1304) + ( 50 x 1651 ) + (100 x 1788)" ;
                }}else{
                    $result['output'] =  "Số nhỏ hơn số cũ " ;
                }

                return ($result);

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
        public function index(){
            $user = DB::table('khachhang')
//                ->join('hoadon', 'cthoadon.mahd', '=', 'hoadon.mahd')
//                ->join('dienke', 'cthoadon.madk', '=', 'cthoadon.madk')
//                ->join('khachhang', 'dienke.makh', '=', 'khachhang.makh')
//                ->select('hoadon.mahd','dienke.madk','khachhang.tenkh','cthoadon.dntt','hoadon.tongthanhtien','hoadon.tinhtrang')
                ->get();
            return view('welcome')->with('user', $user);;
        }

}
