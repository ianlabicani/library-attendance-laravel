<x-layout>
    <x-search-student />
    <div class="flex">
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
        {{-- sessions --}}
        <table border="1">
            <tr>
                <th>Student Id</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Session</th>
                <th>Time Out</th>
            </tr>
            @foreach ($active_sessions as $active_session)
                {{-- todo: make this a component --}}
                <tr>
                    <td>{{ $active_session->id }}</td>
                    <td>{{ $active_session->student_id }}</td>
                    <td>{{ $active_session->first_name }}</td>
                    <td><strong class='session-sec'>{{ $active_session->session_seconds }} </strong> seconds
                    </td>
                    <td>
                        {{-- make this a component --}}
                        {{-- <form action="session.php" method="post">
                      <input type="hidden" name="student_id" value="{{ $student['student_id'] }}">
                      <button type="submit" name="time_out">Time Out</button>
                  </form> --}}
                    </td>
            @endforeach
        </table>
    </div>

</x-layout>
