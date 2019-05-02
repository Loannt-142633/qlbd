<h1>&#128119; Công nhân</h1>
<div class="row col-md-12 centered">
    <div class="container d-flex justify-content-end">
        <form class="form-inline" action="#" method="POST">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </div>
    <table class="table table-striped custab">
        <thead>
        <a href="/oop/src/workers/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new worker</a>
        <tr>
            <th>id</th>
            <th>Họ Tên</th>
            <th>Năm sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Bậc</th>
            <th>Ngày nâng bậc</th>
            <th>Mức lương</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($workers as $worker)
        {
            echo '<tr>';
            echo "<td>" . $worker['id'] . "</td>";
            echo "<td>" . $worker['name'] . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($worker['birthday'])) . "</td>";
            echo "<td>" . $worker['gender'] . "</td>";
            echo "<td>" . $worker['address'] . "</td>";
            echo "<td>" . $worker['rank'] . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($worker['ngay_nang_bac'])) . "</td>";
            echo "<td>" . $worker['muc_luong'] . "</td>";

            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/oop/src/workers/edit/" . $worker["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/oop/src/workers/delete/" . $worker["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>