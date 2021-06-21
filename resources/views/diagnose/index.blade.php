@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
    <div class="container-wraper">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Search {{route('autocomplete')}}
                    </div>
                    <div class="card-body">
                        <form>
                            @csrf
                            <div class="form-group">
                                <input id="keyword" name="keyword" type="text" class="typeahead form-control" placeholder="Search ...">
                                <div id="search-ajax"></div>
                                {{-- <button type="submit">submit</button> --}}

                                <div id="content" style="clear: both"></div>
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
            $('#keyword').keyup(function() {
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
                $('#keyword').val($(this).text());
                $('#search-ajax').fadeOut();
            })
        });
    </script>

</html>

@endsection