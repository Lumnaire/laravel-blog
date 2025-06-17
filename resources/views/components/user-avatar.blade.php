@props(['user', 'size' => 'w-16 h-16'])

@if ($user->image)
    <img src="{{ $user->imageUrl() }}" alt="{{ $user->name }}" class="{{ $size }} rounded-full">
@else
    <img src="{{ asset('/default-avatar.jpg') }}" alt="Default Avatar" class="{{ $size }} rounded-full">
@endif
