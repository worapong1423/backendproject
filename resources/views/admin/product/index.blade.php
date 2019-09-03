<a href ="/admin/product/create" >Create</a>
<table>
    <thead>
        <tr>
            <th>ลำดับที่</th>
            <th>ชื่อสินนค้า</th>
            <th>จำนวนที่รับมา</th>
            <th>จำนวนที่ส่งกลับ</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{$p->Product_id}}</td>
            <td>{{$p->Product_name}}</td>
            <td>{{$p->Product_amountin}}</td>
            <td>{{$p->Product_amountout}}</td>
            <td><a href='/admin/product/{{$p->Product_id}}/edit'>Edit</a></td>
            <td>
            <form method ="post" action="/admin/product/{{$p->Product_id}}/delete">
                {{csrf_field()}}
                <button type="submit">delete</button></form></td>
        </tr>
        @endforeach
    </tbody>
</table>
