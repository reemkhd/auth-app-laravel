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
        <title>Laravel</title>
    </head>

    <body>

    <!-- <form action="/action_page.php">
    <label for="cars">Choose a car:</label>
    <select name="cars" id="cars">
        <optgroup label="Swedish Cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        </optgroup>
        <optgroup label="German Cars">
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
        </optgroup>
    </select>
    <br><br>
    <input type="submit" value="Submit">
    </form> -->


    <div>
        @foreach($donations as $donation)
        الطلب رقم: {{ $donation->order_number }}<br>
            {{ $donation->furniture == 'null,null' ? '' : $donation->furniture }}
            {{ $donation->clothes == 'null,null' ? '' : $donation->clothes }}
            {{ $donation->dishes == 'null,null' ? '' : $donation->dishes }}
            {{ $donation->electrical_tools  == 'null,null' ? '' : $donation->electrical_tools }}
            {{ $donation->baby_things  == 'null,null' ? '' : $donation->baby_things }}
            {{ $donation->luxuries == 'null,null' ? '' : $donation->luxuries }}
            {{ $donation->accessories_and_mobiles == 'null,null' ? '' : $donation->accessories_and_mobiles }}
            {{ $donation->medical_devices == 'null,null' ? '' : $donation->medical_devices }}
            {{ $donation->miscellaneous == 'null,null' ? '' : $donation->miscellaneous }}
            <br>

            حالة الطلب: 
            @if ($donation->status == 'false')
                الطلب قيد التنفيذ     
            @endif
            @if ($donation->status == 'true')
                تم إتمام الطلب  
            @endif
            @if ($donation->status == 'late')
                الطلب مؤجل 
            @endif
            @if ($donation->status == 'cancle')
                تم إلغاء الطلب  
            @endif
            <br>
            
            <form action="{{ route('donation.update', $donation->order_number ) }}" method="POST" style="display:inline-block">
            @csrf
            @method('PUT')
                <input type="hidden" name="status" value="false" placeholder="status">
                <button type="submit">الطلب قيد التنفيذ</button>
            </form>
            <form action="{{ route('donation.update', $donation->order_number ) }}" method="POST" style="display:inline-block">
            @csrf
            @method('PUT')
                <input type="hidden" name="status" value="true" placeholder="status">
                <button type="submit">إتمام الطلب</button>
            </form>
            <form action="{{ route('donation.update', $donation->order_number ) }}" method="POST" style="display:inline-block">
            @csrf
            @method('PUT')
                <input type="hidden" name="status" value="late" placeholder="status">
                <button type="submit">الطلب مؤجل</button>
            </form>
            <form action="{{ route('donation.update', $donation->order_number ) }}" method="POST" style="display:inline-block">
            @csrf
            @method('PUT')
                <input type="hidden" name="status" value="cancle" placeholder="status">
                <button type="submit"> إلغاء الطلب</button>
            </form>

            <!-- <br><br>
            <form action="{{ route('edit_don', $donation->order_number ) }}" method="POST" style="display:inline-block">
            @csrf
            @method('PUT')
                <input type="text" name="furniture" placeholder="furniture">
                <input type="text" name="furniture_number" placeholder="العدد" size="35"><br>

                <input type="text" name="clothes" placeholder="clothes">
                <input type="text" name="clothes_number" placeholder="العدد" size="35"><br>

                <button type="submit">تعديل الطلب</button>
            </form> -->

            <br><br><br>
        @endforeach

        <button type="button" onclick="window.location='{{ route('home') }}'">الرجوع إلى الصفحة الرئيسية</button>

    </div>
    </body>
</html>