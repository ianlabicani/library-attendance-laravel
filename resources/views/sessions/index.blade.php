<x-layout>
    <div class="active-session">
        <table>
            <tr>
                <th>Student Id</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Session</th>
                <th>Time Out</th>
            </tr>
            @foreach ($activeSessions as $activeSession)
                {{-- todo: make this a component --}}
                <tr>
                    <td>{{ $activeSession->id }}</td>
                    <td>{{ $activeSession->student_id }}</td>
                    <td>{{ $activeSession->first_name }}</td>
                    <td><strong class='session-sec'>{{ $activeSession->session_seconds }} </strong> seconds
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
