@extends('layout')

@section('content')
<div>
    <!-- Check the section passed via the route and display content accordingly -->
    @if($section == 'dashboard')
        <h1 class="text-4xl font-bold">Dashboard</h1>
        <p>Welcome to the dashboard. Here is an overview of your account.</p>

    @elseif($section == 'profile')
        <h1 class="text-4xl font-bold">Profile</h1>
        <p>Here is your profile information. You can update your details here.</p>

    @elseif($section == 'settings')
        <h1 class="text-4xl font-bold">Settings</h1>
        <p>Adjust your settings here, including notifications, preferences, and privacy.</p>

    @else
        <h1 class="text-4xl font-bold">Not Found</h1>
        <p>Sorry, the section you're looking for does not exist.</p>
    @endif
</div>
@endsection