@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 5.8 AutoComplete Search Using Jquery UI - W3Adda</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .container {
            padding: 10%;
            text-align: center;
        }
    </style>
    <script>
        $(function() {
            var projects = [{
                    value: "jquery",
                    label: "jQuery",
                    desc: "the write less, do more, JavaScript library",
                    icon: "jquery_32x32.png"
                },
                {
                    value: "jquery-ui",
                    label: "jQuery UI",
                    desc: "the official user interface library for jQuery",
                    icon: "jqueryui_32x32.png"
                },
                {
                    value: "sizzlejs",
                    label: "Sizzle JS",
                    desc: "a pure-JavaScript CSS selector engine",
                    icon: "sizzlejs_32x32.png"
                }
            ];

            $("#project").autocomplete({
                minLength: 0,
                source: function(request, response) {
                    var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");
                    response($.grep(projects, function(value) {
                        return matcher.test(value.label || value.value || value) ||
                            matcher.test(value.desc);
                    }));
                },
                focus: function(event, ui) {
                    $("#project").val(ui.item.label);
                    return false;
                },
                select: function(event, ui) {
                    $("#project").val(ui.item.label);
                    $("#project-id").val(ui.item.value);
                    $("#project-description").html(ui.item.desc);
                    $("#project-icon").attr("src", "images/" + ui.item.icon);

                    return false;
                }
            }).data("autocomplete")._renderItem = function(ul, item) {
                return $("<li>")
                    .data("item.autocomplete", item)
                    .append("<a>" + item.label + "<br>" + item.desc + "</a>")
                    .appendTo(ul);
            };
        });
    </script>
</head>

<body>
    <div class="container-wraper">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Laravel 5.8 AutoComplete Search Using Jquery UI - W3Adda</h2>
                </div>
                <div class="col-12">
                    <div id="custom-search-input">
                        <div class="input-group">
                            <input id="search" name="name" type="text" class="form-control" placeholder="Search.." />
                        </div>
                        <br>
                        <input id="project" type="text" placeholder="Search.." />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#search").autocomplete({

                source: function(request, response) {
                    $.ajax({
                        url: "{{url('autocomplete')}}",
                        data: {
                            term: request.term
                        },
                        dataType: "json",
                        success: function(data) {
                            var resp = $.map(data, function(obj) {
                                return obj.name;
                            });

                            response(resp);
                        }
                    });
                },
                minLength: 1
            });
        });
    </script>
</body>

</html>

@endsection