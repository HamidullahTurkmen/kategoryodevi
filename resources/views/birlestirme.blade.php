<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<body>

<h2>Sql Tablo</h2>

<table>
    <tr>
        <th>Id</th>
        <th>Isim</th>
        <th>Email</th>
    </tr>
    @foreach($data as $user)
        <tr>
            <td>{{$user->userId}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->price}}</td>

        </tr>
    @endforeach

</table>
