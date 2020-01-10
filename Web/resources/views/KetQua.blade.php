<!DOCTYPE html>
<html lang="en">
<head>
    <title>On Thi THPTQG</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health medical template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
</head>
<body style="background-color: #F8F8F8">

    <div class="super_container">

        <!-- Menu -->

        
        @include('Header')
        <!-- Home -->
        @php
            $monhoc="";
            $img="";
            switch($mon)
            {
                case 'toan':
                    $monhoc = 'Toán';
                    $img = "images/toan.jpg";
                    break;
                case 'ly':
                    $monhoc = 'Lý';
                    $img = "images/ly.jpg";
                    break;
                case 'hoa':
                    $monhoc = 'Hóa';
                    $img = "images/hoa.jpg";
                    break;
                case 'sinh':
                    $monhoc = 'Sinh';
                    $img = "images/sinh.jpg";
                    break;
                case 'su':
                    $monhoc = 'Sử';
                    $img = "images/su.jpg";
                    break;
                case 'dia':
                    $monhoc = 'Địa';
                    $img = "images/dia.jpg";
                    break;
                case 'anh':
                    $monhoc = 'Anh';
                    $img = "images/anh.jpg";
                    break;
                case 'van':
                    $monhoc = 'Văn';
                    $img = "images/van.jpg";
                    break;
                case 'gdcd':
                    $monhoc = 'GDCD';
                    $img = "images/gdcd.jpg";
                    break;
                default:
                    $monhoc = 'Toán';
                    $img = "images/toan.jpg";
                    break;
            }
        @endphp
        <div class="container dau-tien" style="padding-top: 20px ">
            <div class="row">
                <div class="col-lg-12 col-xl-8">
                    <div class="card" style="border: 0 solid transparent!important; margin-bottom: 20px">
                        <div class="card-body">
                            <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                <p style="font-size: 26px; font-weight: 600; color: black; font-family: 'Mali', cursive;">Đề thi THPTQG môn Toán lần 1 trường Lê Thành Phương</p>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                        <div style="margin-right: 20px">
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">Môn </span>
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">Toán</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-end; margin-bottom: 10px;">
                                        <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                        <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                        <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                        <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                        <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-8">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                        <div style="margin-right: 20px">
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">Ngày tạo: </span>
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">22/12/2019</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-end; margin-bottom: 10px;">
                                        <i class="fas fa-download fa-2x" style="color: #005DA5; margin-right: 35px"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-8">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                        <div style="margin-right: 20px">
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">Lượt thi: </span>
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">200</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                        <div style="margin-right: 20px">
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">Thời giân làm đề: </span>
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">90p</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                        <div style="margin-right: 20px">
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">Số câu hỏi: </span>
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">40</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4"></div>
                            </div>

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <p style="font-size: 22px; color: #FF0000; font-family: 'Mali', cursive; font-weight: 600;">Chúc mừng bạn hoàn thành bài thi</p>
                            </div>

                            <div class="row">
                                <div class="col-3">    
                                </div>
                                <div class="col-6" style="padding-right: 0!important; padding-left: 0!important">
                                    <div class="col">
                                        <p style="font-size: 22px; color: #00B568; font-family: 'Mali', cursive; font-weight: 600; float: left; margin-bottom: 0!important">Kết quả</p>
                                        
                                    </div>
                                    <div class="col">
                                        <p style="font-size: 22px; color: #005DA5; font-family: 'Mali', cursive; font-weight: 600; float: right;">50/50</p>
                                    </div>
                                </div>
                                <div class="col-3">   
                                </div>   
                            </div>

                            <div class="row">
                                <div class="col-3">    
                                </div>
                                <div class="col-6" style="padding-right: 0!important; padding-left: 0!important">
                                    <div class="col">
                                        <p style="font-size: 22px; color: #00B568; font-family: 'Mali', cursive; font-weight: 600; float: left; margin-bottom: 0!important">Thời gian</p>
                                        
                                    </div>
                                    <div class="col">
                                        <p style="font-size: 22px; color: #005DA5; font-family: 'Mali', cursive; font-weight: 600; float: right;">85p</p>
                                    </div>
                                </div>
                                <div class="col-3">   
                                </div>   
                            </div>

                            <div class="row">
                                <div class="col-3">    
                                </div>
                                <div class="col-6" style="padding-right: 0!important; padding-left: 0!important">
                                    <div class="col">
                                        <p style="font-size: 22px; color: #00B568; font-family: 'Mali', cursive; font-weight: 600; float: left; margin-bottom: 0!important">Xếp hạng</p>
                                        
                                    </div>
                                    <div class="col">
                                        <p style="font-size: 22px; color: #005DA5; font-family: 'Mali', cursive; font-weight: 600; float: right;">5</p>
                                    </div>
                                </div>
                                <div class="col-3">   
                                </div>   
                            </div>

                            <div style="display: flex; align-items: center; justify-content: center;">
                                <img src="images/Red Chinese Illustration Chinese New Year Poster.png" width="200" height="300">
                            </div>

                            <div style="display: flex; flex-direction: column; margin-top: 30px">
                                <div style="float: left;">
                                    <a id="btnThiLai" class="btn btn-click" style="color: white; background-color: #005DA5; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive; text-align: center; float: left;">THI LẠI</a>

                                    <a id="btnXemKetQua" class="btn btn-click" style="color: white; background-color: #005DA5; height: 34px; border-radius: 30px; font-family: 'Mali', cursive; text-align: center; float: right;">XEM ĐÁP ÁN</a> 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-xl-4" style="display: flex; flex-direction: column;">
                
                <div class="card" style="border: 0 solid transparent!important; margin-bottom: 20px">
                    <div class="card-body">
                        <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start;">
                            <i class="fas fa-chart-line fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                            <p style="font-size: 24px; font-weight: 600; color: black; font-family: 'Mali', cursive;">Bảng xếp hạng</p>
                        </div>

                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2">
                                    <img src="images/1st.png" width="38" height="32" alt="...">
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2">
                                    <img src="images/2nd.png" width="38" height="32" alt="...">
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2">
                                    <img src="images/3rd.png" width="38" height="32" alt="...">
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2" style="padding-right: 0!important">
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive; margin-left: 8px">04</span>
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2" style="padding-right: 0!important">
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive; margin-left: 8px">05</span>
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2" style="padding-right: 0!important">
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive; margin-left: 8px">06</span>
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2" style="padding-right: 0!important">
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive; margin-left: 8px">07</span>
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2" style="padding-right: 0!important">
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive; margin-left: 8px">08</span>
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2" style="padding-right: 0!important">
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive; margin-left: 8px">09</span>
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                <div class="col-2" style="padding-right: 0!important">
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive; margin-left: 8px">10</span>
                                </div>
                                <div class="col-6" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <img src="images/liethoa2.jpg" width="38" height="38" style="border-radius: 50%; margin-right: 7px">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">Nguyễn A</span>
                                </div>
                                <div class="col-4">
                                    <span style="font-size: 18px; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive;">50</span>
                                    <span style="font-size: 18px; font-weight: 600; color: black; font-family: 'Mali', cursive;">/50</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                 <div class="card" style="border: 0 solid transparent!important; margin-bottom: 20px">
                <div class="card-body">
                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start;">
                        <i class="fas fa-filter fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                        <p style="font-size: 24px; font-weight: 600; color: black; font-family: 'Mali', cursive;">Bộ lọc</p>
                    </div>

                                                <div class="container-fluid">
                        <div class="row">
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important; margin-top: 10px">
                                @if($mon == 'toan')
                                <button id="toan" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Toán</button>
                                @else
                                <button id="toan" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Toán</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important; margin-top: 10px">
                                @if($mon == 'ly')
                                <button id="ly" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Lý</button>
                                @else
                                <button id="ly" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Lý</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important; margin-top: 10px">
                               @if($mon == 'hoa')
                                <button id="hoa" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Hóa</button>
                                @else
                                <button id="hoa" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Hóa</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important; margin-top: 10px">
                                @if($mon == 'sinh')
                                <button id="sinh" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Sinh</button>
                                @else
                                <button id="sinh" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Sinh</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important; margin-top: 10px">
                                @if($mon == 'su')
                                <button id="su" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Sử</button>
                                @else
                                <button id="su" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Sử</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important; margin-top: 10px">
                               @if($mon == 'dia')
                                <button id="dia" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Địa</button>
                                @else
                                <button id="dia" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Địa</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important; margin-top: 10px">
                                @if($mon == 'anh')
                                <button id="anh" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Anh</button>
                                @else
                                <button id="anh" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Anh</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important; margin-top: 10px">
                                @if($mon == 'van')
                                <button id="van" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Văn</button>
                                @else
                                <button id="van" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Văn</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important; margin-top: 10px">
                                @if($mon == 'gdcd')
                                <button id="gdcd" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">GDCD</button>
                                @else
                                <button id="gdcd" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">GDCD</button>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-end; flex-wrap: wrap; margin-top: 30px; margin-bottom: 15px">
                        <a id="btnOK_ketqua" class="btn btn-click" style="color: white; background-color: #005DA5; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive;">OK</a>
                    </div>

                </div>
            </div>

                </div>

            </div>

            <div class="row dept_row">
                <div class="col">
                    <div class="dept_slider_container_outer">
                        <div class="dept_slider_container">

                            <!-- Slider -->
                            <div class="owl-carousel owl-theme dept_slider">
                                
                                <!-- Slide -->
                                <div class="owl-item dept_item">
                                    <div class="card de-thi-slide">
                                        <img src={{$img}} class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Lê Thành Phương</h5>
                                            <br>
                                            <div style="float: right;">
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <br>
                                            </div>
                                            <div style="float: left; margin-top: 30px">
                                                <p class="card-text"><small style="font-size: 16px; color: #00B568; font-family: 'Mali', cursive;">Lượt thi: 200</small></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item dept_item">
                                    <div class="card de-thi-slide">
                                        <img src={{$img}} class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Lê Thành Phương</h5>
                                            <br>
                                            <div style="float: right;">
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <br>
                                            </div>
                                            <div style="float: left; margin-top: 30px">
                                                <p class="card-text"><small style="font-size: 16px; color: #00B568; font-family: 'Mali', cursive;">Lượt thi: 200</small></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item dept_item">
                                    <div class="card de-thi-slide">
                                        <img src={{$img}} class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Lê Thành Phương</h5>
                                            <br>
                                            <div style="float: right;">
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <br>
                                            </div>
                                            <div style="float: left; margin-top: 30px">
                                                <p class="card-text"><small style="font-size: 16px; color: #00B568; font-family: 'Mali', cursive;">Lượt thi: 200</small></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item dept_item">
                                    <div class="card de-thi-slide">
                                        <img src={{$img}} class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Lê Thành Phương</h5>
                                            <br>
                                            <div style="float: right;">
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <i class="fas fa-star" style="color: #FFC96C; margin-right: 2px"></i>
                                                <br>
                                            </div>
                                            <div style="float: left; margin-top: 30px">
                                                <p class="card-text"><small style="font-size: 16px; color: #00B568; font-family: 'Mali', cursive;">Lượt thi: 200</small></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>

                        <!-- Dept Slider Nav -->
                        <div class="dept_slider_nav btn-click"><i class="fas fa-angle-double-right fa-2x" aria-hidden="true"></i></div>

                    </div>
                        
                </div>
            </div>

        </div>
    <!-- Footer -->
    @include('Footer')
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
</body>
</html>