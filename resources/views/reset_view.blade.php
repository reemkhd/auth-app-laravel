<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body >
        <form method="post" action="{{ route('reset') }}">
            <p>
            الرجاء إدخال بريدك الإلكتروني وكلمة المرور الجديدة
            </p>
            <input type="hidden" name="token" value="{{ $token }}">
            <item>
                <label position="floating">البريد الإلكنروني</label>
                <input type="email" name="email"></input>
            </ion-item>
            <br>
            <item>
                <label position="floating">كلمة مرور جديد</label>
                <input type="password" name="password"></input>
            </item>
            <br>

            <button type="submit" expand="full" color="primary">تعين</button>
        </form>
    </body>
</html>