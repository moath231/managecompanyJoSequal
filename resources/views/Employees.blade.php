<x-layout>
  <h1 class="mb-4 text-3xl font-semibold text-gray-800">Employee List</h1>
  <table class="table-collapse w-full text-left">
    <thead class="bg-gray-800 text-white">
      <tr>
        <th class="py-4 px-6">First name</th>
        <th class="py-4 px-6">last name</th>
        <th class="py-4 px-6">Company</th>
        <th class="py-4 px-6">email</th>
        <th class="py-4 px-6">phone</th>
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
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mt-32 ml-auto mr-auto w-96 text-center">
    {{ $emp->links() }}
  </div>
</x-layout>
