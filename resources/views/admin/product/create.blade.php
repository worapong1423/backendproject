<form method="post" action="/admin/product/create">
{{csrf_field()}}
ชื่อสินค้า : <input type ="text" name="Product_name"/></br>
จำนวนที่รับมา : <input type ="text" name="Product_amountin"/></br>
จำนวนที่ส่งกลับ : <input type ="text" name="Product_amountout"/></br>
<button type="submit">submit</button>
</form>
