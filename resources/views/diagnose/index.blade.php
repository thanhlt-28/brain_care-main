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
                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" placeholder="Enter name" name="name" value="{{old('name')}}">
                                            @if ($errors->has('name'))
                                            <span style="color: red" class="help-block">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input type="number" id="amount" class="form-control" placeholder="Enter amount" name="amount" value="{{old('amount')}}">
                                            @if ($errors->has('amount'))
                                            <span style="color: red" class="help-block">{{ $errors->first('amount') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <input type="text" id="type" class="form-control" placeholder="Enter Type" name="type" value="{{old('type')}}">
                                            @if ($errors->has('type'))
                                            <span style="color: red" class="help-block">{{ $errors->first('type') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="grouptype">Grouptype</label>
                                            <input type="text" id="grouptype" class="form-control" placeholder="Enter Grouptype" name="grouptype" value="{{old('grouptype')}}">
                                            @if ($errors->has('grouptype'))
                                            <span style="color: red" class="help-block">{{ $errors->first('grouptype') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="market">Market</label>
                                            <input type="text" id="market" class="form-control" placeholder="Enter Market" name="market" value="{{old('market')}}">
                                            @if ($errors->has('market'))
                                            <span style="color: red" class="help-block">{{ $errors->first('market') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="begin">Begin</label>
                                            <input type="text" id="begin" class="form-control" placeholder="Enter Begin" name="begin" value="{{old('begin')}}">
                                            @if ($errors->has('begin'))
                                            <span style="color: red" class="help-block">{{ $errors->first('begin') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="treatment">Treatment</label>
                                    <input type="text" id="treatment" class="form-control" placeholder="Enter Treatment" name="treatment" value="{{old('treatment')}}">
                                    @if ($errors->has('treatment'))
                                    <span style="color: red" class="help-block">{{ $errors->first('treatment') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="national">National</label>
                                    <input type="text" id="national" class="form-control" placeholder="Enter National" name="national" value="{{old('national')}}">
                                    @if ($errors->has('national'))
                                    <span style="color: red" class="help-block">{{ $errors->first('national') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div id="search-ajax">
                            </div>
                        </div>
                    </div>
                </form>

                <!-- <h2 class="text-center">Hướng dẫn thiết giao diện trang giỏ hàng bằng Bootstrap</h2>
                <div class="container">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:50%">Tên sản phẩm</th>
                                <th style="width:10%">Giá</th>
                                <th style="width:8%">Số lượng</th>
                                <th style="width:22%" class="text-center">Thành tiền</th>
                                <th style="width:10%"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin">Sản phẩm 1</h4>
                                            <p>Mô tả của sản phẩm 1</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">200.000 đ</td>
                                <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
                                </td>
                                <td data-th="Subtotal" class="text-center">200.000 đ</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/174.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin">Sản phẩm 2</h4>
                                            <p>Mô tả của sản phẩm 2</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">300.000 đ</td>
                                <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
                                </td>
                                <td data-th="Subtotal" class="text-center">300.000 đ</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong>Tổng 200.000 đ</strong>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="http://hocwebgiare.com/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                                </td>
                                <td colspan="2" class="hidden-xs"> </td>
                                <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
                                </td>
                                <td><a href="http://hocwebgiare.com/" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div> -->
            </div>
        </div>
    </div>

    <script>
        $("#cnic").focusout(function(e) {
            // alert($(this).val());
            var cnic = $(this).val();
            $.ajax({
                type: "POST",
                url: "{{route('diagnose.index')}}",
                data: {
                    'cnic': cnic
                },
                dataType: 'json',
                success: function(data) {
                    $('#name').val(data.name);
                    $('#mobile_number').val(data.mobile);
                    $('#party_joining_year').val(data.party_joining_year);

                }
            });
        });
    </script>
</body>

</html>

@endsection