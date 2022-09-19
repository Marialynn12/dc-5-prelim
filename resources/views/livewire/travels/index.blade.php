<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Destination</th>
                <th>Cost</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($travels as $travel)
                <tr>
                    <td>{{ $travel->id }}</td>
                    <td>{{ $travel->name }}</td>
                    <td>{{ $travel->destination }}</td>
                    <td>{{ $travel->cost }}</td>
                    <td>
                        <a href="{{ url('edit', ['travel' => $travel->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['travel' => $travel->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

