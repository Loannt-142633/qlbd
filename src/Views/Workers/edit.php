<h1>Edit worker</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Tên</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value ="<?php if (isset($worker["name"])) echo $worker["name"];?>">
    </div>

    <div class="form-group">
        <label for="description">Ngày Sinh</label>
        <input type="text" class="form-control" id="birthday" placeholder="Enter a birthday" name="birthday" value ="<?php if (isset($worker["birthday"])) echo $worker["birthday"];?>">
    </div>
    <div class="form-group">
        <label for="gender">Giới Tính</label>
        <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender" value ="<?php if (isset($worker["gender"])) echo $worker["gender"];?>">
    </div>
    <div class="form-group">
        <label for="address">Địa Chỉ</label>
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value ="<?php if (isset($worker["address"])) echo $worker["address"];?>">
    </div>
    <div class="form-group">
        <label for="bac">Bậc</label>
        <input type="text" class="form-control" id="bac" placeholder="Enter bac" name="rank" value ="<?php if (isset($worker["rank"])) echo $worker["rank"];?>">
    </div>
    <div class="form-group">
        <label for="ngay_nang_bac">Ngày nâng bậc</label>
        <input type="text" class="form-control" id="ngay_nang_bac" placeholder="Enter ngay_nang_bac" name="ngay_nang_bac" value ="<?php if (isset($worker["ngay_nang_bac"])) echo $worker["ngay_nang_bac"];?>">
    </div>
    <div class="form-group">
        <label for="mucluong">Mức lương</label>
        <input type="text" class="form-control" id="muc_luong" placeholder="Enter mucluong" name="muc_luong" value ="<?php if (isset($worker["muc_luong"])) echo $worker["muc_luong"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>