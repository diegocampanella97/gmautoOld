<div class="py-5 ">
    <div class="row mb-4">
        <div class="col form-inline">
            Per Pagina: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
        </div>

        <div class="col">
            <input wire:model="search" class="form-control" type="text" placeholder="Search Contacts...">
        </div>
    </div>

    <div class="row">
        <table class="table">
            @include('livewire.table.customerHeader')
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->nome }}</td>
                        <td>{{ $contact->cognome }}</td>
                        <td>{{ $contact->residenza }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->telefono }}</td>
                        <td class="text-center">
                            {{$contact->cars()->count()}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col">
            {{ $contacts->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $contacts->firstItem() }} a {{ $contacts->lastItem() }} di {{ $contacts->total() }} risultati
        </div>
    </div>
</div>