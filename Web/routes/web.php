<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Http\Requests;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tongon', function(){
	return view('TongOn');
});

Route::get('dsbh', function(Request $req){
	return view('DanhSachBaiHoc', ['loai' => $req['loai'], 'khoi'=>$req['khoi'], 'mon'=>$req['mon']]);
});

Route::get('baihoc', function(Request $req){
	return view('ChiTietBaiHoc', ['loai' => $req['loai'], 'khoi'=>$req['khoi'], 'mon'=>$req['mon'], 'baihoc'=>$req['baihoc'], 'dsbh'=>$req['dsbh'], 'next'=>$req['next'], 'prev'=>$req['prev']]);
});

Route::get('thithu', function(){
	return view('ThiThu');
});

Route::get('dsdt', function(Request $req){
	return view('DeThiTheoMon', ['mon'=>$req['mon']]);
});

Route::get('dethi', function(Request $req){
	return view('ChiTietDeThi', ['tendethi'=>$req['tendethi'], 'mon'=>$req['mon']]);
});

Route::get('dethimoinhat', function(){
	return view('DeThiMoiNhat');
});

Route::get('topdethi', function(){
	return view('TopDeThi');
});

Route::get('lichsu', function(){
	return view('LichSuLamBai');
});

Route::get('thionline', function(Request $req){
	return view('ThiOnline', ['tendethi'=>$req['tendethi'], 'mon'=>$req['mon']]);
});

Route::get('ketqua', function(Request $req){
	return view('KetQua', ['tendethi'=>$req['tendethi'], 'mon'=>$req['mon']]);
});

Route::get('xemketqua', function(Request $req){
	return view('XemDapAn', ['tendethi'=>$req['tendethi'], 'mon'=>$req['mon']]);
});

Route::get('diendan', function(Request $req){
	return view('DienDan', ['khoi'=>$req['khoi'], 'mon'=>$req['mon']]);
});

Route::get('timkiem', function(){
	return view('TimKiem');
});
