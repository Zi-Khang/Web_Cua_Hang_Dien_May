<table>
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        @foreach($details as $detail)
            <tr>
                <td>
                    {{$detail->product_id}}
                </td>
                <td>
                    {{$detail->quantity}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
