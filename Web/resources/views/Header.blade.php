            <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container"><div class="menu_close" style="color: black"></div></div>
                <form action="#" class="menu_search_form">
                    <input type="text" class="menu_search_input" placeholder="Tìm kiếm" required="required" style="border: 1px solid #005DA5!important; border-radius: 30px;">
                    <button class="menu_search_button"><i class="fa fa-search" style="color: #FF0000" aria-hidden="true"></i></button>
                </form>
                <ul>
                    <li class="menu_item"><a id="menu-small-1" href="{{url('tongon')}}" style="font-family: 'Mali', cursive;">Tổng ôn</a></li>
                    <li class="menu_item"><a id="menu-small-2" href="{{url('thithu')}}" style="font-family: 'Mali', cursive;">Thi thử</a></li>
                    <li class="menu_item"><a id="menu-small-3" href="{{url('diendan')}}" style="font-family: 'Mali', cursive;">Diễn đàn</a></li>
                </ul>
            </div>
            
        </div>


            <nav class="header" id="header">
                <div>
                    <div class="header_top">
                        <div class="container">
                            <div class="row">
                              
                                <div class="col" >
                                    <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="logo">
                                            <i class="fas fa-graduation-cap fa-3x" style="color: #005DA5"></i>
                                            <a href="{{url('/')}}" style="font-weight: 0!important; font-family: 'Bangers', cursive;">Ôn thi THPT Quốc Gia</a>    
                                        </div>
                                        <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                            <div class="header_top_nav">
                                                <form action="/OnThiTHPTQG/public/timkiem" id="search_container_form" class="search_container_form">
                                                    <input type="text" class="search_container_input" placeholder="Tìm kiếm" required="required" style="background-color: #F8F8F8;border-radius: 30px">
                                                    <button id="btnSearch" class="search_container_button" style="background-color: #F8F8F8; border-top-right-radius: 30px;border-bottom-right-radius: 30px;"><i class="fa fa-search" aria-hidden="true" style="color: #FF0000;"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="header_nav" id="header_nav_pin">
                        <div class="header_nav_inner">
                            <div class="header_nav_container">
                                <div class="container">
                                    <div class="row">
                                      
                                        <div class="col">
                                            <div class="header_nav_content d-flex flex-row justify-content-start" style="align-items: flex-end;">
                                                <nav class="main_nav">
                                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                                        <li>  
                                                            <a id="menu1" style=" color: #FF0000 " href="{{url('tongon')}}">Tổng ôn</a>   
                                                        </li>
                                                        <li ><a id="menu2" href="{{url('thithu')}}" style="color: #00B568">Thi thử</a></li>
                                                        <li ><a id="menu3" href="{{url('diendan')}}" style="color: #005DA5">Diễn đàn</a></li>
                                                    </ul>
                                                </nav>
                                                
                                                <div id="DaDangNhap" style="display: none!important;" class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
                                                    <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto" style="margin-right: 20px">
                                                    <i class="fas fa-bell fa-2x" class="nav-link dropdown-toggle" id="userDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown1">
                                                      <div class="dropdown-item" style="display: flex; align-items: center;">
                                                          <p
                                                                  style="color: #FF0000; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px; float: right;">Thông báo</p>

                                                      </div>
                                                      <div class="dropdown-divider"></div>
                                                      <div style="overflow-y: scroll; height: 230px">
                                                      <div class="dropdown-item" style="display: flex; align-items: center;">
                                                          <img class="img-profile rounded-circle"
                                                                src="images/art.jpg" width="40" height="40" 
                                                                style="float: left; margin-right: 10px">
                                                          <div style="display: flex; flex-direction: row;">
                                                              <p
                                                                  style="color: #00B568; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px">Thuy Duong</p>
                                                              <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 14px">đã trả lời bình luận của bạn
                                                              </p>
                                                          </div>

                                                      </div>
                                                      <div class="dropdown-divider"></div>
                                                      <div class="dropdown-item" style="display: flex; align-items: center;">
                                                          <img class="img-profile rounded-circle"
                                                                src="images/art.jpg" width="40" height="40" 
                                                                style="float: left; margin-right: 10px">
                                                          <div style="display: flex; flex-direction: row;">
                                                              <p
                                                                  style="color: #00B568; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px">Thuy Duong</p>
                                                              <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 14px">đã trả lời bình luận của bạn
                                                              </p>
                                                          </div>

                                                      </div>
                                                      <div class="dropdown-divider"></div>
                                                      <div class="dropdown-item" style="display: flex; align-items: center;">
                                                          <img class="img-profile rounded-circle"
                                                                src="images/art.jpg" width="40" height="40" 
                                                                style="float: left; margin-right: 10px">
                                                          <div style="display: flex; flex-direction: row;">
                                                              <p
                                                                  style="color: #00B568; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px">Thuy Duong</p>
                                                              <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 14px">đã trả lời bình luận của bạn
                                                              </p>
                                                          </div>

                                                      </div>
                                                      <div class="dropdown-divider"></div>
                                                      <div class="dropdown-item" style="display: flex; align-items: center;">
                                                          <img class="img-profile rounded-circle"
                                                                src="images/art.jpg" width="40" height="40" 
                                                                style="float: left; margin-right: 10px">
                                                          <div style="display: flex; flex-direction: row;">
                                                              <p
                                                                  style="color: #00B568; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px">Thuy Duong</p>
                                                              <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 14px">đã trả lời bình luận của bạn
                                                              </p>
                                                          </div>

                                                      </div>
                                                      <div class="dropdown-divider"></div>
                                                      <div class="dropdown-item" style="display: flex; align-items: center;">
                                                          <img class="img-profile rounded-circle"
                                                                src="images/art.jpg" width="40" height="40" 
                                                                style="float: left; margin-right: 10px">
                                                          <div style="display: flex; flex-direction: row;">
                                                              <p
                                                                  style="color: #00B568; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px">Thuy Duong</p>
                                                              <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 14px">đã trả lời bình luận của bạn
                                                              </p>
                                                          </div>

                                                      </div>
                                                      <div class="dropdown-divider"></div>
                                                      <div class="dropdown-item" style="display: flex; align-items: center;">
                                                          <img class="img-profile rounded-circle"
                                                                src="images/art.jpg" width="40" height="40" 
                                                                style="float: left; margin-right: 10px">
                                                          <div style="display: flex; flex-direction: row;">
                                                              <p
                                                                  style="color: #00B568; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px">Thuy Duong</p>
                                                              <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 16px">đã trả lời bình luận của bạn
                                                              </p>
                                                          </div>

                                                      </div>
                                                      <div class="dropdown-divider"></div>
                                                      <div class="dropdown-item" style="display: flex; align-items: center;">
                                                          <img class="img-profile rounded-circle"
                                                                src="images/art.jpg" width="40" height="40" 
                                                                style="float: left; margin-right: 10px">
                                                          <div style="display: flex; flex-direction: row;">
                                                              <p
                                                                  style="color: #00B568; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px">Thuy Duong</p>
                                                              <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 14px">đã trả lời bình luận của bạn
                                                              </p>
                                                          </div>

                                                      </div>
                                                      <div class="dropdown-divider"></div>
                                                      <div class="dropdown-item" style="display: flex; align-items: center;">
                                                          <img class="img-profile rounded-circle"
                                                                src="images/art.jpg" width="40" height="40" 
                                                                style="float: left; margin-right: 10px">
                                                          <div style="display: flex; flex-direction: row;">
                                                              <p
                                                                  style="color: #00B568; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px">Thuy Duong</p>
                                                              <p style="color: #6B6B6B; font-family: 'Mali',cursive; font-size: 14px">đã trả lời bình luận của bạn
                                                              </p>
                                                          </div>

                                                      </div>
                                                      </div>
                                                      <hr>
                                                      <div class="dropdown-item" style="display: flex; align-items: center; justify-content: flex-end;">
                                                          <p
                                                                  style="color: #005DA5; font-family: 'Mali',cursive; font-weight: 600; font-size: 14px; margin-bottom: 0!important; margin-right: 5px; float: right;">Xóa hết</p>

                                                      </div>
                                                  </div>
                                              </div>
                                              <div>
                                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex;">
                                                        <span style="font-size: 20px; font-family: 'Mali', cursive; color: #6B6B6B!important; margin-top: 7px; margin-right: 10px">Duong Thuy</span>
                                                        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/45x45">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="#"style="font-size: 18px!important; font-family: 'Mali', cursive;">
                                                          <i class="fas fa-user fa-sm fa-fw mr-2" style="color: #005DA5"></i>
                                                          Đổi mật khẩu
                                                      </a>
                                                      <a class="dropdown-item" href="{{url('lichsu')}}"style="font-size: 18px!important; font-family: 'Mali', cursive;">
                                                          <i class="fas fa-list fa-sm fa-fw mr-2" style="color: #005DA5"></i>
                                                          Lịch sử làm bài
                                                      </a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"style="font-size: 18px!important; font-family: 'Mali', cursive;">
                                                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2" style="color: #005DA5"></i>
                                                          Đăng xuất
                                                      </a>
                                                  </div>
                                                </div>
                                              </div>

                                                <div id="ChuaDangNhap" style="display: none!important;" class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
                                                    
                                              <div>
                                                   <nav class="main_nav">
                                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                                        <li>  
                                                            <a id="menu5" style=" color: #FF0000; margin-top: 9px " href="#placeLogin">ĐĂNG NHẬP</a>   
                                                        </li>
                                                        <li ><a id="menu4" href="#placeLogin" style="color: #00B568; margin-top: 9px ">ĐĂNG KÝ</a></li>
                                                    </ul>
                                                </nav>
                                                </div>
                                              </div>
                                              
                                          
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>  
              </div>
          </nav>

<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/header.js"></script>