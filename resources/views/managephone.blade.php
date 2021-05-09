@extends('navbar')

@section('content')

<p class="font align">รายชื่อผู้ติดต่อ</p>
<div class="container d-flex justify-content-end">

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal" data-bs-whatever="@mdo">เพิ่มรายชื่อผู้ติดต่อ</button>
</div>
<div class="container">
    <table class="table font">

        <tbody>
            @foreach($contactsdata as $data)
            <tr>
                <td>
                    @if($data->picture != null)
                    <img style="width: 40px; height:40px; border-radius:20px;" src="{{asset($data->picture)}}">

                    @else
                    <img style="width: 40px; height:40px;" src="user.png">
                    @endif
                </td>


                <td>{{$data->name}}</td>
                <td><a href="phonedetail/{{$data->contacts_id}}">ข้อมูล</a></td>
                <td><a href="deletecontacts/{{$data->contacts_id}}">ลบ</a></td>
            </tr>
            @endforeach
    </table>
</div>
<form method="POST" action="phoneAddress" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="modal fade font_modal" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font" id="exampleModalLabel">เพิ่มรายชื่อผู้ติดต่อ</h5>
                </div>
                <div class="modal-body">

                    <label>Profile</label>
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                        <input id="upload" type="file" name="picture" class="form-control border-0">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="name" id="recipient-name" required>
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">มือถือ</label>
                        <input type="tel" class="form-control" name="telephone" id="message-text" pattern="[0-9]{10}" required>
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">อีเมล์</label>
                        <input type="email" name="email" class="form-control" id="message-text">
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">โน๊ตย่อ</label>
                        <input type="text" name="note" class="form-control" id="message-text">
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