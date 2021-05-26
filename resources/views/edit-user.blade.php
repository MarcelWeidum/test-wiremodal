@extends('layouts.app')

@section('content')
    <div>
        @php($userId = rand(1, 999))
        <h1 class="text-2xl font-bold">Edit user {{ $userId }}</h1>
        <button onclick="Livewire.emit('openModal', 'edit-user', {{ json_encode(['userId' => $userId]) }})" class="bg-blue-600 text-white px-2 py-1 rounded">Edit User</button>
    </div>
@endsection