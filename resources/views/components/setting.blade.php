@props(['heading'])

<section class="py-8 max-w-5xl max-w mx-auto">
    <h1 class="text-2xl font-bold mb-7 pb-4 capitalize border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class=" font-semibold mb-4 capitalize text-lg">links</h4>
            <ul class="space-y-2">
                <li>
                    <a href=""
                        class="{{ request()->is('') ? 'text-blue-500' : '' }}">dashboard</a>
                </li>
                <li>
                    <a href="{{ route('adminCompany.index') }}"
                        class="{{ request()->is('adminCompany') ? 'text-blue-500' : '' }}">company</a>
                </li>
                <li>
                    <a href="{{ route('adminEmployee.index') }}"
                        class="{{ request()->is('adminEmployee') ? 'text-blue-500' : '' }}">employee</a>
                </li>
                <li>
                    <a href="{{ route('adminCompany.create') }}"
                        class="{{ request()->is('adminCompany/create') ? 'text-blue-500' : '' }}">add company</a>
                </li>
                <li>
                    <a href="{{ route('adminEmployee.create') }}"
                        class="{{ request()->is('adminEmployee/create') ? 'text-blue-500' : '' }}">Add Employee</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
                {{ $slot }}
        </main>
    </div>

</section>