<form method="post" action="/admin/hotel/create">
{{csrf_field()}}
ชื่อโรงแรม : <input type ="text" name=" Hotel_name"/></br>
เบอร์โทรศัพท์ : <input type ="text" name="Hotel_tel"/></br>
เลขใบกำกับภาษี : <input type ="text" name="Hotel_taxid"/></br>
ที่อยู่: <input type ="text" name="Hotel_address"/></br>
<button type="submit">submit</button>
</form>