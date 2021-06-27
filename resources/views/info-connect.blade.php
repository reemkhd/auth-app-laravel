<!DOCTYPE html>

<style>
div {
  text-align:center;
}
</style>

<html  dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <title>Laravel</title> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
        </script>
    </head>

    <body>
    <div>

    <form action="{{ route('info_connect.store') }}" method="POST">
    @csrf
        <label  for="name">اسم من يسلم الطلب: </label>
        <input type="text" name="name"><br>
        <br>
        <label  for="numberphone">رقم جوال من يسلم الطلب: </label>
        <input type="text" name="numberphone"><br>
        <br>
        <label  for="birth_date">تاريخ الاستلام:</label>
         <input type="text" id="datepicker" name="birth_date"><br>
        <br>
        <label for="time">وقت الاستلام: </label>
        <select name="time">
            <option value="صباحاً">صباحاً</option>
            <option value="مساءً">مساءً</option>
        </select>
        <br><br>
        <label  for='neighborhood_name'>اسم الحي: </label>
        <input type="text" name='neighborhood_name'><br>
        <br>
        <label  for='house_number'>رقم البيت: </label>
        <input type="text" name='house_number'><br>
        <br>
        <label  for='street_name'>اسم الشارع: </label>
        <input type="text" name='street_name'><br>
        <br>
        <label  for='nearest_landmark'>أقرب معلم: </label>
        <input type="text" name='nearest_landmark'><br>
        <br>
        <button type="submit">إتمام الطلب</button>

    </form>

    <br><br>
    <button type="button" onclick="window.location='{{ url()->previous() }}'">الرجوع إلى الصفحة السابقة</button>
    <br><br>
    <button type="button" onclick="window.location='{{ route('home') }}'">الرجوع إلى الصفحة الرئيسية</button>

    </div>
    </body>
</html>