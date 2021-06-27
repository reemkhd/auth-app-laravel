<!DOCTYPE html>

<style>
div {
  text-align:center;
  font-size:20px;
}

</style>

<html  dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

    <body>

    <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper_1'); //Input field wrapper
        var fieldHTML = '<div><input type="text" name="furniture[]" size="35" value=""/><br><input type="text" name="furniture_number[]" size="35" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper_2'); //Input field wrapper
        var fieldHTML = '<div><input type="text" name="clothes[]" size="35" value=""/><br><input type="text" name="clothes_number[]" size="35" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>

    <div>
    <!-- <div class="field_wrapper">
        <div>
            <input type="text" name="field_name[]" value=""/>
            <input type="text" name="field_name[]" value=""/>
            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
        </div>
    </div> -->

    <form action="{{ route('donation.store') }}" method="POST" >
    @csrf
    <div class="field_wrapper_1">
        <label for="furniture">أثاث</label>
        <input type="text" name="furniture[]" size="35">
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a><br>
        <input type="text" name="furniture_number[]" placeholder="العدد" size="35"><br>
    </div>
    <div class="field_wrapper_2">
        <br>
        <label for="clothes">ملابس</label>
        <input type="text" name="clothes[]" size="35">
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a><br>
        <input type="text" name="clothes_number[]" placeholder="العدد" size="35"><br>
    </div>
        <br>
        <label for="dishes">الأواني المنزلية</label>
        <input type="text" name="dishes" size="35"><br>
        <input type="text" name="dishes_number" placeholder="العدد" size="35"><br>
        <br>
        <label for="electrical_tools">الأدوات الكهربائية</label>
        <input type="text" name="electrical_tools" size="35"><br>
        <input type="text" name="electrical_tools_number" placeholder="العدد" size="35"><br>
        <br>
        <label for="baby_things">مستلزمات الأطفال</label>
        <input type="text" name="baby_things" size="35"><br>
        <input type="text" name="baby_things_number" placeholder="العدد" size="35"><br>
        <br>
        <label for="luxuries">الكماليات</label>
        <input type="text" name="luxuries" size="35"><br>
        <input type="text" name="luxuries_number" placeholder="العدد" size="35"><br>
        <br>
        <label for="accessories_and_mobiles">إكسسوارات نسائية وجوالات</label>
        <input type="text" name="accessories_and_mobiles" size="35"><br>
        <input type="text" name="accessories_and_mobiles_number" placeholder="العدد" size="35"><br>
        <br>
        <label for="medical_devices">أجهزة طبية</label>
        <input type="text" name="medical_devices" size="35"><br>
        <input type="text" name="medical_devices_number" placeholder="العدد" size="35"><br>
        <br>
        <label for="miscellaneous">متفرقات</label>
        <input type="text" name="miscellaneous" size="35"><br>
        <input type="text" name="miscellaneous_number" placeholder="العدد" size="35"><br>

        <button type="submit">إرسال</button>

    </form>
    
    <br>
    <button type="button" onclick="window.location='{{ route('home') }}'">الرجوع إلى الصفحة الرئيسية</button>

    </div>
    </body>
</html>