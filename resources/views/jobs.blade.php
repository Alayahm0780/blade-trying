<x-layout>
    <h1>jobs list</h1>
</x-layout>
<ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/">
                <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}}
            </a>
        </li>
    @endforeach
</ul>
</x-layout>