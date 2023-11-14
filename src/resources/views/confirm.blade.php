<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sanitize.css">
    <title>Document</title>
</head>
<body>
    <h1>
        内容確認
    </h1>
    <form class="" action="/confirm/thanks" method="post">
        @csrf
    <table border="0">
        <tr>
            <th>
                お名前
            </th>
            <td>
                <input type="text" name="name" value="{{  $contents['name'] }}" readonly/>
            </td>
        </tr>
        <tr>
            <th>
                性別
            </th>
            <td>
                <input type="text" name="name" value="{{   $contents['sex'] }}" readonly/>
            </td>
        </tr>
        <tr>
            <th>
                メールアドレス
            </th>
            <td>
                <input type="email" name="email" value="{{  $contents['email'] }}" readonly/>
            </td>
        </tr>
        <tr>
            <th>
                郵便番号
            </th>
            <td>
                <input type="text" name="code" value="{{  $contents['code'] }}" readonly/>
            </td>
        </tr>
        <tr>
            <th>
                住所
            </th>
            <td>
                <input type="text" name="address" value="{{  $contents['address'] }}" readonly/>
            </td>
        </tr>
        <tr>
            <th>
                建物名
            </th>
            <td>
                <input type="building" name="name" value="{{  $contents['building'] }}" readonly/>
            </td>
        </tr>
        <tr>
            <th>
                ご意見
            </th>
            <td>
                <input type="idea" name="name" value="{{  $contents['idea'] }}" readonly/>
                    </textarea>
            </td>
        </tr>
    </table>
    <button type="submit">送信</button>
    </form>
    
    <a href="/">修正する</a>
    
</body>
</html>