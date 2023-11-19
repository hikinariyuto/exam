<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
    <title>Document</title>
</head>
<body>
    <div class="main">
    <h1  class="contact_top">
        内容確認
    </h1>
    </div>
    <form class="" action="/confirm/thanks" method="post">
        @csrf
        <table border="0">
            <tr>
                <th>
                    お名前
                </th>
                <td>
                    <input type="text" name="fullname" value="{{  $contents['fullname'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>
                    性別
                </th>
                <td>
                    <input type="text" name="gender" value="{{   $contents['gender'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>
                    メールアドレス
                </th>
                <td>
                    <input type="email" name="email" value="{{  $contents['email'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>
                    郵便番号
                </th>
                <td>
                    <input type="text" name="postcode" value="{{  $contents['postcode'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>
                    住所
                </th>
                <td>
                    <input type="text" name="address" value="{{  $contents['address'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>
                    建物名
                </th>
                <td>
                    <input type="text" name="building" value="{{  $contents['building'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>
                    ご意見
                </th>
                <td>
                    <input type="text" name="opinion" value="{{  $contents['opinion'] }}" readonly />
                    </textarea>
                </td>
            </tr>
        </table>
        <div class="contact_button">
        <button class="button" type="submit">送信</button>
        </div>
    </form>
    <div class="contact_fix">
    <a class="fix" href="/">修正する</a>
    </div>

    

</body>
</html>