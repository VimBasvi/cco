<x-layout>
@include('profile.partials.styles')
<div class="max-w-xl mx-auto pt-32 px-4 sm:px-6 lg:px-8">
    <a href="{{ route('profile.index') }}"
       class="inline-flex items-center text-tahini hover:underline mb-4">
        ← Back to Profile
    </a>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        @include('profile.partials.update-password-form')
    </div>
</div>
@include('profile.partials.success-modal')
@include('profile.partials.scripts')
</x-layout>
