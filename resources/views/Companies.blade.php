<x-layout>
  <h1 class="mb-4 text-3xl font-semibold text-gray-800">Company List</h1>
  <table class="table-collapse w-full text-left">
    <thead class="bg-gray-800 text-white">
      <tr>
        <th class="py-4 px-6">Name</th>
        <th class="py-4 px-6">email</th>
        <th class="py-4 px-6">logo</th>
        <th class="py-4 px-6">website</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($company as $comp)
        <tr>
          <td class="border px-4 py-2">{{ $comp->name }}</td>
          <td class="border px-4 py-2">{{ $comp->email }}</td>
          <td class="border px-4 py-2"> <img src="{{ asset('storage/' . $comp->logo) }}" width="100" height="100"
              alt=""> </td>
          <td class="border px-4 py-2">{{ $comp->website }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mt-10 ml-auto mr-auto w-96 text-center">
    {{ $company->links() }}
  </div>
</x-layout>
