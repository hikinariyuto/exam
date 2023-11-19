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
    <div class="main">
    <h1 class="contact_top">お問い合わせ</h1>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <table>
            <tr class="input">
                <th>
                    お名前
                </th>
                <td>
                    <input type="text" name="fullname" value="{{ old('fullname') }}">
                </td>
            </tr>
            <tr class="input">
                <th>
                </th>
                <td>
                    例) 山田 太郎
                </td>
            </tr>
            @error('fullname')
            <tr class="error">
                <th>
                    エラー
                </th>
                <td>
                    {{ $message }}
                </td>
            </tr>
            @enderror
            <tr class="input">
                <th>
                    性別
                </th>
                <td>
                    <input type="checkbox" name="gender" value="男性" checked>男性
                    <input type="checkbox" name="gender" value="女性">女性
                </td>
            </tr>
            @error('gender')
            <tr class="error">
                <th>
                    エラー
                </th>
                <td>
                    {{ $message }}
                </td>
            </tr>
            @enderror
            <tr class="input">
                <th>
                    メールアドレス
                </th>
                <td>
                    <input type="email" name="email" value="{{ old('email') }}">
                </td>
            </tr>
            <tr class="input">
                <th>
                </th>
                <td>例) test@example.com</td>
            </tr>
            @error('email')
            <tr class="error">
                <th>
                    エラー
                </th>
                <td>
                    {{ $message }}
                </td>
            </tr>
            @enderror
            <tr class="input">
                <th>
                    郵便番号
                </th>
                <td>
                    <input type="text" name="postcode" value="{{ old('postcode') }}">
                </td>
            </tr>
            <tr class="input">
                <th>
                </th>
                <td>例) 123-4567</td>
            </tr>
            @error('postcode')
            <tr class="error">
                <th>
                    エラー
                </th>
                <td>
                    {{ $message }}
                </td>
            </tr>
            @enderror
            <tr class="input">
                <th>
                    住所
                </th>
                <td>
                    <input type="text" name="address" value="{{ old('address') }}">
                </td>
            </tr>
            <tr class="input">
                <th>
                </th>
                <td>例) 東京都渋谷区千駄ヶ谷1-2-3</td>
            </tr>
            @error('address')
            <tr class="error">
                <th>
                    エラー
                </th>
                <td>
                    {{ $message }}
                </td>
            </tr>
            @enderror
            <tr class="input">
                <th>
                    建物名
                </th>
                <td>
                    <input type="text" name="building" value="{{ old('building') }}">
                </td>
            </tr>
            <tr class="input">
                <th>
                </th>
                <td>例) 千駄ヶ谷マンション101</td>
            </tr>
            @error('building')
            <tr class="error">
                <th>
                    エラー
                </th>
                <td>
                    {{ $message }}
                </td>
            </tr>
            @enderror
            <tr class="input">
                <th>
                    ご意見
                </th>
                <td>
                    <input type="text" name="opinion" value="{{ old('opinion') }}">
                </td>
            </tr>
            @error('opinion')
            <tr class="error">
                <th>
                    エラー
                </th>
                <td>
                    {{ $message }}
                </td>
            </tr>
            @enderror
        </table>
        <div class="contact_button">
        <button class="button" type="submit">確認</button>
        </div>
    </form>


</body>
</html>