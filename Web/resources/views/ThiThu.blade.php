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

        <div class="container dau-tien" style="padding-top: 20px ">
            <!--BOLOC-->
            <div class="row">
                <div class="col">
                    <div class="card" style="border: 0 solid transparent!important">
                        <div class="card-body">
                            <div style="display: flex; flex-direction: row; align-items: center; justify-content: center; margin-bottom: 20px">
                                <i class="fas fa-filter fa-2x" style="color: #FF0000; margin-right: 5px"></i>
                                <p style="font-size: 20px; font-weight: 600; color: black">Bộ lọc</p>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-4 col-md" style="padding-left: 0px!important; padding-right: 0px!important">
                                    <button id="toan" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Toán</button>
                                </div>
                                <div class="col-4 col-md" style="padding-left: 0px!important; padding-right: 0px!important">
                                    <button id="ly" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Lý</button>
                                </div>
                                <div class="col-4 col-md" style="padding-left: 0px!important; padding-right: 0px!important">
                                    <button id="hoa" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Hóa</button>
                                </div>
                               <div class="col-4 col-md" style="padding-left: 0px!important; padding-right: 0px!important">
                                    <button id="sinh" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Sinh</button>
                                </div>
                                <div class="col-4 col-md" style="padding-left: 0px!important; padding-right: 0px!important">
                                    <button id="su" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Sử</button>
                                </div>
                                <div class="col-4 col-md" style="padding-left: 0px!important; padding-right: 0px!important">
                                    <button id="dia" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Địa</button>
                                </div>
                                <div class="col-4 col-md" style="padding-left: 0px!important; padding-right: 0px!important">
                                    <button id="anh" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Anh</button>
                                </div>
                                <div class="col-4 col-md" style="padding-left: 0px!important; padding-right: 0px!important">
                                    <button id="van" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Văn</button>
                                </div>
                                <div class="col-4 col-md" style="padding-left: 0px!important; padding-right: 0px!important">
                                    <button id="gdcd" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">GDCD</button>
                                </div>
                            </div>
                            </div>
                            
                            <div style="display: flex; flex-direction: row; align-items: center; justify-content: center; flex-wrap: wrap; margin-top: 30px; margin-bottom: 15px">
                                <a id="btnOK" class="btn btn-click" style="color: white; background-color: #005DA5; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive;">OK</a>
                            </div>
                            
                        </div>
                    </div>
                </div>   
            </div>

            <div style="display: flex; flex-direction: row;align-items: center; justify-content: center; margin-bottom: 20px; margin-top: 20px">
                <div style="flex: 2"></div>
                <div style="flex: 6;">
                    <p style="font-size: 20px; font-weight: 600; color: #6B6B6B; text-align: center;">ĐỀ THI MỚI NHẤT</p>
                </div>
                <div style="flex: 2; align-items: center; justify-content: center;">
                    <a class="icon-click" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: right;" href="{{url('dethimoinhat')}}">Xem thêm</a>
                </div>  
            </div>

            <div class="card-deck">
                <div class="card de-thi">
                    <img src="images/toan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 name="dethi" tenmon="Toán" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn Toán lần 1 trường Lê Thành Phương</h5>
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
                    <img src="images/toan.jpg" class="card-img-top img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 name="dethi" tenmon="Toán" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn Toán lần 1 trường Nguyễn Thị Minh Khai</h5>
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
                    <img src="images/van.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 name="dethi" tenmon="Toán" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn Văn lần 2 trường Lê Thành Phương</h5>
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
                    <img src="images/toan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 name="dethi" tenmon="Toán" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn Toán lần 2 Nguyễn Thị Minh Khai</h5>
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

            <div style="display: flex; flex-direction: row;align-items: center; justify-content: center; margin-bottom: 20px; margin-top: 20px">
                <div style="flex: 2"></div>
                <div style="flex: 6;">
                    <p style="font-size: 20px; font-weight: 600; color: #6B6B6B; text-align: center;">TOP ĐỀ THI</p>
                </div>
                <div style="flex: 2; align-items: center; justify-content: center;">
                    <a class="icon-click" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: right;" href="{{url('topdethi')}}">Xem thêm</a>
                </div>  
            </div>

            <div class="card-deck">
                <div class="card de-thi">
                    <img src="images/toan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 name="dethi" tenmon="Toán" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn Toán lần 1 trường Lê Thành Phương</h5>
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
                    <img src="images/toan.jpg" class="card-img-top img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 name="dethi" tenmon="Toán" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn Toán lần 1 trường Nguyễn Thị Minh Khai</h5>
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
                    <img src="images/van.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 name="dethi" tenmon="Toán" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn Văn lần 2 trường Lê Thành Phương</h5>
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
                    <img src="images/toan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 name="dethi" tenmon="Toán" class="card-title" style="font-size: 18px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; float: left;">Đề thi THPTQG môn Toán lần 2 Nguyễn Thị Minh Khai</h5>
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
</body>
</html>