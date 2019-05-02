<h1>&#128119; Kỹ Sư</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/oop/src/engineers/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new engineer</a>
        <tr>
            <th>id</th>
            <th>Họ Tên</th>
            <th>Năm sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Ngành đào tạo</th>
            <th>Ngày nâng lương</th>
            <th>Mức lương</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($engineers as $engineer)
        {
            echo '<tr>';
            echo "<td>" . $engineer['id'] . "</td>";
            echo "<td>" . $engineer['name'] . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($engineer['birthday'])) . "</td>";
            echo "<td>" . $engineer['gender'] . "</td>";
            echo "<td>" . $engineer['address'] . "</td>";
            echo "<td>" . $engineer['branch'] . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($engineer['ngay_nang_luong'])) . "</td>";
            echo "<td>" . $engineer['muc_luong'] . "</td>";

            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/oop/src/engineers/edit/" . $engineer["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/oop/src/engineers/delete/" . $engineer["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>