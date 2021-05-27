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
    <h3>Foydalanuvchi qo'shish</h3>
  <form action="{{ route('AddFoydalanuvchi')}}" method="post" enctype="multipart/form-data" >
    <label for="fname">Foydalanuvchi Ismi</label>
    <input type="text" name="ism" placeholder="Foydalanuvchi Ismi..">
@csrf
    <label for="lname">Foydalanuvchi Familiyasi</label>
    <input type="text" name="familiya" placeholder="Foydalanuvchi Familiyasi..">

    <label for="lname">Foydalanuvchi Sharifi</label>
    <input type="text" name="sharif" placeholder="Foydalanuvchi Sharifi.." >

    <label for="lname">Foydalanuvchi Tug'ilgan sanasi</label>
    <input type="date" name="sana" placeholder="Foydalanuvchining Tug'ilgan sanasi.." >

    <label for="lname">Foydalanuvchi pasport ma'lumotlari</label>
    <input type="text" name="pass" placeholder="Foydalanuvchining pasport ma'lumotlari.." >

    <label for="lname">Foydalanuvchi karta raqami</label>
    <input type="text" name="karta_raqam" placeholder="Foydalanuvchining karta raqami.." >

  <label for="lname">Foydalanuvchi Rasmi</label>
    <input type="file" name="file" placeholder="Foydalanuvchining Rasmi.." >
    
    <input type="submit" value="Saqlash">
  </form>
</div>
</div>

</body>
</html>

