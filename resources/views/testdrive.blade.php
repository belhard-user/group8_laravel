@extends('layouts.main')

@section('content')
    <table class="table">
        @foreach($testdrive as $item)
        <tr>
            <td>{{ $item->email }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->age }}</td>
            <td>{{ $item->my_time->diffForHumans() }}</td>
            <td>{{ str_limit($item->msg, 30) }}</td>
        </tr>
        @endforeach
    </table>

    {{ $testdrive->links() }}
@endsection