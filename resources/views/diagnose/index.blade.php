@extends('layouts.main')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Post</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="container-wraper">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Launch
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>Tooltips in a modal</h5>
                                <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="form" method="post" action="">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th><input class='check_all' type='checkbox' onclick="select_all()" /></th>
                            <th>S. No</th>
                            <th>Country Name</th>
                            <th>Country code</th>
                        </tr>
                        <tr>
                            <td><input type='checkbox' class='chkbox' /></td>
                            <td><span id='sn'>1.</span></td>
                            <td><input class="form-control autocomplete_txt" type='text' data-type="medicineName" id='medicineName_1' name='medicineName' /></td>
                            <td><input class="form-control autocomplete_txt" type='text' data-type="type" id='type_code_1' name='type' /> </td>
                        </tr>
                    </table>
                    <button type="button" class='btn btn-danger delete'>- Delete</button>
                    <button type="button" class='btn btn-success addbtn'>+ Add More</button>
                </form>
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
            data += "<td><input class='form-control autocomplete_txt' type='text' data-type='medicineName' id='medicineName_1" + i + "' name='medicineName'/></td>";
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
    <script>
        //autocomplete script

        $(document).ready(function() {
            $('#medicineName').keyup(function() {
                var data = $(this).val();
                if (data != '') {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{route('getallfields')}}",
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
</body>

@endsection