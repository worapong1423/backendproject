<a href ="/admin/hotel/create" >Create</a>
<table>
    <thead>
        <tr>
            <th>ลำดับที่</th>
            <th>ชื่อโรงแรม</th>
            <th>เบอร์โทรศัพท์</th>
            <th>เลขใบกำกับภาษี</th>
            <th>ที่อยู่</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hotels as $h)
        <tr>
            <td>{{$h->Hotel_id}}</td>
            <td>{{$h->Hotel_name}}</td>
            <td>{{$h->Hotel_tel}}</td>
            <td>{{$h->Hotel_taxid}}</td>
            <td>{{$h->Hotel_address}}</td>
            <td><a href='/admin/hotel/{{$h->Hotel_id}}/edit'>Edit</a></td>
            <td>
            <form method ="post" action="/admin/hotel/{{$h->Hotel_id}}/delete">
                {{csrf_field()}}
                <button type="submit">delete</button></form></td>
        </tr>
        @endforeach
    </tbody>
</table>