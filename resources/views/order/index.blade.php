<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order  )
            <tr>
                <td>
                    {{ $order->id }}
                </td>
                <td>
                    {{ $order->total }}
                </td>
                <td>
                    {{ $order->status }}
                </td>
                <td>
                    <a href="{{ route('order_detail', $order) }}">Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
