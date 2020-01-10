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
            <div class="row">
                <div class="col-lg-12 col-xl-8">
                    <div class="card" style="border: 0 solid transparent!important; margin-bottom: 20px">
                        <div class="card-body">
                            <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                <p style="font-size: 26px; font-weight: 600; color: black; font-family: 'Mali', cursive;">{{$tendethi}}</p>
                            </div>
                            

                            
                            <div class="row" style="margin-bottom: 10px">
                                <div class="col-10">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                        <div style="margin-right: 20px">
                                            <span id="cau" style="font-size: 20px; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-right: 10px"></span>
                                            <span id="noidung" style="font-size: 20px; color: black; font-family: 'Mali', cursive;"></span>
                                            <div id="img" style="margin-top: 10px;">


                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <i id="btnFlag" class="fas fa-flag fa-2x" style="color: black; float: right;"></i>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 10px">
                                <div class="col-2">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                        <div style="margin-right: 20px">
                                            <button id="chonA" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; font-weight: 600">A.</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-8" style="padding-left: 0!important">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px;">
                                        <div id="dapanA" style="margin-right: 20px">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 10px">
                                <div class="col-2">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                        <div style="margin-right: 20px">
                                            <button id="chonB" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; font-weight: 600">B.</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8" style="padding-left: 0!important">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px;">
                                        <div id="dapanB" style="margin-right: 20px">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 10px">
                             <div class="col-2">
                                <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                    <div style="margin-right: 20px">
                                        <button id="chonC" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; font-weight: 600">C.</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8" style="padding-left: 0!important">
                                <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px;">
                                    <div id="dapanC" style="margin-right: 20px">

                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col-2">
                                <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                    <div style="margin-right: 20px">
                                        <button id="chonD" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; font-weight: 600">D.</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8" style="padding-left: 0!important">
                                <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px;">
                                    <div id="dapanD" style="margin-right: 20px">

                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>

                        <div style="display: flex; flex-direction: column; margin-top: 20px">
                            <div style="float: left;">
                                <i id="cau_prev" class="fas fa-angle-double-left fa-2x icon-click" style="color: #005DA5; float: left; margin-left: 37px"></i>

                                <i id="cau_next" class="fas fa-angle-double-right fa-2x icon-click" style="color: #005DA5; float: right; margin-right: 37px"></i>   
                            </div style="float: right;">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-4" style="display: flex; flex-direction: column;">
                <button class="btn" style="border: 2px solid #005DA5!important; background-color: white; margin-bottom: 20px">
                    <i class="far fa-clock fa-2x" style="color: #FF0000"></i>
                    <span id="thoigian" style="color: black; font-family: 'Mali', cursive; font-size: 24px; margin-left: 10px">90:00</span>
                </button>

                <div class="card" style="border: 0 solid transparent!important; margin-bottom: 20px">
                    <div class="card-body">
                        <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start;">
                            <i class="fas fa-list-ol fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                            <p style="font-size: 24px; font-weight: 600; color: black; font-family: 'Mali', cursive;">Câu hỏi</p>
                        </div>

                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" >
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">01</button>
                                </div>
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">02</button>
                                </div>
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">03</button>
                                </div>
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">04</button>
                                </div>
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">05</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container-fluid" style="margin-top: 20px">
                            <div class="row" >
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">06</button>
                                </div>
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">07</button>
                                </div>
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">08</button>
                                </div>
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">09</button>
                                </div>
                                <div class="col" style="padding-right: 0px!important; padding-left: 10px">
                                    <button name="sentence" class="btn" style="border: 1px solid transparent!important; border-radius: 50%; background-color: transparent; font-family: 'Mali', cursive; font-size: 18px; color: black; width: 40px; height: 40px; padding-right: 0px!important; padding-left: 0px!important">10</button>
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-end; flex-wrap: wrap; margin-top: 30px; margin-bottom: 15px">
                            <a id="btnNopBai" data-toggle="modal" data-target=".xoa-modal" class="btn btn-click" style="color: white; background-color: #005DA5; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive;">NỘP BÀI</a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="modal fade xoa-modal" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #FF0000!important; font-size: 22px; font-weight: 600; font-family: 'Mali', cursive;">Xác nhận</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color: #00B568!important; font-size: 22px; font-weight: 600; font-family: 'Mali', cursive;">Bạn có chắc chắn muốn nộp bài không?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal" style="color: white; background-color: #6B6B6B; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive;">HỦY</button>
                        <a class="btn btn-primary btn-click" name="btnNop" style="color: white; background-color: #005DA5; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive;">NỘP BÀI</a>
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