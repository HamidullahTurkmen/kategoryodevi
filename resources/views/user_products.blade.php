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
        <th>UserName</th>
        <th>ProductName</th>
        <th>Description</th>
        <th>price</th>
    </tr>
    @foreach($data as $gelen)
        <tr>
            <td>{{$gelen->id}}</td>
            <td>{{$gelen->name}}</td>
            <td>{{$gelen->product_name}}</td>
            <td>{{$gelen->description}}</td>
            <td>{{$gelen->price}}</td>
        </tr>
    @endforeach

</table>
