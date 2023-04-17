<x-layout>
  <x-setting heading="employee tables">
    <a href="{{ route('adminEmployee.create') }}"
      class="mb-5 inline-block rounded-xl bg-blue-400 px-3 py-2 font-sans font-bold text-white">Add Employee</a>
    <table class="table-collapse w-full text-left">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="py-4 px-6">First name</th>
          <th class="py-4 px-6">last name</th>
          <th class="py-4 px-6">Company</th>
          <th class="py-4 px-6">email</th>
          <th class="py-4 px-6">phone</th>
          <th class="py-4 px-6"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($emp as $e)
          <tr>
            <td class="border px-4 py-2">{{ $e->Fname }}</td>
            <td class="border px-4 py-2">{{ $e->Lname }}</td>
            <td class="border px-4 py-2 text-blue-700 hover:text-blue-900"><a href="{{ $e->company->website }}"
                target="_blank">{{ $e->company->name }}</a></td>
            <td class="border px-4 py-2">{{ $e->email }}</td>
            <td class="border px-4 py-2">{{ $e->phone }}</td>
            <td class="border px-4 py-2">
              <a class="text-green-400" href="/adminEmployee/{{ $e->id }}/edit">edit</a>
              <form action="/adminEmployee/{{ $e->id }}" method="post">
                @csrf
                @method('DELETE')
                <input class="cursor-pointer bg-white text-red-400" type="submit"
                  href="/adminEmployee/{{ $e->id }}" value="delete">
              </form>
            </td>
          </tr>
        @endforeach
        
        @if (session()->has('success'))
          <div class="text-green-900 bg-blue-100 p-2 block w-max-content rounded-lg mb-5 ml-auto mr-auto font-serif font-bold">
            {{ session()->get('success') }}
          </div>
        @endif
        @if (session()->has('error'))
          <div class="text-red-800 bg-red-200 p-2 block w-max-content rounded-lg mb-5 ml-auto mr-auto font-serif font-bold">
            {{ session()->get('error') }}
          </div>
        @endif

      </tbody>
    </table>
    <div class="mt-32 ml-auto mr-auto w-96 text-center">
      {{ $emp->links() }}
    </div>
  </x-setting>
</x-layout>
