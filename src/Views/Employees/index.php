<h1>&#128590; Nhân viên</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/oop/src/employees/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new employee</a>
        <tr>
            <th>id</th>
            <th>Họ Tên</th>
            <th>Năm sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Công việc</th>
            <th>Ngày nâng lương</th>
            <th>Mức lương</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($employees as $employee)
        {
            echo '<tr>';
            echo "<td>" . $employee['id'] . "</td>";
            echo "<td>" . $employee['name'] . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($employee['birthday'])) . "</td>";
            echo "<td>" . $employee['gender'] . "</td>";
            echo "<td>" . $employee['address'] . "</td>";
            echo "<td>" . $employee['task'] . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($employee['ngay_nang_luong'])) . "</td>";
            echo "<td>" . $employee['muc_luong'] . "</td>";

            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/oop/src/employees/edit/" . $employee["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/oop/src/employees/delete/" . $employee["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>