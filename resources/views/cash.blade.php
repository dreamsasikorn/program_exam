@extends('navbar')

@section('content')
<div class="container">
    <form method="POST" action="calculate">
        {{csrf_field()}}
        <p class="font">คำนวณเงินทอน</p>
        <div class="input-group mb-3 space">
            <span class="input-group-text font">ราคาสินค้า</span>
            <input type="number" class="form-control font" name="priceproducts" value={{$priceproducts}} required>
            <span class="input-group-text font">บาท</span>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text font">เงินที่รับมา</span>
            <input type="number" class="form-control font" name="amount" value={{$amount}} required>
            <span class="input-group-text font">บาท</span>
        </div>
        <button type="submit" class="btn btn-success d-grid gap-2 mx-auto font">คำนวณ</button>
    </form>
    <p class="font align">เงินทอน : {{$totalback}} บาท</p>
    <table class="table font align">
        <thead>
            <tr>
                <th class="col-6 table-active font ">ธนบัตร/เหรียญ</th>
                <th class="col-6 font">จำนวน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>500</td>
                <td>{{$cashback[0]}}</td>
            </tr>

            <tr>
                <td>100</td>
                <td>{{$cashback[1]}}</td>
            </tr>

            <tr>
                <td>50</td>
                <td>{{$cashback[2]}}</td>
            </tr>

            <tr>
                <td>20</td>
                <td>{{$cashback[3]}}</td>
            </tr>

            <tr>
                <td>10</td>
                <td>{{$cashback[4]}}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{$cashback[5]}}</td>
            </tr>

            <tr>
                <td>1</td>
                <td>{{$cashback[6]}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection