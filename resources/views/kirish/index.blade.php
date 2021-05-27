<!DOCTYPE html>
<html>
<style>
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

    <form action="{{ route('muallif') }}" method="post">
        @csrf
        <label for="lname" > Karta raqamingizni kiriting:</label>
        <input type="number" name="karta" placeholder="Karta qaramingiz..">
        <input type="submit" value="ok" >
    </form>

    </div>
</div>

</body>
</html>