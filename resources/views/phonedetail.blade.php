@extends('navbar')

@section('content')
<style>
    img {
        border-radius: 10%;
        width: 400px;
        height: auto;
        /* border: 1px solid #d8d4d4; */
        box-shadow: 2px 0px 0px 2px #d8d4d4;
    }

    .font_detail {
        font-family: "K2D", sans-serif;
        font-size: 20px;
    }

    .distance {
        margin-left: 20px;
    }
</style>
<div class="container font_detail">
    <div class="row">
        <div class="col-5 d-flex justify-content-end img_profile">
            @if($detaildata[0]->picture != null)
            <img src="{{asset($detaildata[0]->picture)}}">
            @else
            <img src="{{asset('user.png')}}">
            @endif
        </div>

        <div class="col-7 distance">
            <h3>{{ $detaildata[0]->name }}</h3>
            <hr><br>
            <label>เบอร์โทร: {{ $detaildata[0]->telephone }}</label>
            <hr><br>
            <label>อีเมล์: {{ $detaildata[0]->email }}</label>
            <hr><br>
            <label>บันทึกย่อ: {{ $detaildata[0]->note }}</label>
            <hr>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@mdo">แก้ไข</button>
        </div>

    </div>
</div>

<form method="POST" action={{asset('phoneupdate')}} enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="contacts_id" value={{ $detaildata[0]->contacts_id }}>
    <div class="modal fade font_modal" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font" id="exampleModalLabel">แก้ไข</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="name" id="recipient-name" value={{ $detaildata[0]->name }} required>
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">มือถือ</label>
                        <input type="tel" class="form-control" name="telephone" id="message-text" min="0" max="10" value={{ $detaildata[0]->telephone }} required>
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">อีเมล์</label>
                        <input type="email" name="email" class="form-control" id="message-text" value={{ $detaildata[0]->email }}>
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">โน๊ตย่อ</label>
                        <input type="text" name="note" class="form-control" id="message-text" value={{ $detaildata[0]->note }}>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>

            </div>
        </div>


    </div>
</form>


@endsection