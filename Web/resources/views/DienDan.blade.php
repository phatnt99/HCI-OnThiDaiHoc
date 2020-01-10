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
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
</head>

<body style="background-color: #F8F8F8">

    <div class="super_container">

        <!-- Menu -->

        
        @include('Header')
        <!-- Home -->
        @if($khoi == "" || $khoi == null)
        @php
            $khoi="khoi12";
            
        @endphp
        @endif

        @if($mon == "" || $mon == null)
        @php
            $mon="toan";
            
        @endphp
        @endif

        <div class="container dau-tien" style="padding-top: 20px ">
            <!--BOLOC-->
            <div class="row">
                <div class="col-lg-12 col-xl-8">
                    <div class="card" style="margin-bottom: 40px">
                        <div class="card-header"
                            style="border-bottom: 1px solid #C4C4C4!important; display: flex; align-items: center; justify-content: flex-start; background-color: rgb(0, 93, 165, 0.95)!important">
                            <i class="fas fa-edit fa-2x" style="color: #FF0000; float: left; margin-right: 10px"></i>
                            <p
                                style="font-size: 24px; font-weight: 600; color: white; font-family: 'Mali', cursive; float: left;">
                                Tạo bài viết</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45" style="float: right;">
                                </div>
                                <div class="col-10">
                                    <textarea id="baidang" class="form-control" id="noidung" rows="3" placeholder="Bạn cần hỏi gì?"
                                        style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer"
                            style="border-bottom: 1px solid #C4C4C4!important; display: flex; align-items: center; background-color: white!important">
                            <div class="row" style="width: 100%">
                                <div class="col-3">
                                    <i class="fas fa-camera fa-2x"
                                        style="color: #FF0000; float: left; margin-right: 10px"></i>
                                </div>
                                <div class="col-9" style="padding-right: 0!important">
                                    <button id="btnDangBai" class="btn btn-click"
                                        style="color: white; background-color: #005DA5; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive; float: right;">ĐĂNG
                                        BÀI</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card" id="example" style="margin-bottom: 20px; display: none; padding-bottom: 1px">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <img class="img-profile rounded-circle"
                                    src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                    style="float: left; margin-right: 10px">
                                <div style="display: flex; flex-direction: column;">
                                    <p
                                        style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 22px; margin-bottom: 0!important">
                                        Duong Thuy</p>
                                    <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 16px">12/12/2019
                                    </p>
                                </div>

                            </div>
                            <div style="display: flex; align-items: center;">
                                <div style="display: flex; flex-direction: column; width: 100%">
                                    <a style="color: #005DA5; font-family: 'Mali',cursive; font-size: 20px; margin-bottom: 0!important"
                                        href="#">#{{$mon}}_{{$khoi}}</a>
                                    <p
                                        style="color: black; font-family: 'Mali',cursive; font-size: 20px; line-height: normal;">
                                        Tìm tiệm cần hàm số</p>
                                </div>

                            </div>
                        </div>

                        <hr>
                        <div class="row" style="width: 100%">
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i id="btnLike" class="far fa-heart fa-2x" style="display: block; color: #FF0000; margin-right: 10px"></i>
                                <i id="btnUnLike" class="fas fa-heart fa-2x" style="display: none; color: #FF0000; margin-right: 10px"></i>
                                <p id="numberLike" style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">0</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-comment fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p id="numberComment" style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">0</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-share-square fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">0</p>
                            </div>
                        </div>
                        <hr>
                        <div
                            style="display: flex; align-items: center; justify-content: flex-start; margin-right: 10px; margin-bottom: 20px">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                <textarea id="comment_example" type="text" name="comment" placeholder="Bình luận..."
                                    style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                    rows="1"></textarea>
                                <i class="fas fa-camera fa-2x"
                                    style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                            </div>

                        </div>

                        <div id="mycomment" style="display: none; align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Duong Thuy<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    id="labelThich">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    id="labelTraLoi">Trả lời</a>
                            </div>

                            <!--binh luan con-->

                            <div style="margin-left: 50px">
                                <div id="comment_con1"
                                    style="display: none; align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                        <p
                                            style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important;">
                                            Thuy Duong<//p> <p
                                                style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                            Sai rồi</p>
                                    </div>
                                    <div style="margin-top: 10px">
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                            id="labelThich1" >Thích</a>
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                            >Trả lời</a>
                                    </div>
                                </div>
                                <div id="comment_con"
                                    style="display: none; align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                        <p
                                            style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important;">
                                            Thuy Duong<//p> <p
                                                style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                            AAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                    </div>
                                    <div style="margin-top: 10px">
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                            id="labelThich2">Thích</a>
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                            >Trả lời</a>
                                    </div>
                                </div>
                                <div id="xemphanhoi"
                                    style="display: none; align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 75px; margin-top: 10px">
                                    <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        >Xem phản hồi trước</a>
                                </div>
                                <div id="mycommentcon"
                                    style="display: none; align-items: center; justify-content: flex-start; margin-bottom: 20px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                        <textarea type="text" id="comment_example1" name="comment" placeholder="Bình luận..."
                                            style="font-size: 20px; color: black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                            rows="1"></textarea>
                                        <i class="fas fa-camera fa-2x"
                                            style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <div id="mycomment1"style="display: none; align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-top: 10px">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    id="labelThich3">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                        </div>

                        
                    </div>
                    <div class="card" style="margin-bottom: 20px">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <img class="img-profile rounded-circle"
                                    src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                    style="float: left; margin-right: 10px">
                                <div style="display: flex; flex-direction: column;">
                                    <p
                                        style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 22px; margin-bottom: 0!important">
                                        An Lê</p>
                                    <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 16px">12/12/2019
                                    </p>
                                </div>

                            </div>
                            <div style="display: flex; align-items: center;">
                                <div style="display: flex; flex-direction: column; width: 100%">
                                    <a style="color: #005DA5; font-family: 'Mali',cursive; font-size: 20px; margin-bottom: 0!important"
                                        href="#">#{{$mon}}_{{$khoi}}</a>
                                    <p
                                        style="color: black; font-family: 'Mali',cursive; font-size: 20px; line-height: normal;">
                                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                </div>

                            </div>
                        </div>

                        <hr>
                        <div class="row" style="width: 100%">
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-heart fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-comment fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-share-square fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                        </div>
                        <hr>
                        <div
                            style="display: flex; align-items: center; justify-content: flex-start; margin-right: 10px; margin-bottom: 20px">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                <textarea type="text" name="comment" placeholder="Bình luận..."
                                    style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                    rows="1"></textarea>
                                <i class="fas fa-camera fa-2x"
                                    style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                            </div>

                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                            <!--binh luan con-->

                            <div style="margin-left: 50px">
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                        <p
                                            style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important;">
                                            Thuy Duong<//p> <p
                                                style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                            AAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                    </div>
                                    <div style="margin-top: 10px">
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                            href="#">Thích</a>
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                            href="#">Trả lời</a>
                                    </div>
                                </div>
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 75px; margin-top: 10px">
                                    <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        href="#">Xem phản hồi trước</a>
                                </div>
                                <div
                                    style="display: flex; align-items: center; justify-content: flex-start; margin-bottom: 20px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                        <textarea type="text" name="comment" placeholder="Bình luận..."
                                            style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                            rows="1"></textarea>
                                        <i class="fas fa-camera fa-2x"
                                            style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                        </div>

                        <div id="comment_hidden" style="display: none; align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-top: 10px">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                        </div>


                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 30px; margin-top: 10px; margin-bottom: 10px">
                            <a class="small-btn"
                                        style="display: block; font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        id="xemphanhoitruoc">Xem phản hồi trước</a>
                        </div>
                    </div>

                    <div class="card" style="margin-bottom: 20px">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <img class="img-profile rounded-circle"
                                    src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                    style="float: left; margin-right: 10px">
                                <div style="display: flex; flex-direction: column;">
                                    <p
                                        style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 22px; margin-bottom: 0!important">
                                        Angel</p>
                                    <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 16px">12/12/2019
                                    </p>
                                </div>

                            </div>
                            <div style="display: flex; align-items: center;">
                                <div style="display: flex; flex-direction: column; width: 100%">
                                    <a style="color: #005DA5; font-family: 'Mali',cursive; font-size: 20px; margin-bottom: 0!important"
                                        href="#">#{{$mon}}_{{$khoi}}</a>
                                    <p
                                        style="color: black; font-family: 'Mali',cursive; font-size: 20px; line-height: normal;">
                                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                </div>

                            </div>
                        </div>

                        <hr>
                        <div class="row" style="width: 100%">
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-heart fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-comment fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-share-square fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                        </div>
                        <hr>
                        <div
                            style="display: flex; align-items: center; justify-content: flex-start; margin-right: 10px; margin-bottom: 20px">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                <textarea type="text" name="comment" placeholder="Bình luận..."
                                    style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                    rows="1"></textarea>
                                <i class="fas fa-camera fa-2x"
                                    style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                            </div>

                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                            <!--binh luan con-->

                            <div style="margin-left: 50px">
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                        <p
                                            style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important;">
                                            Thuy Duong<//p> <p
                                                style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                            AAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                    </div>
                                    <div style="margin-top: 10px">
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                            href="#">Thích</a>
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                            href="#">Trả lời</a>
                                    </div>
                                </div>
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 75px; margin-top: 10px">
                                    <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        href="#">Xem phản hồi trước</a>
                                </div>
                                <div
                                    style="display: flex; align-items: center; justify-content: flex-start; margin-bottom: 20px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                        <textarea type="text" name="comment" placeholder="Bình luận..."
                                            style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                            rows="1"></textarea>
                                        <i class="fas fa-camera fa-2x"
                                            style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 30px; margin-top: 10px; margin-bottom: 10px">
                            <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        href="#">Xem phản hồi trước</a>
                        </div>
                    </div>

                    <div class="card" style="margin-bottom: 20px">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <img class="img-profile rounded-circle"
                                    src="images/mục tiêu 1.jpg" width="45" height="45" 
                                    style="float: left; margin-right: 10px">
                                <div style="display: flex; flex-direction: column;">
                                    <p
                                        style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 22px; margin-bottom: 0!important">
                                        Lê Hồng Thị</p>
                                    <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 16px">12/12/2019
                                    </p>
                                </div>

                            </div>
                            <div style="display: flex; align-items: center;">
                                <div style="display: flex; flex-direction: column; width: 100%">
                                    <a style="color: #005DA5; font-family: 'Mali',cursive; font-size: 20px; margin-bottom: 0!important"
                                        href="#">#{{$mon}}_{{$khoi}}</a>
                                    <p
                                        style="color: black; font-family: 'Mali',cursive; font-size: 20px; line-height: normal;">
                                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                </div>

                            </div>
                        </div>

                        <hr>
                        <div class="row" style="width: 100%">
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-heart fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-comment fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-share-square fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                        </div>
                        <hr>
                        <div
                            style="display: flex; align-items: center; justify-content: flex-start; margin-right: 10px; margin-bottom: 20px">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                <textarea type="text" name="comment" placeholder="Bình luận..."
                                    style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                    rows="1"></textarea>
                                <i class="fas fa-camera fa-2x"
                                    style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                            </div>

                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                            <!--binh luan con-->

                            <div style="margin-left: 50px">
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                        <p
                                            style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important;">
                                            Thuy Duong<//p> <p
                                                style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                            AAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                    </div>
                                    <div style="margin-top: 10px">
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                            href="#">Thích</a>
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                            href="#">Trả lời</a>
                                    </div>
                                </div>
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 75px; margin-top: 10px">
                                    <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        href="#">Xem phản hồi trước</a>
                                </div>
                                <div
                                    style="display: flex; align-items: center; justify-content: flex-start; margin-bottom: 20px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                        <textarea type="text" name="comment" placeholder="Bình luận..."
                                            style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                            rows="1"></textarea>
                                        <i class="fas fa-camera fa-2x"
                                            style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 30px; margin-top: 10px; margin-bottom: 10px">
                            <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        href="#">Xem phản hồi trước</a>
                        </div>
                    </div>

                    <div class="card" style="margin-bottom: 20px">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <img class="img-profile rounded-circle"
                                    src="images/hoa giấy.jpg" width="45" height="45"
                                    style="float: left; margin-right: 10px">
                                <div style="display: flex; flex-direction: column;">
                                    <p
                                        style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 22px; margin-bottom: 0!important">
                                        Vương Nhất Bác</p>
                                    <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 16px">12/12/2019
                                    </p>
                                </div>

                            </div>
                            <div style="display: flex; align-items: center;">
                                <div style="display: flex; flex-direction: column; width: 100%">
                                    <a style="color: #005DA5; font-family: 'Mali',cursive; font-size: 20px; margin-bottom: 0!important"
                                        href="#">#{{$mon}}_{{$khoi}}</a>
                                    <p
                                        style="color: black; font-family: 'Mali',cursive; font-size: 20px; line-height: normal;">
                                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                </div>

                            </div>
                        </div>

                        <hr>
                        <div class="row" style="width: 100%">
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-heart fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-comment fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-share-square fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                        </div>
                        <hr>
                        <div
                            style="display: flex; align-items: center; justify-content: flex-start; margin-right: 10px; margin-bottom: 20px">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                <textarea type="text" name="comment" placeholder="Bình luận..."
                                    style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                    rows="1"></textarea>
                                <i class="fas fa-camera fa-2x"
                                    style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                            </div>

                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                            <!--binh luan con-->

                            <div style="margin-left: 50px">
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                        <p
                                            style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important;">
                                            Thuy Duong<//p> <p
                                                style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                            AAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                    </div>
                                    <div style="margin-top: 10px">
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                            href="#">Thích</a>
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                            href="#">Trả lời</a>
                                    </div>
                                </div>
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 75px; margin-top: 10px">
                                    <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        href="#">Xem phản hồi trước</a>
                                </div>
                                <div
                                    style="display: flex; align-items: center; justify-content: flex-start; margin-bottom: 20px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                        <textarea type="text" name="comment" placeholder="Bình luận..."
                                            style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                            rows="1"></textarea>
                                        <i class="fas fa-camera fa-2x"
                                            style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 30px; margin-top: 10px; margin-bottom: 10px">
                            <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        href="#">Xem phản hồi trước</a>
                        </div>
                    </div>

                    <div class="card" style="margin-bottom: 20px">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <img class="img-profile rounded-circle"
                                    src="images/art.jpg" width="45" height="45" 
                                    style="float: left; margin-right: 10px">
                                <div style="display: flex; flex-direction: column;">
                                    <p
                                        style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 22px; margin-bottom: 0!important">
                                        An Lê</p>
                                    <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 16px">12/12/2019
                                    </p>
                                </div>

                            </div>
                            <div style="display: flex; align-items: center;">
                                <div style="display: flex; flex-direction: column; width: 100%">
                                    <a style="color: #005DA5; font-family: 'Mali',cursive; font-size: 20px; margin-bottom: 0!important"
                                        href="#">#{{$mon}}_{{$khoi}}</a>
                                    <p
                                        style="color: black; font-family: 'Mali',cursive; font-size: 20px; line-height: normal;">
                                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                </div>

                            </div>
                        </div>

                        <hr>
                        <div class="row" style="width: 100%">
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-heart fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-comment fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                            <div class="col-4" style="display: flex; align-items: center; justify-content: center;">
                                <i class="far fa-share-square fa-2x"
                                    style="color: #FF0000; float: left; margin-right: 10px"></i>
                                <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 18px">12</p>
                            </div>
                        </div>
                        <hr>
                        <div
                            style="display: flex; align-items: center; justify-content: flex-start; margin-right: 10px; margin-bottom: 20px">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                <textarea type="text" name="comment" placeholder="Bình luận..."
                                    style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                    rows="1"></textarea>
                                <i class="fas fa-camera fa-2x"
                                    style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                            </div>

                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                            <!--binh luan con-->

                            <div style="margin-left: 50px">
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                        <p
                                            style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important;">
                                            Thuy Duong<//p> <p
                                                style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                            AAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                    </div>
                                    <div style="margin-top: 10px">
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                            href="#">Thích</a>
                                        <a class="small-btn"
                                            style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                            href="#">Trả lời</a>
                                    </div>
                                </div>
                                <div
                                    style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 75px; margin-top: 10px">
                                    <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        href="#">Xem phản hồi trước</a>
                                </div>
                                <div
                                    style="display: flex; align-items: center; justify-content: flex-start; margin-bottom: 20px; margin-top: 10px">
                                    <img class="img-profile rounded-circle"
                                        src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                        style="float: left; margin-right: 10px; margin-left: 20px" width="40"
                                        height="40">
                                    <div
                                        style="display: flex; align-items: center; justify-content: flex-start; width: 100%; background-color: #E5E5E5; border-radius: 30px; padding: 10px">
                                        <textarea type="text" name="comment" placeholder="Bình luận..."
                                            style="font-size: 20px; color: #black; font-family: 'Mali', cursive; float: left; border: 0 solid transparent !important; width: 100%; background-color: #E5E5E5"
                                            rows="1"></textarea>
                                        <i class="fas fa-camera fa-2x"
                                            style="color: #6B6B6B; float: right; margin-right: 10px; margin-left: 10px"></i>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px;">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45"
                                style="float: left; margin-right: 10px; margin-left: 20px" width="40" height="40">
                            <div
                                style="display: flex; flex-direction: column; background-color: #E5E5E5; border-radius: 30px; padding: 10px; overflow: auto; margin-right: 10px; width: fit-content; word-break: break-all;">
                                <p
                                    style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 20px; margin-bottom: 0!important; float: left;">
                                    Thuy Duong<//p> <p
                                        style="color: black; font-family: 'Mali',cursive;font-size: 20px; margin-bottom: 0!important; line-height: normal;">
                                    AAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>
                            </div>
                            <div style="margin-top: 10px">
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px; margin-right: 10px; margin-left: 92px"
                                    href="#">Thích</a>
                                <a class="small-btn"
                                    style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                    href="#">Trả lời</a>
                            </div>

                        </div>

                        <div style=" align-items: flex-start; justify-content: flex-start; margin-right: 10px; margin-left: 30px; margin-top: 10px; margin-bottom: 10px">
                            <a class="small-btn"
                                        style="font-family: 'Mali', cursive;background-color: transparent!important; color: #005DA5; font-size: 16px"
                                        href="#">Xem phản hồi trước</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4">
                    <div class="card bo-loc" style="border: 0 solid transparent!important; margin-bottom: 20px">
                        <div class="card-body">
                            <div
                                style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start;">
                                <i class="fas fa-filter fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                                <p
                                    style="font-size: 24px; font-weight: 600; color: black; font-family: 'Mali', cursive;">
                                    Chủ đề</p>
                            </div>

                            <div class="container-fluid">
                        <div class="row">
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important">
                                @if($khoi == 'khoi10')
                                <button id="khoi10" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Khối 10</button>
                                @else
                                <button id="khoi10" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Khối 10</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important">
                                @if($khoi == 'khoi11')
                                 <button id="khoi11" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Khối 11</button>
                                @else
                                <button id="khoi11" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Khối 11</button>
                                @endif
                               
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important">
                                @if($khoi == 'khoi12')
                                 <button id="khoi12" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Khối 12</button>
                                @else
                                <button id="khoi12" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Khối 12</button>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    <hr>
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
                        <a id="btnOK_diendan" class="btn btn-click" style="color: white; background-color: #005DA5; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive;">OK</a>
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