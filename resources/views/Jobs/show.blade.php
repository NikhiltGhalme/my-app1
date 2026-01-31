<x-layout>
    <x-slot:heading>
        <h1>Job Details</h1>
    </x-slot:heading>

   <h2 class="text-2xl font-bold">{{ $job['title'] }}</h2>
   <p>
    this job pays {{ $job ['salary'] }} per year
</p>
<x-layout>