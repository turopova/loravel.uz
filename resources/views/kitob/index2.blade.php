<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<div class="container">

  
  <div style="margin: 0 auto;width: 600px;">
    <h3>Kitob qo'shish</h3>
  <form action="{{ route('AddBooks')}}" method="post" enctype="multipart/form-data" >
    <label for="fname">Book name</label>
    <input type="text" name="name" placeholder="Book name..">
@csrf
    <label for="lname">Nashriyot uyi</label>
    <input type="text" name="nashir" placeholder="Book nashir uyi..">

    <label for="lname">Kitob chiqqan yili</label>
    <input type="number" name="yil" placeholder="Kitob chiqqan yili.." min=1>

    <label for="lname">Kitoblar soni</label>
    <input type="number" name="son" placeholder="Kitoblar soni.." min=1>

    <label for="country">Kitob bo'limi</label>
    <select  name="bolim">
            @foreach ($bolim as $x)
            <option value="{{$x->id}}">{{$x->name}} </option>
            @endforeach
    </select>
  
    <input type="submit" value="Saqlash">
  </form>
</div>
</div>

</body>
</html>

