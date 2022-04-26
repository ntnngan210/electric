<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class dienkeController extends Controller
{


        public function calculateElectric(Request $request)
        {
            $madk = $request->input('madk');
            $socuoi =  $request->input('sodien');
            $ky =  $request->input('ky');
            $date = new \DateTime(' now');
            $denngay = $date->format('Y-m-d') . ' ' . "00:00:00";
            $tungay = $date->format('Y-m-d') . ' ' . "00:00:00";
            $socu = 0 ;
            if($socuoi != null && $ky != null  ){
                $data = DB::table('hoadon')
                    ->join('dienke', 'hoadon.madk', '=', 'dienke.madk')
                    ->join('khachhang', 'dienke.makh', '=', 'khachhang.makh')
                    ->select('*')
                    ->where('dienke.madk', '=', $madk)
                    ->orderBy('ky', 'desc')
                    ->first();
                $result = [];
                if($data) {
                    $madk = $data->madk;
                    $socu =(int)$data->chisocuoi;
                    $sodien = (int)$socuoi - (int)$data->chisocuoi;
                    $tungay = $data->denngay;
                    $result['sodien'] = (int)$sodien;
                    $result['socu'] = (int)$data->chisocuoi;
                }else{
                    $sodien = $socuoi;
                    $result['sodien'] = (int)$sodien;
                }
                if($sodien > 0 ){
                    $giadien = DB::table('giadien')->orderBy('densokw','asc')->get();
                    $tongtiendien= 0;
                    $sodiengannhat = 0;
                    $text = "Công thức tính là : ";
                    $count = COUNT($giadien);
                    $i = 0 ;
                    foreach ($giadien as $key=> $value) {
                        $i++;
                        if($i == $count) {
                            if($sodien >$value->densokw);
                            $sodien = $sodien -$sodiengannhat ;
                            $tongtiendien += $sodien * $value->dongia;
                            $text .= "(" . $sodien . "x" . $value->dongia . ")";
                            break;

                        }

                        if ($sodien > $value->densokw) {
                            $tongtiendien += ($value->densokw-$value->tusokw) * $value->dongia;
                            $text .= "(" . ($value->densokw-$value->tusokw) . "x" . $value->dongia . ") +";
                            $sodiengannhat = $value->densokw ;
                        } else {

                            $sodien = $sodien -$sodiengannhat ;
                            $tongtiendien += $sodien * $value->dongia;
                            $text .= "(" . $sodien . "x" . $value->dongia . ")";
                            break;
                        }

                    }
                    $result['tiendien'] = $tongtiendien ;
                    $result['output'] = $text ;
                    $maid = 'HD0'.$madk.$ky.$this->createID($madk);
                    DB::table('hoadon')->insert([
                        'mahd' => $maid,
                        'madk'=>$madk,
                        'ky'=>$ky,
                        'tungay'=>$tungay,
                        'denngay'=> $denngay,
                        'chisodau'=>$socu,
                        'chisocuoi'=> $socuoi,
                        'tongthanhtien'=>$tongtiendien,
                        'ngaylaphd'=>$denngay,
                        'tinhtrang'=>0

                    ]);
                }else{
                    $result['output'] =  "Số nhỏ hơn số cũ " ;
                }


                return ($result);

            }elseif ($madk) {
                $user = DB::table('dienke')
                    ->join('khachhang', 'dienke.makh', '=', 'khachhang.makh')
                    ->select('*')
                    ->where('dienke.madk', 'like', '%' . $madk . '%')
                    ->get();
                echo json_encode($user);
            }

        }
        public function index(){
            $user = DB::table('hoadon')
                ->join('dienke', 'hoadon.madk', '=', 'dienke.madk')
                ->join('khachhang', 'dienke.makh', '=', 'khachhang.makh')
                ->select('*')
                ->orderBy('ky', 'desc')
                    ->get();

            return view('welcome')->with('user', $user);
        }
        private function createID($madk){
            $data = DB::table('hoadon')
                ->join('dienke', 'hoadon.madk', '=', 'dienke.madk')
                ->join('khachhang', 'dienke.makh', '=', 'khachhang.makh')
                ->select('*')
                ->where('dienke.madk', '=', $madk)
                ->orderBy('ky', 'desc')
                ->Count();
            return $data;
        }
        public function viewgiadien(){
            $data = DB::table('giadien')->get();
            return view('giadien')->with('giadien',$data );
            return $data;
        }
        public function themgiadien(Request $request){
            $tenbac = $request->input('tenbac');
            $tuso = $request->input('tuso');
            $denso = $request->input('denso');
            $gia = $request->input('gia');
            $date = new \DateTime(' now');
            $denngay = $date->format('Y-m-d') . ' ' . "00:00:00";
            $mabac = $request->input('mabac');
            if($mabac){
                DB::table('giadien')
                ->where('mabac', $mabac)
                    ->update([
                        'tenbac' => $tenbac,
                        'tusokw' => $tuso,
                        'densokw' => $denso,
                        'dongia' => $gia,
                        'ngayapdung' => $denngay
                    ]);
            }else {
                DB::table('giadien')->insert([
                    'tenbac' => $tenbac,
                    'tusokw' => $tuso,
                    'densokw' => $denso,
                    'dongia' => $gia,
                    'ngayapdung' => $denngay


                ]);
            }
            return true;
        }
        public function getgiadien(Request $request)
        {
            $mabac = $request->input('mabac');
            $data = DB::table('giadien')->where('mabac','=',$mabac)
            ->get();
            echo json_encode($data);
        }

}
