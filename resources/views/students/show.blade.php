<x-layout>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>First Name</th>
                <th>Sex</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->middle_name }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->sex }}</td>
                <td>{{ $student->age }}</td>
            </tr>
        </tbody>
    </table>
</x-layout>
