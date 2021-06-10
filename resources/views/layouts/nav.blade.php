<nav class="topnav" id="myTopnav" role="navigation">
    <ul>
        <li><a href=" {{route('home')}}">Trang chủ</a></li>
        <li><a href="{{route('about')}}">Giới thiệu</a></li>
        <li><a href="#">Sản phẩm & Dịch vụ <i class="fas fa-chevron-down"></i></a>
            <!-- menu con sổ xuống cấp 1 -->
            <ul>
                <li><a href="#">Nhóm F3</a>
                    <ul>
                        <li><a href="#">Trầm cảm</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="{{route('tram-cam.views')}}">Chẩn đoán</a></li>
                                <li><a href="{{route('tramcam.views')}}">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Hưng cảm</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="">Chẩn đoán</a></li>
                                <li><a href="">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Nhóm F4</a>
                    <ul>
                        <li><a href="#">Lo âu</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="">Chẩn đoán</a></li>
                                <li><a href="">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Hoảng loạn</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="">Chẩn đoán</a></li>
                                <li><a href="">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Ám ảnh</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="">Chẩn đoán</a></li>
                                <li><a href="">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
        </li>
        <li>
            <a href="#">Nhóm CK</a>
            <!-- menu con sổ ngang cấp 2 -->
            <ul>
                <li><a href="#">Mất trí</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="">Chẩn đoán</a></li>
                        <li><a href="">Điều trị</a></li>
                        <li><a href="">Thuốc</a></li>
                    </ul>
                </li>
                <li><a href="#">Động kinh</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="">Chẩn đoán</a></li>
                        <li><a href="">Điều trị</a></li>
                        <li><a href="">Thuốc</a></li>
                    </ul>
                </li>
                <li><a href="#">Nghiện rượu</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="{{route('nghien-ruou.views')}}">Chẩn đoán</a></li>
                        <li><a href="">Điều trị</a></li>
                        <li><a href="">Thuốc</a></li>
                    </ul>
                </li>
                <li><a href="#">Loạn thần</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="">Chẩn đoán</a></li>
                        <li><a href="">Điều trị</a></li>
                        <li><a href="">Thuốc</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    </li>
    <li><a href="{{route('news')}}">Tin tức</a>
        <ul>
            <li><a href="#">Thực tập sinh chuyên đề</a></li>
            <li><a href="#">Sản xuất phần mềm</a></li>
        </ul>
    </li>
    <li><a href="{{route('contact')}}">Liên hệ</a></li>
    <ul class="d-grid gap-2 d-md-flex justify-content-md-end">
        <li>
            <a href="{{route('login')}}">Đăng nhập</a>
        </li>
        <li>
            <a href="{{route('register')}}">Đăng ký</a>
        </li>
        <li>
            <a href="">{{Auth::user()->name}}</a>
        </li>
    </ul>
    </ul>
</nav>