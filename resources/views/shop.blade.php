@extends('navbar')

@section('content')

<div class="container">
    <div class="mb-3">
        <h3 class="font">โปรแกรมเปรียบเทียบร้านค้า</h3><br>
        <figure class="text-center">
            <div class="row">
                <div class="col-6">
                    <blockquote class="blockquote">
                        <p class="font">ร้านที่ 1 </p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        ราคาสินค้าชิ้นละ 25 บาท เมื่อซื้อ 10 ชิ้นขึ้นไปลดให้ 20%
                    </figcaption>
                </div>
                <div class="col-6">
                    <blockquote class="blockquote">
                        <p class="font">ร้านที่ 2 </p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        ราคาสินค้าชิ้นละ 30 บาท เมื่อซื้อสินค้า 3 ชิ้น แถมให้ 1 ชิ้น
                    </figcaption>
                </div>
            </div>
        </figure>

        <label class="font">กรุณาป้อนจำนวนเงินที่มี</label><br>
        <form method="POST" action="compare">
            {{csrf_field()}}
            <input type="number" class="form-control font" name="money" id="recipient-name" value={{$money}} placeholder="จำนวนเงิน" required>
            <br>
            <button type="submit" class="btn btn-primary">เปรียบเทียบร้านค้า</button>
        </form>
    </div>

    <div class="mb-3 font align">
        <p>มีเงิน {{$money}}</p>

        <p>ซื้อร้านที่1 ได้ {{$piece_products[0]}} ชิ้น เหลือเงิน {{$amount[0]}} บาท</p>

        <p>ซื้อร้านที่2 ได้ {{$piece_products[1]}} ชิ้น เหลือเงิน {{$amount[1]}} บาท</p>

        @if($shop !=0)
        <p>แนะนำให้ซื้อร้านที่ {{$shop}} จะคุ้มที่สุด</p>
        @endif


    </div>
</div>
@endsection