@props(['student'])
<tr>
    <td>{{ $student->id }}</td>
    <td>
        <a href="{{ route('student.show', ['student' => $student]) }}">{{ $student->last_name }},
            {{ $student->first_name }} {{ $student->middle_name }}</a>
    </td>
    <td>{{ $student->course }}</td>
    <td>
        <form action="{{ route('session.store') }}" method="post">
            @method('get')
            <button type="submit" name="id" value="{{ $student->id }}">time in</button>
        </form>
    </td>
</tr>
