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
            }
        @endphp
        <div class="container dau-tien" style="padding-top: 20px ">
            <div class="row">
                <div class="col-lg-12 col-xl-8">
                    <div class="card-deck" style="margin-bottom: 20px">
                        <div class="card de-thi">
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Nguyễn Thị Minh Khai</h5>
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 2 trường Lê Thành Phương</h5>
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

                    <div class="card-deck" style="margin-bottom: 20px">
                        <div class="card de-thi">
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Nguyễn Thị Minh Khai</h5>
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 2 trường Lê Thành Phương</h5>
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

                    <div class="card-deck" style="margin-bottom: 20px">
                        <div class="card de-thi">
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Nguyễn Thị Minh Khai</h5>
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 2 trường Lê Thành Phương</h5>
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

                    <div class="card-deck" style="margin-bottom: 20px">
                        <div class="card de-thi">
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Nguyễn Thị Minh Khai</h5>
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 2 trường Lê Thành Phương</h5>
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

                    <div class="card-deck" style="margin-bottom: 20px">
                        <div class="card de-thi">
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Nguyễn Thị Minh Khai</h5>
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 2 trường Lê Thành Phương</h5>
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

                    <div class="card-deck" style="margin-bottom: 20px">
                        <div class="card de-thi">
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 1 trường Nguyễn Thị Minh Khai</h5>
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
                        <div class="card de-thi">
                            <img src={{$img}} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 name="dethi" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn {{$monhoc}} lần 2 trường Lê Thành Phương</h5>
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
                <div class="col-lg-12 col-xl-4">
                    <div class="card bo-loc" style="border: 0 solid transparent!important; margin-bottom: 20px">
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
                        <a id="btnOK_dsdt" class="btn btn-click" style="color: white; background-color: #005DA5; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive;">OK</a>
                    </div>

                        </div>
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