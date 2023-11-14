<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>Document</title>
</head>
<body>
    <h1>お問い合わせ</h1>
    <form class="" action="/confirm" method="post">
        @csrf
        <table border="0">
            <tr>
                <th class="name">
                    お名前
                </th>
                <td>
                    <input type="text" name="name" value="{{ old('name') }}">
                </td>
            </tr>
            <tr>
                <th>
                </th>
                <td>
                    例) 山田 太郎
                </td>
            </tr>
            <tr>
                <th>
                    性別
                </th>
                <td>
                    <input type="text" name="sex" value="{{ old('sex') }}">
                </td>
            </tr>
            <tr>
                <th>
                    メールアドレス
                </th>
                <td>
                    <input type="email" name="email" value="{{ old('email') }}">
                </td>
            </tr>
            <tr>
                <th>
                </th>
                <td>例) test@example.com</td>
            </tr>
            <tr>
                <th>
                    郵便番号
                </th>
                <td>
                    <input type="text" name="code" value="{{ old('code') }}">
                </td>
            </tr>
            <tr>
                <th>
                </th>
                <td>例) 123-4567</td>
            </tr>
            <tr>
                <th>
                    住所
                </th>
                <td>
                    <input type="text" name="address" value="{{ old('address') }}">
                </td>
            </tr>
            <tr>
                <th>
                </th>
                <td>例) 東京都渋谷区千駄ヶ谷1-2-3</td>
            </tr>
            <tr>
                <th>
                    建物名
                </th>
                <td>
                    <input type="text" name="building" value="{{ old('building') }}">
                </td>
            </tr>
            <tr>
                <th>
                </th>
                <td>例) 千駄ヶ谷マンション101</td>
            </tr>
            <tr>
                <th>
                    ご意見
                </th>
                <td>
                    <textarea cols="40" lows="3" name="idea" value="{{ old('idea') }}">
                    </textarea>
                </td>
            </tr>           
        </table>
        <button type="submit">確認</button>
    </form>
</body>
</html>