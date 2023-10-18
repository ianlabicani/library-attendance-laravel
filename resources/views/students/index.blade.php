<x-layout>
    <x-search-student></x-search-student>
    <a href="/session">sessions</a>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>course</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($students as $student)
            <x-student-card :student="$student"></x-student-card>
        @endforeach
    </table>
</x-layout>
