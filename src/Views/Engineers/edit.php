<h1>Edit engineer</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Tên</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value ="<?php if (isset($engineer["name"])) echo $engineer["name"];?>">
    </div>

    <div class="form-group">
        <label for="description">Ngày Sinh</label>
        <input type="text" class="form-control" id="birthday" placeholder="Enter a birthday" name="birthday" value ="<?php if (isset($engineer["birthday"])) echo $engineer["birthday"];?>">
    </div>
    <div class="form-group">
        <label for="gender">Giới Tính</label>
        <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender" value ="<?php if (isset($engineer["gender"])) echo $engineer["gender"];?>">
    </div>
    <div class="form-group">
        <label for="address">Địa Chỉ</label>
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value ="<?php if (isset($engineer["address"])) echo $engineer["address"];?>">
    </div>
    <div class="form-group">
        <label for="bac">Ngành</label>
        <input type="text" class="form-control" id="bac" placeholder="Enter bac" name="branch" value ="<?php if (isset($engineer["branch"])) echo $engineer["branch"];?>">
    </div>
    <div class="form-group">
        <label for="ngay_nang_luong">Ngày nâng lương</label>
        <input type="text" class="form-control" id="ngay_nang_luong" placeholder="Enter ngay_nang_luong" name="ngay_nang_luong" value ="<?php if (isset($engineer["ngay_nang_luong"])) echo $engineer["ngay_nang_luong"];?>">
    </div>
    <div class="form-group">
        <label for="mucluong">Mức lương</label>
        <input type="text" class="form-control" id="muc_luong" placeholder="Enter mucluong" name="muc_luong" value ="<?php if (isset($engineer["muc_luong"])) echo $engineer["muc_luong"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>