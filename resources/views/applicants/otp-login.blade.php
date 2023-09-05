<x-guest-layout>
    {{ dd(auth()->guard('applicants')->user()) }}
</x-guest-layout>
