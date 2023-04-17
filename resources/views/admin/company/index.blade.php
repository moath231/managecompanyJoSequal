<x-layout>
  <x-setting heading="company tables">
    <a href="{{ route('adminCompany.create') }}"
      class="mb-5 inline-block rounded-xl bg-blue-400 px-3 py-2 font-sans font-bold text-white">Add Company</a>
    <table class="table-collapse w-full text-left">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="py-4 px-6">Name</th>
          <th class="py-4 px-6">email</th>
          <th class="py-4 px-6">logo</th>
          <th class="py-4 px-6">website</th>
          <th class="py-4 px-6"></th>
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
            <td class="border px-4 py-2">
              <a class="text-green-400" href="/adminCompany/{{ $comp->id }}/edit">edit</a>
              <form action="/adminCompany/{{ $comp->id }}" method="post">
                @csrf
                @method('DELETE')
                <input class="cursor-pointer bg-white text-red-400" type="submit"
                  href="/adminCompany/{{ $comp->id }}" value="delete">
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

    <div class="mt-10 ml-auto mr-auto w-96 text-center">
      {{ $company->links() }}
    </div>
  </x-setting>
</x-layout>
