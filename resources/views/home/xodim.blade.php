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
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=file], select {
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
    <h3>Xodim qo'shish</h3>
  <form action="{{ route('AddXodim')}}" method="post" enctype="multipart/form-data" >
    <label for="fname">Xodim Ismi</label>
    <input type="text" name="ism" placeholder="Xodim Ismi..">
@csrf
    <label for="lname">Xodim Familiyasi</label>
    <input type="text" name="familiya" placeholder="Xodim Familiyasi..">

    <label for="lname">Xodim Sharifi</label>
    <input type="text" name="sharif" placeholder="Xodim Sharifi.." >

    <label for="lname">Xodimning Tug'ilgan sanasi</label>
    <input type="date" name="sana" placeholder="Xodimning Tug'ilgan sanasi.." >

    <label for="lname">Xodimning pasport ma'lumotlari</label>
    <input type="text" name="pass" placeholder="Xodimning pasport ma'lumotlari.." >

  <label for="lname">Xodimning Rasmi</label>
    <input type="file" name="file" placeholder="Xodimning Rasmi.." >
    
    <input type="submit" value="Saqlash">
  </form>
</div>
</div>

</body>
</html>

