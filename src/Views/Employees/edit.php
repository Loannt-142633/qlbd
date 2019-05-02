<h1>Edit employee</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Tên</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value ="<?php if (isset($employee["name"])) echo $employee["name"];?>">
    </div>

    <div class="form-group">
        <label for="description">Ngày Sinh</label>
        <input type="text" class="form-control" id="birthday" placeholder="Enter a birthday" name="birthday" value ="<?php if (isset($employee["birthday"])) echo $employee["birthday"];?>">
    </div>
    <div class="form-group">
        <label for="gender">Giới Tính</label>
        <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender" value ="<?php if (isset($employee["gender"])) echo $employee["gender"];?>">
    </div>
    <div class="form-group">
        <label for="address">Địa Chỉ</label>
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value ="<?php if (isset($employee["address"])) echo $employee["address"];?>">
    </div>
    <div class="form-group">
        <label for="bac">Công Việc</label>
        <input type="text" class="form-control" id="bac" placeholder="Enter bac" name="branch" value ="<?php if (isset($employee["task"])) echo $employee["task"];?>">
    </div>
    <div class="form-group">
        <label for="ngay_nang_luong">Ngày nâng lương</label>
        <input type="text" class="form-control" id="ngay_nang_luong" placeholder="Enter ngay_nang_luong" name="ngay_nang_luong" value ="<?php if (isset($employee["ngay_nang_luong"])) echo $employee["ngay_nang_luong"];?>">
    </div>
    <div class="form-group">
        <label for="mucluong">Mức lương</label>
        <input type="text" class="form-control" id="muc_luong" placeholder="Enter mucluong" name="muc_luong" value ="<?php if (isset($employee["muc_luong"])) echo $employee["muc_luong"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>