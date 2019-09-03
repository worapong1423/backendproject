<form method="post" action="/admin/product/{{$products->Product_id}}/edit">
{{csrf_field()}}

ชื่่อสินค้า : <input type ="text" name="Product_name" value="{{$products->Product_name}}"/></br>
จำนวนที่รับมา : <input type ="text" name="Product_amountin"value="{{$products->Product_amountin}}"/></br>
จำนวนที่ส่งกลับ : <input type ="text" name="Product_amountout"value="{{$products->Product_amountout}}"/></br>
<button type="submit">submit</button>
</form>

