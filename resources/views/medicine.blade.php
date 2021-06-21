@extends('layouts.main')
@section('page-title', 'Giới thiệu')
@section('content')

<div class="tab-content" id="myTabContent">
    @php
    $index=1
    @endphp
    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
        <div class="col-md-12 mt-2">
            <div class="card-title mx-auto">
                <h4 class="t">Đơn thuốc</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Họ tên</th>
                            <th>Số lượng</th>
                            <th>Bắt đầu</th>
                            <th>Điều trị</th>
                            <th>Loại</th>
                            <th>Nhóm</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pres as $item)
                        <tr>
                            <td>{{ $item->Name }}</td>
                            <td>{{ $item->Amount }}</td>
                            <td>{{ $item->Begin }}</td>
                            <td>{{ $item->Treatment }}</td>
                            <td>{{ $item->Type }}</td>
                            <td>{{ $item->Grouptype }}</td>
                            <td>
                                <a class="btn btn-info" href="{{route('medicine', $item->id)}}">Xem chi tiết</a>
                                <a class="btn btn-warning" href="{{route('medicine', ['id' => $item->id])}}">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection