@extends('layout')


@section('content')
<div class="container mx-auto px-6 pb-8 prose">
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>
    <p>Sistēmās jāizmanto zemāk uzskaitītās krāsas.</p>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 ">
        <!-- Primary Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #2d233d;"></div>
            <div>
                <span class=" font-medium">Primary (#2d233d)</span>
                <div>$primary</div>
            </div>
        </div>

        <!-- Secondary Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #554570;"></div>
            <div>
                <span class=" font-medium">Secondary (#554570)</span>
                <div>$secondary</div>
            </div>
        </div>

        <!-- Third Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #9680bd;"></div>
            <div>
                <span class=" font-medium">Third (#9680bd)</span>
                <div>$third</div>
            </div>
        </div>

        <!-- Success Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #849a6f;"></div>
            <div>
                <span class=" font-medium">Success (#849a6f)</span>
                <div>$success</div>
            </div>
        </div>

        <!-- Success Dark Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #2e8062;"></div>
            <div>
                <span class=" font-medium">Success Dark (#2e8062)</span>
                <div>$successDark</div>
            </div>
        </div>

        <!-- Warning Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #eeb649;"></div>
            <div>
                <span class=" font-medium">Warning (#eeb649)</span>
                <div>$warning</div>
            </div>
        </div>

        <!-- Error Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #eb6945;"></div>
            <div>
                <span class=" font-medium">Error (#eb6945)</span>
                <div>$error</div>
            </div>
        </div>

        <!-- Light Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #f5f5f5;"></div>
            <div>
                <span class=" font-medium">Light (#f5f5f5)</span>
                <div>$light</div>
            </div>
        </div>

        <!-- Beige Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #ebe7e0;"></div>
            <div>
                <span class=" font-medium">Beige (#ebe7e0)</span>
                <div>$beige</div>
            </div>
        </div>

        <!-- Stars Gray Color -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded" style="background-color: #d6d6d6;"></div>
            <div>
                <span class=" font-medium">Stars Gray (#d6d6d6)</span>
                <div>$starsGray</div>
            </div>
        </div>
    </div>


</div>
@endsection