<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row mt-5">
        <div class="container-wraper">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Kê đơn thuốc</h5>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{route('stores')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input id="medicineName" name="Name" type="text" class="typeahead form-control" placeholder="Tên thuốc ...">

                                    <div id="search-ajax">
                                    </div>
                                    <table class="table table-success table-striped mt-3">
                                        <tbody>
                                            <!-- <tr>
                                                <th>CustID</th>
                                                <th>Số lượng</th>
                                                <th>Loại thuốc</th>
                                            </tr> -->
                                            <tr>
                                                <td>
                                                    <input class="form-control" name="CustID" type="text" placeholder="ID khách hàng">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="Amount" type="text" placeholder="Số lượng">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="Type" type="text" placeholder="Loại thuốc">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- <tr>
                                                <th>Nhóm thuốc</th>
                                                <th>Thị trường</th>
                                                <th>Bắt đầu</th>
                                            </tr> -->
                                            <tr>

                                                <td>
                                                    <input class="form-control" name="Grouptype" type="text" placeholder="Nhóm thuốc">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="Market" type="text" placeholder="Thị trường">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="Begin" type="text" placeholder="Bắt đầu">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- <tr>
                                                <th>Điều trị</th>
                                                <th>Công ty</th>
                                                <th>Quốc gia</th>
                                            </tr> -->
                                            <tr>

                                                <td>
                                                    <input class="form-control" name="Treatment" type="text" placeholder="Điều trị">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="Company" type="text" placeholder="Công ty">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="National" type="text" placeholder="Quốc gia">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div id="content" style="clear: both"></div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button class="btn btn-success" type="submit"> Nhập </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                $('#medicineName').keyup(function() {
                    var data = $(this).val();
                    if (data != '') {
                        var _token = $('input[name="_token"]').val();
                        $.ajax({
                            url: "{{route('autocomplete')}}",
                            method: 'POST',
                            data: {
                                data: data,
                                _token: _token
                            },
                            success: function(data) {
                                let medicine = JSON.parse(data);
                                let output = '<ul class="dropdown-menu" style="display:block; position:relative;">';

                                let content = '';
                                $.each(medicine, function(index, value) {
                                    // console.log(index, value);
                                    //search-ajax
                                    output += '<li><a href="#" class="ml-2" style="color:black; font-weight: bold">' + value.Name + '</a></li>';

                                    //content
                                    // content += "<h3>Name: " + value.Name + "; Type: " + value.Type + "</h3>";
                                });
                                output += "</ul>";

                                $('#search-ajax').fadeIn();
                                $('#search-ajax').html(output);
                                $('#content').html(content);
                            }
                        })
                    } else {
                        $('#search-ajax').fadeOut();
                    }
                });

                $(document).on('click', 'li', function() {
                    $('#medicineName').val($(this).text());
                    $('#search-ajax').fadeOut();
                })
            });
        </script>
    </div>
</div>