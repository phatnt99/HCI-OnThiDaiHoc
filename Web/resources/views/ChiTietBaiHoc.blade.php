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
                <div class="col-lg-12 col-xl-8">
                    <div class="card" style="border: 0 solid transparent!important; margin-bottom: 20px">
                        <div class="card-body">
                            <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px">
                                <i class="fas fa-book fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                                <p style="font-size: 26px; font-weight: 600; color: black; font-family: 'Mali', cursive;">{{$baihoc}}</p>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start; margin-bottom: 10px; margin-left: 35px">
                                        <div style="margin-right: 20px">
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">Lượt xem: </span>
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">15</span>
                                        </div>
                                        <div style="margin-right: 20px">
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">Lượt tải: </span>
                                            <span style="font-size: 18px; color: #6B6B6B; font-family: 'Mali', cursive;">20</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-end; margin-bottom: 10px;">
                                        <i class="fas fa-download fa-2x" style="color: #005DA5; margin-right: 35px"></i>
                                    </div>
                                </div>
                            </div>

                            <!--pdf-->
                            <div style="margin-left: 37px; margin-right: 37px; margin-top: 20px; margin-bottom: 20px">
                                <object data="https://drive.google.com/file/d/0Bz0w94J0vjx8aUV2bEpHM3dzVDQ/preview"  width="100%" height="700">
                                    <embed src="https://drive.google.com/file/d/0Bz0w94J0vjx8aUV2bEpHM3dzVDQ/preview" width="100%" height="700px" />
                                    <p>This browser does not support PDFs. Please download the PDF to view it: <a href="https://drive.google.com/file/d/0Bz0w94J0vjx8aUV2bEpHM3dzVDQ/preview">View the PDF</a>.</p>
                                </embed>
                            </object>
                        </div>
                        <div style="display: flex; flex-direction: column;">
                            <div style="float: left;">
                                @if($prev=="")
                                <i id="prev" class="fas fa-angle-double-left fa-2x icon-click" style="display: none; color: #005DA5; float: left; margin-left: 37px"></i>
                                @else
                                <i id="prev" class="fas fa-angle-double-left fa-2x icon-click" style="color: #005DA5; float: left; margin-left: 37px"></i>
                                @endif
                               @if($next=="")
                                <i id="next" class="fas fa-angle-double-right fa-2x icon-click" style="display: none;color: #005DA5; float: right; margin-right: 37px"></i>   
                                @else
                                <i id="next" class="fas fa-angle-double-right fa-2x icon-click" style="color: #005DA5; float: right; margin-right: 37px"></i>   
                                @endif

                               
                           </div style="float: right;">

                           <div>
                               <span id="prev_name" style="color: #6B6B6B; font-family: 'Mali', cursive; font-size: 20px; float: left; margin-left: 37px">{{$prev}}</span>
                               <span id="next_name" style="color: #6B6B6B; font-family: 'Mali', cursive; font-size: 20px; float: right; margin-right: 37px">{{$next}}</span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-lg-12 col-xl-4" style="display: flex; flex-direction: column;">

            <div class="card" style="border: 0 solid transparent!important; margin-bottom: 20px">
                <div class="card-body">
                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start;">
                        <i class="fas fa-book-reader fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                        <p style="font-size: 24px; font-weight: 600; color: black; font-family: 'Mali', cursive;">Danh sách bài học</p>
                    </div>

                    <div class="container-fluid" style="margin-left: 25px">
                        @if($baihoc=='Tính đơn điệu của hàm số')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">01. Tính đơn điệu của hàm số</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">01. Tính đơn điệu của hàm số</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Cực trị của hàm số')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">02. Cực trị của hàm số</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">02. Cực trị của hàm số</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Giá trị lớn nhất, giá trị nhỏ nhất')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">03. Giá trị lớn nhất, giá trị nhỏ nhất</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">03. Giá trị lớn nhất, giá trị nhỏ nhất</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Đường tiệm cận')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">04. Đường tiệm cận</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">04. Đường tiệm cận</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Khảo sát hàm số')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">05. Khảo sát hàm số</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">05. Khảo sát hàm số</a>
                        </div>
                        @endif
                        @if($baihoc=='Hàm ngược, hàm lượng giác ngược')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">06. Hàm ngược, hàm lượng giác ngược</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">06. Hàm ngược, hàm lượng giác ngược</a>
                        </div>
                        @endif
                        @if($baihoc=='Hàm số lũy thừa')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">07. Hàm số lũy thừa</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">07. Hàm số lũy thừa</a>
                        </div>
                        @endif
                        @if($baihoc=='Hàm số mũ')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">08. Hàm số mũ</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">08. Hàm số mũ</a>
                        </div>
                        @endif
                        @if($baihoc=='Hàm số logarit')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">09. Hàm số logarit</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">09. Hàm số logarit</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Phương trình mũ, phương trình logarit')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">10. Phương trình mũ, phương trình logarit</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">10. Phương trình mũ, phương trình logarit</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Bất phương trình mũ, bất phương trình logarit')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">11. Bất phương trình mũ, bất phương trình logarit</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">11. Bất phương trình mũ, bất phương trình logarit</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Nguyên hàm. Những tính chất cơ bản của nguyên hàm')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">12. Nguyên hàm. Những tính chất cơ bản của nguyên hàm</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">12. Nguyên hàm. Những tính chất cơ bản của nguyên hàm</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Các phương pháp tính nguyên hàm')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">13. Các phương pháp tính nguyên hàm</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">13. Các phương pháp tính nguyên hàm</a>
                        </div>
                        @endif
                        @if($baihoc=='Ứng dụng của tích phân')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">14. Ứng dụng của tích phân</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">14. Ứng dụng của tích phân</a>
                        </div>
                        @endif
                        @if($baihoc=='Số phức và các phép toán về số phức')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">15. Số phức và các phép toán về số phức </a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">15. Số phức và các phép toán về số phức </a>
                        </div>
                        @endif
                        @if($baihoc=='Biểu diễn hình học số phức')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">16. Biểu diễn hình học số phức</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">16. Biểu diễn hình học số phức</a>
                        </div>
                        @endif
                        @if($baihoc=='Dạng lượng giác của số phức')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">17. Dạng lượng giác của số phức</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">17. Dạng lượng giác của số phức</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Giải phương trình số phức')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">18. Giải phương trình số phức</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">18. Giải phương trình số phức</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Casio và số phức')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">19. Casio và số phức</a>
                            <br>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">19. Casio và số phức</a>
                            <br>
                        </div>
                        @endif
                        @if($baihoc=='Đường thẳng và mặt phẳng. Quan hệ song song, vuông góc')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">20. Đường thẳng và mặt phẳng. Quan hệ song song, vuông góc</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">20. Đường thẳng và mặt phẳng. Quan hệ song song, vuông góc</a>
                        </div>
                        @endif
                        @if($baihoc=='Khoảng cách')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">21. Khoảng cách</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">21. Khoảng cách</a>
                        </div>
                        @endif
                        @if($baihoc=='Khoảng cách giữa hai đường thẳng chéo nhau')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">22. Khoảng cách giữa hai đường thẳng chéo nhau</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">22. Khoảng cách giữa hai đường thẳng chéo nhau</a>
                        </div>
                        @endif
                        @if($baihoc=='Góc')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">23. Góc</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">23. Góc</a>
                        </div>
                        @endif
                        @if($baihoc=='Mối liên hệ giữa khoảng cách và góc')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">24. Mối liên hệ giữa khoảng cách và góc</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">24. Mối liên hệ giữa khoảng cách và góc</a>
                        </div>
                        @endif
                        @if($baihoc=='Khối đa diện. Khối đa diện đều')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">25. Khối đa diện. Khối đa diện đều</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">25. Khối đa diện. Khối đa diện đều</a>
                        </div>
                        @endif
                        @if($baihoc=='Thể tích khối đa diện')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">26. Thể tích khối đa diện</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">26. Thể tích khối đa diện</a>
                        </div>
                        @endif
                        @if($baihoc=='Mặt tròn xoay. Diện tích. Thể tích')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">27. Mặt tròn xoay. Diện tích. Thể tích</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">27. Mặt tròn xoay. Diện tích. Thể tích</a>
                        </div>
                        @endif
                        @if($baihoc=='Vector trong không gian')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">28. Vector trong không gian</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">28. Vector trong không gian</a>
                        </div>
                        @endif
                        @if($baihoc=='Phương trình mặt cầu, mặt phẳng, đường thẳng')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">29. Phương trình mặt cầu, mặt phẳng, đường thẳng</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">29. Phương trình mặt cầu, mặt phẳng, đường thẳng</a>
                        </div>
                        @endif
                        @if($baihoc=='Áp dụng casio tính hình học tọa độ Oxyz')
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #FF0000; font-family: 'Mali', cursive; margin-bottom: 30px">30. Áp dụng casio tính hình học tọa độ Oxyz</a>
                        </div>
                        @else
                        <div style="margin-bottom: 10px">
                            <a class="linkbaihoc" name="baihoc" style="font-size: 1rem; font-weight: 600; color: #005DA5; font-family: 'Mali', cursive; margin-bottom: 30px">30. Áp dụng casio tính hình học tọa độ Oxyz</a>
                        </div>
                        @endif                     
                        
                        
                        
                    </div>
                </div>
            </div>
            
            <div class="card" style="border: 0 solid transparent!important; margin-bottom: 20px">
                <div class="card-body">
                    <div style="display: flex; flex-direction: row; align-items: center; justify-content: flex-start;">
                        <i class="fas fa-filter fa-2x" style="color: #FF0000; margin-right: 10px"></i>
                        <p style="font-size: 24px; font-weight: 600; color: black; font-family: 'Mali', cursive;">Bộ lọc</p>
                    </div>

                    <div class="container-fluid" style="margin-top: 20px">
                        <div class="row">
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important">
                                @if($loai == 'lythuyet')
                                <button id="lythuyet" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Lý thuyết</button>
                                @else
                                <button id="lythuyet" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Lý thuyết</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important">
                                @if($loai == 'baitap')
                                <button id="baitap" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Bài tập</button>
                                @else
                                <button id="baitap" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Bài tập</button>
                                @endif
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4" style="padding-left: 0px!important; padding-right: 0px!important">
                                @if($loai == 'meo')
                                 <button id="meo" class="btn" style="width: 100%; background-color: #00B568; border-radius: 30px; color: white; font-family: 'Mali', cursive;">Mẹo</button>
                                @else
                                <button id="meo" class="btn" style="width: 100%; background-color: transparent; border-radius: 30px; color: black; font-family: 'Mali', cursive;">Mẹo</button>
                                @endif
                            </div>

                        </div>
                    </div>
                    <hr>
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
                        <a id="btnOK" class="btn btn-click" style="color: white; background-color: #005DA5; width: 115px; height: 34px; border-radius: 30px; font-family: 'Mali', cursive;">OK</a>
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