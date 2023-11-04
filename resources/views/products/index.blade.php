<table>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>