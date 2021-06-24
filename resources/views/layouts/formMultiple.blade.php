<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row mt-5">
        <div class="container-wraper">
            <div class="row">
                <div class="col-md-12 offset-md-0">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Kê đơn thuốc</h5>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{route('stores')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input id="medicineName" name="Name" type="text" class="typeahead form-control" placeholder="Tên thuốc ...">
                                    <!-- For displaying selected option value from autocomplete suggestion -->
                                    <input type="text" id='mediId' name="id" readonly>

                                    <input type="text" id='type' name="type" readonly>
                                    <div id="search-ajax">
                                    </div>

                                    <div id="content" style="clear: both">

                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button class="btn btn-success" type="submit"> Nhập </button>
                                </div>
                            </form>
                            <form class="form" method="post" action="">
                                @csrf
                                <table class="table table-bordered">
                                    <tr>
                                        <th><input class='check_all' type='checkbox' onclick="select_all()" /></th>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                    </tr>
                                    <tr>
                                        <td><input type='checkbox' class='chkbox' /></td>
                                        <td><span id='sn'>1.</span></td>
                                        <td>
                                            <input id="medicineName" name="Name" type="text" class="typeahead form-control" placeholder="Tên thuốc ...">
                                            <div id="search-ajax">
                                            </div>
                                            <input class="form-control autocomplete_txt" type='text' data-type="medicineName" id='medicineName' placeholder="Tên thuốc.." name='Name' />
                                        </td>
                                        <td><input class="form-control autocomplete_txt" type='text' data-type="type" id='type_code_1' name='type' /> </td>
                                    </tr>
                                </table>
                                <button type="button" class='btn btn-danger delete'>- Delete</button>
                                <button type="button" class='btn btn-success addbtn'>+ Add More</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(".delete").on('click', function() {
                $('.chkbox:checkbox:checked').parents("tr").remove();
                $('.check_all').prop("checked", false);
                updateSerialNo();
            });
            var i = $('table tr').length;
            $(".addbtn").on('click', function() {
                count = $('table tr').length;

                var data = "<tr><td><input type='checkbox' class='chkbox'/></td>";
                data += "<td><span id='sn" + i + "'>" + count + ".</span></td>";
                data += "<td><input class='form-control autocomplete_txt' type='text' data-type='medicineName' id='medicineName" + i + "' name='Name'/></td>";
                data += "<td><input class='form-control autocomplete_txt' type='text' data-type='type' id='type_code_1" + i + "' name='type'/></td></tr>";
                $('table').append(data);
                i++;
            });

            function select_all() {
                $('input[class=chkbox]:checkbox').each(function() {
                    if ($('input[class=check_all]:checkbox:checked').length == 0) {
                        $(this).prop("checked", false);
                    } else {
                        $(this).prop("checked", true);
                    }
                });
            }

            function updateSerialNo() {
                obj = $('table tr').find('span');
                $.each(obj, function(key, value) {
                    id = value.id;
                    $('#' + id).html(key + 1);
                });
            }
        </script>
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
                                    output += '<li><a href="#" class="ml-2" style="color:black; font-weight: bold">' + value.Name + ' </a></li>';

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

                $(document).on('click', 'li', function(ui, event) {
                    console.log(ui.item)
                    $('#medicineName').val($(this).text());
                    $('#mediId').val($(this).text());
                    $('#type').val($(this).text());
                    $('#search-ajax').fadeOut();
                    return false;
                })
            });
        </script>
    </div>
</div>