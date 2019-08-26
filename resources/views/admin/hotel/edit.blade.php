<form method="post" action="/admin/hotel/{{$hotels->Hotel_id}}/edit">
{{csrf_field()}}

ชื่อโรงแรม : <input type ="text" name="Hotel_name" value="{{$hotels->Hotel_name}}"/></br>
เบอร์โทรศัพท์ : <input type ="text" name="Hotel_tel"value="{{$hotels->Hotel_tel}}"/></br>
เลขใบกำกับภาษี : <input type ="text" name="Hotel_taxid"value="{{$hotels->Hotel_taxid}}"/></br>
ที่่อยู่ : <input type ="text" name="Hotel_address"value="{{$hotels->Hotel_address}}"/></br>
<button type="submit">submit</button>
</form>

