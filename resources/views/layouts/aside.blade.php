<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row mt-5">
        <h5 class="mt-2">Kê đơn thuốc</h5>
        <div class="col">
            <form role="form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Tên thuốc..">

                <table class="myTable">
                    <tr class="header">
                        <th>Name</th>
                        <th>Type</th>
                        <th>Country</th>
                    </tr>
                    <tbody id="myTable">
                        @foreach($medis as $me)
                        <tr>
                            <td>{{$me->Name}}</td>
                            <td>{{$me->Type}}</td>
                            <td>{{$me->National}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <h6>Thông tin</h6>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <input type="text" name="CustID" placeholder="ID" width="">
                        <input type="text" name="Name" placeholder="Tên KH">
                        <input type="number" min="0" name="Amount" placeholder="Số lượng">
                        <input type="text" name="Type" placeholder="Loại">
                        <input type="text" name="Grouptype" placeholder="Nhóm">
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="text" name="Market" placeholder="Thị trường">
                        <input type="text" name="Begin" placeholder="Bắt đầu">
                        <input type="text" name="Treatment" placeholder="Điều trị">
                        <input type="text" name="Company" placeholder="Công ty">
                        <input type="text" name="National" placeholder="Quốc gia">
                    </div>
                </div>

                <!-- <table class="table table-success table-striped mt-3">
                        <tbody>
                            <tr>
                                <th>CustID</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control" type="text" placeholder="ID khách hàng">
                                </td>
                                <td>
                                    <input class="form-control" type="text" placeholder="Tên khách hàng">
                                </td>
                                <td>
                                    <input class="form-control" type="text" placeholder="Số lượng">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <th>Grouptype</th>
                                <th>Market</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control" type="text" placeholder="Loại thuốc">
                                </td>
                                <td>
                                    <input class="form-control" type="text" placeholder="Nhóm thuốc">
                                </td>
                                <td>
                                    <input class="form-control" type="text" placeholder="Thị trường">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Begin</th>
                                <th>Treatment</th>
                                <th>Company</th>
                                <th>National</th>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control" type="text" placeholder="Bắt đầu">
                                </td>
                                <td>
                                    <input class="form-control" type="text" placeholder="Điều trị">
                                </td>
                                <td>
                                    <input class="form-control" type="text" placeholder="Công ty">
                                </td>
                                <td>
                                    <input class="form-control" type="text" placeholder="Quốc gia">
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                <!-- <button type="submit" class="btn btn-success mt-2">Lưu</button> -->
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>